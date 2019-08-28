@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @include('includes.message')
            <div class="card pub_image pub_image_detail mb-4">
                <div class="card-header">
                    @if ($image->user->image)
                        <div class="container-avatar">
                            <img src="{{ route('user.avatar', ['filename' => $image->user->image]) }}" class="avatar mb-3" alt="">
                        </div>
                    @endif
                    <div class="data-user">
                        {{ $image->user->name.' '.$image->user->surname }}
                        <span class="nickname">{{ ' | @'.$image->user->nick  }}</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="image-container image-detail">
                        <img src="{{ route('image.file', ['filename' => $image->image_path]) }}" alt="">
                    </div>
                    <div class="description px-4 pt-4">
                        <span class="nickname">{{ '@'.$image->user->nick }}</span>
                        <span class="nickname date">{{' | '.\FormatTime::LongTimeFilter($image->created_at)}}</span>
                        <p>{{ $image->description }}</p>
                    </div>
                    <div class="likes pl-4 pr-2 float-left">
                        <img src="{{ asset('img/black-heart.png') }}" alt="">
                    </div>
                    <div class="clearfix"></div>
                    <div class="comments">
                        <h2>Comentarios ({{ count($image->comments) }})</h2>
                        <hr>

                        <form class="" action="{{route('comment.save')}}" method="post">
                            @csrf
                            <input type="hidden" name="image_id" value="{{$image->id}}">
                            <p>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="" required></textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </form>
                        <hr>
                        @foreach ($image->comments as $comment)
                            <div class="comment">
                                    <span class="nickname">{{ '@'.$comment->user->nick }}</span>
                                    <span class="nickname date">{{' | '.\FormatTime::LongTimeFilter($comment->created_at)}}</span>
                                    <p>{{ $comment->content }} <br>
                                        @if (Auth::check() && ($comment->user_id == Auth::user()->id || $comment->image->user_id == Auth::user()->id))
                                            <a href="{{ route('comment.delete', ['id' => $comment->id]) }}" class="btn btn-sm btn-danger">
                                                Eliminar
                                            </a>
                                        @endif
                                    </p>

                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection