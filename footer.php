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
                        <li class="my-2"><a class="text-gray-600" href="#">Playschool</a></li>
                        <li class="my-2"><a class="text-gray-600" href="#">Pre-school</a></li>
                        <li class="my-2"><a class="text-gray-600" href="#">Elementary</a></li>
                        <li class="my-2"><a class="text-gray-600" href="#">Junior High</a></li>
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
                        <li class="my-2"><a class="text-gray-600" href="#">Home</a></li>
                        <li class="my-2"><a class="text-gray-600" href="#">About</a></li>
                        <li class="my-2"><a class="text-gray-600" href="#">Admission</a></li>
                        <li class="my-2"><a class="text-gray-600" href="#">Services</a></li>
                        <li class="my-2"><a class="text-gray-600" href="#">Gallery</a></li>
                        <li class="my-2"><a class="text-gray-600" href="#">Contact</a></li>
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
</body>
</html>