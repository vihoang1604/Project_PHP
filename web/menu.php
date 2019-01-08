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
      <li style="width: 100%;"><a href="giaynam.php" style="color:#8764db;">Dày Nam</a></li>
      <li style="width: 100%;"><a href="giaynu.php" style="color:#8764db;">Dày Nữ</a></li>
      <li style="width: 100%;"><a href="giayTreEm.php" style="color:#8764db;">Dày Trẻ Em</a></li>
    </ul>
  </li>
<li class="dropdown">
    <a href="Test_Login.php" >Đăng nhập |</a>
   <a href="Sign_In.php" >Đăng kí</a>
  </li>
  <li><a href="#" id="link" onclick="cart()"><span class="glyphicon glyphicon-shopping-cart"><span class="badge badge-danger" id="cart">0</span></span> Giỏ Hàng</a></li>
  
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



<!-- <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <center><h2>Gởi Phản Hồi Hoặc Liên Hệ Với Chúng Tôi Tại Đây</h2></center>
          <div class="col-md-12"></div>
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-12 row" style="padding:0px;margin-bottom:10px;">

                  <div class="col-md-2">
                    <img src="http://dinus.org/img/fakultas/FIK/cs/cs.svg">
                    <div style="margin-left:30px;">
                      <img src="http://dinus.org/img/fakultas/FIK/cs/cs.png" width="70px" height="70px" class="img-circle" style="border:3px solid #052C52;">
                    </div>
                  </div>
                  <div class="col-md-10">
                    <hr>
                    <p style="padding-left:55px;font-size:1.3em;"><strong>FashionTV<br>Sự Lựa Chọn Hoàn Hảo</strong></p>

                  </div>


                </div>

                <form>
                  <table class="table">
                    <tr>
                      <td>
                        <input type="email" class="form-control"  id="mailtip2" placeholder="Your e-mail">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input class="form-control" type="text" placeholder="Subject">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <textarea class="form-control" rows="4" placeholder="Message text . . ."></textarea>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <button class="btn btn-danger btn-sm" style="width: 100%;"><i class="fa fa-envelope-o" style="padding-right: 5px;"></i> Send</button>
                      </td>
                    </tr>
                  </table>

                </form>
              </div>
            </div>

          </div>

        </div>
      </div>  
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <center><h2>Gởi Phản Hồi Hoặc Liên Hệ Với Chúng Tôi Tại Đây</h2></center>
          <div class="col-md-12"></div>
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-12 row" style="padding:0px;margin-bottom:10px;">

                  <div class="col-md-2">
                    <img src="http://dinus.org/img/fakultas/FIK/cs/cs.svg">
                    <div style="margin-left:30px;">
                      <img src="http://dinus.org/img/fakultas/FIK/cs/cs.png" width="70px" height="70px" class="img-circle" style="border:3px solid #052C52;">
                    </div>
                  </div>
                  <div class="col-md-10">
                    <hr>
                    <p style="padding-left:55px;font-size:1.3em;"><strong>FashionTV<br>Sự Lựa Chọn Hoàn Hảo</strong></p>

                  </div>


                </div>

                <form>
                  <table class="table">
                    <tr>
                      <td>
                        <input type="email" class="form-control"  id="mailtip2" placeholder="Your e-mail">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input class="form-control" type="text" placeholder="Subject">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <textarea class="form-control" rows="4" placeholder="Message text . . ."></textarea>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <button class="btn btn-danger btn-sm" style="width: 100%;"><i class="fa fa-envelope-o" style="padding-right: 5px;"></i> Send</button>
                      </td>
                    </tr>
                  </table>

                </form>
              </div>
            </div>

          </div>

        </div>
      </div>  
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
 -->