<?php wp_footer() ?>
<footer class="footer pt-10 pb-10 bg-clrGray">
        <div class="container">
            <div class="lg:flex justify-between border-b-2 border-b-gray-500">
                <div class="footerLogo my-2 mx-auto lg:mx-0">
                    <figure class="w-[200px] mx-auto">
                        <?php echo the_custom_logo(); ?>
                    </figure>
                </div>
                <div class="quickLinks hidden lg:flex font-raleway">
                    <ul class="mx-5">
                        <li class="font-bold">Admission</li>
                        <?php 
                            $args = array(
                            'post_type' => 'admission',
                            'posts_per_page' => -1,
                            );
                            $newQuery = new WP_Query($args)
                        ?>

                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                  
                        <?php
                            $id = get_field('id');
                        ?>

                        <li><a href="<?php echo 'http://localhost/wpfca-tw/admission/?'.$id.'=' ?>"><?php the_title(); ?></a></li>
                    
                        <?php
                            endwhile;
                            else :
                                echo "no available content yet";
                            endif;
                            wp_reset_postdata();
                        ?>
                    </ul>
                    <ul class="mx-5">
                        <li class="font-bold">Other Offers</li>
                        <li class="my-2"><a class="text-gray-600" href="#">Tutorial Services</a></li>
                        <li class="my-2"><a class="text-gray-600" href="#">Arts</a></li>
                        <li class="my-2"><a class="text-gray-600" href="#">Music Lessons</a></li>
                        <li class="my-2"><a class="text-gray-600" href="#">Sports</a></li>
                        <li class="my-2"><a class="text-gray-600" href="#">Transportation</a></li>
                    </ul>
                    <ul class="mx-5">
                        <li class="font-bold">Quicklinks</li>
                        <?php wp_footer_li(); ?>
                    </ul>
                </div>
                <div class="footerBtn text-center mb-10 lg:mb-0">
                    <a href="#" class="btn bg-[#28941e] hover:bg-accentYellow my-2 text-white w-[200px] mx-auto">Give</a>
                    <a href="#" class="btn border w-[200px] hover:bg-accentYellow hover:text-white my-2 mx-auto border-[#28941e]">FAQ</a>
                </div>
            </div>
            <div class="footerBottom pt-5">
                <div class="text-center lg:flex lg:justify-between lg:items-center">
                    <ul class="flex justify-center order-2">
                        <li class="mx-3"><small>Follow us:</small></li>
                        <li class="mx-3"><i class="fa-brands fa-facebook text-3xl text-gray-500"></i></li>
                        <li class="mx-3"><i class="fa-brands fa-instagram text-3xl text-gray-500"></i></li>
                    </ul>
                    <p class="order-1"><small>&#169; Frontline Christain Academy 2023</small></p>
                </div>
            </div>
        </div>
    </footer>
    <script>
        const toggle_menu= document.querySelector(".toggle_menu");
        const nav= document.querySelector("nav");
        toggle_menu.addEventListener("click", ()=>{
            nav.classList.toggle('active');
            toggle_menu.classList.toggle('active');
        })

        const whyChooseUs_answer = document.querySelectorAll(".answer");
        const whyUsContent = document.querySelectorAll(".whyUsContent");
        whyChooseUs_answer.forEach((answer) => {
            answer.addEventListener("click", () => {
                removeActive();
                answer.classList.add("active");
                const activeAnswer = document.querySelector(`#${answer.id}-content`);
                removeActiveContent();
                activeAnswer.classList.add("active");
            });
       });

       function removeActive() {
        whyChooseUs_answer.forEach((answer) => {
            answer.classList.remove("active");
        });
        }

        function removeActiveContent() {
        whyUsContent.forEach((content) => {
            content.classList.remove("active");
        });
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
     <script>
        var slider = tns({
          container: ".my-slider",
          items: 1,
          slideBy: "page",
          autoplay: false,
          controls: false,
          nav: true,
          navPosition: 'bottom',
          controlsText: ['',''],
        });
      </script>

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
    </body>
</html>