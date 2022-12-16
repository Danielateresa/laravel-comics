@extends('layouts.app')

@section('content')

<div class="container cards px-4 pb-4">
    <div class="tag">
        <span>current series</span>
    </div>
    <div class="row px-4 d-flex">

        @foreach($comics as $comic)
        <div class="col-2 mt-5">
            <div class="comic_card">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                <span>{{$comic['series']}}</span>
            </div>
        </div>
        <!-- singola card -->
        @endforeach
    </div>

    <div class="button_box text-center mt-5">
        <button class="btn load_more">
            load more
        </button>
    </div>
</div>
<!-- ./cards -->

@endsection