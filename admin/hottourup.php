<? include "../vendor/components/admin_header.php" ?>
<section class="grid">
<div class="box-container">
<div class="box">
<form action="../vendor/action/admin/hottouradd.php" enctype="multipart/form-data" method="POST">
        <h1>Добавление горящего тура</h1>

        <div>
            <h3>Страна,город</h3>
            <input  name="name" type="text" class="box-up">
        </div>
        <div>
            <h3>Описание</h3>
            <input name="description" type="text" class="box-up">
        </div>
        <div>
            <h3>Кол-во дней</h3>
            <input name="day" type="text" class="box-up">
        </div>
        <div>
            <h3>Кол-во людей</h3>
            <input name="person" type="text" class="box-up">
        </div>
        <div>
            <h3>Цена</h3>
            <input name="price" type="number" class="box-up">
        </div>
        <div>
            <h3>Фото</h3>
            <input name="image" type="file" class="box-up">
        </div>
        <br>
        <input type="submit" name="addHot" value="Добавить" class="btn">
    </form>
    </div>
    </div>
    <section class="hottourup">
<div>
  <?php ?> 
      <div>
        <?php
      $products = mysqli_query($link, "SELECT * FROM `hottour`");
      while($product = mysqli_fetch_array($products)){
      ?>
      <div class="box">
         <img src="../assets/images/<?php echo $product['hottour_image'] ?>" alt="">
         <br>
         <div class="price"><span><?php echo $product['hottour_price'] ?></span>₽</div>
         <br>
         <div class="name"><?php echo $product['hottour_name'] ?></div>
         <p><?php echo $product['hottour_description'] ?></p>
         <div class="name">Кол-во людей: <?php echo $product['hottour_person'] ?></div>
         <div class="name">Кол-во дней: <span><?php echo $product['hottour_day'] ?></div>
         <form action="..\vendor\action\admin\hottourDel.php" method="POST">
            <input name="id" type="hidden" value="<?php echo $product['hottour_id'] ?>">
            <input type="submit" value="Удалить товар" name="hottourDel" class="delete-btn">
         </form>
         </div>
   <?php } ?>
   </div>

</section>