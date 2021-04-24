<?php include("includes/header.php"); ?>

<nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/" style="font-family: 'Roboto', sans-serif;">
      <img class="img" src="https://minotar.net/helm/<?=$nickname?>/55" alt="" class="d-inline-block">
      <?=$nickname?> Shop
    </a>
  </div>
</nav>

<div class="container mt-5">
    <div class="block1">
    	<div class="block1text text-center p-3">
<?php
$tovar = $_POST['tovar'];
$nick = htmlspecialchars($_COOKIE["nick"]);
$nicknamec = "$nick";
$tovar = htmlentities($_GET['tovar']);
require_once 'connection.php';
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
    $link->set_charset('utf8');

if($nick == "") {
    exit('<h2>Введи свой никнейм</h2><input id="nickname" type="text" size="30"></p><p><button onclick="document.cookie = \'nick=\' + nickname.value + \'; expires=Tue, 19 Jan 3000 03:14:07 GMT\'; location.reload()" class="btn btn-success" value="Отправить">Купить</button></p>');
} else {
        if($tovar != "") {      
            $sql = "SELECT num, name, cost FROM tovar WHERE num = $tovar";
            $result = $link->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $name = $row["name"];
                    $num = $row["num"];
                    $cost = $row["cost"];
            }
        }
        if($name != "") {
            $length = 6;
            $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
            $numChars = strlen($chars);
            $string = '';
            for ($i = 0; $i < $length; $i++) {
                $string .= substr($chars, rand(1, $numChars) - 1, 1);
            }
            $aaa = htmlspecialchars($_COOKIE["nick"]); 
            $sql = "INSERT INTO honey (num, nick, tovar, name, cost) VALUES ('$string', '$aaa', '$tovar', '$name', $cost)";
            if (mysqli_query($link, $sql)) {
                echo '<meta http-equiv="refresh" content="0; url=/lk" />';
            } else {
                echo "MySQL error";
            }
        } else {
            echo '<div align="center" class="main"><h1>Такой товар не существует или его нет в наличии</h1></div>';
        }
    } else {
    echo '<div align="center" class="main"><h1>Не указан айди товара</h1></div>';
    }
}
 
?>

    </div>
</div>

<?php include("includes/randbg.php"); ?>
<?php include("includes/footer.php"); ?>