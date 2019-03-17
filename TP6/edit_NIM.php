<!DOCTYPE html>
<html lang="en">
<?php 

require_once("config_NIM.php");
session_start();
if ($_SESSION['loggedIn']) {
    $id=$_GET['id'];
    $result=mysqli_query($conn,"SELECT * from nilai where id =$id");
    $getNim=$conn->query("SELECT nim from akun")->fetch_assoc();
    $nim=$getNim['nim'];
}else{
    header('location:login_NIM.php');
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Nilai-<?= $nim?></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
    <div class="content">
        <div class="input">
            <h1>input nilai - <?php echo $nim?></h1>
            <?php 
            while ($getValue=mysqli_fetch_array($result)){
            ?>
            <form action="update_NIM.php?id=<?=$getValue['id'] ?>" method="POST">
                <input type="text" placeholder="NIM" name="nim" value='<?php echo $nim ?>' readonly> <!--GANTI VALUE JADI NIM-->
                <input type="text" placeholder="UTS" name="uts" value='<?php echo $getValue['uts'] ?>'> <!--GANTI VALUE JADI NILAI UTS-->
                <input type="text" placeholder="UAS" name="uas" value='<?php echo  $getValue['uas'] ?>'> <!--GANTI VALUE JADI NILAI UAS-->
                <input type="text" placeholder="Kuis" name="kuis"value='<?php echo  $getValue['kuis'] ?>'> <!--GANTI VALUE JADI NILAI KUIS-->
                <input type="text" placeholder="Tubes" name="tubes" value='<?php echo $getValue['tubes'] ?>'> <!--GANTI VALUE JADI NILAI TUBES-->
                <button type="submit" name='submit'>Edit</button>
            </form>
            <?php } ?>
        </div>
    </div>
</body>
</html>