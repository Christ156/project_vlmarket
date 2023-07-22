@extends('layouts.app')

@section('content')
    <div class="container p-3 text-center">

        <!-- Jumbotron -->
        <div class="container-fluid pb-5">
            <div class="row d-flex justify-content-between">
                <div class="col-sm-12 col-md-6 my-auto mx-auto justify-content-end">
                    <h1 class="fw-bold f-red-secondary f-shadow mb-3" style="font-family: Geneva; font-size:60px;">Sugeng
                        Rawuh, </h1>
                    <p class="fw-light fs-5 text-secondary">Perkenalkan, nama saya <span
                            class="f-red-secondary fw-bold">Christvaldo Kurnia Putra. </span>Saya merupakan seorang
                        progammer. Sebelumnya, saya bersekolah di SMK jurusan Rekayasa Perangkat Lunak. Saat ini, saya
                        melanjutkan pendidikan di beasiswa BCA Learning Institute.</p>
                    <a name="" id="" class="btn btn-danger my-3" href="#About" role="button">Lihat
                        selengkapnya</a>
                </div>
                <div class="col-sm-12 col-md-6 d-flex justify-content-center">
                    <div class="p-3 ">
                        <img src="{{ asset('img/source/self.png') }}" alt="myself" class="img-fluid rounded-circle "
                            height="350" width="350">
                    </div>
                </div>
            </div>
        </div>

        <!-- Skill -->
        <div id="About" class="container-fluid mt-5 py-5 text-start">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="shadow rounded mx-3 p-3">
                        <h1 class="fw-bold f-red-secondary mb-3">Bio</h1>
                        <div class="mb-3 text-secondary">
                            <p class="text-secondary">Perkenalkan, nama saya <span
                                    class="f-red-secondary fw-bold">Christvaldo Kurnia Putra. </span>Saya merupakan seorang
                                progammer. Sebelumnya, saya bersekolah di SMK jurusan Rekayasa Perangkat Lunak. Saat ini,
                                saya melanjutkan pendidikan di beasiswa BCA Learning Institute.</p>
                        </div>
                        <div class="text-secondary text-start">
                            <p><span class="fw-bold f-red-secondary">Name : </span>Christvaldo Kurnia Putra</p>
                            <p><span class="fw-bold f-red-secondary">Date of Birth : </span>25 Maret 2004</p>
                            <p><span class="fw-bold f-red-secondary">Job : </span>Programmer</p>
                            <p><span class="fw-bold f-red-secondary">Phone : </span>+62 838-4413-6761</p>
                            <p><span class="fw-bold f-red-secondary">E-Mail : </span>christvaldo36@gmail.com</p>
                            <p><span class="fw-bold f-red-secondary">Address : </span>Jl. Kober Gg. Kantil No. 31, Kober,
                                Purwokerto Barat</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="p-3 mx-3">
                        <h1 class="fw-bold f-red-secondary">Skill</h1>
                        <div class="p-2">
                            <div class="mb-2">
                                <div class="justify-content-between d-flex text-secondary">
                                    <p>HTML</p>
                                    <p>80%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Danger striped example"
                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped bg-danger" style="width: 80%"></div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="justify-content-between d-flex text-secondary">
                                    <p>CSS</p>
                                    <p>70%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Danger striped example"
                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped bg-danger" style="width: 70%"></div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="justify-content-between d-flex text-secondary">
                                    <p>PHP</p>
                                    <p>70%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Danger striped example"
                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped bg-danger" style="width: 70%"></div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="justify-content-between d-flex text-secondary">
                                    <p>JAVA</p>
                                    <p>50%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Danger striped example"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped bg-danger" style="width: 50%"></div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="justify-content-between d-flex text-secondary">
                                    <p>C++</p>
                                    <p>50%</p>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Danger striped example"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped bg-danger" style="width: 50%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Framework services -->
        <div class="container-fluid" style="width:70%;">
            <h1 class="fw-bold f-red-secondary mb-3">Framework Services</h1>
            <div id="carouselExampleDark" class="carousel carousel-dark slide p-5" data-bs-ride="carousel"
                data-bs-touch="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/source/carousel_fw1.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>laravel</h5>
                            <p>Framework untuk membangun aplikasi berbasis web dengan konsep MVC</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/source/carousel_fw2.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Flutter</h5>
                            <p>Framework untuk membangun aplikasi mobile Android maupun IOs</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- Product -->
        <div class="container-fluid p-3 mt-5">
            <div class="my-5">
                <h1 class="f-red-secondary fw-bold">My Products</h1>
            </div>
            <div class="row justify-content-start">
                @foreach ($product as $m)
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="card p-1 m-1 shadow">
                            <div class="ratio ratio-1x1 d-flex">
                                <img src="{{ asset('img/' . $m->img) }}" class="card-img-top object-fit-scale"
                                    alt="...">
                            </div>
                            <div class="card-body text-start">
                                <h5 class="card-title">{{ Str::limit($m->name, '25') }}</h5>
                                <h3 class="card-text fw-bold f-red-secondary">Rp{{ $m->price }}</h3>
                                <p class="">{{ $m->loc }}</p>
                                <div class="row">
                                    <a href="{{ route('market.show', [$m->id]) }}"
                                        class="btn btn-danger bg-red-secondary col-12">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-5">
                <a class="btn btn-danger" href="{{ 'market' }}"><span class="fs-5 p-3">Lebih lengkap</span></a>
            </div>
        </div>
    </div>
@endsection
