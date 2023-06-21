<? include "../vendor/components/admin_header.php" ?>


<section class="dashboard">

   <h1 class="heading">Мониторинг</h1>

   <div class="box-container">

   <div class="box">

      <h3>Привет!</h3>
      <p><?php echo $_SESSION['user']['login']?></p>
   </div>
   <div class="box">
      <?php
   $result = mysqli_query($link,"SELECT * FROM `messages`");
   $count = mysqli_num_rows($result); 
      ?>
      <h3><?=  $count; ?></h3>
      <p>Новые сообщение</p>
      <a href="messages.php" class="btn">Посмотреть</a>
   </div>

   </div>

</section>

<? include "../vendor/components/admin_footer.php" ?>




<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>


</body>
</html>