<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontline Christian Academy</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&family=Raleway:ital,wght@0,100;0,400;1,100;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <link rel="stylesheet" id="fca-fa-2-css" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css?ver=6.1.1" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <?php wp_head() ?>
</head>
<body>
    <header class="header fixed  lg:static z-50 w-full mx-auto bg-white">
        <div class="container">
            <div class="border-b border-black flex items-center justify-between">
                <div class="headerLogo w-[250px]  py-2">
                    <?php echo the_custom_logo(); ?>
                </div>
                <div class="headerContact hidden lg:block">
                    <ul class="font-raleway flex items-center ">
                        <li class="mx-2">
                            <i class="fa-solid fa-phone"></i>
                            (049) 521-0732 
                        </li>
                        <li class="mx-2">
                            <i class="fa-solid fa-mobile-retro"></i>
                            (+63) 908-202-0749 | (+63) 926-363-9722
                        </li>
                        <li class="mx-2">
                            <a href="#" class="btn bg-[#3b5897] hover:bg-[#1573e5] border text-white">Facebook</a>
                        </li>
                        <li class="mx-2"><a href="faq.html" class="btn bg-white hover:bg-[#28941e] hover:text-white outline-1   text-black border-black border">FAQ</a></li>
                    </ul>
                </div>
                <div class="toggle_menu lg:hidden cursor-pointer duration-500">
                    <span class="w-[40px] bg-dark h-1.5 block m-0.5 border"></span>
                    <span class="w-[40px] bg-dark h-1.5 block m-0.5  border"></span>
                    <span class="w-[40px] bg-dark h-1.5 block m-0.5 border"></span>
                </div>
            </div>

           <nav class="absolute top-[90px] z-10 bg-white h-screen lg:h-auto -right-[100%] lg:right-0 w-full lg:block lg:static ease-in-out duration-500 transition-all" >
            <ul class="lg:flex lg:justify-between uppercase ">
                <?php wp_menu_li() ?>
            </ul>
            <div class="headerContact lg:hidden ">
                <ul class="font-raleway block items-center text-center">
                    <li class="my-3">
                        <i class="fa-solid fa-phone"></i>
                        (049) 521-0732 
                    </li>
                    <li class="my-3">
                        <i class="fa-solid fa-mobile-retro"></i>
                        (+63) 908-202-0749 | (+63) 926-363-9722
                    </li>
                    <li class="my-3">
                        <a href="#" class="btn w-[140px] mx-auto bg-[#3b5897] hover:bg-[#1573e5] border text-white">Facebook</a>
                    </li>
                    <li class="my-3"><a href="faq.html"  class="btn w-[140px] mx-auto bg-white hover:bg-[#28941e] hover:text-white outline-1   text-black border-black border">FAQ</a></li>
                </ul>
            </div>
           </nav>
    
        </div>
    </header>