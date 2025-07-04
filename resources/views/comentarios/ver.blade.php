<!DOCTYPE html>
<html>
<head>
    <title>Comentarios del Usuario</title>
</head>

<style>
            @font-face {
                font-family: 'ND LOGOS REGULAR';
                src: url('fonts/ND LOGOS REGULAR.ttf') format('truetype');
            }
            body {
                background-color: #000000;
                font-family: 'ND LOGOS REGULAR', sans-serif;
                color: #ffffff;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .content {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                align-items: center;
                justify-content: center;
                width: 90%;
                max-width: 500px;
            }
            h2 {
                color: #ffffff;
                text-align: center;
                font-size: 2em;
                margin-bottom: 20px;
            }
            form {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 15px;
                width: 50%;
            }
            input[type="text"] {
                width: 100%;
                padding: 10px;
                margin-left: 10px;
                border: 1px solid #ffffff;
                border-radius: 5px;
                background-color: #333333;
                color: #ffffff;
                font-family: 'ND LOGOS REGULAR', sans-serif;
                font-size: 16px;
            }
            button {
                width: 100%;
                padding: 12px;
                margin-left: 10px;
                background-color: #b1384ad8;
                color: white;
                border: none;
                border-radius: 5px;
                font-family: 'ND LOGOS REGULAR', sans-serif;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease, transform 0.3s ease;
            }
            button:hover {
                background-color: #9c2f3f88;
                transform: scale(1.05);
            }
            .button-container {
                display: flex;
                justify-content: center;
                margin-top: 20px;
            }
            .comments-section {
                margin-top: 30px;
                text-align: left;
                width: 100%;
            }
        </style>
        <div class="content">
            <h2>
                Comentarios
                @if(isset($userId) && isset($juegoId))
                    del Usuario #{{ $userId }} en el Juego #{{ $juegoId }}
                @endif
            </h2>

            <div class="comments-section">
                @if($comentarios->isEmpty())
                    <p>No se encontraron comentarios.</p>
                @else
                    <table border="1" cellpadding="5">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Comentario</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comentarios as $comentario)
                                <tr>
                                    <td>{{ $comentario->id }}</td>
                                    <td>{{ $comentario->comentario }}</td>
                                    <td>{{ $comentario->fecha }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>

            <div class="button-container">
                <a href="{{ route('comentarios.buscar') }}">
                    <button>Volver a buscar</button>
                </a>
            </div>
            
    <a href="{{ url('http://127.0.0.1:8000/') }}">
        <button type="button">Volver al Inicio</button>
    </a>
        </div>
<body>

</html>
