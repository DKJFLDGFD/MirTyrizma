<? include "../vendor/components/admin_header.php" ?>
<!-- header section ends -->

<!-- register section starts  -->

<section class="form-container">

   <form action="" method="POST">
      <h3>Регистрация нового оператора</h3>
      <input type="text" name="name" placeholder="Введите логин" maxlength="20" class="box" required oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="pass" placeholder="Введите пароль" maxlength="20" class="box" required oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="c_pass" placeholder="Повторите пароль" maxlength="20" class="box" required oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="Зарегестрировать" name="submit" class="btn">
   </form>

</section>

<? include "../vendor/components/admin_footer.php" ?>