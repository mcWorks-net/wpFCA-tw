<?php 

/**
 * Template Name: Home Page
 */

?>

<?php get_header(); ?>

    <section class="banner text-white relative h-[900px] md:h-auto pt-[94.3px] lg:pt-0">
        <div class="relative h-auto md:h-[744px]">

            <video class="h-[100%] brightness-50 md:block w-full md:h-[744px] absolute object-cover top-0" autoplay loop>
                <source src="<?php echo get_template_directory_uri() ?>./img/fcaBackGroundVideo.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
              Your browser does not support the video tag.
             </video>
           
            <div class="text-center relative py-28">
                <div class="container">
                    <h1 class="mx-auto font-serif mb-5 drop-shadow-2xl text-huge">
                         <?php echo get_field('banner_title'); ?>
                    </h1>
                    <p class="mb-20 lg:max-w-4xl mx-auto drop-shadow-2xl">
                         <?php echo get_field('banner_intro'); ?>
                    </p>
                    <a class="btn bg-accent hover:bg-accentYellow text-white w-[150px] mx-auto text-center" href="<?php echo site_url('contact') ?>">Inquire now!</a>
                </div>
                
            </div>
        </div>
        <div class="addMission block mt-10 md:absolute h-32 md:-bottom-[30px] mx-auto md:left-0 md:right-0 z-10">
            <div class="container">
                <div class="cards w-auto bg-transparent max-w-[1100px] lg:bg-white  rounded-2xl gap-2 lg:gap-0 lg:mx-auto grid grid-cols-2 text-center lg:grid-cols-4 lg:justify-center lg:items-center lg:shadow-2xl">

                    <?php 
                        $args = array(
                        'post_type' => 'admission',
                        'posts_per_page' => -1,
                        );
                        $newQuery = new WP_Query($args)
                    ?>

                    <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

                        <div class="bg-white rounded-2xl group lg:py-8 w-full lg:h-[206px] shadow-md lg:shadow-none hover:scale-110 hover:bg-accent ease-in hover:ease-in transition cursor-pointer">
                            <div class="border-r-none w-full lg:border-r-2  my-auto lg:px-12 h-[134px] group-hover:border-0">

                            <?php

                                $theTitle = get_field('id');

                                $site_Url = add_query_arg($theTitle,' ','admission');

                            ?>
                                <a href="<?php echo $site_Url ?>">

                                <i class="<?php echo get_field('icon_class')?> text-gray-500 text-4xl my-5 group-hover:text-white"></i>
                                <h3 class="text-primary text-2xl group-hover:text-white"><small><?php the_title() ?></small></h3>
                                <p class="text-gray-500 group-hover:text-white"><small><?php echo get_field('subtitle_description')?></small></p>
                                </a>
                            </div>
                        </div>
                        
                    <?php
                        endwhile;
                        else :
                            echo "no available content yet";
                        endif;
                        wp_reset_postdata();
                    ?>

                </div>
            </div>
        </div>
    </section>


    
    <section class="whyUs pt-64 lg:pt-52 lg:pb-24 text-center">
        <div class="container">
            <h2 class="text-3xl text-primary mb-10">Why Chooes Us?</h2>
            <div class="hidden lg:flex justify-center py-20">

            <?php if( get_field('why_choose_us') ): ?>
                <?php while( the_repeater_field('why_choose_us') ): ?>
                
                <div id="answer-<?php the_sub_field('id');?>" class="answer group relative text-center cursor-pointer  w-[250px]">
                    <h2 class="text-2xl text-primary"><?php the_sub_field('title');?></h2>
                    <p class="text-gray-500"><?php the_sub_field('subtitle');?></p>
                    <span class="circle h-[20px] w-[20px] block bg-gray-500 mx-auto rounded-xl border-2  shadow-2xl group-hover:bg-accentYellow"></span>
                </div>

                <?php endwhile; ?>
            <?php endif; ?>
                
            </div>

            <?php if( get_field('why_choose_us') ): ?>
                  <?php while( the_repeater_field('why_choose_us') ): ?>

                <div id="answer-<?php the_sub_field('id')?>-content" class="whyUsContent">
                    <div class="xl:grid xl:grid-cols-2 lg:grid-cols-1">
                        <iframe  class="mx-auto mb-10 lg:my-auto w-full lg:w-[560px]"  height="315" src="<?php the_sub_field('video')?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <div class="whyUsContentDesc text-justify xl:mr-20">
                            <?php the_sub_field('text_content')?>
                        </div>
                    </div>
                </div>

                <?php endwhile; ?>
            <?php endif; ?>
            

        </div>
    </section>

    <section class="testimonials py-24 bg-gray bg-[#f2f2f2] relative text-center">
        <div class="container">

            <div class="my-slider">

                <?php 
                    $args = array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => -1,
                    );
                    $newQuery = new WP_Query($args)
                ?>

                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
            
                    <div class="testimonialItem">
                        <div class="lg:grid lg:grid-cols-[_2fr,_1fr] items-center">
                            <div class="testimonialContent w-full relative mt-16">
                                <img src="<?php echo get_template_directory_uri() ?>./img/qoute.svg" class="absolute -top-16 left-0" alt="">
                                <p class="mb-10 lg:mr-20 text-justify">
                                    <?php the_content();?>                                
                                </p>
                                <ul class="flex items-center">
                                    <li>
                                        <figure class="w-[100px] h-[100px] mr-5 testimonialPhoto">
                                             <?php echo get_the_post_thumbnail()?>
                                        </figure>
                                    </li>
                                    <li>
                                        <div class="authorPhoto"></div>
                                        <div class="testimonialAuthor text-left">
                                            <p><b><?php the_title(); ?></b></p>
                                            <p>
                                                <?php echo get_field('occupation'); ?>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <img class="absolute bottom-0 right-0 lg:right-24" src="<?php echo get_template_directory_uri() ?>./img/qoute2.svg" alt="">
                            </div>
                            <div class="hidden lg:grid lg:grid-cols-2 [&>:nth-child(2)]:mt-32 [&>:nth-child(2)]:pr-2 [&>:last-child]:-mt-32 ">
                                <?php 
                                    $images = get_field('gallery');
                                    if($images):
                                ?>

                                <?php foreach($images as $image):?>
                                    <a class="mx-auto" data-lightbox="<?php echo the_title() ?>" href="<?php echo esc_url($image['sizes']['large']); ?>">
                                        <img class="w-[240px] h-[240px] object-cover m-1"
                                            src="<?php echo esc_url($image['sizes']['large']); ?>" 
                                            height="<?php echo substr(esc_url($image['height']),7);?>px"
                                            width="<?php echo substr(esc_url($image['width']),7); ?>px"
                                        alt="">
                                    </a>
                                    <?php endforeach; ?>          
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>

                <?php
                    endwhile;
                    else :
                        echo "no available content yet";
                    endif;
                    wp_reset_postdata();
                ?>


            </div>

        </div>
    </section>

    
    <?php the_content(); ?>

    <section style="background-image: url('<?php echo get_template_directory_uri()?>./img/scholarship.png')" class="scholarship bg-orange-900 py-40 bg-cover bg-center bg-fixed z-1">
        <div class="container">
            <h2 class="text-3xl text-primary my-8">Apply for Scholarship</h2>
            <p class="my-8 max-w-md">
                The scholarship program would provide funding for the schooling costs of qualified students
            </p>
            <a class="btn bg-accentYellow text-white w-[140px] text-center" href="scholarship.html">Apply Now</a>
        </div>
    </section>

    
    <section class="map">
        <iframe class="w-full h-[500px]" id="gmap_canvas" src="https://maps.google.com/maps?q=frontline%20christian%20academy&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </section>      
    
    <section class="partners py-20">
        <div class="container">
            <div class="md:flex items-center block">

                <?php 
                    $images = get_field('partners_gallery');
                    if($images):
                ?>

                <?php foreach($images as $image):?>
                    <a class="mx-auto" href="<?php echo esc_url($image['sizes']['large']); ?>">
                        <img class="w-[200px] object-cover m-1 mx-auto py-5"
                            src="<?php echo esc_url($image['sizes']['large']); ?>" 
                            height="<?php echo substr(esc_url($image['height']),7);?>px"
                            width="<?php echo substr(esc_url($image['width']),7); ?>px"
                        alt="">
                    </a>
                    <?php endforeach; ?>          
                <?php endif; ?>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>
    <script>
        lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true,
      'disableScrolling': true,
      'fitImagesInViewport': true,
      'positionFromTop': 100,
        })
    </script>

    <script>
        const whyChooseUsActive= document.querySelector('#answer-1');
        whyChooseUsActive.classList.add('active');

        const whyChooseUsActiveContent= document.querySelector('#answer-1-content');
        whyChooseUsActiveContent.classList.add('active');
    </script>

<?php get_footer(); ?>