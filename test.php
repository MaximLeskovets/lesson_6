<?php
    require_once "function.php";
    require_once "list.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ответы на вопросы</title>
</head>
<body>
<?php
if(!empty($_GET)) {
    $id = $_GET['id'];
    getResult($id);
}else{
    echo "Введите id <br/>";

}?>
<form method="get" action="test.php">
    <label name="id">id:</label>
    <input type="text" name="id" placeholder="Введите id"><br/>
    <button>Проверить</button>
</form>
</body>
</html>