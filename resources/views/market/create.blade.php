@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <p class="fs-1 f-red-secondary">Tambah barang</p>
        </div>
        <div class="card-body">
            <form action="{{ route('market.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Masukan gambar</label>
                    <input class="form-control" type="file" id="formFileMultiple" name="img" required>
                </div>
                <div class="mb-3">
                    <label for="formPrice" class="form-label">Harga</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Rp</span>
                        <input type="text" class="form-control" placeholder="" id="formPrice" name="price" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                    <select name="category" id="" class="form-control">
                        <option value="HP & Smartphone">HP & Smartphone</option>
                        <option value="Elektronik">Elektronik</option>
                        <option value="Fashion">Fashion</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kondisi</label></br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="condition" id="inlineRadio1" value="Baru">
                        <label class="form-check-label" for="inlineRadio1">Baru</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="condition" id="inlineRadio2" value="Bekas">
                        <label class="form-check-label" for="inlineRadio2">Bekas</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formWeight" class="form-label">Berat produk</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="" id="formWeight" name="weight" required>
                        <span class="input-group-text" id="basic-addon1">gram</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Lokasi</label>
                    <select name="loc" id="" class="form-control" required>
                        <option value="">Pilih Kota</option>
                        <option value="Purwokerto">Purwokerto</option>
                        <option value="Semarang">Semarang</option>
                        <option value="Bogor">Bogor</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi produk</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc" required></textarea>
                </div>
                <button type="submit" class="btn btn-danger">Upload</button>
            </form>
        </div>
    </div>
</div>

@endsection