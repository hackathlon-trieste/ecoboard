<?php
session_start();
?>
<!doctype html>
<?php
if ($_SESSION["login"] == "1" && !$_GET["logout"]) header("Location: ./");
if ($_POST) {
    include("db.inc.php");
    if ($_POST["utente"] && $_POST["password"]) {
$verifica_db = mysql_query("SELECT id, utente, nome, cognome, tipo, stato, foto FROM utenti WHERE utente = '".$_POST["utente"]."' AND password = '".md5($_POST["password"])."' LIMIT 1");
$verifica_login = mysql_fetch_array($verifica_db); 
if ($verifica_login["id"] > 0) {
	if ($verifica_login["stato"] == 1) {
	$_SESSION["login"] = "1";
	$_SESSION["utente_id"] = $verifica_login["id"];
	$_SESSION["utente_permessi"] = $verifica_login["tipo"];
	$_SESSION["utente_utente"] = $verifica_login["utente"];
	$_SESSION["utente_nome"] = $verifica_login["nome"];
	$_SESSION["utente_cognome"] = $verifica_login["cognome"];
	$_SESSION["utente_foto"] = $verifica_login["foto"];
	
	if ($_SESSION["login"] == "1") header("Location: ./"); 
	}
	else {
		echo "Utente non attivo!<br>Contatta l'assistenza per ulteriori informazioni.";
	}
	
}
}
}

else {
    if ($_GET["logout"] == "1") {
		$_SESSION=array(); 
        session_destroy(); 
}
?>
<head>
 
    <!-- Basics -->
     
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
     
    <title>Login</title>
 
    <!-- CSS -->
     
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/login.css">
     
</head>
 
    <!-- Main HTML -->
     
<body>
     
    <!-- Begin Page Content -->
     
    <div id="container">
        <div style="position: static;
    width: 288px;
    margin: -180px auto auto;"><img src="images/logo.png" style="width:288px"></div>
        <form action="login.php" method="POST">
         
            <label for="username">Utente:</label>
             
            <input type="text" id="username" name="utente">
             
            <label for="password">Password:</label>
             
            <p><a href="#">Hai dimenticato la password?</a></p>
             
            <input type="password" id="password" name="password">
             
            <div id="lower">
             
                <input type="checkbox"><label class="check" for="checkbox">Rimani collegato</label>
                 
                <input type="submit" value="Login">
             
            </div><!--/ lower-->
         
        </form>
         
    </div><!--/ container-->
 
     
     
    <!-- End Page Content -->
     
</body>
 
</html>
<?php
}
?>