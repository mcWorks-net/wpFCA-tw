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
                                <a data-lightbox="<?php echo the_sub_field('id') ?>" href="<?php echo esc_url($image['sizes']['large']); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['large']); ?>"
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
            


                <div id="menu-1-content" class="theContent active text-justify">
                    <h2 class="text-2xl mb-5">The Founders</h2>
                    <p class="mb-11">
                        Jeffrey Pessina was born in Illinois, USA, and is one of ten children. At the age of twenty, after a long period of drug addiction and alcohol abuse, God changed His life. Five weeks after his decision to become a Christ-follower, he left for the Philippines to serve as a missionary. He met his wife, Rowena Pessina, in 1983. They married in 1986 and have four grown children. In 1987 they incorporated the Philippine Frontline Ministries, Inc (PFM), an evangelistic team ministry that was then fully mobile, and traveled throughout the nation sharing the good news of Christ Jesus. In 2000, PFM moved to establish a mission center in San Pablo City, Laguna and branched out into other initiatives. Frontline now oversees a growing multi-site church (Frontline Worship Center), a program to protect and develop abandoned and abused children (Face the Children), a Christian school (Frontline Christian Academy, Inc.), and is involved in compassionate ministries to change the lives of the marginalized poor through social enterprise businesses and livelihood programs.
                    </p>
                    <div class="contentImg flex">
                        <a href="#"><img src="https://via.placeholder.com/300" alt=""></a>
                        <a href="#"><img src="https://via.placeholder.com/300" alt=""></a>
                    </div>
                </div>

                <div id="menu-2-content" class="theContent text-justify">
                    <h2 class="text-2xl mb-5">The History of FCA</h2>
                    <p class="mb-11">
                        Frontline Christian Academy, Inc. (FCA) began initially as a home school for the staff children of the Philippine Frontline Ministries, Inc., (PFM) (www.thefrontline.asia). Later PFM decided to pursue solutions for abandoned and abused street children, and established a child care initiative named Face the Children (FTC) (www.facethechildren.org). In line with this initiative, the strategic scope of FCA was expanded to meet the educational needs of the children being cared for under the FTC program.
                    </p>
                    <p class="mb-11">
                        What had started in 2003 with 17 students in a doublewide air-conditioned trailer, located in a small compound in Brgy. San Francisco, San Pablo City, quickly expanded. In 2007, FCA was moved to a more suitable, larger venue, in the same barangay. FCA was officially incorporated as a non-stock, non-profit educational institution in July 2009, and obtained the necessary permits from the Department of Education in 2011. FCA refers to 2009 as its official “first year.”
                    </p>
                    <p class="mb-11">
                        FCA moved to its permanent location in Baloc Rd., Brgy. San Ignacio, in year 2020.
                    </p>
                    <div class="contentImg flex">
                        <a href="#"><img src="https://via.placeholder.com/300" alt=""></a>
                        <a href="#"><img src="https://via.placeholder.com/300" alt=""></a>
                    </div>
                </div>

                <div id="menu-3-content" class="theContent text-justify">
                    <h2 class="text-2xl mb-5">Mission</h2>
                    <p class="mb-11">
                        To facilitate holistic and caring Christian education that develops learners in godly character and academic ability, while creating positive social impact and being a fun, meaningful place to work.
                    </p>
                    <h2 class="text-2xl mb-5">Vision</h2>
                    <p class="mb-11">
                        Frontline Christian Academy impacting the nation through the development of godly steward leaders.
                    </p>
                    <div class="contentImg flex">
                        <a href="#"><img src="https://via.placeholder.com/300" alt=""></a>
                        <a href="#"><img src="https://via.placeholder.com/300" alt=""></a>
                    </div>
                </div>

                <div id="menu-4-content" class="theContent text-justify">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                        <div>
                            <h2 class="text-2xl mb-5">Christ-centerdness</h2>
                            <p class="mb-11">
                                We regard the Bible as the highest authority on morality and spirituality. Our curriculum is Bible-based and our desire is that all who enter the doors of FCA will be impacted to become more Christ-like.
                            </p>
                            <h2 class="text-2xl mb-5">Genuine Care and Love for People</h2>
                            <p class="mb-11">
                                The most important commandment of the Scriptures is “You shall love the Lord your God with all your heart, and with all your soul, and with all your mind,” and “‘You shall love your neighbor as yourself. We genuinely love and care for each other, our students, and their families, our donors, partners, and all stakeholders… and desire for them to walk in the fullness of the promise of abundant life. This desire drives us to pursue exceptional customer service and high client satisfaction. We also genuinely love and care for our employees, and aim to be a fun and meaningful place to work, and to provide a conducive environment that encourages collaboration of all stakeholders.
                            </p>
                        </div>
                        <div>
                            <h2 class="text-2xl mb-5">Academic excellence</h2>
                            <p class="mb-11">
                                We desire to produce learners who are academically competent, able to be globally competitive, and who are critical, strategic thinkers.
                            </p>
                            <h2 class="text-2xl mb-5">Leadership with Integrity</h2>
                            <p class="mb-11">
                                We desire to be a school that influences its people to become leaders of integrity – individuals who are honest, consistent, trustworthy, and governed by a moral compass.
                            </p>
                            <h2 class="text-2xl mb-5">Real-life Skills</h2>
                            <p class="mb-11">
                                We believe in preparing our students for life after formal schooling, and inculcating in them a strong work ethic, a passion for excellence, and real-life skills such as communication and critical thinking, as well as practical knowledge for daily life.
                            </p>
                        </div>
                    </div>
                    <div class="contentImg flex">
                        <a href="#"><img src="https://via.placeholder.com/300" alt=""></a>
                        <a href="#"><img src="https://via.placeholder.com/300" alt=""></a>
                    </div>
                </div>


            </div>
        </div>
    </section>

<?php get_footer(); ?>