<?php
ini_set('default_charset', 'utf-8');
if(isset($_POST["Voltar"])){
    header("Location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="alarme.css">
    <title>Alarm Clock</title>
</head>
<body>
    <div class="container">
        <h1>Alarm Clock</h1>
        <div class="alarm-form">
            <label for="alarm-time">Defina o horário do alarme:</label>
            <input type="time" id="alarm-time">
            <button onclick="setAlarm()">Definir Alarme</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
