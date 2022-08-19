<?php
error_reporting(0);
include('../config.php');
include('acc_adm.php');
include('session.php'); 
  
        if ($_GET['password'] != $pass ) {
            header('location: login.php');
            die();
            
        } else {
           // session_start();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>EDIT file</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    $file = "../fbfbfbfbfbfbb.txt";
    if(isset($_POST['text']))
    {
        $updatefile = $_POST['text'];
        file_put_contents($file, $updatefile);
    }
?>
</form>
<div class="form-group">
    <form action="" method="post">
      <textarea class="form-control" rows="10" name="text" id="text">
          <?php
            $content = file_get_contents($file);
            echo htmlspecialchars($content);
        ?>
      </textarea>
      <br>
      <input type="submit" value="Cập nhật" />
      <button><a href="accountinfo.php">Sửa file accountinfo</a></button>
    
      <button><a href="editproxy.php">Thay proxy</a></button>
      <button><a href="changepass.php">Đổi mật khẩu</a></button>
      <button><a href="./logout.php">Đăng xuất</a></button>
      
    </form>
</div>
</body>
</html>