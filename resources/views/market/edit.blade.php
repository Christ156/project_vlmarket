@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10">
                    <p class="fs-3 f-red-secondary">Ubah Detail Barang {{ $market->name }}</p>
                </div>
                <div class="col-md-2 text-end">
                    <form action="{{ route('market.destroy', [$market->id]) }}" method="post" class="col">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-warning" type="submit"><i class="fa fa-trash"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('market.update', [$market->id]) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $market->name }}" name="name">
                </div>
                <div class="mb-3 row">
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <img src="{{asset('img/'. $market->img)}}" height="150" alt="{{$market->img}}">
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <label for="formFileMultiple" class="form-label">Ganti gambar</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple name="img" value="{{ $market->img }}">
                    </div>

                </div>
                <div class="mb-3">
                    <label for="formPrice" class="form-label">Harga</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Rp</span>
                        <input type="text" class="form-control" value="{{ $market->price }}" id="formPrice" name="price">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                    <select name="category" id="" class="form-control">
                        <option value="{{ $market->category }}">{{ $market->category }}</option>
                        <option value="HP & Smartphone">HP & Smartphone</option>
                        <option value="Elektronik">Elektronik</option>
                        <option value="Fashion">Fashion</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kondisi</label></br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="condition" id="inlineRadio1" value="Baru" <?php if ($market->condition == 'Baru') echo 'checked' ?>>
                        <label class="form-check-label" for="inlineRadio1">Baru</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="condition" id="inlineRadio2" value="Bekas" <?php if ($market->condition == 'Bekas') echo 'checked' ?>>
                        <label class="form-check-label" for="inlineRadio2">Bekas</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formWeight" class="form-label">Berat produk</label>
                    <div class="input-group">
                        <input type="text" class="form-control" value="{{ $market->weight }}" id="formWeight" name="weight">
                        <span class="input-group-text" id="basic-addon1">gram</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Lokasi</label>
                    <select name="loc" id="" class="form-control">
                        <option value="{{ $market->loc }}">{{ $market->loc }}</option>
                        <option value="Purwokerto">Purwokerto</option>
                        <option value="Semarang">Semarang</option>
                        <option value="Bogor">Bogor</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi produk</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc">{{ $market->desc }}</textarea>
                </div>
                <button type="submit" class="btn btn-danger">Selesai</button>
            </form>

        </div>
    </div>
</div>

@endsection