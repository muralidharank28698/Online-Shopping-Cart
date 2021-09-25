<?php

    session_start();
   

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping cart</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
    <style>
        *{
            margin:0;
            padding:0;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
        body{
                       background-color: #ecf0f1;

        }
         
        table {
            margin-top: 40px;
            /* font-size: 18px; */
            /* border: 1px solid black; */
            /* width:80%;  */
        }
        /* h1 {
            text-align: center;
            color:#80ff00;
            font-size: 40px;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        } */
        /* td {
            border: 2px solid black;
        } */
        th{
            color:	white;

            font-size:18px;
            /* text-align: center; */
            
            background-color: #002738;
            text-transform:uppercase;
        }
        
        td {
            font-weight: bold;
            border: 1px solid black;
            /* padding: 10px; */
            /* text-align: center; */
            font-size:18px;

        }
        td {
            font-weight: lighter;
        } 
        
        .nav{
            background-color: #130f40;
            width:100%;
            height:70px;
        
        }
 .nav h1{
     display: inline-block;
     text-transform:uppercase;
     font-size:2.6vw;
     color:	white;
     line-height:30px;
     margin-left:20px;
     text-shadow:3px 3px 2px #f0932b;


 }
 .nav a{
    text-transform:uppercase;
     font-size:18px;
     color:	#cd6133;
     float: right;
     margin-right:50px;
     line-height:70px;
     text-decoration:none;

 }
 .nav a:hover{
     color:white;
 }
 hr{
    margin:30px auto;
    border: 1px solid rgb(119, 117, 117);
    box-shadow:  1px 2px 3px 2px #888888; 
    width:90%;
 }
 .rem{
     color:blue;
     text-decoration:none;
 }
 .rem:hover{
     color:red;
     text-decoration:underline;

 }
    </style>

</head>
<body>
    <div class="container nav">
        <h1>Yours shopping carts</h1>
        <a href="./index.php">Home</a>
    </div>
    <hr>
     <?php
        //  echo "<pre>";
        //  print_r($_SESSION['cart']);
        //  echo "</pre>";
     ?>
     <!-- <table border=1 class="tab"> -->
         <div class="container">
         <table class="table table-striped table-bordered table-hover table-condensed">
         <tr>
         <!-- <th>product image</th> -->
            <th>product name</th>
             <th>price </th>
             <th>remove</th>
         </tr>
         <?php
         if(isset($_GET["del"]))
         {
                foreach($_SESSION["cart"] as $keys=>$values)
                {
                    if($values["id"] == $_GET["del"])
                    {
                        unset($_SESSION["cart"][$keys]);
                    }
                }
         }

                    if(!empty($_SESSION["cart"]))
                    {
                        foreach($_SESSION["cart"] as $keys=>$values)
                        {
                            // $total = $values["price"]+$values["price"];
                            echo'
                            <tr>
                                
                                <td>'.$values["product_name"].'</td>
                                <td>'.$values["price"].'</td>
                                <td><a class="rem" href="./cart.php?del='.$values["id"].'">remove</a>
                            </td>
                                
                            </tr>    
                            ';
                        }
                    }
                    else
                    {
                        echo "<script> alert('select the product...');</script>";
                        header("location:index.php");
                    }

         ?>
        
     </table>
     </div>
    <script src="./bootstrap/js/bootstrap.min.js"></script>

</body>
</html>