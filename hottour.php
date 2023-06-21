<? include "vendor/components/header.php" ?>



<div class="heading" style="background:url(assets/images/header-bg-2.png) no-repeat">
   <h1>лучшие места для отдыха</h1>
</div>



<section class="packages">

   <h1 class="heading-title">ТОП ТУРОВ</h1>

   <div class="box-container">

   <?php
      $products = mysqli_query($link, "SELECT * FROM `hottour`");
      while($product = mysqli_fetch_array($products)){
      ?>
      <div class="box">
         <div class="image">
            <img src="../assets/images/<?php echo $product['hottour_image'] ?>" alt="">
         </div>
         <div class="content">
         <h3><?php echo $product['hottour_name'] ?></h3>
         <p><?php echo $product['hottour_description'] ?></p>
         <p>Кол-во людей: <?php echo $product['hottour_person'] ?></p>
         <p>Кол-во дней: <span><?php echo $product['hottour_day'] ?>
         <h3><span><?php echo $product['hottour_price'] ?></span>₽</h3>
         <form action="vendor\action\user\addCart.php" method="POST">
            <input name="id" type="hidden" value="<?php echo $product['products_id'] ?>">
            <input type="submit" value="Забронировать" name="addtocart" class="btn">
            
         </form>
         </div>
         </div>

<?php } ?>



</section>



















<? include "vendor/components/footer.php" ?>