
	<?php error_reporting(1); 
include('connect.php');

?>
<style type="text/css">
  ul.dropdown-menu > li:hover, ul.dropdown-menu > li a:hover{
    background-color: white;
    color: black !important; 
  }
</style>

 <nav style="background-color: black; margin: 0px !important;">
<header style="position: relative;z-index: 99">
 
			<div class="menu-icon">
				<i class="fa fa-bars fa-2x"></i>
			</div>
			<div class="logo">
				<img src="img/admin.jpg" style="width: 100px ; height: 100px;position: relative;top: -10px; ">
			</div>
			<div class="menu">
				<ul>
					<li><a href="displayProduct.php" ><span class="glyphicon glyphicon-home"></span> Home</a></li>
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
					</li>
					<li class="dropdown">
						
						<a href="formProduct.php" >Thêm sản phẩm  | </a>	
						<a href="formCategory.php" >Thêm Thể loại  |</a>	
						<a href="displayProduct.php">Xem sửa sản phẩm   | </a>
						<a href="index.php" >Đăng xuất    </a>
					</li>

				</ul>
				</div>
			
</header>
</nav>

<script type="text/javascript">

  function back(){
    $('nav').addClass('black');
  }
  
  function cart(){

  }
</script>