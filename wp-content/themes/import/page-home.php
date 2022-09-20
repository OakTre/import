<?php
/*
    Template Name: Главная
*/

get_header();

$page_id = get_the_ID();

$intro_img_id = carbon_get_post_meta($page_id, 'intro_img');
$intro_img_src = wp_get_attachment_image_url($intro_img_id, 'full');
?>

<section class="intro" style="background-image: url(<?php echo $intro_img_src; ?>)">
    <div class="site-container">
        <div class="intro__heading">
            <?php echo carbon_get_post_meta($page_id, 'intro_heading'); ?>
        </div>
        <a class="button intro__btn" href="#contactUs">Оставить заявку</a>
    </div>
</section>

<section class="delivery section" id="import">
    <div class="site-container js-anim-fade-out" data-intersection-ratio="-0.1">
        <h2 class="delivery__heading site-heading _dark site-line">Привезём вам</h2>
        <div class="delivery__container">
            <div class="nav-container delivery__nav-container">
                <button class="nav-btn delivery-nav-prev">
                    <svg class="icon icon-arrow-right" width="32" height="16">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#arrow-right"></use>
                    </svg>
                </button>
                <button class="nav-btn delivery-nav-next">
                    <svg class="icon icon-arrow-right" width="32" height="16">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#arrow-right"></use>
                    </svg>
                </button>
            </div>
            <div class="delivery__container-slider swiper js-delivery-slide">
                <div class="swiper-wrapper">

                    <?php
                    $delivery_list = carbon_get_post_meta($page_id, 'delivery_list');

                    foreach ($delivery_list as $item) :

                        $item_img = wp_get_attachment_image_url($item["img"], 'full');
                    ?>
                        <div class="delivery__item swiper-slide">
                            <div class="delivery__intro lazyload" data-bg="<?php echo $item_img; ?>">
                                <h3 class="delivery__legend"><?php echo $item["title"]; ?></h3>
                            </div>
                            <div class="delivery__info">
                                <?php echo $item["descr"]; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="companies mb">
    <div class="site-container">
        <div class="swiper companies__container js-companies-slider swiper-linear">
            <div class="swiper-wrapper">
                <?
                $gallery_imgs = carbon_get_post_meta($page_id, 'companies_gallery1');

                foreach ($gallery_imgs as $img_id) :
                    $gallery_img_src = wp_get_attachment_image_url($img_id, 'full');
                ?>
                    <div class="companies__item swiper-slide">
                        <img src="<?php echo $gallery_img_src; ?>" alt="">
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="companies section">
    <div class="site-container">
        <div class="swiper companies__container js-companies-slider2 swiper-linear" dir="rtl">
            <div class="swiper-wrapper">
                <?
                $gallery_imgs1 = carbon_get_post_meta($page_id, 'companies_gallery2');

                foreach ($gallery_imgs1 as $img_id) :
                    $gallery_img_src1 = wp_get_attachment_image_url($img_id, 'full');
                ?>
                    <div class="companies__item swiper-slide">
                        <img src="<?php echo $gallery_img_src1; ?>" alt="">
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="section geo">
    <div class="site-container js-anim-fade-out">
        <h2 class="geo__heading site-heading site-line _dark"><?php echo carbon_get_post_meta($page_id, 'geo_heading'); ?></h2>
        <div class="geo__container">
            <div class="_block">
                <img class="geo__slider-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/map.svg" alt="">
                <div class="geo__slider swiper js-geo-slider">
                    <div class="swiper-wrapper">
                        <?php
                        $geo_list = carbon_get_post_meta($page_id, 'geo_list');

                        foreach ($geo_list as $item) :

                            $item_img = wp_get_attachment_image_url($item["img"], 'full');
                        ?>
                            <div class="geo__slider-item swiper-slide">
                                <img class="geo__slider-img lazyload" data-src="<?php echo $item_img; ?>" src="#" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div><span class="geo__text"><?php echo carbon_get_post_meta($page_id, 'geo_num'); ?></span>
            </div>
            <div class="_block">
                <p class="geo__heading-legend"><?php echo carbon_get_post_meta($page_id, 'geo_text'); ?></p>
                <h3 class="geo__legend">Варианты логистики</h3>
                <ul class="geo__thumb-slider">
                    <span class="geo__thumb-flag"></span>
                    <?php
                    $geo_list = carbon_get_post_meta($page_id, 'geo_list');

                    foreach ($geo_list as $item) :

                        $item_img = wp_get_attachment_image_url($item["img"], 'full');
                    ?>
                        <li class="geo__thumb-item">
                            <button class="geo__thumb-btn"><?php echo $item["title"]; ?></button>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <p class="geo__text"><?php echo carbon_get_post_meta($page_id, 'geo_add'); ?></p>
            </div>
        </div>
    </div>
