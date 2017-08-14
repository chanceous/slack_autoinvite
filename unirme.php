<?php
// Codigo Desarrollado por Christopher Chance
if(isset($_POST['email'])){
}else{ header('Location: index.php?error'); }
$email = $_POST['email'];
// Aca Abajo Ingresen el Token Obtenido en la URL del Repositorio
$token = 'xoxp-179688677408-181108932913-227356257382-99932137a97e2bceafc1b2a7973c255e';

$json = file_get_contents('https://slack.com/api/users.admin.invite?token='.$token.'&pretty=1&email='.$email);
$obj = json_decode($json);
$valor = $obj->ok;
if($valor == 1){
header('Location: index.php?listo');
}else{
header('Location: index.php?email');
}

?>