@extends('layouts.app')

@section('title', 'NOMADS')

@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>Ayo Jelajahi Dan Explorasi Keindahan Wisata
            <br />
            Di Yogjakarta
        </h1>
        <p>
            You will see Beautiful
            <br />
            Moment you never see before
        </p>
        <a href="#" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20k</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>50</h2>
                    <p>Hotel</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>Something that you never try
                            <br />
                            before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/popular-1.jpg');">
                            <div class="travel-country">Indonesia</div>
                            <div class="travel-location">Keraton Yogyakarta</div>
                            <div class="travel-button mt-auto">
                                <a href="details.html" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/popular-2.jpg');">
                            <div class="travel-country">Indonesia</div>
                            <div class="travel-location">Candi Prambanan Yogyakarta</div>
                            <div class="travel-button mt-auto">
                                <a href="#" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/popular-3.jpg');">
                            <div class="travel-country">Indonesia</div>
                            <div class="travel-location">Pantai Pulang Sawal Yogyakarta</div>
                            <div class="travel-button mt-auto">
                                <a href="#" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/popular-4.jpg');">
                            <div class="travel-country">Indonesia</div>
                            <div class="travel-location">Gembira Loka Yogyakarta</div>
                            <div class="travel-button mt-auto">
                                <a href="#" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>
                            Companies are trusted us
                            <br />
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="frontend/images/ana.png" alt="Logo Partner" class="img-partner">
                        <img src="frontend/images/disney.png" alt="Logo Partner" class="img-partner">
                        <img src="frontend/images/shangri-la.png" alt="Logo Partner" class="img-partner">
                        <img src="frontend/images/visa.png" alt="Logo Partner" class="img-partner">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They are loving Us</h2>
                        <p>
                            Moments were giving them
                            <br />
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img width="200px" src="frontend/images/testimonial-3.jpg" alt="User"
                                    class="mb-4 rounded-circle">
                                <h3 class="mb-4">Dinna Anggia S</h3>
                                <p class="testimonial">
                                    “ It was glorious and I could not stop to say wohooo for every single moment
                                    Dankeeeeee “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip To Yogjakarta
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img width="200px" src="frontend/images/testimonial-2.jpg" alt="User"
                                    class="mb-4 rounded-circle">
                                <h3 class="mb-4">Nadya Febrianti</h3>
                                <p class="testimonial">
                                    “ The trip was amazing and I saw something beautiful in that Island that makes me
                                    want to learn more “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip To Yogjakarta
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img width="200px" src="frontend/images/testimonial-4.jpg" alt="User"
                                    class="mb-4 rounded-circle">
                                <h3 class="mb-4">Lestari Putri</h3>
                                <p class="testimonial">
                                    “ I loved it when the waves was shaking harder — I was scared too “
                                </p>
                            </div>
                            <hr />
                            <p class="trip-to mt-2">
                                Trip To Yogjakarta
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
