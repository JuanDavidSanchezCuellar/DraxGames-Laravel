
<link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
<form action="{{ route('comentarios.ver') }}" method="post">
    @csrf
    <input type="text" name="juegoId" placeholder="ID del juego" required>
    <button type="submit">Buscar</button>
    
</form>

@if(isset($comentarios))
    <h3>Comentarios para Juego ID: {{ $juegoId }}</h3>
    <ul>
        @forelse ($comentarios as $comentario)
            <li><strong>{{ $comentario->nombre }}:</strong> {{ $comentario->comentario }}</li>
        @empty
            <p>No hay comentarios para este juego.</p>
        @endforelse
    </ul>
@endif
