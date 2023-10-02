<?php

session_start();

/* connect to user table */
include 'config.php';

/* conncet to shopping cart database */
$connect_shopping_cart = mysqli_connect("localhost","root","","shopping_cart");

/* user cart*/ 
$connect_user_cart = mysqli_connect("localhost","root","","user");


/* user id */
$user_id = $_SESSION['user_id'];

/* user info */
$select_user = mysqli_query($connect_user_table,"SELECT * FROM `user_table` WHERE user_id = '$user_id'") or die ('query failed');
if(mysqli_num_rows($select_user) > 0){
    $fetch_user = mysqli_fetch_assoc($select_user);
};


?>                                            

<!-- Header Order -->
<?php
    include 'header-order.php';
?>



    <section class="order-table">
        <table class='table table-borderd table-striped'>

                                    <h2>USER NAME: <?php if(isset($user_id)){
                                         echo $fetch_user['user_name'];
                                          } ?>
                                    </h2>
                                    <thead>
                                        <th>ITEM</th>
                                        <th>NAME</th>
                                        <th>PRICE</th>
                                        <th>QUANTITY</th>
                                        <th>INFO</th>
                                        <th>TOTAL</th>           
                                    </thead>
                                    <tbody>
                                        <?php
                                        $grand_total = 0;
                                        $count_cart_items = 0;
                                        if(isset($user_id)){
                                            
                                            $cart_query = mysqli_query($connect_user_cart, "SELECT * FROM `user_cart` WHERE user_id ='$user_id'")or die ('query failed');
                                            if(mysqli_num_rows($cart_query) > 0){
                                                while($fetch_cart = mysqli_fetch_assoc($cart_query)){
                                        ?>
                                        <tr>                                            
                                                <td><img src="./images/products/<?php echo $fetch_cart['user_product_image']; ?>" alt='product-image' class='cart_image'>
                                                </td> 
                                                <td><?php echo $fetch_cart['user_product_name']; ?></td> 
                                                <td>$<?php echo $fetch_cart['user_product_price']; ?></td> 
                                               
                                                <td><?php echo $fetch_cart['user_product_quantity']; ?></td> 
                                                <td>
                                                <?php echo $fetch_cart['user_product_info'] ?>
                                                </td>
                                                <td>$<?php echo $sub_total =$fetch_cart['user_product_price'] * $fetch_cart['user_product_quantity']; ?></td>
                                        </tr>
                                        <thead>
                                        <th>Order Time: <?php echo $fetch_cart['order_date']; ?></th>
                                    </thead>
                                        <?php
                                            $grand_total += $sub_total;
                                            $count_cart_items += $fetch_cart['user_product_quantity'];
                                                };
                                            };
                                        };                                        
                                        ?>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td> Total All:</td>
                                            <td>$<?php echo $grand_total; ?></td>
                                        </tr>
                                        
                                    </tbody>

                                </table>
    </section>


        <!-- Footer -->
        <?php
            include 'footer.php';
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>                      
    </body>
</html>