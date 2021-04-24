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
    		<h2><?=$nickname?> Shop - Интернет магазин товаров на сервере #SPm</h2>
    	</div>
    	
            <?php
            $nick = htmlspecialchars($_COOKIE["nick"]);
            if($nick != "") {
             echo "
    	<div class=\"block1text text-center p-3\">
            <a class=\"btn btn-secondary btn-sm\" href=\"/lk\" role=\"button\">Личный кабинет</a>
    	</div>";  
            }
            ?>
    	<div class="block1text p-3">
    	  <div class="accordion accordion-flush" id="accordionFlushExample">
      		<div class="accordion-item">
       		 <h2 class="accordion-header" id="flush-headingOne">
        		  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
         		   Куда мы доставляем?
         		 </button>
        		</h2>
       		 <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
       		   <div class="accordion-body">
       		   	Нашь магазин доставит товар туда куда вам удобно и когда вам удобно! 
       		   </div>
       		 </div>
     		 </div>
      		<div class="accordion-item">
      		  <h2 class="accordion-header" id="flush-headingTwo">
       		   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
          		  Как купить товар?
          		</button>
        		</h2>
       		 <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
       		   <div class="accordion-body">
       		   	1.Нажми на иконку товара <br>2.Введи свой никнейм <br>3.Скопируй id заказа и переведи нужную сумму ар через сайт сервера указав в коментариях id заказа
       		   	<br>4. Жди пока тебе напишут!<br><br>Если наличкой:<br>1.Нажми на иконку товара <br>2.Введи свой никнейм <br>3.Напиши на сайте <?=$nickname?>-у
       		   	указав в переписке id заказа.<br>4. В сообщение напиши координаты сундука, куда надо доставить. (В сундуке должны лежать АРы).
       		   </div>
       		 </div>
      		</div>
      		<div class="accordion-item">
      		  <h2 class="accordion-header" id="flush-headingThree">
       		   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
          		  Остались еще вопросы?
         		 </button>
       		 </h2>
       		 <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
        		  <div class="accordion-body">
        		  	Если остались еще вопросы то задай их в канале <code>#вопросы</code> нашего дискорда! 
        		  	<a class="btn btn-primary btn-sm" href="<?=$discord?>" role="button">Discord</a>
        		  </div>
        		</div>
      		</div>
    	  </div>
    	</div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="block1">
    	<div class="p-3">
    	    <!-- 
    	    
    	    
    	    
    	    Как заполнять товары?
    	    
    	    1. Элемент cards-list может повторяться сколько угодно раз, но содержать внутри себя он может только четыре элемента card1
    	    <div class="card1 1" onclick="location.href='purchase.php?tovar=id';">
     		    <div class="card_image"> 
     		    	<img src="/images/картинка.png" /> </div>
      		    <div class="card_title title-dark">
      		       <div class="badge bg-warning text-dark text-wrap" style="width: 6rem;">Название товара</div>
     		        <div class="badge bg-warning text-dark text-wrap" style="width: 6rem;">Кол-во шт</div><br>
     		        <div class="badge bg-success text-light text-wrap" style="width: 6rem;">Цена Ар</div>
      		    </div>
    		</div>
    		
    		В onclick где ?tovar=id, замените id на id товара указанный в дб.
    		Как создать дб и добавить дб я указал в туториале.
    		
    		В <img> замените ссылку в src на путь к картинке.
    		
    		
    		
    	    -->
    		<div class="cards-list">

    		<div class="card1 1" onclick="location.href='purchase.php?tovar=id';">
     		    <div class="card_image"> 
     		    	<img src="/images/картинка.png" /> </div>
      		    <div class="card_title title-dark">
      		       <div class="badge bg-warning text-dark text-wrap" style="width: 6rem;">Название товара</div>
     		        <div class="badge bg-warning text-dark text-wrap" style="width: 6rem;">Кол-во шт</div><br>
     		        <div class="badge bg-success text-light text-wrap" style="width: 6rem;">Цена Ар</div>
      		    </div>
    		</div>

    		<div class="card1 2" onclick="location.href='purchase.php?tovar=id';">
     		    <div class="card_image"> 
     		    	<img src="/images/картинка.png" /> </div>
      		    <div class="card_title title-dark">
      		       <div class="badge bg-warning text-dark text-wrap" style="width: 6rem;">Название товара</div>
     		        <div class="badge bg-warning text-dark text-wrap" style="width: 6rem;">Кол-во шт</div><br>
     		        <div class="badge bg-success text-light text-wrap" style="width: 6rem;">Цена Ар</div>
      		    </div>
    		</div>

    		<div class="card1 3" onclick="location.href='purchase.php?tovar=id';">
     		    <div class="card_image"> 
     		    	<img src="/images/картинка.png" /> </div>
      		    <div class="card_title title-dark">
      		       <div class="badge bg-warning text-dark text-wrap" style="width: 6rem;">Название товара</div>
     		        <div class="badge bg-warning text-dark text-wrap" style="width: 6rem;">Кол-во шт</div><br>
     		        <div class="badge bg-success text-light text-wrap" style="width: 6rem;">Цена Ар</div>
      		    </div>
    		</div>

    		<div class="card1 4" onclick="location.href='purchase.php?tovar=id';">
     		    <div class="card_image"> 
     		    	<img src="/images/картинка.png" /> </div>
      		    <div class="card_title title-dark">
      		       <div class="badge bg-warning text-dark text-wrap" style="width: 6rem;">Название товара</div>
     		        <div class="badge bg-warning text-dark text-wrap" style="width: 6rem;">Кол-во шт</div><br>
     		        <div class="badge bg-success text-light text-wrap" style="width: 6rem;">Цена Ар</div>
      		    </div>
    		</div>
    	</div>
    </div>
</div>
<?php include("includes/randbg.php"); ?>
<?php include("includes/footer.php"); ?>
