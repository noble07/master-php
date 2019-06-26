<h1>{{$title}}</h1>
<p>(acción index del controlador PeliculasController)</p>

@if (isset($page))
    <h3>La página es: {{$page}}</h3>
@endif

{{-- también se puede enlazar a una pagina con la función route('NOMBRE DE LA RUTA') y para pasar parametros lo hacemos en un array como se muestra a continuación: route('detalle.pelicula', ['id' => 12]) --}}
<a href="{{ route('detalle.pelicula') }}">Ir al detalle</a>