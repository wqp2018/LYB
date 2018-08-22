<?php
header("Content-type: text/html; charset=utf-8");
$conn = mysqli_connect('localhost','root','1234','lyb');

$id = "";

if (isset($_GET['id'])){
    $id = $_GET['id'];
}

$sql = "select * from discuss WHERE id = $id";

$result = $conn->query($sql);

$row = mysqli_fetch_array($result);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="updateDo.php" method="post">
    <input type="hidden" value="<?php echo $row['id']?>">
    <textarea style="height: 200px;width:500px;font-size: 20px;margin: 30px" name="comments">
        <?php print_r($row['comments'])?>
    </textarea>
    <input type="submit" id="subInput" value="留言" />
</form>
</body>
</html>
