<?php 

/**
 * Template Name: faq
 */

?>


<?php get_header(); ?>

<section class="faq py-[130px] lg:py-[90px]">
        <div class="container">
            <h2 class="text-center text-huge font-extralight mb-24">Frequently Asked Questions</h2>
            <div class="faqContent md:grid md:grid-cols-[_1fr,_3fr]">
                <ul class="contentMenu text-xl  text-center mb-24 md:text-left">

                <?php if( get_field('accordion_content') ): $counterID = 0;	 ?>
                  		<?php while( the_repeater_field('accordion_content') ): $counterID++; ?>

                 <li id="menu-<?php echo $counterID; ?>" class="cursor-pointer my-3 text-[#737373]"><?php echo the_sub_field('accordion_tab_title') ?></li>
					
                    <?php endwhile; ?>
                <?php endif; ?>

                </ul>

                <?php if( get_field('accordion_content') ): $contentID = 0; ?>
                  <?php while( the_repeater_field('accordion_content') ): $contentID++; ?>


                    <div id="menu-<?php echo $contentID; ?>-content" class="theContent text-justify cursor-pointer group">
                        <h2 class="text-2xl mb-10"><?php echo the_sub_field('accordion_tab_title'); ?></h2>

                        <?php if(have_rows('accordion_inner_content') ): ?>
                            <?php while( have_rows('accordion_inner_content') ): the_row(); ?>

                        <div class="accordionItem bg-clrGray py-3 px-3 relative transition-all mb-4">
                            <h3 class="font-bold text-md md:text-lg"><span class="hidden font-bold text-2xl text-primary mr-5 md:inline-block">Q:</span><?php echo the_sub_field('accordion_title') ?></h3>
                            
                                    <?php echo the_sub_field('accordion_text_content'); ?>
                         
                            <i class="fa-solid fa-chevron-right absolute right-5 top-3 text-xl"></i>
                        </div>

                            <?php endwhile; ?>
						<?php endif; ?>

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

    <script>
        
        const contentMenuActive = document.querySelector("#menu-1");
        contentMenuActive.classList.add("active");
        const contentActive = document.querySelector("#menu-1-content");
        contentActive.classList.add("active");
        
    </script>

<?php get_footer(); ?>
