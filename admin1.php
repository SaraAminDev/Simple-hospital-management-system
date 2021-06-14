<?php
include('header.php');

?>
        
<table>
    <th>id</th>
    <th>إname</th>
    <th>email</th>
    <th>date</th>
              
    <?php
    $host= "localhost";
    $user = "root";
    $password= "";
    $dbName= "hospital";
 
 


 

    $conn = mysqli_connect($host, $user, $password,$dbName);
    
    if(isset($conn))
    {
        echo "Yes DataBase Connected";
        
    }else
    {
        echo "databsae not connected";
        
    }
    
    // إستيراد معلومات المرضى من قاعدة البيانات

    $query = "SELECT * FROM patients";
    $result = mysqli_query($conn,$query);

    if ($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['date'] . "</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "there is an error";
    }
    
    
    
    ?>