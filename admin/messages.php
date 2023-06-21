<? include "../vendor/components/admin_header.php" ?>

<section class="grid">

   <h1 class="heading">Заявки</h1>



   <div class="box-container">

   <?php

        $products = mysqli_query($link, "SELECT * FROM `messages`");
        while($product = mysqli_fetch_array($products)){
   ?>
   <div class="box">
      <p>Имя : <span><?php echo $product['name'] ?></span></p>
      <p>Почта : <span><?php echo $product['email'] ?></span></a></p>
      <p>Номер телефона : <span><?php echo $product['phone'] ?></span></a></p>
      <p>Адрес : <span><?php echo $product['address'] ?></span></a></p>
      <p>Место путевки : <span><?php echo $product['location'] ?></span></a></p>
      <p>количество людей : <span><?php echo $product['guests'] ?></span></a></p>
      <p>Прибытие : <span><?php echo $product['arrivals'] ?></span></a></p>
      <p>Отбытие : <span><?php echo $product['leaving'] ?></span></a></p>
      <form action="" method="POST">
         <input type="hidden" name="delete_id" value="<?= $id['id']; ?>">
         <input type="submit" value="Удалить" onclick="return confirm('Вы действительно желаете удалить сообщение? Убедитесь что оно обработано оператором');" name="delete" class="delete-btn">
      </form>
   </div>
   <?php
        }
   ?>

   </div>

</section>

<? include "../vendor/components/admin_footer.php" ?>