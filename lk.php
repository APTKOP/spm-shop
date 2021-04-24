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
        <div class="p-3">
            <?php
            $nick = htmlspecialchars($_COOKIE["nick"]);
            $tovar = htmlentities($_GET['tovar']);
            require_once 'connection.php';
            $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link));
            $link->set_charset('utf8');
            
            if($nick != "") {
               
            } else {
                exit('
        <h1>Введите свой ник</h1>
        <p><a class="tooltip">Зачем?<span class="tooltiptext">Ник нужен дабы понять кто купил товар и кому его доставлять</span></a></p>
        <p><input id="nickname" placeholder="Ваш никнейм в игре"> <button onclick="document.cookie = \'nick=\' + nickname.value + \'; expires=Tue, 19 Jan 3000 03:14:07 GMT\'; location.reload()">Указать</button></p>');
            }
            ?>
        <a style="font-family: 'Roboto', sans-serif;">
            <img class="img" src="https://minotar.net/helm/<?=$nick?>/50" alt="" class="d-inline-block">
            <font size="6px"><?=$nick?></font>
            <a class="btn btn-secondary btn-sm" onclick='document.cookie = "nick=Amogus; expires=Thu, 01 Jan 1970 00:00:01 GMT"; location.reload();' role="button">Выйти</a>

        </a>
        </div>
        <div class="text-center p-3">
            <table class="table">
              <thead>
              </thead>
              <tbody>
                  <?php
                  echo "<h1>Ваши заказы:</h1>";
                    $sql = "SELECT num, tovar, name, cost, statuss FROM honey WHERE nick = '$nick' ORDER BY id DESC LIMIT 9999995";
                    $result = $link->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $name = $row["name"];
                    $num = $row["num"];
                    $tovar = $row["tovar"];
                    $status = $row["statuss"];
                    $cost = $row["cost"];
                    if($status == "") {
                        echo "<tr>
                        <th scope='row'>У вас нет заказов</th>
                        </tr>";
                    } else {
                    
                        if($status == 0) {
                        echo "<tr>
                        <th scope='row'><a onclick=\"location.href = '/view?num=$num'\">Заказ - $num | $name | <b style=\"color:red\">Обработка</b></a></th>
                        </tr>";
                        } else {
                        echo "<tr>
                        <th scope='row'><a onclick=\"location.href = '/view?num=$num'\">Заказ - $num | $name | <b style=\"color:green\">Доставлен</b></a></th>
                        </tr>";
                        }
                }
                
            }
            }
                  ?>

              </tbody>
            </table>
            <p>Нажмите на заказ для подробностей</p><br />
        </div>
        <h5>Для получения товара отправьте в банке сайта СПмини цену заказа АР указав в коментариях ID заказа с ника который был указан при заказе, на счёт APTKOP игрока APTKOP. После чего с вами на сайте свяжется APTKOP. Оплатить можно и налом, для этого на на сайте СПмини в сп чат напишите АРТКОР-у</h5>

    </div>
</div>

<?php include("includes/randbg.php"); ?>
<?php include("includes/footer.php"); ?>