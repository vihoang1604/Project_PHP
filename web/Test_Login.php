<?php
//Khai báo sử dụng session
session_start();

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    //Kết nối tới database
    include('Connect.php');

    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['tdn']);
    $password = md5($_POST['pass']);

    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='index.php'></a>";
        exit;
    }

    // mã hóa pasword
    // $password = md5($password);
    $sql = "SELECT * FROM users WHERE user_name = '$username'";
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($mysqli,$sql);

    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='index.php'>Trở lại</a>";
        exit;
    }

    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);

    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['passwords']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>".$password;
        exit;
    }

    //Lưu tên đăng nhập
    $_SESSION['username'] = $username;
   header("Location: index.php");
    die();
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
    <br><br><br>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">LOGIN</h3>
            </div>
            <div class="panel-body">
                <form action="" method="POST" role="form">
                    <div class="form-group">
                        <label for="">User name:</label>
                        <input type="text" class="form-control" id="" name="tdn">
                    </div>

                    <div class="form-group">
                        <label for="">Password:</label>
                        <input type="password" class="form-control" id="" name="pass">
                    </div>

                    <div class="form-group">
                        <a href="" "email me" > Forget password? </a>
                        <a href="Sign_In.php"  > Sign in </a>

                    </div>

                    <button type="submit" name="dangnhap" class="btn btn-primary">Login</button>
                    <button type="cancel" name="cancel"  class="btn btn-danger"><a href="index.php" style="color: white; text-decoration: none;"> Cancel</a></button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
</body>
</html>