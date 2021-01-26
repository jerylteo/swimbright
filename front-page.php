<?php get_header(); ?>
<main id="content">
    <section id="home-banner" class="md:min-h-screen container mx-auto px-4 flex flex-wrap md:flex-nowrap justify-center md:justify-between items-center">
        <article id="home-text" class="text-center md:text-left mt-40 md:mt-0">
            <h1 class="text-4xl md:text-5xl lg:text-7xl font-semibold">Dive Into Discovery<br>Unlock Your Potential</h1>
            <p class="font-sub text-sm mt-6">Join us on an adventure. Swim Bright, Swim Right.</p>
            <p class="font-sub text-sm md:w-2/3">SwimBright builds strong fundamental and impart skills through easy-to-understand method comprising both theoretical and practical.</p>
            <div class="mt-8">
                <a class="btn px-8 py-3 rounded-md mt-8 text-white" href="<?php echo get_permalink(get_page_by_path( 'contact' )); ?>">ENQUIRE NOW</a>
            </div>
        </article>
        <article class="swiper-container swiper-container-home h-96 w-full md:h-500 md:w-96 mt-20 md:mt-0">
            <div class="swiper-wrapper h-full w-full">
            <?php 
                $args = [
                    'post_type' => 'homebannerspt',
                    'posts_per_page' => '5'
                ];

                $banners = new WP_Query($args);
                if ($banners->have_posts()): while($banners->have_posts()): $banners->the_post();
            ?>
                <div class="swiper-slide shadow-md rounded" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover; background-repeat: no-repeat;">
                
                </div>
            <?php endwhile; endif; wp_reset_postdata(  ); ?>
            </div>
            <div class="swiper-pagination swiper-pagination-home"></div>
        </article>
    </section>
    <section id="home-about" class='text-center container mx-auto px-4 mt-20 md:mt-0'>
        <h2 class="text-3xl font-semibold">Why Choose Us?</h2>
        <p class="mt-4 font-sub text-sm w-1/2 mx-auto">SwimBright builds strong fundamental and impart skills through easy-to-understand method comprising both theoretical and practical.</p>
        <article class="flex flex-wrap xl:flex-nowrap justify-around items-center mt-10">
            <?php
                $args = [
                    'post_type' => 'specialspt',
                    'posts_per_page' => '5',
                    'orderby'  => 'date',
                    'order' => 'asc'
                ];

                $specials = new WP_Query($args);
                if ($specials->have_posts()): while($specials->have_posts()): $specials->the_post();
            ?>
            <div class="text-center mt-10 xl:mt-0">
                <div class="h-40 w-40 md:h-56 md:w-56 shadow-md rounded-md flex justify-center items-center">
                    <img src="<?php echo get_the_post_thumbnail_url( ); ?>" alt="<?php the_title(); ?>" class="w-1/2 h-1/2 object-contain">
                </div>
                <p class="font-sub text-sm mt-4"><?php the_title(); ?></p>
            </div>
            <?php endwhile; endif; wp_reset_postdata(  ); ?>
        </article>
    </section>
    <section id="home-programmes" style="background-color: #F9F7F7" class="py-20 my-20">
        <section class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-semibold">Our Water Programmes</h2>
            <p class="font-sub mt-4 text-sm w-1/2 mx-auto">SwimBright builds strong fundamental and impart skills through easy-to-understand method comprising both theoretical and practical.</p>
        </section>
        <section class="container mx-auto px-4 mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                    $args = [
                        'post_type' => 'programmespt',
                        'posts_per_page' => '6',
                        'orderby' => 'date',
                        'order' => 'asc'
                    ];

                    $programmes = new WP_Query($args);
                    if ($programmes->have_posts()): while($programmes->have_posts()): $programmes->the_post();
                ?>
                    <a href="<?php the_permalink(); ?>" class="text-white flex items-end rounded-md shadow-md w-full h-80" style="background: linear-gradient(to right, rgba(0,0,0,0.5),rgba(0,0,0,0.1)), url(<?php echo get_the_post_thumbnail_url(); ?> ); background-size: cover; background-repeat: no-repeat">
                        <h5 class="font-medium text-2xl ml-10 mb-10"><?php the_title(); ?></h5>
                    </a>
                <?php endwhile; endif; wp_reset_postdata( ); ?>
        </section>
    </section>
    <section id="home-coaches" class="container mx-auto px-4 lg:grid grid-cols-5">
        <h2 class="text-3xl font-semibold lg:flex items-center text-center lg:text-left">Meet Our Coaches</h2>
        <section class="col-span-4 mt-10 lg:mt-0">
            <section class="swiper-container swiper-container-home-coaches h-96">
                <div class="swiper-wrapper h-full">
                    <?php
                        $args = [
                            'post_type' => 'coachespt',
                            'orderby' => 'date',
                            'order' => 'asc',
                        ];

                        $coaches = new WP_Query($args);
                        if ($coaches->have_posts()): while($coaches->have_posts()): $coaches->the_post();
                    ?>
                    <div class="swiper-slide rounded-md shadow-md p-12 grid grid-cols-2 h-full" style="background-color: #F9F7F7">
                        <div class="rounded-full mr-4 h-72 flex items-center">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="rounded-full w-full h-full object-cover">
                        </div>
                        <div class="flex items-center">
                            <div>
                                <h3 class="text-2xl font-medium"><?php the_title(); ?></h3>
                                <p class="font-sub text-sm my-4"><?php echo get_the_content(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="font-sub text-blue flex items-center">Learn More<span class="block ml-2 h-3 w-3"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve"> <path style="fill:#1E201D;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
                                                                                                                C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
                                                                                                                c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
                                                                                                            </svg></span></a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                </div>
                <div class="swiper-pagination swiper-pagination-home-coaches"></div>
                <div class="swiper-button-prev swiper-button-prev-home-coaches"></div>
                <div class="swiper-button-next swiper-button-next-home-coaches"></div>
            </section>
        </section>
    </section>
    <section id="home-testimonials" class="container mx-auto px-4 my-20">
        <h2 class="text-3xl font-semibold text-center">From Our Community</h2>
        <section class="swiper-container swiper-container-home-testimonials h-96 mt-10">
            <div class="swiper-wrapper h-full">
                <?php
                    $args = [
                        'post_type' => 'testimonialspt',
                        'orderby' => 'date',
                        'order' => 'asc'
                    ];

                    $testimonials = new WP_Query($args);
                    if ($testimonials->have_posts()): while($testimonials->have_posts()): $testimonials->the_post();
                ?>
                <div class="swiper-slide px-20 flex items-center" style="background-color: #F9F7F7">
                    <div class="py-20">
                        <h3 class="text-2xl font-medium text-center"><?php the_title(); ?></h3>
                        <p class="font-sub text-sm text-center mt-10"><?php echo get_the_content(); ?></p>
                        <p class="font-sub text-center mt-10">- <?php the_author_meta('user_nicename'); ?></p>
                    </div>
                </div>
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
            <div class="swiper-pagination swiper-pagination-home-testimonials"></div>
            <div class="swiper-button-prev swiper-button-prev-home-testimonials"></div>
            <div class="swiper-button-next swiper-button-next-home-testimonials"></div>
        </section>
    </section>
</main>
<?php get_footer(); ?>