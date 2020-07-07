<?php get_header(); ?>

<?php wp_reset_query()?>

<?php if( have_posts() ) : ?>
    <div class="container">             
        <div class="post_wrapper">
            <?php while ( have_posts() ) : the_post();?>    
                <div class="post_img"><?php the_post_thumbnail( 'full' ); ?></div>
                <!-- <div class="post_date"><?php the_time( 'j.m.Y' ); ?></div> -->
                <!-- <div class="block_carousel_item_title block_carousel_item_title_news"><?php the_title(); ?></div> -->
                <div class="block_carousel_item_descr block_carousel_item_descr_news"><?php the_content(); ?></div>
                <?php the_meta(); ?>
            <?php endwhile; ?>
        </div>
    </div>
<?php else: ?>
<?php endif; ?>
<?php wp_reset_query()?>

<section class="promo">
    <div class="container">
        <div class="promo_wrapper">

            <div class="promo_item">
                <div class="promo_img"><img src="<?php bloginfo('template_url')?>/img/patient.jpg" alt="patient"></div>
                <div class="promo_title">От собаки до хомячка</div>
                <div class="promo_descr">Мы принимаем любых пациентов, даже самых экзотических</div>
                <button class="promo_btn"><a href="<?php the_permalink(); ?>/patients/">Пациенты</a></button>
            </div>

            <div class="promo_item">
                <div class="promo_img"><img src="<?php bloginfo('template_url')?>/img/pharmacy.jpg" alt="pharmacy"></div>
                <div class="promo_title">Работает ветаптека</div>
                <div class="promo_descr">Купить назначенные ветеринаром лекарства можно сразу же у нас</div>
                <button class="promo_btn"><a href="<?php the_permalink(); ?>/pharmacies/">Адреса</a></button>
            </div>

            <div class="promo_item">
                <div class="promo_img"><img src="<?php bloginfo('template_url')?>/img/equipment.jpg" alt="equipment"></div>
                <div class="promo_title">Современное оборудование</div>
                <div class="promo_descr">Наша ветклиника оснащена новым и современным оборудованием</div>
                <button class="promo_btn"><a href="<?php the_permalink(); ?>/about/">О нас</a></button>
            </div>

            <div class="promo_item">
                <div class="promo_img"><img src="<?php bloginfo('template_url')?>/img/certificate.jpg" alt="certificate"></div>
                <div class="promo_title">Квалифицированные врачи</div>
                <div class="promo_descr">Все ветеринарные врачи в нашей клинике имеют высокую квалификацию</div>
                <button class="promo_btn"><a href="<?php the_permalink(); ?>/specialists/">Специалисты</a></button>
            </div>

    </div>
</section>

<section class="registration">
    <div class="container">
        <form class="form">
            <div class="form_reg">
                <div class="form_title">Запись на прием</div>
                <label for="name">Имя*</label>
                <input id="name" type="text">
                <label for="tel">Телефон*</label>
                <input id="tel" type="tel">
                <label for="mail">E-mail*</label>
                <input id="mail" type="email">
                <div type="submit" id="subm">Записаться</div>
            </div>
            <div class="form_message">
                <div class="form_message_wrapper">
                    <label for="mess">Сообщение</label>
                    <textarea id="mess"></textarea>
                </div>
            </div>
        </form>
    </div>
</section>


<?php get_footer();?>