<!DOCTYPE html>
<html>
    <head>
        <title>Mensaje Recibido</title>
    </head>
    <body>
        <p>Recibiste un mensaje de: {{ $msg['name'] }} - {{ $msg['email'] }}</p>
        <p><strong>Asunto:</strong> {{ $msg['subject'] }} </p>
        <p><strong>Mensaje:</strong> {{ $msg['message'] }} </p>
    </body>
</html>