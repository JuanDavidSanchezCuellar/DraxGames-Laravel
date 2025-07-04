<!DOCTYPE html>
<html>
<head>
    <title>Reacciones</title>
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
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 90%;
            max-width: 800px;
        }
        h1 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
        }
        .content {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            gap: 20px;
            width: 100%;
        }
        .column {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 5px 0;
        }
        button {
            width: 100%;
            padding: 12px;
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
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Reacciones del jugador {{ $jugadorId }} en el juego {{ $juegoId }}</h1>

        <div class="content">
            <div class="column">
                @if ($reacciones->isEmpty())
                    <p>No hay reacciones registradas.</p>
                @else
                    <ul>
                        @foreach ($reacciones as $reaccion)
                            <li>
                                {{ $reaccion->tipo }} - {{ $reaccion->created_at }}
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>

        <div class="button-container">
            <a href="{{ url('http://127.0.0.1:8000/') }}">
                <button type="button">Volver al Inicio</button>
            </a>
        </div>
    </div>
</body>
</html>
