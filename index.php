<html>

    <head><title>el shefia hospital</title>
    
    
 <link rel="stylesheet" href="css/JannalTRegular.css">
        <style tpe="text/css">
        
        
        
        
        *{
    font-family: 'janna lt';
    box-sizing: border-box;
    border:0;
    direct ion: rtl;
}
.logo{
    text-align: center;
    margin: 40px 0;
}
.logo img{
    width: 100px;
}
.logo h2{
    font-size: 30px;
    font-weight: 500;
    color: #00a9b0;
}
.book{
    text-align: center
}
.book p{
    font-size: 24px;
}
.book input{
    width: 50%;
    margin-bottom: 10px;
    padding: 10px;
}
.book input[type="submit"]{
    font-size: 16px;
    color: #fff;
    background: #00a9b0;
    border: none;
}
table{
    width: 100%;
    text-align: center;
    border-collapse: collapse;
    font-size: 20px;
}
th{
    background: #00a9b0;
    color: #fff;
    padding: 5px 0;
}
        
        </style>
        
        
        
    </head>

    <body>
    
        <h1>welcome generous visitor</h1>
        
        <div class="main">
        <div class="logo">
        <img src="logo.png">
            
            <h2>elshefia hospital</h2>
        
            </div>
            
            <div class="book">
            
            <p>welcome to elsheifa hospital reserve now</p>
            <form action="index.php" method="post">
                
            <input type="text" placeholder="entername" name="name"/>
              
            <input type="text" placeholder="enteremail" name="email"/>
               
            <input type="date" value="mm/dd/yy" name="date"/>
               
                <input type="submit" value="submit now" name="send"/>
            
            </form>
                
                <?php
                
                //to check if iam connected to database or not
                
                
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
                // o send infprmation writen by patient to database
                
                $pName=$_POST['name'];
                $pEmail=$_POST['email'];
                $uDate=$_POST['date'];
                $psend=$_POST['send'];
                
                
                if($psend)
               {     
                $query="INSERT INTO patients(name,email,date)VALUES('$pName','$pEmail','$uDate')";
                
                $result=mysqli_query($conn,$query);
                
                    
                    echo "<p style='color:green'>"."Done"."</p>";
                }else
                {
                    
                    
                    echo "<p style='color:red'>"."an error"."</p>";
                    
                }
                
                
                
                
                
                
                
                ?>
            
        </div>
        </div>
    </body>

</html>