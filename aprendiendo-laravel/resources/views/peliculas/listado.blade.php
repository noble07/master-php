{{-- Así se hacen los include de una vista--}}
@include('includes.header')

{{-- Para mostrar una variable lo hacemos mediante la interpolación de Blade {{$variable}} --}}
<h1>{{$title}}</h1>
<h2>{{$list[2]}}</h2>
<p>{{ date('Y') }}</p>

{{-- ESTO ES UN COMENTARIO blade --}}

<!-- MOSTRA SI EXISTE -->
{{ $director ?? 'No hay ningun director' }}

<!-- CONDICIONALES -->
@if($title && count($list) >= 2)
  <h1>El titulo existe y es este: {{$title}} y el listado es mayor a 2</h1>
@elseif($title)
  <h1>El titulo existe y el listado NO ES MAYOR A 2</h1>
@else
  <h1>El título no existe</h1>
@endif

<!-- BUCLES -->
@for ($i = 1; $i < 20; $i++)
  El numero es: {{$i}} <br>
@endfor

<hr>

@php
  $cont = 1;
@endphp
@while ($cont < 50)
  @if ($cont % 2 == 0)
      NUMERO PAR: {{$cont}} <br>
  @endif
  @php
      $cont++;
  @endphp
@endwhile

<hr>

@foreach ($list as $pelicula)
  <p>{{$pelicula}}</p>
@endforeach

@include('includes.footer')