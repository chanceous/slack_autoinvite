<!DOCTYPE html>
<html>
<head>
<title>Unite a Nuestro Slack</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
</head>
<style>
  body {
  background-color:grey;
  display: flex;
justify-content: center;
align-items: center;
}
.centro{
display: flex;
justify-content: center;
align-items: center;
}
</style>
<body>
<center>


<div class="mdl-card mdl-shadow--4dp centro">
<h4>Unite al Slack</h4>
<Br>
<?php 
if(isset($_GET['email'])){
echo '<div class="mdl-card mdl-shadow--4dp " style="color:white;background-color:red;min-height:5px;">';
echo 'Ooops... Hubo un Error, Corregi tu Email y si el Problema Persite contactanos a CHRISTOPHERCHANCE67@GMAIL.COM';
echo '</div>';
}
if(isset($_GET['listo'])){
echo '<div class="mdl-card mdl-shadow--4dp " style="color:white;background-color:green;min-height:5px;">';
echo 'Revisa tu Bandeja de Entrada, YA CASI SOS PARTE DEL EQUIPO!';
echo '</div>';
}
if(isset($_GET['error'])){
echo '<div class="mdl-card mdl-shadow--4dp " style="color:white;background-color:red;min-height:5px;">';
echo 'Error en la Plataforma, Intenta Mas Tarde';
echo '</div>';
}
?>
<Br>
<form action="unirme.php" method="POST">
  <center>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input name="email" class="mdl-textfield__input" type="text" required>
    <label class="mdl-textfield__label" for="sample3">Email</label>
  </div>
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
  Unirme al Slack
</button>
</form>
</div>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>