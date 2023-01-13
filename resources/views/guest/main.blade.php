@extends('guest.layouts.base')

@section('content')
<div class="bg_container">
    <section class="slider_image">
        <section class="cards_box container">
        <main-card>
            @foreach ($comics as $card)
            <div class="card">
                <div class="contents">
                    <img src="{{$card['thumb']}}" alt="image">
                    <h2>{{$card['title']}}</h2>
                </div>
            </div>
        @endforeach
        </main-card>
        <button class="btn btn_current">
            CURRENT SERIES
        </button>
        <button class="btn btn_load">
            LOAD MORE
        </button>
    </section>
  </div>
@endsection

