    <?php 
    error_reporting(1);
    include("Connect.php");
    header('Content-Type: text/html; charset=UTF-8');
    
    //Xử lý đăng nhập
    if (isset($_POST['dangnhap'])) 
    {
        $ten_admin= addslashes($_POST['admin']);
        $matkhau_admin= md5($_POST['passAdmin']);


        if (!$ten_admin || !$matkhau_admin) {
            echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        
        // mã hóa pasword
        // $password = md5($password);
        $sql = "SELECT * FROM users WHERE user_name = 'administrator' and passwords='matkhau'";
        //Kiểm tra tên đăng nhập có tồn tại không
        $query = mysqli_query($mysqli,$sql);
        if (mysqli_num_rows($query) == 0) {
            echo "Tên đăng nhập không đúng! <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        
        //Lấy mật khẩu trong database ra
        $row = mysqli_fetch_array($query);
        
        //So sánh 2 mật khẩu có trùng khớp hay không
        if ($password == $row['passwords'] && $password=='matkhau') {
            echo "Mật khẩu không đúng.<a href='javascript: history.go(-1)'>Trở lại</a>".$password;
            exit;
        }
        
        //Lưu tên đăng nhập
        $_SESSION['username'] = $username;
        
         echo "<a href='displayProduct.php'>Đã truy cập vào trang admin</a>";
    }
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <br><br><br>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">ADMINISTRATOR</h3>
                </div>
                <div class="panel-body">
                 <form action="" method="POST" role="form">
                    <div class="form-group">
                        <label for="">User name:</label>
                        <input type="text" class="form-control" id="" name="admin" required="required">
                    </div>

                    <div class="form-group">
                        <label for="">Password:</label>
                        <input type="password" class="form-control" id="" name="passAdmin" required="required">
                    </div>

                    
                    <button type="submit" name="dangnhap" class="btn btn-primary">OK</button>
                    <button type="cancel" name="cancel"  class="btn btn-danger"><a href="index.php" style="color: white; text-decoration: none;"> Cancel</a></button>
                    
                    
                </form>
            </div>
        </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
  
</body>
</html>