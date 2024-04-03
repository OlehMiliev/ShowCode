<?php
/*
Template Name: Amatech
*/
?>
<?php
$hero_main_title = get_field('hero_main_title');
$hero_cont_text = get_field('hero_cont_text');


$services_title = get_field('services_title');
$about_us_title = get_field('about_us_title');

$about_us_sub_title = get_field('about_us_sub_title');
$about_us_text_inner = get_field('about_us_text_inner');
$about_us_text_inner2 = get_field('about_us_text_inner_2');

$working_principles_title = get_field('working_principles_title');
$experts_main_title = get_field('experts_main_title');
$team_title = get_field('team_title');
?>
<?php
get_header();
?>

<a href="#page" class="up_btn">
    <img src="http://www.amatech.com.ua/wp-content/uploads/2024/03/Up.svg" alt="">
</a>
<style>
    .up_btn{
        position: fixed;
        width: 80px;
        height: 80px;
        border-radius: 50%;


        align-items: center;
        justify-content: center;
        cursor: pointer;
        right: 2%;
        bottom: 5%;
        z-index: 1;
        display: none;
        transition: all 5s ease-out;
    }
    .up_btn:hover{
        box-shadow: 0px 4px 24px 0px #00000059;
    }
    .up_btn.show {
        display: flex;
    }

</style>


<section  id="hero" class="hero hero_top">
    <div class="nav_bar">
        <div class="logo">
            <img src="http://www.amatech.com.ua/wp-content/uploads/2024/03/logo_svg.svg" alt="Amatech">
        </div>
        <div class="menu_bar">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'menu_class' => 'nav_menu'
            ));
            ?>
        </div>
    </div>
    <div class="container hero_wrapper">
        <div class="hero_cont_wrapper">
            <h1 class="hero_main_title"><?= $hero_main_title ?></h1>
            <p class="hero_cont_text">
                <?= $hero_cont_text ?>
            </p>
            <div class="contact_popup">
                Free Consultation
            </div>
        </div>
    </div>
</section>
<section id="services" class="container">
    <div class="services_wrapper">
        <h2 class="services_title">
            <?= $services_title ?>
        </h2>
        <div class="services_cont_inner">

            <?php if (have_rows('services_list')): ?>
                <ul class="services_list">
                    <?php while (have_rows('services_list')): the_row(); ?>
                        <?php
                        $services_item_img_inner = get_sub_field('services_item_img_inner');
                        $services_item_title = get_sub_field('services_item_title');
                        $services_item_text = get_sub_field('services_item_text');
                        ?>
                        <li class="services_item">
                            <div class="services_item_img_inner">
                                <img src="<?= $services_item_img_inner ?>" alt="">
                            </div>
                            <?php if ($services_item_title): ?>
                                <h3 class="services_item_title"><?= $services_item_title ?></h3>
                            <?php endif; ?>
                            <?php if ($services_item_text): ?>
                                <div class="services_item_text">
                                    <p><?= $services_item_text ?></p>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>
