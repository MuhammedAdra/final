<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şifa Hastanesi</title>
    <link rel="stylesheet" href = "css/style.css">
    <link rel="stylesheet" href = "css/JannaLTRegular.css">

</head>
<body>
<div class="main">
    <div class="logo">
        <img src="images/logo.png">
        <h2>Şifa Hastanesi</h2>

    </div>
    <div class="book">
        <p> Al Shifa Hastanesine Hoş Geldiniz...  Rezervasyon yapmak için aşağıdaki formu doldurun</p>
        <form action="index.php" method="post">
            <input type ="text" placeholder ="Lütfen adınızı giriniz" name="name"/>
            <input type ="text" placeholder ="Lütfen E-postanızı giriniz" name="email"/>
            <input type="date" name="date"/>
            <input type ="submit" value="Şimdi ayırtın" name="send"/>

        </form>

        <?php

        //   الاتصال مع قاعدة البيانات
        $db=new mysqli('localhost','root','','hospital');
        $res=mysqli_query($db,"select * from hastalar");

        // ارسال المعلومات المُدخله بواسطة المريض الى قاعدة البيانات

        $id='';
        $name='';
        $email='';
        $date='';
        if(isset($_POST['id'])){
            $id=$_POST['id'];
        }
        if(isset($_POST['name'])){
            $name=$_POST['name'];
        }
        if(isset($_POST['email'])){
            $email=$_POST['email'];
        }
        if(isset($_POST['date'])){
            $date=$_POST['date'];
        }
        $sqls='';
        if(isset($_POST['send'])){
            $sqls = "INSERT INTO hastalar(name,email,date) VALUE('$name ','$email ','$date ')";
            $result = mysqli_query($db,$sqls);
            echo "<p style='color:green'>" . "Rezerve edildi" . "</p>";
        }
        else{
            echo "<p style='color:red'>" . "Maalesef bir şeyler ters gitti. Tekrar deneyin " . "</p>";
        }










        ?>


    </div>

</div>

</body>
</html>