<?php
/**
 * Template Name: Типовая страница услуги
 * Template Post Type: page
 */

if (!defined('ABSPATH')) {
    exit;
}

$service_eyebrow = get_post_meta(get_the_ID(), 'kubera_service_eyebrow', true) ?: 'Столярные изделия';
$service_title = get_post_meta(get_the_ID(), 'kubera_service_title', true) ?: get_the_title();
$service_form_title = get_post_meta(get_the_ID(), 'kubera_service_form_title', true) ?: 'Записаться на замер';
$service_name_placeholder = get_post_meta(get_the_ID(), 'kubera_service_name_placeholder', true) ?: 'Григорий';
$service_phone_placeholder = get_post_meta(get_the_ID(), 'kubera_service_phone_placeholder', true) ?: '+7 (981) 887-28-04';
$service_policy_url = get_privacy_policy_url() ?: '#';
$service_hero_image = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: kubera_asset('assets/hero-wood.png');
$service_title_parts = preg_split('/\s+/', trim($service_title), 2);
$service_included_items = [
    'Замер и согласование',
    'Производство',
    'Доставка',
    'Установка',
];
?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class('service-template-page'); ?>>
    <?php wp_body_open(); ?>
    <?php get_template_part('partials/header'); ?>

    <main class="service-template">
      <?php while (have_posts()) : the_post(); ?>
        <section class="service-hero" aria-labelledby="service-hero-title">
          <img class="service-hero__image" src="<?php echo esc_url($service_hero_image); ?>" alt="">
          <div class="service-hero__inner">
            <p class="service-hero__eyebrow"><?php echo esc_html($service_eyebrow); ?></p>
            <h1 id="service-hero-title">
              <?php if (!empty($service_title_parts[0])) : ?>
                <span><?php echo esc_html($service_title_parts[0]); ?></span><?php echo !empty($service_title_parts[1]) ? ' ' . esc_html($service_title_parts[1]) : ''; ?>
              <?php endif; ?>
            </h1>

            <form class="service-hero-form" action="#" method="post">
              <div class="service-hero-form__fields">
                <label>
                  <span>Имя</span>
                  <input type="text" name="name" placeholder="<?php echo esc_attr($service_name_placeholder); ?>">
                </label>
                <label>
                  <span>Телефон</span>
                  <input type="tel" name="phone" placeholder="<?php echo esc_attr($service_phone_placeholder); ?>">
                </label>
                <button class="button" type="submit"><?php echo esc_html($service_form_title); ?></button>
              </div>
              <p>
                Нажимая на кнопку, вы соглашаетесь с
                <a href="<?php echo esc_url($service_policy_url); ?>">политикой конфиденциальности</a>.
              </p>
            </form>
          </div>
        </section>

        <section class="service-included" aria-labelledby="service-included-title">
          <div class="service-included__inner">
            <h2 id="service-included-title">Что входит в услугу</h2>
            <div class="service-included__grid">
              <?php foreach ($service_included_items as $item) : ?>
                <article class="service-included-card">
                  <h3><?php echo esc_html($item); ?></h3>
                  <img src="<?php echo kubera_asset('assets/service-step.png'); ?>" alt="">
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <?php if (trim(get_the_content()) !== '') : ?>
          <section class="service-page-content section">
            <?php the_content(); ?>
          </section>
        <?php endif; ?>
      <?php endwhile; ?>
    </main>

    <?php wp_footer(); ?>
  </body>
</html>
