<?php
$name=$_POST["nombre"];
$pass=$_POST["password"];
if(!isset($name) && !isset($pass))
{
?>
<html>
<h2>Usuario y Contraseña</h2>
<form method="post">
<input type="text" name="name">
<input type="password" name="pass">
<input type="submit" value="Entrar">
</form>
</html>
<?php
}
elseif($name=="user1" && $pass=="pass1")
{
echo "<html><h2>Acceso autorizado</h2></html>";
}
elseif($name=="user2" && $pass=="pass2")
{
echo "<html><h2>Acceso autorizado</h2></html>";
}
else
{
echo "<html><h2>Acceso no autorizado.</h2><a href='javascript:window.history.go(-1)'>Volver</a></html>";
}
?>
