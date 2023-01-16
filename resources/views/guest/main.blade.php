@extends('guest.layouts.base')

@section('content')
<div class="bg_container">
    <div class="slider_image">
    </div>
        <div class="cards_box container">
            @foreach ($comics as $card)
            <div class="card">
                <a href="/comic_info">
                    <div class="contents">
                        <img src="{{$card['thumb']}}" alt="image">
                        <h2>{{$card['title']}}</h2>
                    </div>
                </a>
            </div>
            @endforeach
            <button class="btn btn_current">
                CURRENT SERIES
            </button>
        </div>
        <button class="btn btn_load">
            LOAD MORE
        </button>
</div>
@endsection
