@extends('layouts.app')
@section('title', 'Detail Travel')


@section('content')
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item active">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>Candi Prambanan</h1>
                            <p>
                                Indonesia
                            </p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="{{ url('frontend/images/details-1.jpeg') }}" class="xzoom"
                                        id="xzoom-default" height="380"
                                        xoriginal="{{ url('frontend/images/details-1.jpeg') }}">
                                </div>
                                <div class="xzoom-thumbs">
                                    <a href="{{ url('frontend/images/details-1.jpeg') }}">
                                        <img src="{{ url('frontend/images/details-1.jpeg') }}" class="xzoom-gallery"
                                            width="128" height="74"
                                            xpreview="{{ url('frontend/images/details-1.jpeg') }}">
                                    </a>
                                    <a href="{{ url('frontend/images/details-2.jpg') }}">
                                        <img src="{{ url('frontend/images/details-2.jpg') }}" class="xzoom-gallery"
                                            width="128" height="74" xpreview="{{ url('frontend/images/details-2.jpg') }}">
                                    </a>
                                    <a href="{{ url('frontend/images/details-3.jpg') }}">
                                        <img src="{{ url('frontend/images/details-3.jpg') }}" class="xzoom-gallery"
                                            width="128" height="74"
                                            xpreview="{{ url('frontend/images/details-3.jpg') }}">
                                    </a>
                                    <a href="{{ url('frontend/images/details-4.jpg') }}">
                                        <img src="{{ url('frontend/images/details-4.jpg') }}" class="xzoom-gallery"
                                            width="128" height="74"
                                            xpreview="{{ url('frontend/images/details-4.jpg') }}">
                                    </a>
                                    <a href="{{ url('frontend/images/details-5.jpg') }}">
                                        <img src="{{ url('frontend/images/details-5.jpg') }}" class="xzoom-gallery"
                                            width="128" height="74"
                                            xpreview="{{ url('frontend/images/details-5.jpg') }}">
                                    </a>
                                </div>
                            </div>
                            <h2>Tentang Wisata di Yogjakarta</h2>
                            <p>
                                Candi Prambanan terletak di desa Bokoharjo, Kecamatan Prambanan, Kabupaten Sleman
                                Jogjakarta. Berbeda dengan sejarah asli Candi Prambanan, nama dari candi ini sudah melegenda
                                lewat kisah cinta tak sampai antara Bandung Bandawasa dan Rara Jongrang.
                            </p>
                            <p>
                                Salah satu candi yang terkenal di tanah air kita tercinta adalah Candi Prambanan. Candi yang
                                merupakan candi bagi umat Hindu ini memiliki gaya arsitektural yang berbeda dengan Candi
                                Borobudur. Namun tentu saja, Wisata Candi Prambanan tidak kalah keindahannya dibanding Candi
                                Borobudur maupun candi Angkor Wat.
                            </p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <div class="description">
                                        <img src="{{ url('frontend/images/tour-guide.png') }}" alt=""
                                            class="features-image">
                                        <div class="description">
                                            <h3>Guide</h3>
                                            <p>Professional Guide</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="{{ url('frontend/images/water.png') }}" alt="" class="features-image">
                                        <div class="description">
                                            <h3>Water</h3>
                                            <p>Fresh Water</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="{{ url('frontend/images/snack.png') }}" alt="" class="features-image">
                                        <div class="description">
                                            <h3>Local Snack</h3>
                                            <p>Unique local snack</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Member Lain Pernah Mencoba</h2>
                            <div class="members my-2">
                                <img src="/frontend/images/member-1.jpg" class="member-image mr-1 rounded-circle">
                                <img src="/frontend/images/member-2.jpg" class="member-image mr-1 rounded-circle">
                                <img src="/frontend/images/member-3.jpg" class="member-image mr-1 rounded-circle">
                                <img src="/frontend/images/member-4.jpg" class="member-image mr-1 rounded-circle">
                                <img src="/frontend/images/member-5.png" class="member-image mr-1 rounded-circle">
                            </div>
                            <hr>
                            <h2>Detail Trip</h2>
                            <table class="trip-informations">
                                <tr>
                                    <th width="50%">Pilih Tanggal</th>
                                    <td width="50%" class="text-right">
                                        04 Aug, 2021
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Durasi Trip</th>
                                    <td width="50%" class="text-right">
                                        1 Hari
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Tipe</th>
                                    <td width="50%" class="text-right">
                                        Grup Trip (Max 2 Orang)
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Harga</th>
                                    <td width="50%" class="text-right">
                                        Rp.500.000 / Paket
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <h2>Catatan:</h2>
                            <p>Harga paket dapat berubah-ubah setiap saat tanpa pemberitahuan terlebih dahulu. </p>
                        </div>
                        <div class="join-container">
                            <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });
        });
    </script>
@endpush
