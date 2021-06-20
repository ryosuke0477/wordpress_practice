<?php
/*
Template Name: お問い合わせ
*/
?>

<?php get_header(); ?>
<main class="main__blog">
    <section class="main__blog-top">
        <div class="main__blog-top-img">
            <img src="image/street-409993_1920.png" alt="">
        </div>
    </section>
    <section class="main__form">
        <h2>お問い合わせ</h2>
         <div class="main__form-contact">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div><?php the_content() ?></div>
            <?php endwhile; ?>
            <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>