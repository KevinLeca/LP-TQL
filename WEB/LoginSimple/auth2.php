<?php
$con = mysqli_connect("127.0.0.1", "student", "student", "appli_web_tp1");

$log = $_POST["login"];
$pass = $_POST["password"];
$success = 0;

//$insert = "INSERT INTO identifiants (login, password) VALUES (\"".$log."\",\"".$pass."\");";
//$resultinsert = mysqli_query($con, $insert);

$print = "SELECT * FROM identifiants;";
$resultprint = mysqli_query($con, $print);

if($resultprint) {
	while($row = mysqli_fetch_array($resultprint)){
		$lelogin = $row["login"];
		$lepassword = $row["password"];
		
		if(($log == $lelogin) && ($pass == $lepassword)) {
			echo "Hello ".$log." !";
			$success = 1;
		}
	}
	
	if($success == 0){
		echo "Authentification failed ! <br><a href=\"Login.html\"><button>Retour</button></a>";
	}	
}
?>