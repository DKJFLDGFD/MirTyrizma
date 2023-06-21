<? include "vendor/components/header.php" ?>


<section class="form-container">
         <form action="vendor/action/users/signUp.php" method="POST">
         <h1>Регистрация</h1>
         <div>
               <span>Логин</span>
               <input name="login" type="text">
         </div>
         <div>
               <span>Email</span>
               <input name="email" type="email">
         </div>
         <div>
               <span>Пароль</span>
               <input name="password" type="password">
         </div>
         <div>
               <span>Повторите пароль</span>
               <input name="conf_password" type="password">
         </div>
         <?php
         if($_SESSION['error']){
               ?>
               <div>
                  <?php echo $_SESSION['error']['email']; ?>
                  <?php echo $_SESSION['error']['password']; ?>
               </div>
               <?php
               unset($_SESSION['error']);
               }
               ?>
               <input name="signUp" type="submit" value="Зарегистрироваться">
               <div>
               <a href="signin.php">Уже зарегестрированы?</a>
               </div>
         </form>
</section>
<? include "vendor/components/footer.php" ?>