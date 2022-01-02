<?php

    include "header.php";

?>

<table>
    <th>numara</th>
    <th>Hasta adı</th>
    <th> E-posta</th>
    <th>Tarih</th>

<?php

    //   الاتصال مع قاعدة البيانات
    $db=new mysqli('localhost','root','','hospital');
    $res=mysqli_query($db,"select * from hastalar");

    // إستيراد معلومات المرضى من قاعدة البيانات

    $query = "SELECT * FROM hastalar";
    $result = mysqli_query($db,$query);

    if ($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['date'] . "</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo " Yanlış birşey var";
    }


?>