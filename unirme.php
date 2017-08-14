<?php
// Codigo Desarrollado por Christopher Chance
if(isset($_POST['email'])){
}else{ header('Location: index.php?error'); }
$email = $_POST['email'];
// Aca Abajo Ingresen el Token Obtenido en la URL del Repositorio
$token = 'ACA EL TOKEN OBTENIDO';

$json = file_get_contents('https://slack.com/api/users.admin.invite?token='.$token.'&pretty=1&email='.$email);
$obj = json_decode($json);
$valor = $obj->ok;
if($valor == 1){
header('Location: index.php?listo');
}else{
header('Location: index.php?email');
}

?>
