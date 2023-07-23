<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class MarketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $market = Market::latest()->paginate(12);
        return view('market/index', compact('market'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $name = $request->search;
        $result = $market = Market::where('name', 'like', "%" . $name . "%")->latest()->paginate(12);

        if ($result) {
            return view('market/index', compact('market'));
        }
    }

    public function create()
    {
        return view('market/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $market = new Market();
        $market->name = $request->name;
        $market->desc = $request->desc;

        $img = $request->img->getClientOriginalName();
        $imgName = time() . '_' . $img;
        $request->img->move(public_path('img/'), $imgName);
        $market->img = $imgName;

        $market->price = $request->price;
        $market->loc = $request->loc;
        $market->seller = Auth::user()->name;
        $market->condition = $request->condition;
        $market->category = $request->category;
        $market->weight = $request->weight;
        $market->save();

        return redirect('market')->with('success', 'Barang telah berhasil diupload');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $market = Market::findOrFail($id);
        return view('market.detail', compact('market'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $market = Market::findOrFail($id);
        return view('market.edit', compact('market'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $market = Market::findOrFail($id);
        $market->name = $request->name;
        $market->desc = $request->desc;

        $imgFill = $request->img;

        if ($imgFill) {  
            $imgName = time().'_'.$request->img->getClientOriginalName();
            $imgFill->move(public_path('img/'), $imgName);
            File::delete(public_path('img/' . $market->img));
            $market->img = $imgName;
        } else {
            unset($market->img);
        }

        $market->price = $request->price;
        $market->loc = $request->loc;
        $market->condition = $request->condition;
        $market->category = $request->category;
        $market->weight = $request->weight;
        $market->save();

        return redirect('market')->with('success', 'Detail Barang berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $market = Market::findOrFail($id);

        File::delete(public_path('img/' . $market->img));
        $market->delete();

        return redirect('market')->with('success', 'Barang berhasil dihapus');
    }
}
