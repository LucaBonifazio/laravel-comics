@extends('guest.layouts.base')

@section('content')
<div class="bg_container">
    <div class="cards_box container">
        @foreach ($comics as $card)
        <div class="card">
            <div class="contents">
                <h2>{{$card['title']}}</h2>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

