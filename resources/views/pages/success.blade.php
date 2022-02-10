@extends('layouts.success')
@section('title', 'Checkout Success')

@section('content')
    <main>
        <div class="section-success d-flex align-items-center">
            <div class="col text-center">
                <img src="{{ url('frontend/images/success.png') }}" alt="berhasil" width="400">
                <h1>Transaksi Sukses !!!</h1>
                <p>
                    Akhiri Perjalanan Wisata Kamu Dengan Pengalaman Yang Indah
                    <br />
                    Selamat Berjalan-Jalan
                </p>
                <a href="{{ route('home') }}" class="btn btn-home-page mt-3 px-5">
                    Home Page
                </a>
            </div>
        </div>
    </main>
@endsection
