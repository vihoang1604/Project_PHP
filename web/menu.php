<?php error_reporting(1); 
include('connect.php');

?>
<style type="text/css">
ul.dropdown-menu > li:hover, ul.dropdown-menu > li a:hover{
  background-color: white;
  color: black !important; 
}
</style>
<header style="position: relative;z-index: 99">
  <nav>
   <div class="menu-icon">
    <i class="fa fa-bars fa-2x"></i>
  </div>
  <div class="logo">
   <img src="img/logoheader.png" style="width: 100px ; height: 100px;position: relative;top: -10px; ">
 </div>
 <div class="menu">
  <ul>
   <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
   <li>                       
     <form class="navbar-form" role="search">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="q">
        <div class="input-group-btn">
          <button class="form-control btn btn-default" style="border-radius: 0px 4px 4px 0px" type="submit"><i class="glyphicon glyphicon-search"></i></button>
        </div>
      </div>
    </form>
  </li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" onclick="back()" data-toggle="dropdown">Sản Phẩm<span class="caret"></span></a>
    <ul class="dropdown-menu" style="background-color: black; padding: 0px;">
      <?php 
      $sql = "SELECT * FROM categories";
      $result = mysqli_query($mysqli,$sql);
      if($result)
      {
        
        while($row = mysqli_fetch_assoc($result))
        {
          ?>           
          <li style="width: 100%;"><a href="giayNam.php?id=<?php echo $row['id'] ?>" style="color:white;"><?php echo $row['cat_name']; ?></a></li><?php }} ?>
        </ul>
      </li>
      <?php if (empty($_SESSION['username'])) {?>
        <li class="dropdown">
          <a href="Test_Login.php" >Đăng nhập |</a>
          <a href="Sign_In.php" >Đăng kí</a>
        </li>
      <?php } 
      else{
        ?>
        <li class="dropdown">
          <a href="index.php" ><?php echo $_SESSION['username']  ?> |</a>
          <a href="deleteAcount.php"  >Đăng Xuất</a>
          </li><?php } ?>
          <li>
            <a id="link" class="cart_viewer"  href="#open-modal">
              <span class="glyphicon glyphicon-shopping-cart"></span>

            </span> Giỏ Hàng 
            <b style="color: white">(
              <?php 
              if(isset($_SESSION["cart_item"])){
                $total_quantity = 0;
                foreach ($_SESSION["cart_item"] as $item){
                 $total_quantity += $item["quantity"];
               }
               echo $total_quantity; 
             }
             
             ?>
           )</b>
         </a>
       </li>
       
     </div>
   </nav>
 </header>

 <script type="text/javascript">

  function back(){
    $('nav').addClass('black');
  }
  
  function cart(){

  }
</script>


