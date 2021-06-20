<?php get_header(); ?>
<main class="main__blog">
    <section class="main__blog-top">
        <div class="main__blog-top-img">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/image/street-409993_1920.png" alt="">
        </div>
    </section>
    <section class="main__blog-content">
        <h2>ブログ</h2>
        <div class="breadcrumb">
            <?php echo do_shortcode('[flexy_breadcrumb]'); ?>
        </div>
        <div class=" main__blog-inner">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="main__blog-inner-item">
                        <div class="main__blog-inner-item-text">
                            <p class="main__blog-inner-item-text-day"><?php echo get_the_date(); ?></p>
                            <a href="<?php the_permalink(); ?>">
                                <h3> <?php echo get_the_title(); ?></h3>
                            </a>
                            <p class="main__blog-inner-item-text-text"><?php the_excerpt(); ?></p>
                        </div>
                        <div class="main__blog-inner-item-img">
                            <p>
                                <?php $cat = get_the_category();
                                $cat = $cat[0]; {
                                    echo $cat->cat_name;
                                } ?>
                            </p>
                            <?php the_post_thumbnail(); ?>
                            <!-- <img src="image/blog1.png" alt="ブログ画像"> -->
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>投稿がありません。</p>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>