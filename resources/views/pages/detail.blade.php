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
                            <h1>{{ $item->title }}</h1>
                            <p>
                                {{ $item->location }}
                            </p>
                            @if ($item->galleries->count())
                                <div class="gallery">
                                    <div class="xzoom-container">
                                        <img src="{{ Storage::url($item->galleries->first()->image) }}"
                                            class="xzoom" id="xzoom-default"
                                            xoriginal="{{ Storage::url($item->galleries->first()->image) }}" />
                                    </div>
                                    <div class="xzoom-thumbs">
                                        @foreach ($item->galleries as $gallery)
                                            <a href="{{ Storage::url($gallery->image) }}">
                                                <img src="{{ Storage::url($gallery->image) }}" class="xzoom-gallery"
                                                    width="128" xpreview="{{ Storage::url($gallery->image) }}">
                                            </a>
                                        @endforeach

                                    </div>
                                </div>
                            @endif
                            <h2>Tentang Wisata di Yogjakarta</h2>
                            <p>
                                {!! $item->about !!}
                            </p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <div class="description">
                                        <img src="{{ url('frontend/images/tour-guide.png') }}" alt=""
                                            class="features-image">
                                        <div class="description">
                                            <h3>Nama Acara</h3>
                                            <p>{{ $item->featured_event }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="{{ url('frontend/images/water.png') }}" alt="" class="features-image">
                                        <div class="description">
                                            <h3>Language</h3>
                                            <p>{{ $item->language }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="{{ url('frontend/images/snack.png') }}" alt="" class="features-image">
                                        <div class="description">
                                            <h3>Makanan</h3>
                                            <p>{{ $item->foods }}</p>
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
                                        {{ \Carbon\Carbon::create($item->departure_date)->format('F n, Y') }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Durasi Trip</th>
                                    <td width="50%" class="text-right">
                                        {{ $item->duration }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Tipe</th>
                                    <td width="50%" class="text-right">
                                        {{ $item->type }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Harga</th>
                                    <td width="50%" class="text-right">
                                        Rp. {{ $item->price }} / Orang
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <h2>Catatan:</h2>
                            <p>Harga paket dapat berubah-ubah setiap saat tanpa pemberitahuan terlebih dahulu. </p>
                        </div>
                        @auth
                            <form action="{{ route('checkout-process', $item->id) }}" method="post">
                                @csrf
                                <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                                    Join now
                                </button>
                            </form>
                        @endauth

                        @guest
                            <div class="join-container">
                                <a href="{{ route('login') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                    Login or Register to Join
                                </a>
                            </div>
                        @endguest
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
