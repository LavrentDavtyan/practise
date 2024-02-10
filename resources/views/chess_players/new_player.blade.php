@extends('layouts.admin_layout')

@section('title', 'Admin')

@section('content')
    <div class="containet">
        <div class="row justify-content-center">
              <div class="col-md-4 mt-2">
                  <form method="POST" action="{{ $case == 'update' && isset($player) ? route('create.update.player', ['id' => $player->id]) : route('create.update.player') }}">
                      @csrf
                      <div class="form-group">
                          <label for="name">Անուն</label>
                          <input type="text" class="form-control" id="name" name="name" value="{{ $case == 'update' && isset($player) ? $player->name : '' }}" >
                      </div>
                      <div class="form-group">
                          <label for="surname">Ազգանուն</label>
                          <input type="text" class="form-control" name="surname" id="surname" value="{{ $case == 'update' && isset($player) ? $player->surname : '' }}">
                      </div>
                      <div class="form-group">
                          <label for="gender" class="form-label">Սեռ</label>
                          <select class="form-select" id="gender" name="gender">
                              <option value="" selected disabled>Ընտրեք սեռը</option>
                              <option value="0" {{ $case == 'update' && isset($player) && $player->gender == 0 ? 'selected' : '' }}>Male</option>
                              <option value="1" {{ $case == 'update' && isset($player) && $player->gender == 1 ? 'selected' : '' }}>Female</option>
                          </select>
                      </div>
                      <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
              </div>
        </div>
    </div>
@endsection