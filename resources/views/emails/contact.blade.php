<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>Wiadomość z formularza kontaktowego</title>

    <style>
        body {
            font-family: "Verdana", sans-serif;
        }
    </style>
</head>
<body>
<h3>Wiadomość z formularza kontaktowego</h3>

Imię i nazwisko: {{ $name }} <br>
Email: {{ $email }} <br>
Numer telefonu: {{ $phone }} <br>
<br>
{{ $body }}

</body>
</html>


