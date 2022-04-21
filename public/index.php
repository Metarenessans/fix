<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#fff">

  <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="pragma" content="no-cache" />
  <meta http-equiv="expires" content="0" />

  <title>Ремонт стиральных машин в Набережных Челнах</title>
  <link rel="stylesheet" href="css/style.css?v=<?= time(); ?>">
</head>
<body>
  <main>
    <section id="section1" class="section1">
      <div class="container">
        <h1 class="section1__title">
          Ремонтируем стиральные машины<br>
          в Набережных Челнах на дому<br>
          с гарантией до 1 года
        </h1>
        <div class="section1__buttons">
          <button class="btn btn--active js-modal">Вызвать мастера</button>
          <a class="btn btn--price" href="#section2">Узнать цены</a>
        </div>
      </div>
    </section>
    
    <section id="section2" class="section section2">
      <div class="container">
        <h2 class="section__title section2__title">
          Распространённые неисправности<br> 
          и стоимость их устранения
        </h2>
  
        <div class="table">
          <div class="row">
            <div>
              <p>Описание неисправности</p>
            </div>
            <div>
              <p>Цена</p>
            </div>
            <div>
              <p>Гарантия</p>
            </div>
          </div>
  
          <div class="row">
            <div>
              <p>Не крутится барабан</p>
            </div>
            <div>
              <p>от 350 руб.</p>
            </div>
            <div>
              <p>до 12 мес.</p>
            </div>
          </div>
  
          <div class="row">
            <div>
              <p>Не работает отжим</p>
            </div>
            <div>
              <p>от 450 руб.</p>
            </div>
            <div>
              <p>до 6 мес.</p>
            </div>
          </div>
          
          <div class="row">
            <div>
              <p>Не работает слив</p>
            </div>
            <div>
              <p>от 450 руб.</p>
            </div>
            <div>
              <p>до 12 мес.</p>
            </div>
          </div>
          
          <div class="row">
            <div>
              <p>Течёт вода под стиральной машиной</p>
            </div>
            <div>
              <p>от 400 руб.</p>
            </div>
            <div>
              <p>до 12 мес.</p>
            </div>
          </div>
          
          <div class="row">
            <div>
              <p>Не включается стиральная машина</p>
            </div>
            <div>
              <p>от 350 руб.</p>
            </div>
            <div>
              <p>до 12 мес.</p>
            </div>
          </div>
  
        </div>

        <div class="section2__buttons">
          <button class="btn btn--reversed js-modal">Вызвать мастера</button>
        </div>
      </div>
    </section>

    <section id="section3" class="section section3">
      <div class="container">
        <h2 class="section__title section3__title">Как мы работаем?</h2>
        <div class="about-us">
          <div class="about-us__item">
            <h3>Оставляете заявку.</h3>
            <p> 
              В течении 10 минут<br>
              мастер позвонит вам<br>
              и ответит на все вопросы.
            </p>
          </div>
          <div class="about-us__item">
            <h3>Цена известна заранее.</h3>
            <p>
              Она фиксирована.<br>
              Мы озвучиваем цену ремонта<br>
              во время диагностики.
            </p>
          </div>
          <div class="about-us__item">
            <h3>Гарантия на ремонт</h3>
            <p>
              Даем официальную гарантию<br>
              до 1 года.
            </p>
          </div>
          <div class="about-us__item">
            <h3>Оплата за результат</h3>
            <p>
              Оплата происходит<br>
              после окончания всех работ<br>
              и Вашей проверки.
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <div id="modal" class="modal">
    <form class="form" action="google-sheets.php" method="get">
      <h2 class="form__title">Вызов мастера</h2>
      <div class="form__inputs">
        <input type="text" name="name" placeholder="Имя">
        <input type="tel"  name="tel"  placeholder="Телефон">
      </div>
  
      <button class="btn btn--active form__btn" type="submit">Отправить</button>
  
      <small class="form__agreement">
        Нажимая на кнопку «Отправить», вы даете согласие<br>
        на обработку своих персональных данных.
      </small>
    </form>
  </div>
  
  <script src="js/index.js?v=<?= time(); ?>"></script>
</body>
</html>