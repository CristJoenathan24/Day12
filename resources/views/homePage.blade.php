<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
        <div>
            <h1>SanberBook</h1>
        </div>

        <div>
            <div>
                <h3>Social Media Developer Santai Berkualitas</h3>
                <p>Belajar dan Berbagi agar hidup ini semakin santai dan berkualitas</p>
            </div>

            <div>
                <h4>Benefit Join di SanberBook</h4>
                <ul>
                    <li>Mendapatkan motivasi dari sesama developer</li>
                    <li>Sharing knowledge dari para mastah Sanber</li>
                    <li>Dibuat oleh calin web developer terbaik</li>
                </ul>
            </div>

            <div>
                <h4>Cara Bergabung ke SanberBook</h4>
                <ol>
                    <li>Mengunjungi website ini</li>
                    <li>Mendaftar di <a href="{{ url('register')}}">Form Sign Up</a></li>
                    <li>Selesai!</li>
                </ol>
            </div>
        </div>
    </body>
</html>
