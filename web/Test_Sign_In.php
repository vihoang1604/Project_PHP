<script  type="text/javascript" charset="utf-8" async defer>
    alert("Đã gọi file thành công");
</script>
<?php
 include("Connect.php");
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['dangki'])){
        die('');
    }
       
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    $hoten   = addslashes($_POST['fullname']);
    $tendangnhap   = addslashes($_POST['username']);
    $email      = addslashes($_POST['email']);
    $matkhau   = md5($_POST['password']);
    $xacnhan   = md5($_POST['confirmPassword']);
    
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$hoten || !$tendangnhap || !$email || !$matkhau || !$xacnhan )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
          }
        // // Mã khóa mật khẩu
        // $password = md5($password);
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
 if (mysqli_num_rows(mysqli_query("SELECT user_name FROM users WHERE user_name='$tendangnhap'")) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Kiểm tra email có đúng định dạng hay không
  // if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
  //   {
  //       echo "Email này không hợp lệ. Vui lòng nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
  //       exit;
  //   }
          
    //Kiểm tra email đã có người dùng chưa
 if (mysqli_num_rows(mysqli_query("SELECT email FROM users WHERE email='$email'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    //Xác nhận pass
  if ($matkhau != $xacnhan)
    {
            echo " Vui lòng xác nhận mật khẩu của bạn. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }

      else{    
    //Lưu thông tin thành viên vào bảng
    $sql_Insert_User= " INSERT INTO users (fullname,user_name,email,passwords)
VALUES  (?,?,?,?) ";

if($stmt = $mysqli->prepare($sql_Insert_User)){
     // Bind variables to the prepared statement as parameters
    $stmt->bind_param("ssss", $hoten,$tendangnhap,$email,$matkhau);
    $stmt->execute();

    echo $sql_Insert_User." Inserted successfully.";
    } 
    else
    {
    echo "ERROR: Could not prepare query: $sql. " . $mysqli-> error;
    echo "<a href='Sign_In.php'>Try again</a>";
    }
}
   header("Location: index.php"); /* Redirect browser */
exit();     
?>