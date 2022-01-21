<?php 
class user extends DB{
private $nombre;
prvate $username;
public function userExists ($user, $pass){
	$md5pass =md5($pass);
	$query  = this->connect()->prepare('select from usuarios where correo=');
}

 
}
 ?>
