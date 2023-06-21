<? include "vendor/components/header.php" ?>


<section class="form-container">
    <form action="vendor\action\users\signIn.php" method="POST">
        <h1>Авторизация</h1>
        <div>
        <label for="">Логин</label>
        <input type="login" name="login">
        </div>
        <div>
        <label for="">Пароль</label>
        <input type="password" name="password">
        </div>
        <?php
         if($_SESSION['error']){
               ?>
               <div>
                  <?php echo $_SESSION['error']['login']; ?>
               </div>
               <?php
               unset($_SESSION['error']);
               }
        ?>
        <input name="signIn" type="submit" value="Авторизироваться">
        <div>
        <a href="signup.php">Ещё не зарегестрированы?</a>
        </div>

    </form>
</section>
<? include "vendor/components/footer.php" ?>