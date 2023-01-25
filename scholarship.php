<?php 

/**
 * Template Name: scholarship
 */

?>


<?php get_header(); ?>

<section class="scholarship py-[130px] lg:py-[90px]">
        <div class="container">
            <h2 class="text-center text-huge font-extralight mb-24">Academic Scholarship Program</h2>
            <div class="aboutContent md:grid md:grid-cols-[_1fr,_3fr]">
                <ul class="contentMenu text-xl  text-center mb-24 md:text-left">

                <?php if( get_field('accordion_content') ): $counterID = 0;	 ?>
                  		<?php while( the_repeater_field('accordion_content') ): $counterID++; ?>

                    <li id="menu-<?php echo $counterID; ?>" class="cursor-pointer my-3 text-[#737373]"><?php echo the_sub_field('accordion_tab_title') ?></li>

                    <?php endwhile; ?>
                <?php endif; ?>

                </ul>


                <?php if( get_field('accordion_content') ): $contentID = 0; ?>
                  <?php while( the_repeater_field('accordion_content') ): $contentID++; ?>

                <div id="menu-<?php echo $contentID; ?>-content" class="theContent active: text-justify">
                    <h2 class="text-2xl mb-5"><?php echo the_sub_field('accordion_tab_title'); ?></h2>
                   
                    <?php if(have_rows('accordion_inner_content') ): ?>
                            <?php while( have_rows('accordion_inner_content') ): the_row(); ?>

                    <div class="accordionItem bg-clrGray py-3 px-3 relative transition-all mb-4">
                        <h3 class="font-bold text-md md:text-lg"><?php echo the_sub_field('accordion_title') ?></h3>
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

    <section class="timeLine py-20">
        <div class="container">
            <h2 class="text-center text-3xl mb-10">QUICK REFERENCE TIMELINE</h2>
            <div class="lg:grid lg:grid-cols-2">
                <div class="theDate  p-5 w-[80%] mx-auto lg:ml-auto lg:mr-0 flex justify-center border-dotted border-l-2 lg:border-l-0 lg:border-l- lg:border-r-2 border-gray-500 relative">
                    <div class="m-auto p-5 rounded-2xl bg-[#f2f7f3] w-[375px] relative">
                        <h2 class="text-2xl text-primary mb-4">January 15 <br><small class="text-black text-sm">of the current school year</small></h2>
                        <h3>Deadline of Submission of Application Form and All Requirements</h3>
                        <div class="arrow absolute top-4 lg:-right-5 lg:left-auto -left-5 w-0 h-0 
                        border-t-[20px] border-t-transparent
                        border-r-[20px] border-r-[#f2f7f3]
                        lg:border-r-[0] lg:border-r-[#f2f7f3]
                        lg:border-l-[20px] lg:border-l-[#f2f7f3]
                        border-b-[20px] border-b-transparent ">
                        </div>
                    </div>
                    <div class="circleDot absolute w-[20px] h-[20px] bg-white block z-10 border-4 border-accent rounded-xl top-11 lg:left-auto lg:-right-2.5 -left-2.5">
                    </div>
                </div>
                <div class="hidden lg:block theDate w-full p-5  mx-auto">
                    
                </div>
                <div class="hidden lg:block theDate p-5 w-full mx-auto">
                    
                </div>
                <div class="theDate mt-[1px]  p-5 w-[80%] mx-auto lg:mr-auto lg:-ml-0.5 flex justify-center border-dotted border-l-2 border-gray-500 relative">
                    <div class="m-auto p-5 rounded-2xl bg-[#f2f7f3] w-[375px] relative">
                        <h2 class="text-2xl text-primary mb-4">JMarch 15<br><small class="text-black text-sm">of the current school year</small></h2>
                        <h3>End of Review Period of Selection Committee</h3>
                        <div class="arrow absolute top-4 -left-5 w-0 h-0 
                        border-t-[20px] border-t-transparent
                        border-r-[20px] border-r-[#f2f7f3]
                        border-b-[20px] border-b-transparent">
                        </div>
                    </div>
                    <div class="circleDot absolute w-[20px] h-[20px] bg-white block z-10 border-4 border-accent rounded-xl top-11 -left-2.5">
                    </div>
                </div>
                <div class="hidden lg:block theDate w-full   mx-auto">
                    
                </div>
                <div class="hidden lg:block theDate  w-full mx-auto">
                    
                </div>
                <div class="theDate mt-[1px]  p-5 w-[80%] mx-auto lg:ml-auto lg:mr-0 flex justify-center border-dotted border-l-2 lg:border-l-0 lg:border-l- lg:border-r-2 border-gray-500 relative">
                    <div class="m-auto p-5 rounded-2xl bg-[#f2f7f3] w-[375px] relative">
                        <h2 class="text-2xl text-primary mb-4">April 5<br><small class="text-black text-sm"></small></h2>
                        <h3>Submission of List of Candidates, to the Board, by Selection Committee</h3>
                        <div class="arrow absolute top-4 lg:-right-5 lg:left-auto -left-5 w-0 h-0 
                        border-t-[20px] border-t-transparent
                        border-r-[20px] border-r-[#f2f7f3]
                        lg:border-r-[0] lg:border-r-[#f2f7f3]
                        lg:border-l-[20px] lg:border-l-[#f2f7f3]
                        border-b-[20px] border-b-transparent ">
                        </div>
                    </div>
                    <div class="circleDot absolute w-[20px] h-[20px] bg-white block z-10 border-4 border-accent rounded-xl top-11 lg:left-auto lg:-right-2.5 -left-2.5">
                    </div>
                </div> 
                <div class="hidden lg:block theDate w-full   mx-auto">
                    
                </div>
                <div class="hidden lg:block theDate  w-full mx-auto">
                    
                </div>
                <d
                iv class="theDate mt-[1px]  p-5 w-[80%] mx-auto lg:mr-auto lg:-ml-0.5 flex justify-center border-dotted border-l-2 border-gray-500 relative">
                    <div class="m-auto p-5 rounded-2xl bg-[#f2f7f3] w-[375px] relative">
                        <h2 class="text-2xl text-primary mb-4">JMarch 15<br><small class="text-black text-sm">of the current school year</small></h2>
                        <h3>End of Review Period of Selection Committee</h3>
                        <div class="arrow absolute top-4 -left-5 w-0 h-0 
                        border-t-[20px] border-t-transparent
                        border-r-[20px] border-r-[#f2f7f3]
                        border-b-[20px] border-b-transparent">
                        </div>
                    </div>
                    <div class="circleDot absolute w-[20px] h-[20px] bg-white block z-10 border-4 border-accent rounded-xl top-11 -left-2.5">
                    </div>
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