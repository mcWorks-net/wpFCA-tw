<?php 

/**
 * Template Name: contact
 */

?>


<?php get_header(); ?>


<section class="contact lg:py-20 pt-32 pb-20 relative after:absolute after:contents-[''] after:bg-clrGray after:bottom-0 after:w-full after:h-[300px] after:-z-10">
        <div class="container">
            <div class="lg:grid lg:grid-cols-2 lg:gap-20">
                <div class="lg:order-2 theContantDetails">
                    <h2 class="text-7xl font-light mb-10">Contact Us</h2>
                    <ul>
                        <li class="mb-5">
                            <i class="fa-solid fa-phone text-primary text-2xl mr-4"></i>
                            (049) 521-0732
                        </li>
                        <li class="mb-5">
                            <i class="fa-solid fa-mobile-retro text-primary text-2xl mr-4"></i>
                            (+63) 908-202-0749 | (+63) 926-363-9722
                        </li>
                        <li class="mb-5">
                            <i class="fa-solid fa-envelope text-primary text-2xl mr-4"></i>
                            info@fca.edu.ph
                        </li>
                        <li class="mb-5">
                            <i class="fa-brands fa-facebook text-primary text-2xl mr-4"></i>
                            facebook.com/frontlinechristianacademy
                        </li>
                        <li class="mb-5">
                            <i class="fa-solid fa-location-dot text-primary text-2xl mr-4"></i>
                            Baloc Rd, Brgy, San Pablo City, 4000 Laguna
                        </li>
                    </ul>
                </div>
                <div class="lg:order-1 theForm py-14 px-10 border-2 shadow-2xl bg-white">
                    <form action="">
                        <div class="inputGroup">
                            <input class="mb-5 w-full border border-gray-400 p-2 rounded-lg focus:outline-none h-[50px]" type="text" name="" id="" placeholder="Full Name">
                        </div>
                        <div class="inputGroup">
                            <input class="mb-5 w-full border border-gray-400 p-2 rounded-lg focus:outline-none h-[50px]" type="email" name="" id="" placeholder="Email">
                        </div>
                        <div class="inputGroup">
                            <input class="mb-5 w-full border border-gray-400 p-2 rounded-lg focus:outline-none h-[50px]" type="text" name="" id="" placeholder="Subject">
                        </div>
                        <div class="inputGroup">
                            <textarea class=" mb-5 w-full border border-gray-400 p-2 rounded-lg focus:outline-none h-[250px]" type="text" name="" id="" placeholder="Message"></textarea>
                        </div>
                        <div class="w-full">
                             <a href="#" class="bg-accent text-white w-full p-3 block text-center rounded-lg">Send</a>
                        </div>
                    </form>
                </div>
             </div>
        </div>
    </section>


<?php get_footer(); ?>