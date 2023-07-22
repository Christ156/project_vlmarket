@extends('layouts.app')

@section('content')
<div class="container text-center">

    <!-- Search bar -->
    <div class="container row d-flex my-3">
        <div class="col-10">
            <form action="{{ route('search') }}" method="post">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari produk lainnya?" aria-describedby="button-addon2" name="search" required>
                    <button class="btn btn-danger" type="submit" id="button-addon2">CARI</button>
                </div>
            </form>
        </div>
        @guest
        <div class="col-2">
            <span class="btn btn-secondary disabled">Guest</span>
        </div>
        @else
        @if(Auth::user()->email == "christvaldo36@gmail.com")
        <div class="col-2">
            <a name="" id="" class="btn btn-outline-danger mx-2" href="{{ ('market/create') }}" role="button">Tambah Produk</a>
        </div>
        @endif
        @endguest
    </div>

    <!-- Flush notif -->

    @if(session('success'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>Sukses </strong>{{session('success')}}
    </div>
    @endif

    <!-- Product list -->

    <div class="row justify-content-start">
        @forelse ($market as $m)
        <div class="col-lg-3 col-md-6 col-6">
            <div class="card p-1 m-1 shadow">
                <div class="ratio ratio-1x1 d-flex">
                    <img src="{{ asset('img/'. $m->img) }}" class="card-img-top object-fit-scale" alt="...">
                </div>
                <div class="card-body text-start">
                    <h5 class="card-title">{{ Str::limit($m->name, 25) }}</h5>
                    <h3 class="card-text fw-bold f-red-secondary">Rp{{$m->price}}</h3>
                    <p class="">{{$m->loc}}</p>
                    <div class="row d-flex">
                        @guest
                        <a href="{{ route('market.show', [$m->id]) }}" class="btn btn-danger bg-red-secondary col mx-1">Detail</a>
                        @else
                        <a href="{{ route('market.show', [$m->id]) }}" class="btn btn-danger col mx-1">Preview</a>
                        @if(Auth::user()->email == "christvaldo36@gmail.com")
                        <a href="{{ route('market.edit', [$m->id]) }}" class="btn btn-outline-secondary col mx-1">Ubah</a>
                        @endif
                        @endguest
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="text-center py-5">
            <p class="f-red-secondary">
                Maaf, Barang yang anda cari tidak ditemukan...
            </p>
        </div>
        @endforelse
        <div class="my-3 d-flex row">
            <div class="col">
                {{ $market->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>

@endsection