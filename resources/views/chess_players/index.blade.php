@extends('layouts.admin_layout')

@section('title', 'Admin')

@section('content')
    <div class="container admin-chess-player">
        <div class="admin-header">
            <div class="row p-2">
                <div class="col-10">
                    <h2>Շախմատիստներ</h2>
                </div>
                <div class="col-2">
                    <p><a href="{{ route('create.update.player') }}"><button class="btn-add">+Ավելացնել</button></a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 grid-section">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Surname</th>
                                <th scope="col">Գործողություններ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($players as $player)
                                <tr>
                                    <th scope="row">{{ $player->id }}</th>
                                    <td>{{ $player->name }}</td>
                                    <td>{{ $player->surname }}</td>
                                    <td>
                                        <a href="{{ route('create.update.player', ['id' => $player->id]) }}"> 
                                            <img src="{{ asset('images/admin/edit.png') }}" alt="edit" class="grid-icon">
                                        </a> 
                                        <a href="{{ route('delete.player', ['id' => $player->id]) }}">
                                            <img src="{{ asset('images/admin/delete.png') }}" alt="delete" class="grid-icon">
                                        </a>
                                    </td>
                                </tr>
                             @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection
