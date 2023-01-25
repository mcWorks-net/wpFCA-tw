<?php 

/**
 * Template Name: about
 */

?>


<?php get_header(); ?>


<section class="about py-[130px] lg:py-[90px]">
        <div class="container">
            <h2 class="text-center text-huge font-extralight mb-24">About Us</h2>
            <div class="aboutContent md:grid md:grid-cols-[_1fr,_3fr]">
                <ul class="contentMenu text-xl text-center mb-24 md:text-left">

                    <?php if( get_field('the_content') ): ?>
                        <?php while( the_repeater_field('the_content') ): ?>

                        <li id="menu-<?php the_sub_field('the_id'); ?>" class="cursor-pointer my-3 text-[#737373]"><?php the_sub_field('title'); ?></li>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>


                <?php if( get_field('the_content') ): ?>
                    <?php while( the_repeater_field('the_content')): ?>

                        <div id="menu-<?php the_sub_field('the_id'); ?>-content" class="theContent text-justify">
                    
                            <?php the_sub_field('content'); ?>

                            <div class="contentImg flex">

                                <?php 
                                    $images = get_sub_field('gallery_about');

                                    if($images):
                                ?>

                                <?php foreach($images as $image):?>
                                <a data-lightbox="<?php echo the_title() ?>" href="<?php echo esc_url($image['sizes']['large']); ?>">
                                    <img class="lg:w-[366px] lg:ml-2 bg-cover" src="<?php echo esc_url($image['sizes']['large']); ?>"
                                            alt ="<?php echo $image['alt'] ?>"
                                            height="<?php echo substr(esc_url($image['height']),7);?>px"
                                            width="<?php echo substr(esc_url($image['width']),7); ?>px"
                                        >
                                </a>
                                <?php endforeach; ?>          
                                <?php endif; ?>

                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            





            </div>
        </div>
    </section>



<?php get_footer(); ?>