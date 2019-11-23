@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Gente</h1>
            <form id="buscador" action="{{ route('user.index') }}" method="get">
              <div class="form-group row">

                  <div class="col-md-6">
                      <input id="search" type="text" class="form-control @error('name') is-invalid @enderror" autocomplete="search" autofocus>

                      @error('search')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="col-md-6">
                    <input type="submit" class="btn btn-success" value="Buscar">
                  </div>
                </div>
            </form>
            <hr>
            @foreach ($users as $user)
              <div class="profile-user">
                @if ($user->image)
                  <div class="container-avatar">
                      <img src="{{ route('user.avatar', ['filename' => $user->image]) }}" class="avatar mb-3" alt="">
                  </div>
                @endif
                <div class="user-info">
                  <h2>{{ '@'.$user->nick }}</h2>
                  <h3>{{ $user->name. ' '.$user->surname }}</h3>
                  <p>{{'Se unió: '.\FormatTime::LongTimeFilter($user->created_at)}}</p>
                  <a href="{{ route('profile', ['id' => $user->id]) }}" class="btn btn-success">Ver perfil</a>
                </div>
                <div class="clearfix"></div>
                <hr>
              </div>
            @endforeach

            <!-- PAGINACION -->
            <div class="clearfix"></div>
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection
