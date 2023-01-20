<?php 

/**
 * Template Name: admission
 */

?>
<?php get_header(); ?>


<?php 
      
    $siteUrl = parse_url(add_query_arg());
    $admissionID = $siteUrl['query'];

    if ($admissionID==null){
        $admissionID = 0;
    } else {
        $admissionID = $siteUrl['query'];
    }

?>

<section class="admission py-[130px] lg:py-[90px]">
        <div class="container">
            <h2 class="text-center text-huge font-extralight mb-24">Admission</h2>
            <div class="admissionContent md:grid md:grid-cols-[_1fr,_3fr]">
                <ul class="contentMenu text-xl  text-center mb-24 md:text-left">
                    <?php 
                        $args = array(
                        'post_type' => 'admission',
                        'posts_per_page' => -1,
                        );
                        $newQuery = new WP_Query($args)
                    ?>
                    <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

                    <li id="menu-<?php echo get_field('id')?>" class="cursor-pointer my-3 text-[#737373]"><?php the_title(); ?></li>

                    <?php
                        endwhile;
                        else :
                            echo "no available content yet";
                        endif;
                        wp_reset_postdata();
                    ?>
                </ul>

                <?php 
                    $args = array(
                    'post_type' => 'admission',
                    'posts_per_page' => -1,
                    );
                    $newQuery = new WP_Query($args)
                ?>
                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>


                <div id="menu-<?php echo get_field('id'); ?>-content" class="theContent text-justify">

                    <?php if( get_field('the_content') ): ?>
                    <?php while( the_repeater_field('the_content') ): ?>

                    <div>
                        <?php echo the_sub_field('content');?>

                            <div class="contentImg flex">

                            <?php 

                                $images = get_sub_field('gallery_admission');

                                if($images):
                                ?>

                                <?php foreach($images as $image):?>
                                <a data-lightbox="<?php echo the_title() ?>" href="<?php echo esc_url($image['sizes']['large']); ?>">
                                    <img class="md:mr-2 h-[253px] lg:w-auto w-auto object-cover" src="<?php echo esc_url($image['sizes']['large']); ?>"
                                            alt="admission-<?php echo $image['name'] ?>" 
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

    <script>
            let admissionID = <?php echo $admissionID ?>


            if(admissionID!==0){

                const contentMenuActive = document.getElementById("menu-<?php echo $admissionID ?>");
                contentMenuActive.classList.add("active");
                const contentActive = document.getElementById("menu-<?php echo $admissionID ?>-content");
                contentActive.classList.add("active");
            
                
            } else {

                const contentMenuActive = document.querySelector("#menu-1");
                contentMenuActive.classList.add("active");
                const contentActive = document.querySelector("#menu-1-content");
                contentActive.classList.add("active");


            }
    </script>

<?php get_footer(); ?>