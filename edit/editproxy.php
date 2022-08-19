<!DOCTYPE html>
<html lang="en">
<head>
  <title>File proxy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="style.css">ko có file thì thôi -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    $file = "../proxy.txt";
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
      <button><a href="index.php">Sửa file fbfbfb.txt</a></button>
      <button><a href="accountinfo.php">Sửa file accountinfo</a></button>
      <button><a href="changepass.php">Đổi mật khẩu</a></button>
    </form>
</div>
</body>
</html>