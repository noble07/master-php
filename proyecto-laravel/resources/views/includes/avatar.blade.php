@if (Auth::user()->image)
  <div class="container-avatar">
    <img src="{{ route('user.avatar', ['filename' =>Auth::user()->image]) }}" class="avatar mb-3" alt="">
  </div>
@endif