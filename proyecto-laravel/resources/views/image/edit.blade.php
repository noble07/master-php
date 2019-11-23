@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

          <div class="card">
            <div class="card-header">
              Editar mi imagen
            </div>
            <div class="card-body">

              <form action="{{ route('image.update') }}" method="post" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="image_id" value="{{ $image->id }}">

                <div class="form-group row">
                  <label for="image_path" class="col-md-3 col-form-label text-md-right">Imagen</label>
                  <div class="col-md-7">
                    @if ($image->image_path)
                      <div class="container-avatar">
                          <img src="{{ route('image.file', ['filename' => $image->image_path]) }}" class="avatar">
                      </div>
                    @endif
                    <div class="custom-file">
                      <input id="image_path" type="file" class="custom-file-input @error('image_path') is-invalid @enderror" name="image_path">
                      <label class="custom-file-label" for="image_path">{{ __('Choose file') }}</label>

                      @error('image_path')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="description" class="col-md-3 col-form-label text-md-right">Descripción</label>
                  <div class="col-md-7">
                    <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required>{{ $image->description }}</textarea>

                    @error('description')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-6 offset-md-3">
                    <input type="submit" value="Actualizar imagen" class="btn btn-primary">
                  </div>
                </div>
              </form>

            </div>
          </div>

        </div>
    </div>
</div>
@endsection