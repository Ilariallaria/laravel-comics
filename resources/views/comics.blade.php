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
@endsection