</section>

<?php
$about_img_id = carbon_get_post_meta($page_id, 'about_img');
$about_img_src = wp_get_attachment_image_url($about_img_id, 'full');
?>
<section class="about section" id="danit">
    <div class="about__container">
        <div class="about__container-block"></div>
        <div class="about__container-block lazyload" data-bg="<?php echo $about_img_src; ?>"></div>
    </div>
    <div class="site-container about__grid-content js-anim-fade-out">
        <div class="_block">
            <div class="about__heading _dark site-heading">
                <h2>О нас</h2>
            </div>
            <div class="about__text">
                <?php echo carbon_get_post_meta($page_id, 'about_text'); ?>
            </div>
            <a class="button about__btn" href="#contactUs">Связаться с нами</a>
        </div>
        <div class="_block"></div>
    </div>
</section>

<section class="we-take">
    <div class="site-container js-anim-fade-out">
        <h2 class="we-take__heading site-heading _dark site-line"><?php echo carbon_get_post_meta($page_id, 'we_take_heading'); ?></h2>
        <div class="we-take__nav-container">
            <button class="nav-btn we-take-nav-prev">
                <svg class="icon icon-arrow-right" width="32" height="16">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#arrow-right"></use>
                </svg>
            </button>
            <button class="nav-btn we-take-nav-next">
                <svg class="icon icon-arrow-right" width="32" height="16">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#arrow-right"></use>
                </svg>
            </button>
        </div>
        <div class="we-take__container swiper js-wetake-slider">
            <div class="swiper-wrapper">
                <?php
                $weTake_list = carbon_get_post_meta($page_id, 'we_take_list');

                foreach ($weTake_list as $item) :

                    $item_img = wp_get_attachment_image_url($item["img"], 'full');
                ?>
                    <div class="we-take__item swiper-slide">
                        <img class="lazyload" src="#" data-src="<?php echo $item_img; ?>" alt="">
                        <h3 class="we-take__legend"><?php echo $item["title"]; ?></h3>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php
$howitworks_img_id = carbon_get_post_meta($page_id, 'howitworks_img');
$howitworks_img_src = wp_get_attachment_image_url($howitworks_img_id, 'full');
?>
<section class="howitworks section">
    <div class="howitworks__container">
        <div class="howitworks__container-block"></div>
        <div class="howitworks__container-block lazyload" data-bg="<?php echo $howitworks_img_src; ?>"></div>
    </div>
    <div class="site-container howitworks__content js-anim-fade-out" data-intersection-ratio="0.1">
        <div class="howitworks__grid-content">
            <div class="_block">
                <div class="site-heading howitworks__heading _black site-line">
                    <h2>Схемы работы</h2>
                </div>
                <?php echo carbon_get_post_meta($page_id, 'howitworks_text'); ?>
                <a class="howitworks__btn button" href="#contactUs">Оформление заявки</a>
            </div>
            <div class="_block"></div>
        </div>
    </div>
</section>

