<?php 

/**
 * Template Name: volunteer
 */

?>


<?php get_header(); ?>


<section class="Objectives py-[130px] lg:py-[90px]">
        <div class="container lg:narrowContent">
            <h2 class="text-center text-huge font-extralight mb-16">Volunteer Service Opportunity</h2>
            <h2 class="text-center text-xl  mb-16">for Foreign Teachers</h2>

            <div class="objectives lg:mx-36 mb-20">
                 <?php the_content(); ?>
            </div>
           
            <div class="lg:mx-40">

            <?php if(have_rows('accordion') ): ?>
                <?php while( have_rows('accordion') ): the_row(); ?>

                <div class="accordionItem bg-clrGray py-3 px-3 relative transition-all mb-4 text-lg">
                    <h3 class="font-bold text-md md:text-xl"><?php echo the_sub_field('accordion_title'); ?></h3>
                        <?php echo the_sub_field('accordion_content') ?>
                    <i class="fa-solid fa-chevron-right absolute right-5 top-3 text-xl"></i>
                </div>
    
                <?php endwhile; ?>
			<?php endif; ?>

               
            </div>
            
           
        </div>
    </section>

    <script>
        const accordionItem = document.querySelectorAll(".accordionItem");
        accordionItem.forEach((accordions) => {
            accordions.addEventListener("click", ()=>{
                accordions.classList.toggle("active");
            });
        });
    </script>


<?php get_footer(); ?>