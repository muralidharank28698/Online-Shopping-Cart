<?php
    // include("topic.php");
    session_start();
    include("conn.php");
    // include("index.php");
    ?>
    <html>
    <head>
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
                .container {
                width: 60%;
                min-height: 100vh;
                /* background-color:red; */
                margin-top:16px;
                }
                .cards {
                display: flex;
                width: 80%;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                margin: auto;
                }
                .image-sec {
                width: 80%;
                }
                .image-sec img {
                width:100%;
                height: 50%;
                /* text-align:center; */
                }
                .tab{
                margin: 0 auto;
                font-size: 16px;
                /* font-weight: 775px; */
                border: 1px solid green;
                width:500px;
                /* height:300px; */
                }
                td {
                border: 1px solid blue;
                padding: 10px;
                font-weight: 600;
                }
                .btn{
                color:darkblue;
                background-color:rgb(233, 122, 19);
             /* background-color:yellow; */
                width:100px;
                height: 30px;
                font-weight: 600;
                border-radius:5px;
                font-size: 14px;
                }
                .btn:hover{
                background-color:green;
                color:white;
                }
                 .nav{
                background-color: #130f40;
                width:100%;
                height:80px;
                /* position:fixed; */
                }
                .nav h1{
                display: inline-block;
                text-transform:uppercase;
                font-size:2.6vw;
                color:	white;
                line-height:80px;
                margin-left:20px;
                text-shadow:3px 3px 2px #f0932b;
                }
                .nav a{
                text-transform:uppercase;
                font-size:18px;
                color:	#cd6133;
                float: right;
                margin-right:50px;
                line-height:80px;
                text-decoration:none;
                }
                .nav a:hover{
                    color:white;
                }
                hr{
                margin:30px auto;
                border: 1px solid rgb(119, 117, 117);
                box-shadow:  1px 2px 3px 2px #888888; 
                width:95%;
                }
       </style>
    </head>
    <body>
        
    <div class="nav">
        <h1>Add to Cart</h1>

        <a href="./index.php">Home</a>
    </div>
    <hr>
    <div class="container">
        <div class="cards"> 
           <!-- <form action="" method="get"> -->
            <?php
            if(isset($_POST["AddCart"]))
            {
                if(isset($_SESSION["cart"]))
                {
                    $id_array = array_column($_SESSION["cart"],"id");
                    if(!in_array($_GET["id"],$id_array))
                    {
                        $index = count($_SESSION['cart']);

                        $item = array(
                            'id'=>$_GET['id'],
                            'product_name'=>$_POST['pname'],
                            'price'=>$_POST['price'],
                            // 'image'=>$_POST['image'],

                        );
                        $_SESSION["cart"][$index] = $item;
                        echo "<script> alert('product added');</script>";
                        header("location:cart.php");
                    }
                    else
                    {
                    echo "<script> alert('already added');</script>";

                    }
                }
                else
                {
                    $item = array(
                        'id'=>$_GET['id'],
                        'product_name'=>$_POST['pname'],
                        'price'=>$_POST['price'],

                        // 'image'=>$_POST['image'],
                    );
                    $_SESSION["cart"][0] = $item;
                    echo "<script> alert('product added');</script>";
                    header("location:cart.php");
                }
            }
                    if(isset($_GET['id']))
                    {
                        $pid = $_GET["id"];
                        $sql="select * from products where id=$pid";
                        $res=$conn->query($sql); 
                        // echo $res;
                            if($res->num_rows > 0)
                            {
                                while($row=$res->fetch_assoc())
                                {
                                    // echo "<pre>";
                                    // print_r($row);
                                    // echo "</pre>";
                                    ?>
                                    <!-- <div class="card"> -->
                                    <div class="image-sec">
                                    <?php
                                    echo '
                                    <form action="'.$_SERVER["REQUEST_URI"].'" method="POST"> 
                                    <table class="tab">
                                    <tr><td align="center" colspan="2"><img src="data:image;base64,'.base64_encode($row['image']).'" alt="image"></td></tr>
                                       <tr><td>Model Name</td><td><p>'.$row["Model_Name"].'</p></td></tr>
                                       <tr><td>Product Name</td><td><p>'.$row["product_name"].'</p></td></tr>
                                       <tr><td>Storage capacity</td><td><p>'.$row["storage"].'</p></td></tr>
                                       <tr><td>Camera Specification</td><td><p>'.$row["camera"].'</p></td></tr>
                                       <tr><td>Battery Capacity</td><td><p>'.$row["battery"].'</p></td></tr>
                                       <tr><td>Price</td><td><p>'.$row["price"].'</p></td></tr>
                                       <tr>
                                       <td>Enter quantity</td>
                                       <td>
                                       <input type="text" name="qnty" required>
                                       <input type="hidden" value='.$row['product_name'].' name="pname">
                                       <input type="hidden" value='.$row["price"].' name="price">


                                       </td>
                                       </tr>
                                       <tr><td></td><td colspan="2" align="right"><button class="btn" name="AddCart" value="Add Cart">Add To Cart</button></td></tr>
                                    </table>
                                    </form>
                                    ';
                                   ?>
                                    <?php
                                }
                            }
                            else
                            {
                                header("location:index.php");
                            }
                    }
                    else
                    {
                        header("location:index.php");
                    }
               ?>
            
        </div>
    </div>

    </body>
    </html>