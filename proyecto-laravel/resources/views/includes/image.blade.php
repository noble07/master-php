<div class="card pub_image mb-4">
  <div class="card-header">
      @if ($image->user->image)
          <div class="container-avatar">
              <img src="{{ route('user.avatar', ['filename' => $image->user->image]) }}" class="avatar mb-3" alt="">
          </div>
      @endif
      <div class="data-user">
          <a class="text-body" href="{{ route('profile', ['id' => $image->user->id ]) }}">
              {{ $image->user->name.' '.$image->user->surname }}
              <span class="nickname">{{ ' | @'.$image->user->nick  }}</span>
          </a>
      </div>
  </div>
  <div class="card-body">
      <div class="image-container">
          <img src="{{ route('image.file', ['filename' => $image->image_path]) }}" alt="">
      </div>
      <div class="description px-4 pt-4">
          <span class="nickname">{{ '@'.$image->user->nick }}</span>
          <span class="nickname date">{{' | '.\FormatTime::LongTimeFilter($image->created_at)}}</span>
          <p>{{ $image->description }}</p>
      </div>
      <div class="likes pl-4 pr-2 float-left">
          {{-- Comprobar si el usuario le dio like a la imagen --}}
          @php
              $user_like = false;
          @endphp
          @foreach ($image->likes as $like)
              @if ($like->user->id == \Auth::user()->id)
                  @php
                      $user_like = true;
                  @endphp
              @endif
          @endforeach

          @if ($user_like)
      <img class="btn-dislike" data-id="{{ $image->id }}" src="{{ asset('img/red-heart.png') }}" alt="">
          @else
              <img class="btn-like" data-id="{{ $image->id }}" src="{{ asset('img/black-heart.png') }}" alt="">
          @endif
          <span class="number-likes">{{count($image->likes)}}</span>
      </div>
      <div class="comments">
          <a href="{{ route('image.detail', ['id' => $image->id ]) }}" class="btn btn-sm btn-warning mr-4 mb-4">
              Comentarios ({{ count($image->comments) }})
          </a>
      </div>
  </div>
</div>