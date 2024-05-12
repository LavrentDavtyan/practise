@extends('layouts.layout')

@section('title', 'Home')

@section('content')
<div class="chess-players">
    <p class="chess-players-header">@lang('messages.players_header')</p>
    
    <div class="players">
        <div class="players-header">
            @lang('messages.mens')
        </div>

        <div class="row players-items flex-nowrap">
            @foreach ($chessPlayersMale as $key => $player)
                <div class="col-3 player">
                    <div class="item">
                        <div class="img_container">
                            <img src="/images/uploads/{{ $player->picture }}" alt="Player">
                        </div>
                        <a href="">
                            <p class="name">{{ $player->name }}</p>
                        </a>
                        <div class="order">#{{ $key + 1 }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="players females">
        <div class="players-header">
            @lang('messages.females')
        </div>

        <div class="row flex-nowrap players-items">
            @foreach ($chessPlayersFemale as $key => $player)
                <div class="col-3 player">
                    <div class="item">
                        <div class="img_container">
                            <img src="/images/uploads/{{ $player->picture }}" alt="Player">
                        </div>
                        <a href="">
                            <p class="name">{{ $player->name }}</p>
                        </a>
                        <div class="order">#{{ $key + 1 }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection