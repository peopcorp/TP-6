<!DOCTYPE html>
<html lang="en">
<?php 

require_once("config_NIM.php");
session_start();
if (isset($_POST['submit'])){
    $get = $conn->query('SELECT * FROM akun')->fetch_assoc();
    $nim = $_POST['nim'];
    $pass = $_POST['password'];
    if($nim != $get['nim'] || $pass != $get['password']){
        header('location:login_NIM.php');
    }else{
        $_SESSION['loggedIn'] = TRUE;
    }
}else{
    if(!$_SESSION['loggedIn']){
        header('location:login_NIM.php');
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Nilai- <?php echo $nim ?> </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
    <div class="content">
        <div class="input">
            <h1>input nilai - <?php echo $nim ?></h1>
            <form action="insert_NIM.php" method="POST">
                <input type="text" placeholder="NIM" name="nim" value= '<?php echo $nim ?>'readonly>
                <input type="text" placeholder="UTS" name="uts">
                <input type="text" placeholder="UAS" name="uas">
                <input type="text" placeholder="Kuis" name="kuis">
                <input type="text" placeholder="Tubes" name="tubes">
                <button type="submit" name='submit'>Input</button>
            </form>
        </div>
    </div>
</body>
</html>