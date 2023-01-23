<?php 

/**
 * Template Name: gallery
 */

?>


<?php get_header(); ?>

<section class="gallery py-[130px] lg:py-[90px]">
      <div class="container">
        <h2 class="text-center text-huge font-extralight mb-24">Gallery</h2>
        <div class="gallerPics border-b border-dark py-[50px]">
          <ul class="text-center lg:grid lg:grid-cols-3 lg:gap-5">

          <?php if( get_field('gallery_photo_album') ): ?>
            <?php while( the_repeater_field('gallery_photo_album') ): ?>


            <li class="overflow-hidden">
                <div class="imageContainer">
                    <?php 

                    $images = get_sub_field('photos');

                    if($images):
                    ?>


                    <?php foreach($images as $image):?>
                    <a data-lightbox="<?php echo the_sub_field('photo_album_name') ?>" href="<?php echo esc_url($image['sizes']['large']); ?>">
                    <img class="mx-auto w-[423px] h-[362px] object-cover" src="<?php echo esc_url($image['sizes']['large']); ?>"
                            alt="<?php echo the_sub_field('photo_album_name'); ?>-<?php echo $image['name'] ?>" 
                            
                        >
                    </a>
                    <?php endforeach; ?>          
                    <?php endif; ?>  

                    </div>

                    <div class="my-3">
                        <h3><?php echo the_sub_field('photo_album_name'); ?></h3>
                        <p><?php echo the_sub_field('album_desc')  ?></p>
                    </div>
            </li>
       
            <?php endwhile; ?>
         <?php endif; ?>

         </ul>

          <a
            href=""
            class="btn bg-accent text-white text-xl w-fit my-0 mx-auto hover:bg-accentYellow"
            >Load More</a
          >
        </div>

        <div class="galleryVids py-[50px]">
          <h2 class="text-huge font-semibold mb-20 lg:text-3xl">
            Videos & Events
          </h2>

          <ul class="text-center lg:grid lg:grid-cols-3 lg:gap-8">

            <?php if( get_field('video_gallery') ): ?>
                <?php while( the_repeater_field('video_gallery') ): ?>

                <li class="overflow-hidden">
                <a href="">
                    <iframe class="mx-auto" width="417" height="362" src="<?php the_sub_field('video_link') ?>" title="Marks story" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <h3 class="mt-5 text-2xl"><?php echo the_sub_field('video_title'); ?></h3>
                    <p><?php echo the_sub_field('video_description'); ?></p>
                </a>
                </li>

                <?php endwhile; ?>
            <?php endif; ?>

          </ul>
         
        </div>
      </div>
    </section>

<?php get_footer(); ?>