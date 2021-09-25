    <?php
    include("topic.php");
    include("conn.php");
    ?>
    <!-- <div class="addtocart">
        <input type="text" value="" name="">
        <h2>Cart</h2>
        <img src="./upload/addcart.png" alt="">
    </div> -->
    <div class="container">
        <div class="cards">
            <!-- <div class="new-thing">
                <h1>vivo mobile</h1>
            </div> -->
            <!-- <form action="./view_full_det.php" method="GET"> -->
            <?php
              
              $sql="select * from products";
              $res=$conn->query($sql);
              if($res->num_rows > 0)
              {
                  while($row=$res->fetch_assoc())
                  {
                    
                           
                            $product_name = $row['product_name'];
                            $storage = $row['storage'];
                            $battery = $row['battery'];
                            $price = $row['price'];

                           ?>
                                <div class="card">
                                <div class="image-sec">
                                   
                                <?php
                                    echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="image">';
                                ?>
                             </div>
                                <div class='description'>
                                    <h1><?php echo $product_name; ?></h1>
                                    <p><?php echo $storage; ?></p>
                                    <h4><?php echo $battery; ?></h4>
                                    <!-- <h2><?php ?></h2> -->
                                </div>
                                <div class='button-group'>
                                <!-- <a href="" class='buy'>Buy</a> -->
                                <a href="./view_full_det.php?id=<?php echo $row['id'];?>" class='add-to-cart'>view full detials</a>
                                </div>
                                </div> 
                          <?php 

                    }
                }

            ?>
<!-- </form> -->
            <!-- <div class="card">
                <div class="image-sec">
                    <img src="./upload/m1.jpg" alt="">
                </div>
                <div class="description">
                    <h1>vivo</h1>
                    <p>4 GB RAM | 64 GB ROM</p>
                    <h4>5000 mAh Battery</h4>
                    <h2><b>Price</b><span>$6666</span><del>$7777</del></h2>
                </div>
                <div class="button-group">
                    <a href="" class="buy">Buy</a>
                    <a href="" class="add-to-cart">Add to Cart</a>
                </div>
            </div> -->
            
            <!-- <div class="card">
                <div class="image-sec">
                    <img src="./upload/desktop.jpg" alt="">
                </div>
                <div class="description">
                    <h1>Desktop</h1>
                    <p>Intel Core i5-6600K Memory: 8 GB RAM</p>
                    <h4>Hard Drive: 1TB (SSD or HDD)</h4>
                    <h2><b>Price</b><span>$88888</span><del>$99999</del></h2>
                </div>
                <div class="button-group">
                    <a href="" class="buy">Buy</a>
                    <a href="" class="add-to-cart">Add to Cart</a>
                </div>
            </div>
            <div class="card">
                <div class="image-sec">
                    <img src="./upload/lap.jpg" alt="">
                </div>
                <div class="description">
                    <h1>Laptop</h1>
                    <p>8 GB RAM | 264 GB ROM</p>
                    <h4>8000 mAh Battery</h4>
                    <h2><b>Price</b><span>$55555</span><del>$66666</del></h2>
                </div>
                <div class="button-group">
                    <a href="" class="buy">Buy</a>
                    <a href="" class="add-to-cart">Add to Cart</a>
                </div>
            </div> -->
            
        </div>
        
    </div>

    <!-- <div class="container">
            <div class="flex-item item-1">
                <img src="./upload/m1.jpg" alt="">
                <h1>vivo</h1>
            </div>
            <div class="flex-item item-2">
                <img src="./upload/m1.jpg" alt="">
                <h1>vivo</h1>
            </div>
            <div class="flex-item item-3">
                <img src="./upload/m1.jpg" alt="">
                <h1>vivo</h1>
            </div>
            <div class="flex-item item-4">
                <img src="./upload/m1.jpg" alt="">
                <h1>vivo</h1>
            </div>
            <div class="flex-item item-3">
                <img src="./upload/m1.jpg" alt="">
                <h1>vivo</h1>
            </div>
            <div class="flex-item item-4">
                <img src="./upload/m1.jpg" alt="">
                <h1>vivo</h1>
            </div>
            <div class="flex-item item-4">
                <img src="./upload/m1.jpg" alt="">
                <h1>vivo</h1>
            </div>
            <div class="flex-item item-4">
                <img src="./upload/m1.jpg" alt="">
                <h1>vivo</h1>
            </div> -->
        <!-- <div class="item1">
            <img src="./upload/m1.jpg" alt="">
            <h1>vivo</h1>
        </div>
        <div class="item1">
            <img src="./upload/m1.jpg" alt="">
            <h1>vivo</h1>
        </div>
        <div class="item1">
            <img src="./upload/m1.jpg" alt="">
            <h1>vivo</h1>
        </div>
        <div class="item1">
            <img src="./upload/m1.jpg" alt="">
            <h1>vivo</h1>
        </div> -->
 
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script> -->
