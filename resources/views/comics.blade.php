@extends('layouts.app')

@section('main_content')
    <section>
        <div class="container"> 
            <div class="all-card">
                @foreach ($comics_array as $comics)
                    <div class="card-wrapper">
                        <img class="single-card" src="{{$comics['thumb']}}" alt="{{$comics['title']}}">
                        <h2 class="single-title">{{$comics['title']}}</h2>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="products">
        <div class="container">
          <div>
            <img src="{{asset('./img/buy-comics-digital-comics.png')}}" alt="DIGITAL COMICS">
            <span>DIGITAL COMICS</span>
          </div>
          <div>
            <img src="{{asset('./img/buy-comics-merchandise.png')}}" alt="DC MERCHANDISE">
            <span>DC MERCHANDISE</span>
          </div>
          <div>
            <img src="{{asset('./img/buy-comics-subscriptions.png')}}" alt="SUBSCRIPTION">
            <span>SUBSCRIPTION</span>
          </div>
          <div>
            <img src="{{asset('./img/buy-comics-shop-locator.png')}}" alt="COMICS SHOP LOCATOR">
            <span>COMICS SHOP LOCATOR</span>
          </div>
          <div>
            <img src="{{asset('./img/buy-dc-power-visa.svg')}}" alt="DC POWER VISA">
            <span>DC POWER VISA</span>
          </div>
          
        </div>
      </section>
@endsection