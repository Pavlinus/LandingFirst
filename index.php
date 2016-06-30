<!DOCTYPE html>
<html lang="ru-ru" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<meta name="description" content="..." />
<meta name="keywords" content="..." />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<title>Landing One</title>
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script
  src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" defer>
</script>
<script src="scripts/effects.js" defer></script>
<script src="scripts/jquery-animate-css-rotate-scale.js" defer></script>
<script src="scripts/jquery-css-transform.js" defer></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js" defer></script>
</head>
<body id="page">
  <section id="header">
    <div class="layout">
      <img src="images/logo.png"/>
      <menu>
        <li><a href="#main">Главная</a></li>
        <li><a href="#services">Услуги</a></li>
        <li><a href="#about">Об авторе</a></li>
        <li><a href="#price_item">Цены</a></li>
        <li><a href="#work">Схема работы</a></li>
        <li class="menu_last"><a href="#clients">Отзывы</a></li>
        <li class="menu_last"><a href="#contacts">Контакты</a></li>
      </menu>
      <div class="clr"></div>
    </div>

    <div class="layout inner">
      <div class="headerMiddle">
        <h2 id="main">Получи больше от своего бизнеса</h2>
        <span class="headline">Повышение уровня дохода за несколько кадров</span>

        <div class="layout">
          <!-- Форма регистрации -->
          <div class="requestForm">
            <form>
              <div class="inputBox">
                <img src="images/name_icon.png"/>
                <input type="name" name="formName" placeholder="Ваше имя"/>
              </div>
              <div class="inputBox">
                <img src="images/email_icon.png"/>
                <input type="email" name="formEmail" placeholder="Email адрес"/>
              </div>
              <div class="inputBox last">
                <img src="images/phone_icon.png"/>
                <input type="phone" name="formPhone" placeholder="Номер телефона"/>
              </div>
              <input type="submit" value="Оставить заявку" class="button"/>
            </form>
            <div class="clr"></div>
          </div>
        </div>
      </div>

      <div id="slider">
        <iframe width="450" height="280"
          src="https://www.youtube.com/embed/EH-E86qLmnM" frameborder="0">
        </iframe>
        <img src="images/laptop.png"/>
        <!--a href="#" id="slide1"><img src="images/dot.png"/></a>
        <a href="#" id="slide2"><img src="images/dot.png"/></a>
        <a href="#" id="slide3"><img src="images/dot.png"/></a-->
      </div>
    </div>
  </section>

  <section id="services">
    <div class="layout">
      <h2>Услуги</h2>
      <span class="headline">Что может помочь именно Вам</span>

      <div class="box2 left">
        <img src="images/font_icons.png"/>
        <div>
          <h4>Экономим Ваше время</h4>
          <p>На создание уникального ролика затрачивается не более 24 часов</p>
        </div>
      </div>
      <div class="box2 right">
        <img src="images/responsive_design.png"/>
        <div>
          <h4>Техническая помощь</h4>
          <p>Помогаем разобраться с техническими сложностями в сфере
            видеомонтажа</p>
        </div>
      </div>

      <div class="box2 last_box2 left">
        <img src="images/working_form.png"/>
        <div>
          <h4>Экспресс курсы</h4>
          <p>Проводим удаленное обучение по популярным программам для
          работы с видео</p>
        </div>
      </div>
      <div class="box2 last_box2 right">
        <img src="images/retina.png"/>
        <div>
          <h4>Продвигаем Ваш бизнес</h4>
          <p>Самыми популярными средствами рекламы стали именно видео ролики.
          Мы готовы Вам в этом помочь.</p>
        </div>
      </div>
      <div id="tmp"></div>
    </div>
  </section>

  <section id="about">
    <div class="layout">
      <img src="images/about_us.jpg" id="about_img"/>
      <div>
        <h2>Об авторе</h2>
        <p>Откровенный рассказ о себе и своих навыках...</p>
        <a href="#" id="read">Читать</a>
    </div>
    </div>
  </section>

  <section id="price">
    <div class="layout">
      <h2 id="price_item">Цены</h2>
      <span class="headline">Оптимальные предложения</span>

      <div class="box3">
        <h2>Тех. помощь</h2>
        <span class="price_sign">&#36;</span>
        <span class="price_digit">22</span>
        <p class="price_details">За консультацию</p>
        <div class="plan_option">
          <p>Ответ в течение часа</p>
        </div>
        <div class="plan_option">
          <p>Скидка на услуги</p>
        </div>
        <div class="plan_option">
          <p>Бонусы</p>
        </div>
        <a href="#">Заказать</a>
      </div>

      <div class="box3 premium">
        <h2>Видео ролик</h2>
        <span class="price_sign">&#36;</span>
        <span class="price_digit">42</span>
        <p class="price_details">За ролик</p>
        <div class="plan_option">
          <p>Одно исправление</p>
        </div>
        <div class="plan_option">
          <p>Бесплатная консультация</p>
        </div>
        <div class="plan_option">
          <p>Платный диктор</p>
        </div>
        <a href="#">Заказать</a>
      </div>

      <div class="box3">
        <h2>Анимация</h2>
        <span class="price_sign">&#36;</span>
        <span class="price_digit">62</span>
        <p class="price_details">За ролик</p>
        <div class="plan_option">
          <p>Три исправления</p>
        </div>
        <div class="plan_option">
          <p>Сложные спец. эффекты</p>
        </div>
        <div class="plan_option">
          <p>Диктор</p>
        </div>
        <a href="#">Заказать</a>
      </div>
    </div>
  </section>

  <section id="work">
    <div class="layout">
      <h2>Схема работы</h2>
      <span class="headline">Алгоритм предоставления услуги</span>

      <div class="box2">
        <img src="images/double_arrow.png"/>
      </div>
      <div class="box2">
        <img src="images/double_arrow_g.png"/>
      </div>
      <div class="clr"></div>

      <div class="box4">
        <img src="images/step1.png"/>
      </div>
      <div class="box4">
        <img src="images/step2.png"/>
      </div>
      <div class="box4">
        <img src="images/step3.png"/>
      </div>
      <div class="box4">
        <img src="images/step4.png"/>
      </div>
      <div class="clr"></div>

      <div class="box">
        <img src="images/double_arrow_g_rotate.png"/>
      </div>

      <div class="box4 step">
        <h4 class="active">Шаг 1</h4>
        <p>Консультация</p>
      </div>
      <div class="box4 step">
        <h4 class="notActive">Шаг 2</h4>
        <p>Первичная версия проекта</p>
      </div>
      <div class="box4 step">
        <h4 class="notActive">Шаг 3</h4>
        <p>Доработка продукта</p>
      </div>
      <div class="box4 step">
        <h4 class="notActive">Шаг 4</h4>
        <p>Ваш видео ролик</p>
      </div>
      <div class="clr"></div>
      <a href="#">Начать работу</a>
    </div>
  </section>

  <section id="clients">
    <div class="layout">
      <h2>Наши клиенты</h2>
      <span class="headline">Кому мы смогли помочь</span>

        <div>
        <div class="box2">
          <img src="images/client1.jpg"/>
          <div>
            <p>Очень эмоциональный отзыв клиента, с метафорами и тщательным
            подбором слов.</p>
            <span class="response_quots">&#8222;</span>
            <div>
              <span class="client_name">Клиент,</span>
              <span class="client_rank">Должность</span>
            </div>
          </div>
        </div>
        <div class="box2">
          <img src="images/client2.jpg"/>
          <div>
            <p>Очень эмоциональный отзыв клиента, с метафорами и тщательным
            подбором слов.</p>
            <span class="response_quots">&#8222;</span>
            <div>
              <span class="client_name">Клиент,</span>
              <span class="client_rank">Должность</span>
            </div>
          </div>
        </div>
      </div>

      <div class="box2">
        <img src="images/client3.jpg"/>
        <div>
          <p>Очень эмоциональный отзыв клиента, с метафорами и тщательным
          подбором слов.</p>
          <span class="response_quots">&#8222;</span>
          <div>
            <span class="client_name">Клиент,</span>
            <span class="client_rank">Должность</span>
          </div>
        </div>
      </div>
      <div class="box2">
        <img src="images/client4.jpg"/>
        <div>
          <p>Очень эмоциональный отзыв клиента, с метафорами и тщательным
          подбором слов.</p>
          <span class="response_quots">&#8222;</span>
          <div>
            <span class="client_name">Клиент,</span>
            <span class="client_rank">Должность</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contacts">
    <div class="layout">
      <h2>Будь на связи</h2>
      <span class="headline">Подписан - молодец!</span>

      <!-- Форма подписки -->
      <div class="requestForm">
        <form>
          <div class="inputBox">
            <img src="images/name_icon.png"/>
            <input type="name" name="formName" placeholder="Ваше имя"/>
          </div>
          <div class="inputBox last">
            <img src="images/email_icon.png"/>
            <input type="email" name="formEmail" placeholder="Email адрес"/>
          </div>
          <input type="submit" value="Подписаться" class="button"/>
        </form>
      </div>
      <div class="clr"></div>

      <div class="contacts_map">
        <div class="contacts_circle">
          <h4>Адрес</h4>
          <p>Направо вниз,</p>
          <p>По коридору,</p>
          <p>Там по лестнице спустись</p>
          <p>На тазу по ней промчись</p>
          <span class="email_contact">info@busines.com</span>
        </div>
        <img src="images/logo.png"/>
      </div>
    </div>
  </section>

  <footer>
    <div class="layout">
      <menu>
        <li><a href="#main">Главная</a></li>
        <li><a href="#services">Услуги</a></li>
        <li><a href="#about">Об авторе</a></li>
        <li><a href="#price_item">Цены</a></li>
        <li><a href="#work">Схема работы</a></li>
        <li><a href="#clients">Отзывы</a></li>
        <li><a href="#contacts">Контакты</a></li>
      </menu>
      <div class="clr"></div>

      <div class="contact_number">
        <img src="images/footer_phone.png"/>
        <span class="number">+987&nbsp;9976&nbsp;999</span>
      </div>

      <div class="social">
        <a href="#" class="google"></a>
        <a href="#" class="in"></a>
        <a href="#" class="twitter"></a>
        <a href="#" class="facebook"></a>
      </div>
    </div>

    <div class="layout">
      <div class="copyright">
        <p>All contents &copy; 2014 Business Theme.
          All rights reserved Designed by : akhilwebfolio</p>
      </div>
    </div>
  </footer>
</body>
</html>
