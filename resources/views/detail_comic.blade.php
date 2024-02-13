@extends('layout.app')

@section('content')
    {{-- JUMBOTRON --}}
    <div class="container-fluid jumbo">
        <img class="img-position" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    </div>

    {{-- SECTION BG-BLUE JUMBO --}}
    <div class="container-fluid py-4 bg-blu-icon">
        
    </div>

    {{-- SECTION INFO COMIC --}}
    <div class="container-fluid bg-white py-5">
        <div class="container section-comic-info">
            <div class="row justify-content-center">
                <div class="col-8">
                    <h2>{{ $comic['title'] }}</h2>
                    <div class="d-flex justify-content-between px-3 bg-success text-white">
                        <p>U.S. Price: {{ $comic['price'] }}</p>
                        <p>Type: {{ $comic['type'] }}</p>
                    </div>
                    <p>{{ $comic['description'] }}</p>
                </div>
                <div class="col-3 text-end">
                    <p class="mb-1">Advertisement</p>
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                </div>
                {{-- LOAD MORE BUTTON --}}
                <div class="col-12 text-center my-5">
                    <a href="/comics">
                        <button type="button" class="btn btn-primary">Go Back</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- SECTION BG-BLUE --}}
    <div class="container-fluid py-5 bg-blu-icon">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-2 d-flex align-items-center px-0">
                    <div>
                        <img class="img-main" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    </div> 
                    <div>
                        <h6>DIGITAL COMICS</h6>
                    </div>
                </div>
                <div class="col-2 d-flex align-items-center px-0">
                    <div>
                        <img class="img-main" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    </div> 
                    <div>
                        <h6>DC MERCHANDISE</h6>
                    </div>
                </div>
                <div class="col-2 d-flex align-items-center px-0">
                    <div>
                        <img class="img-main" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    </div> 
                    <div>
                        <h6>SUBSCRIPTION</h6>
                    </div>
                </div>
                <div class="col-2 d-flex align-items-center px-0">
                    <div>
                        <img class="img-main" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    </div> 
                    <div>
                        <h6>COMIC SHOP LOCATOR</h6>
                    </div>
                </div>
                <div class="col-2 d-flex align-items-center px-0">
                    <div>
                        <img class="img-main" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    </div> 
                    <div>
                        <h6>DC POWER VISA</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection