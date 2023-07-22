@extends('layouts.app')

@section('content')

<!-- Tombol Pesan -->
<div class="bg-light p-3 text-center" style="position:fixed; width:100%; bottom:0;">
    <div class="row">
        <a name="" id="" class="btn btn-outline-danger col mx-2" href="#" role="button">Hubungi Seller</a>
        <a name="" id="" class="btn btn-danger col mx-2" href="#" role="button">Beli</a>
    </div>

</div>

<div class="container">
    <div class="p-4">
        <div class="breadcrumb">
            <a class="breadcrumb-item" href="{{ route('market.index') }}">Market</a>
            <a class="breadcrumb-item" href="{{ route('market.index') }}">{{ $market->category }}</a>
            <span class="breadcrumb-item active" aria-current="page">{{$market->name}}</span>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="image-default">
                    <img src="{{asset('img/'.$market->img)}}" alt="" width="100%">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="mx-3 p-3">
                    <p class="fs-2">{{ $market->name }}</p>
                    <p class="fs-1 fw-bold">Rp{{ $market->price }}</p>
                    <div class="border rounded p-3">
                        <p class="fw-bold f-red-secondary mb-3 fs-4">Detail</p>
                        <p><span class="text-secondary">Kategori : </span>{{ $market->category }}</p>
                        <p><span class="text-secondary">Kondisi : </span>{{ $market->condition }}</p>
                        <p><span class="text-secondary">Berat : </span>{{ $market->weight }}gram</p>
                        <p><span class="text-secondary">Lokasi barang : </span>{{ $market->loc }}</p>
                        <p><span class="text-secondary">Seller : </span>{{ $market->seller }}</p>
                    </div>
                    <div class="my-3 p-3">
                        <p class="">{{ $market->desc }} Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, perspiciatis? Repellat animi eveniet debitis! Eaque nemo obcaecati quisquam iste molestias saepe culpa harum quis ut, mollitia vitae. Dolorum, placeat consectetur? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad corporis consectetur enim rem magni? Iusto iure optio pariatur perferendis ea maxime eius non, voluptatibus impedit, ipsam quia quos quibusdam similique! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus consequuntur praesentium laudantium, harum cumque nihil quasi dicta corrupti laborum explicabo aut aliquid sunt ducimus veniam iusto unde ex mollitia. Rerum!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection