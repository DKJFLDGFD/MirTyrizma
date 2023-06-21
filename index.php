<? include "vendor/components/header.php" ?>



<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(assets/images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>Исследовать, Открывать, Путешествовать</span>
               <h3>Путешествуй по всему миру</h3>
               <a href="hottour.php" class="btn">узнать больше</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(assets/images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>Исследовать, Открывать, Путешествовать</span>
               <h3>открыть для себя новые места</h3>
               <a href="hottour.php" class="btn">узнать больше</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(assets/images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>Исследовать, Открывать, Путешествовать</span>
               <h3>сделать ваш тур стоящим</h3>
               <a href="hottour.php" class="btn">узнать больше</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>



<section class="services">

   <h1 class="heading-title"> Мы предоставляем </h1>

   <div class="box-container">

      <div class="box">
         <img src="assets/images/icon-1.png" alt="">
         <h3>приключения</h3>
      </div>

      <div class="box">
         <img src="assets/images/icon-2.png" alt="">
         <h3>тур гид</h3>
      </div>

      <div class="box">
         <img src="assets/images/icon-3.png" alt="">
         <h3>треккинг</h3>
      </div>

      <div class="box">
         <img src="assets/images/icon-4.png" alt="">
         <h3>питание</h3>
      </div>

      <div class="box">
         <img src="assets/images/icon-6.png" alt="">
         <h3>жилье</h3>
      </div>

   </div>

</section>

<section class="booking">

   <h1 class="heading-title">Забронируйте поездку!</h1>

   <form action="vendor/action/messages_form.php" method="POST" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Ваше имя :</span>
            <input type="text" placeholder="введите ваше имя" name="name">
         </div>
         <div class="inputBox">
            <span>Почта :</span>
            <input type="email" placeholder="введите вашу почту" name="email">
         </div>
         <div class="inputBox">
            <span>Номер телефона :</span>
            <input type="number" placeholder="введите номер телефона" name="phone">
         </div>
         <div class="inputBox">
            <span>Ваш адрес :</span>
            <input type="text" placeholder="введите ваш адрес" name="address">
         </div>
         <div class="inputBox">
            <span>Куда желаете полететь? :</span>
            <input type="text" placeholder="введите место вашего визита" name="location">
         </div>
         <div class="inputBox">
            <span>Сколько людей :</span>
            <input type="number" placeholder="введите количество людей" name="guests">
         </div>
         <div class="inputBox">
            <span>Прибытие :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>Отбытие :</span>
            <input type="date" name="leaving">
         </div>
      </div>
    </div>
  </div>

      <input type="submit" value="Отправить заявку" class="btn" name="send">

   </form>

</section>

<section class="home-about">

   <div class="image">
      <img src="assets/images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>Почему именно мы?</h3>
      <p>Не делаем надбавку за раздутый штат сотрудников
         <br>
         Информацию обрабатывает система — наша личная выгода исключена
         <br>
         Все процессы прозрачны: вы не встретите скрытых комиссий
         <br>
         Вы сами следите за предложениями на сайте и выбираете лучшее
         <br>
         Возможность забронировать тур по минимальной предоплате
         <br>
         За покупку тура вы получаете кешбэк и баллы, которые помогают сэкономить при покупке следующего тура
      </p>
      <a href="about.php" class="btn">Читать далее</a>
   </div>

</section>



<? include "vendor/components/footer.php" ?>