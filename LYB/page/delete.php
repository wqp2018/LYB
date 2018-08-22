<?php
header("Content-type: text/html; charset=utf-8");
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/22
 * Time: 19:53
 */
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    <script src="jquery.js"></script>
<?php
if (isset($_GET['id'])){
    $conn = mysqli_connect('localhost','root','1234','lyb');

    $sql = "delete from discuss WHERE id = '".$_GET['id']."'";

    $result = $conn->query($sql);

    if ($result){
        ?>
        <script>alert("删除成功");
        location.href = "index.php";
        </script>
        <?php

    }else{
        echo "删除失败";
    }

}
?>
</head>
<body>

</body>
</html>