<section id="about-us" class="about_us_slider">
    <div class="container">
        <div class="about_us_wrapper">
            <h2 class="about_us_title"><?= $about_us_title ?></h2>
            <div class="about_us_content_sub_wrapper">
                <div class="about_us_content_left">
                    <div class="about_us_text_content_inner">
                        <h3 class="about_us_sub_title">
                            <?= $about_us_sub_title ?>
                        </h3>
                        <div class="about_us_text_inner">
                            <p>
                                <?= $about_us_text_inner ?>
                            </p>
                            <p>
                                <?= $about_us_text_inner2 ?>
                            </p>
                        </div>
                        <div class="contact_popup contact_popup_bot">
                            Free Consultation
                        </div>
                    </div>
                </div>
                <div class="about_us_content_right slider_swiper swiper">
                    <?php if (have_rows('repiter_slider')) : ?>
                        <div class="swiper-wrapper">
                            <?php while (have_rows('repiter_slider')) : the_row(); ?>
                                <div class="slider_wrapper swiper-slide">
                                    <div class="slider_img_inner">
                                        <?php $slider_bg = get_sub_field('slider_bg'); ?>
                                        <?php $img_tech = get_sub_field('img_tech'); ?>
                                        <?php if ($img_tech) : ?>
                                            <img src="<?php echo $slider_bg ?>" alt="" class="slider_bg"
                                                 style="display: none;">
                                            <img src="<?php echo $img_tech; ?>" alt="">
                                        <?php endif; ?>
                                    </div>

                                    <div class="slider_text_inner">
                                        <p><?php the_sub_field('tech_descr'); ?></p>
                                        <p><?php the_sub_field('tech_descr_2'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="pag_inner">
                    <div class="slider_pagination swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="working-principles" class="working_principles">
    <div class="container">
        <div class="working_principles_wrapper">
            <h2 class="working_principles_title">
                <?= $working_principles_title ?>
            </h2>
            <div class="working_principles_content_inner">
                <?php if (have_rows('work_list')): ?>
                    <ul class="work_list">
                        <?php while (have_rows('work_list')): the_row(); ?>
                            <li class="work_item">
                                <div class="work_item_img_inner">
                                    <?php $work_item_img_inner = get_sub_field('work_item_img_inner'); ?>
                                    <?php if ($work_item_img_inner): ?>
                                        <img src="<?php echo $work_item_img_inner; ?>" alt="">
                                    <?php endif; ?>
                                </div>
                                <h3 class="work_item_title"><?php the_sub_field('work_item_title'); ?></h3>
                                <div class="work_item_text">
                                    <p><?php the_sub_field('work_item_text'); ?></p>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section id="experts" class="experts">
    <div class="container">
        <div class="experts_wrapper">
            <h2 class="experts_main_title">
                <?= $experts_main_title ?>
            </h2>
            <div class="experts_content_inner">
                <?php if (have_rows('experts_list')): ?>
                    <ul class="experts_list">
                        <?php while (have_rows('experts_list')): the_row(); ?>
                            <li class="experts_item">
                                <div class="experts_item_gradient">
                                    <div class="tech_icon_inner">
                                        <?php $tech_icon_inner = get_sub_field('tech_icon_inner'); ?>
                                        <?php if ($tech_icon_inner): ?>
                                            <img src="<?php echo $tech_icon_inner; ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="tech_name">
                                        <?php the_sub_field('tech_name'); ?>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<section id="team" class="team">
    <div class="container">
        <div class="team_wrapper">
            <h2 class="team_title">
                <?= $team_title ?>
            </h2>
            <div class="team_wrapper">
                <?php if (have_rows('our_team_list')): ?>
                    <ul class="our_team_list">
                        <?php while (have_rows('our_team_list')): the_row(); ?>
                            <li class="our_team_item">
                                <div class="our_team_border">
                                    <div class="our_team_img">
                                        <?php $our_team_img = get_sub_field('our_team_img'); ?>
                                        <?php if ($our_team_img): ?>
                                            <img src="<?php echo $our_team_img; ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="our_team_name"><?php the_sub_field('our_team_name'); ?></div>
                                <div class="our_team_tech"><?php the_sub_field('our_team_tech'); ?></div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<section id="contact" class="contact1">
    <div class="container">
        <div class="contact_logo">
            <div class="contact_logo_inner">
                <img src="http://www.amatech.com.ua/wp-content/uploads/2024/03/cont_logo_svg.svg" alt="">
            </div>
            <div class="contact_logo_slogan">
                Let’s make your business great
            </div>
        </div>
        <div class="contact_form_inner">
            <div class="contact_form_sub_title">
                How can we help you?
            </div>
            <div class="contact_form_form">
                <div class="contact_form_form_right">
                    <?php echo do_shortcode('[contact-form-7 id="d8e2c0f" title="Контактна форма 1 "]'); ?>
                </div>
            </div>
        </div>

        <div class="bot_form">
            <div class="popup_send_sub_wrapper">
                <div class="img_inner">
                    <img src="http://www.amatech.com.ua/wp-content/uploads/2024/03/popup_logo_svg.svg" alt="">
                </div>
                <div class="popup_send_text">
                    Message sent!
                </div>
                <div class="popup_send_close_btn popup_send_close_btn_bot">
                            <span>
                                Ok
                            </span>
                </div>
            </div>
        </div>
    </div>
    <?php
    get_footer();
    ?>
</section>
