<!DOCTYPE html>
<html>
<head>
    <title>Buscar Reacciones</title>
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
                align-items: center;
                width: 90%;
                max-width: 500px;
            }
            h2 {
                color: #ffffff;
                text-align: center;
                font-size: 2em;
                margin: 20px 0;
            }
            form {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 15px;
                width: 50%;
            }
            input[type="text"], textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ffffff;
                border-radius: 5px;
                background-color: #333333;
                color: #ffffff;
                font-family: 'ND LOGOS REGULAR', sans-serif;
                font-size: 16px;
            }
            textarea {
                resize: none;
                height: 100px;
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
                display: flex;
                justify-content: center;
                margin-top: 20px;
            }
        </style>    

<body>

    <form method="POST" action="{{ route('reacciones.ver') }}">
    <h1>Buscar reacciones de un jugador</h1>
        @csrf
        <label for="juego_id">ID del Juego:</label>
        <input type="number" name="juego_id" required><br><br>

        <label for="jugador_id">ID del Jugador:</label>
        <input type="number" name="jugador_id" required><br><br>

        <button type="submit">Ver Reacciones</button>

        <div class="button-container">
    <a href="{{ url('http://127.0.0.1:8000/') }}">
        <button type="button">Volver al Inicio</button>
    </a>
</div>

    </form>
</body>
</html>
