<!DOCTYPE html>
<html lang="en">
    <head>
    <title> Login </title>
        <meta charset ="UTF-8">
        <meta name="viewport" content = "width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <link rel="stylesheet" type="text/css" href="style.css">

	
</head>
<body>

<?php
session_start();
$username = 'daud';
$password = 'system';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password){
        $_SESSION["username"] = $username; 
        echo "Login Success $username";
      
        header("Location: Biodata.php"); 
    } else {
        loginOn();
        echo '<p>Username Atau Password Tidak Benar</p>';
         header("Location: Kesalahan.php");
    }
}    
else { 
    loginOn();
}
function loginOn(){ ?>
<div id="card">
    <div id="card-content">
      <div id="card-title">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
    <br>
    <h2>
        <label>LOGIN<br></br></label>
        <div class="underline-title"></div>
        </h2>
    <label for="username" > USERNAME </label>
    <input type="text" name="username" id="username">
    <label for="password"><br></br> PASSWORD </label>
    <input type="password" name="password" id="password">
    <br></br>
    <input type="submit" name="submit" value="submit">
    

    </form>  
</div>
</div>
</div>
<?php } ?>

</body>
</html>