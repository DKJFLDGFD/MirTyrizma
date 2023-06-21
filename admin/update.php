<? include "../vendor/components/admin_header.php" ?>

<!-- update section starts  -->

<section class="form-container">

   <form action="" method="POST">
      <h3>Обновиление данных</h3>
      <input type="text" name="name" placeholder="<?= $fetch_profile['name']; ?>" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="old_pass" placeholder="Введите старый пароль" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="new_pass" placeholder="Введите новый пароль" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="c_pass" placeholder="Повторите новый пароль" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="Обновить данные" name="submit" class="btn">
   </form>

</section>


<? include "../vendor/components/admin_footer.php" ?>