<section class="contact-us" id="contactUs">
    <div class="site-container contact-us__container js-anim-fade-out" data-intersection-ratio="0">
        <div class="site-heading contact-us__heading _dark">
            <h2>Контакты</h2>
        </div>
        <div class="contact-us__grid-container">
            <div class="_block">
                <form class="contact-us__form form js-form" data-need-validation action="<?php echo get_template_directory_uri(); ?>/includes/send.php">
                    <div class="_success">
                        <h3 class="form__heading">Спасибо за заявку!</h3>
                        <p>
                            С Вами свяжутся в ближайшее время
                        </p>
                    </div>
                    <div class="_initial">
                        <h3 class="form__heading">Заявка</h3>
                        <div class="form__inpts-container">
                            <label class="form__inpt-container">
                                <input class="form__input" type="text" name="name" placeholder="ФИО:" data-parsley-required>
                            </label>
                            <label class="form__inpt-container">
                                <input class="form__input" type="text" name="company" placeholder="Компания:">
                            </label>
                            <label class="form__inpt-container">
                                <input class="form__input" type="number" name="phone" placeholder="Телефон:" data-parsley-required style="-moz-appearance: textfield">
                            </label>
                            <label class="form__inpt-container">
                                <input class="form__input" type="email" name="e-mail" placeholder="Эл. почта:" data-parsley-required>
                            </label>
                        </div>
                        <button class="button mod-white form__btn">Отправить</button>
                        <p class="form__argeement">* Нажимая на кнопку отправить запрос, вы соглашаетесь с нашими условиями <a href="<?php echo get_privacy_policy_url(); ?>">политики конфиденциальности</a>
                        </p>
                    </div>
                </form>
                <div class="contact-us__know-more-wrapper _mobile">
                    <a class="contact-us__know-more" href="<?php echo carbon_get_theme_option('export_link'); ?>"><span class="contact-us__know-more-text">Стать экспортером</span><span class="contact-us__know-more-icon"></span>
                    </a>
                    <a class="contact-us__know-more" href="<?php echo carbon_get_theme_option('it_agro'); ?>"><span class="contact-us__know-more-text">IT в сельском хозяйстве</span><span class="contact-us__know-more-icon"></span>
                    </a>
                </div>
            </div>
            <div class="_block">
                <div class="contact-us__item"><span class="contact-us__legend">Узнать больше о&nbsp;наших услугах</span>
                    <a class="contact-us__link" href="mailto:<?php echo carbon_get_theme_option('email'); ?>"><?php echo carbon_get_theme_option('email'); ?></a>
                </div>
                <div class="contact-us__item"><span class="contact-us__legend">Специалист Вэд</span>
                    <span class="contact-us__legend _green"><?php echo carbon_get_theme_option('name'); ?></span>
                    <a class="contact-us__link" href="tel:<?php echo carbon_get_theme_option('phone'); ?>">Тел.: <?php echo carbon_get_theme_option('phone'); ?> (UAE)</a>
                    <a class="contact-us__link" href="tel:<?php echo carbon_get_theme_option('phone2'); ?>">Тел.: <?php echo carbon_get_theme_option('phone2'); ?> (RUSSIA)</a>
                    <a class="contact-us__link" href="mailto:<?php echo carbon_get_theme_option('email2'); ?>">E-mail: <?php echo carbon_get_theme_option('email2'); ?></a>
                </div>
                <ul class="socials contact-us__socials">
                    <li class="socials__item">
                        <a class="socials__link" href="<?php echo carbon_get_theme_option('social_linked'); ?>">
                            <svg class="icon icon-in socials__link-icon" width="32" height="32">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#in"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="socials__item">
                        <a class="socials__link" href="<?php echo carbon_get_theme_option('social_wt'); ?>">
                            <svg class="icon icon-wa socials__link-icon" width="32" height="32">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#wa"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="contact-us__know-more-wrapper">
                    <a class="contact-us__know-more" href="<?php echo carbon_get_theme_option('export_link'); ?>"><span class="contact-us__know-more-text">Стать экспортером</span><span class="contact-us__know-more-icon"></span>
                    </a>
                    <a class="contact-us__know-more" href="<?php echo carbon_get_theme_option('it_agro'); ?>"><span class="contact-us__know-more-text">IT в сельском хозяйстве</span><span class="contact-us__know-more-icon"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>