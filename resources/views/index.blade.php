<!DOCTYPE html>
<html>
<head>
    <title>DraxGames</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
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
    .button-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
        margin-top: 20px;
        width: 100%; /* Asegura que el contenedor ocupe todo el ancho disponible */
    }
    button {
        width: 100%; /* Los botones ocuparán el ancho del contenedor */
        max-width: 300px; /* Opcional: establece un ancho máximo para los botones */
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
    .logo {
        width: 150px;
        margin-bottom: 20px;
    }
    .comments-section {
        margin-top: 30px;
        text-align: left;
        width: 100%;
    }
</style>

<body>
    <div class="content">
        <img src="{{ asset('https://i.ibb.co/XktqQGvv/Drax-Games-logo.png') }}" alt="DraxGames Logo" class="logo">
        <div class="button-container">
            <a href="{{ route('comentarios.formulario') }}"><button>Agregar Comentario</button></a>
            <a href="{{ url('comentarios/ver') }}"><button>Ver Comentarios</button></a>
            <a href="{{ route('reacciones.formulario') }}"><button>Ver Reacciones</button></a>
        </div>
    </div>
</body>
</html>
