<?php include("addCart.php");
 include("menu.php");
 ?>

<!DOCTYPE html>
<html lang="">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
       <div class="container"  style="padding-top: 108px">
        <h1>Giỏ hàng</h1>
        <?php
        if(isset($_SESSION["cart_item"])){
            $total_quantity = 0;
            $total_price = 0;
            ?>  
            <div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Tên SP</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Thao tác</th>
                            <th><a id="btnEmpty" class="btn btn-danger" href="ViewCart.php?action=empty">Empty Cart</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($_SESSION["cart_item"] as $item){
                            $item_price = $item["quantity"]*$item["price"];
                            ?>


                            <tr>
                                <th><?php echo $item["prod_name"]; ?></th>
                                <th><?php echo $item["quantity"]; ?></th>
                                <td><?php echo $item["price"]; ?>.000 VND</td>
                                <td><img height="50px" width="50px" src="<?php echo $item["img"]; ?>"></td>
                                <td>
                                    <a href="ViewCart.php?action=remove&id=<?php echo $item["id"]; ?>" class="btn btn-warning"> Remove
                                    </a>
                                </td>
                            </tr>
                            <?php

                            $total_quantity += $item["quantity"];
                            $total_price += ($item["price"]*$item["quantity"]);
                        }
                        ?>


                        <tr>
                            <td >Total:</td>
                            <td ><?php echo $total_quantity; ?></td>
                            <td  colspan="2"><strong><?php echo "VND ".number_format($total_price, 3); ?></strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>
                            
                            <?php if (empty($_SESSION["username"])) {?>
                             <a href="Test_Login.php"  type="button" class="btn btn-danger"> Đặt hàng
                            </a>
                            <?php }                                                                                                                       else{   
                             ?>
                             <a href="Test_Login.php"  type="button" class="btn btn-danger"> Đặt hàng
                            </a>
                        <?php } ?>
                                
                            
                            </th>
                        </tr>
                    </tbody>
                    
                </table>
               
                <div class="no-records">Your Cart is Empty</div>
                
        </div>
        <?php } ?>
    </div>
    <?php include("footer.php")  ?>
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
         <script src="Hello World"></script>
    </body>
</html>