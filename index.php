<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Производство эксклюзивных столярных изделий из массива: лестницы, наличники, порталы, арки, обсады, подоконники и декор.">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php get_template_part('partials/header'); ?>

    <main>
      <section class="hero section">
        <img class="hero-decoration" src="<?php echo kubera_asset('assets/hero-wood.png'); ?>" alt="">
        <div class="hero-content">
          <p class="eyebrow">Столярные изделия</p>
          <h1>Производство эксклюзивных <span>столярных изделий из массива</span></h1>
        </div>

        <div class="hero-features" aria-label="Преимущества">
          <article class="feature-card">
            <img src="<?php echo kubera_asset('assets/feature-icon.png'); ?>" alt="">
            <div>
              <h2>15 лет мастерства</h2>
              <p>Опытная команда столяров и монтажников</p>
            </div>
          </article>
          <article class="feature-card">
            <img src="<?php echo kubera_asset('assets/feature-icon.png'); ?>" alt="">
            <div>
              <h2>Индивидуальный подход</h2>
              <p>Изделия под размеры и стиль помещения</p>
            </div>
          </article>
          <article class="feature-card">
            <img src="<?php echo kubera_asset('assets/feature-icon.png'); ?>" alt="">
            <div>
              <h2>От дизайна до установки</h2>
              <p>Берем на себя проектирование, производство и монтаж</p>
            </div>
          </article>
        </div>
      </section>

      <section class="section services" id="services">
        <div class="section-head">
          <p class="eyebrow">Услуги</p>
          <h2>Изготавливаем сложные изделия из дерева</h2>
        </div>

        <div class="services-grid">
          <article class="service-card">
            <div class="service-copy">
              <h3>Наличники</h3>
              <p>Производим наличники под архитектуру дома, интерьер и выбранную породу дерева.</p>
              <a href="#">Подробнее</a>
            </div>
            <img src="<?php echo kubera_asset('assets/service-window.png'); ?>" alt="Деревянные наличники">
          </article>

          <article class="service-card">
            <div class="service-copy">
              <h3>Лестницы</h3>
              <p>Проектируем и изготавливаем лестницы для частных домов и коммерческих пространств.</p>
              <a href="#">Подробнее</a>
            </div>
            <img src="<?php echo kubera_asset('assets/service-stairs.png'); ?>" alt="Деревянная лестница">
          </article>

          <article class="service-card">
            <div class="service-copy">
              <h3>Порталы и арки</h3>
              <p>Делаем порталы, арки и декоративные элементы с точной подгонкой на объекте.</p>
              <a href="#">Подробнее</a>
            </div>
            <img src="<?php echo kubera_asset('assets/service-window.png'); ?>" alt="Деревянный портал">
          </article>

          <article class="service-card">
            <div class="service-copy">
              <h3>Обсады и подоконники</h3>
              <p>Изготавливаем обсады и подоконники из массива с учетом усадки и условий эксплуатации.</p>
              <a href="#">Подробнее</a>
            </div>
            <img src="<?php echo kubera_asset('assets/service-stairs.png'); ?>" alt="Изделия из массива">
          </article>

          <article class="service-card">
            <div class="service-copy">
              <h3>Декор</h3>
              <p>Создаем деревянный декор, который повторяет стиль интерьера и работает в деталях.</p>
              <a href="#">Подробнее</a>
            </div>
            <img src="<?php echo kubera_asset('assets/service-window.png'); ?>" alt="Декор из дерева">
          </article>

          <article class="service-card service-cta">
            <img src="<?php echo kubera_asset('assets/service-cta-bg.png'); ?>" alt="">
            <form class="service-cta-form" action="#" method="post">
              <h3>Представляем вам по-настоящему надежные, долговечные и невероятно красивые изделия из натуральных пород дерева</h3>
              <div class="service-cta-fields">
                <label>
                  <span>Имя</span>
                  <input type="text" name="name" placeholder="Григорий">
                </label>
                <label>
                  <span>Телефон</span>
                  <input type="tel" name="phone" placeholder="+7 (981) 887-28-04">
                </label>
                <button class="button" type="submit">Записаться на замер</button>
              </div>
              <p class="policy">Нажимая на кнопку, вы соглашаетесь с <a href="#">политикой конфиденциальности</a>.</p>
            </form>
          </article>
        </div>
      </section>

      <section class="section price-request">
        <div class="section-head inline">
          <div>
            <p class="eyebrow">Запрос цены</p>
            <h2>Запросите цену на любой объект</h2>
          </div>
          <a class="button button-small" href="#request">Оставить заявку</a>
        </div>

        <div class="object-grid">
          <article>
            <span>01</span>
            <h3>Сруб размером от 2 дней</h3>
          </article>
          <article>
            <span>02</span>
            <h3>Объектная комплектация</h3>
          </article>
          <article>
            <span>03</span>
            <h3>Гарантия 10 лет</h3>
          </article>
          <article>
            <span>04</span>
            <h3>Коммерческие задачи</h3>
          </article>
          <article>
            <span>05</span>
            <h3>Серийные изделия</h3>
          </article>
          <article>
            <span>06</span>
            <h3>Наличники и арки</h3>
          </article>
        </div>
      </section>

      <section class="section projects">
        <div class="section-head inline">
          <div>
            <p class="eyebrow">Портфолио</p>
            <h2>Уже реализованные проекты</h2>
          </div>
          <a class="button button-small" href="#">Все проекты</a>
        </div>

        <div class="project-list">
          <article class="project-row">
            <div>
              <h3>Наличники</h3>
              <p>Гатчина</p>
            </div>
            <img src="<?php echo kubera_asset('assets/project.png'); ?>" alt="Реализованный проект наличников">
          </article>
          <article class="project-row">
            <div>
              <h3>Наличники</h3>
              <p>Петергоф</p>
            </div>
            <img src="<?php echo kubera_asset('assets/project.png'); ?>" alt="Реализованный проект наличников">
          </article>
          <article class="project-row">
            <div>
              <h3>Наличники</h3>
              <p>Пушкин</p>
            </div>
            <img src="<?php echo kubera_asset('assets/project.png'); ?>" alt="Реализованный проект наличников">
          </article>
        </div>
      </section>

      <section class="section about" id="about">
        <div class="about-copy">
          <p class="eyebrow">О компании</p>
          <h2>Создаем красивые, стильные и долговечные изделия</h2>
          <p>На собственном производстве Кубэра делает столярные изделия под конкретный объект: от замера и подбора материала до изготовления, покраски и монтажа.</p>
          <ul>
            <li>Проектирование под размеры объекта</li>
            <li>Работа с массивом и сложными профилями</li>
            <li>Финишная обработка и монтаж</li>
            <li>Контроль качества на каждом этапе</li>
          </ul>
        </div>
        <img src="<?php echo kubera_asset('assets/workshop.png'); ?>" alt="Столярная мастерская Кубэра">
      </section>

      <section class="section reviews" id="reviews">
        <div class="section-head inline">
          <div>
            <p class="eyebrow">Отзывы</p>
            <h2>Мнение наших клиентов</h2>
          </div>
          <a class="button button-small" href="#request">Написать нам</a>
        </div>

        <div class="review-grid">
          <article>
            <p>Все сделали аккуратно, совпало с проектом и по цвету, и по геометрии.</p>
            <h3>Евгений</h3>
          </article>
          <article>
            <p>Понравилось, что на замере сразу подсказали несколько вариантов решения.</p>
            <h3>Анна</h3>
          </article>
          <article>
            <p>Сложный заказ по лестнице закрыли без лишних согласований и переделок.</p>
            <h3>Павел</h3>
          </article>
          <article>
            <p>Хорошая коммуникация, чистый монтаж, результат выглядит дороже ожиданий.</p>
            <h3>Мария</h3>
          </article>
        </div>
      </section>

      <section class="section work-features">
        <div class="section-head">
          <p class="eyebrow">Процесс</p>
          <h2>Особенности нашей работы</h2>
        </div>

        <div class="work-grid">
          <article>
            <h3>Детальное согласование</h3>
            <p>Перед запуском в производство фиксируем размеры, материалы, профиль и финиш.</p>
          </article>
          <article>
            <h3>Материалы под задачу</h3>
            <p>Подбираем древесину и покрытие с учетом интерьера и нагрузки.</p>
          </article>
          <article>
            <h3>Собственное производство</h3>
            <p>Не передаем ключевые этапы подрядчикам и контролируем качество внутри.</p>
          </article>
          <article>
            <h3>Монтаж на объекте</h3>
            <p>Привозим изделия, подгоняем детали и сдаем готовый результат.</p>
          </article>
        </div>
      </section>

      <section class="section faq">
        <div class="section-head">
          <p class="eyebrow">FAQ</p>
          <h2>Ответы на часто задаваемые вопросы</h2>
        </div>

        <div class="faq-list">
          <details open>
            <summary>Можно ли заказать изделие по фотографии?</summary>
            <p>Да, фотография подойдет для первичной оценки. Для производства понадобятся размеры, материал и технические детали.</p>
          </details>
          <details>
            <summary>Вы выезжаете на замер?</summary>
            <p>Да, после первичной консультации согласуем удобное время и приезжаем на объект.</p>
          </details>
          <details>
            <summary>Какие породы дерева доступны?</summary>
            <p>Подбираем материал под задачу: сосна, лиственница, дуб, ясень и другие варианты по проекту.</p>
          </details>
          <details>
            <summary>Можно ли заказать монтаж?</summary>
            <p>Да, монтаж можно включить в общий расчет вместе с изготовлением.</p>
          </details>
        </div>
      </section>

      <section class="section request" id="request">
        <div class="request-card">
          <div class="request-info">
            <h2>Остались вопросы?</h2>
            <p>Оставьте заявку или свяжитесь с нами удобным способом</p>
            <div class="manager">
              <img src="<?php echo kubera_asset('assets/manager.png'); ?>" alt="Силинский Максим">
              <div>
                <h3>Силинский Максим</h3>
                <p>Менеджер продаж</p>
              </div>
            </div>
            <div class="socials" aria-label="Социальные сети">
              <a href="#">VK</a>
              <a href="#">TG</a>
              <a href="#">WA</a>
              <a href="#">☎</a>
            </div>
          </div>

          <form class="lead-form" action="#" method="post">
            <label>
              <span>Имя</span>
              <input type="text" name="name" placeholder="Григорий">
            </label>
            <label>
              <span>Телефон</span>
              <input type="tel" name="phone" placeholder="+7 (981) 887-28-04">
            </label>
            <label>
              <span>Комментарий</span>
              <textarea name="message" rows="4" placeholder="Комментарий"></textarea>
            </label>
            <button class="button" type="submit">Записаться на замер</button>
            <p class="policy">Нажимая на кнопку, вы соглашаетесь с <a href="#">политикой конфиденциальности</a>.</p>
          </form>
        </div>
      </section>

      <section class="section location" id="contacts">
        <div class="location-head">
          <h2>Как к нам добраться?</h2>
          <div>
            <p>Ленинградская область, Всеволожский район, д. Порошкино, ул. Дорожников, 20А</p>
            <p>Пн-Пт 10:00-19:00</p>
            <a href="#">Построить маршрут</a>
          </div>
        </div>
        <img src="<?php echo kubera_asset('assets/map.png'); ?>" alt="Карта проезда до Кубэра">
      </section>
    </main>

    <footer class="site-footer">
      <div class="footer-grid">
        <div>
          <h2>Юридическая информация</h2>
          <p>Полное юридическое название,<br>ИНН,<br>ОГРН</p>
        </div>
        <div>
          <h2>Телефон</h2>
          <p><a href="tel:+79818872804">+7-981-887-28-04</a></p>
          <h2>Почта</h2>
          <p><a href="mailto:kubera.wood@yandex.ru">kubera.wood@yandex.ru</a></p>
        </div>
        <div>
          <h2>Услуги</h2>
          <a href="#">Наличники</a>
          <a href="#">Лестницы</a>
          <a href="#">Порталы и арки</a>
          <a href="#">Обсады и подоконники</a>
          <a href="#">Декор</a>
        </div>
        <div>
          <h2>Документы</h2>
          <a href="#">Согласие на обработку персональных данных</a>
          <a href="#">Согласие на использование Cookie</a>
          <a href="#">Публичная оферта</a>
          <a href="#">Пользовательское соглашение</a>
          <a href="#">Политика конфиденциальности</a>
        </div>
      </div>
      <div class="footer-bottom">
        <span>Все права зарегистрированы</span>
        <a href="#">Разработка сайта</a>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
