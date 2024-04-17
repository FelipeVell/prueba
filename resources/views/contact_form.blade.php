<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>¡Hola! Se ha recibido una solicitud de contacto</title>
</head>
<body>
    <h1>¡Hola! Se ha recibido una solicitud de contacto</h1>
    <h2>Verifica que tus datos esten correctos</h2>
    <p><strong>Nombre:</strong> {{ $formData['names'] }}</p>
    <p><strong>Telefono:</strong> {{ $formData['phone'] }}</p>
    <p><strong>Email:</strong> {{ $formData['email'] }}</p>
    <p><strong>Mensaje:</strong> {{ $formData['mensaje'] }}</p>
</body>
</html>
