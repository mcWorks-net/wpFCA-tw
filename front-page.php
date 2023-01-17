<?php get_header(); ?>

<section class="banner text-white relative h-[900px] md:h-auto pt-[94.3px] lg:pt-0">
        <div class="relative h-auto md:h-[744px]">

            <video class="h-[100%] brightness-50 md:block w-full md:h-[744px] absolute object-cover top-0" autoplay loop>
                <source src="<?php echo get_template_directory_uri() ?>./img/fcaBackGroundVideo.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
              Your browser does not support the video tag.
             </video>
           
            <div class="text-center relative py-28">
                <div class="container">
                    <h1 class="mx-auto font-serif mb-5 drop-shadow-2xl text-huge">
                        Building Faith, Character and Academic Excellence
                    </h1>
                    <p class="mb-20 lg:max-w-4xl mx-auto drop-shadow-2xl">
                        We genuinely care about the holistic development of our students, and continue to reach for our vision of impacting the nation through the development of Godly steward leaders.
                    </p>
                    <a class="btn bg-accent hover:bg-accentYellow text-white w-[150px] mx-auto text-center" href="#">Inquire now!</a>
                </div>
                
            </div>
        </div>
        <div class="addMission block mt-10 md:absolute h-32 md:-bottom-[30px] mx-auto md:left-0 md:right-0 z-10">
            <div class="container">
                <div class="cards w-auto bg-transparent max-w-[1100px] lg:bg-white  rounded-2xl gap-2 lg:gap-0 lg:mx-auto grid grid-cols-2 text-center lg:grid-cols-4 lg:justify-center lg:items-center lg:shadow-2xl">
                    <div class="bg-white rounded-2xl group lg:py-8 w-full lg:h-[206px] shadow-md lg:shadow-none hover:scale-110 hover:bg-accent ease-in hover:ease-in transition cursor-pointer">
                        <div class="border-r-none w-full lg:border-r-2  my-auto lg:px-12 h-[134px] group-hover:border-0">
                            <i class="fa-solid fa-cubes text-gray-500 text-4xl my-5 group-hover:text-white"></i>
                            <h3 class="text-primary text-2xl group-hover:text-white"><small>Playschool</small></h3>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl group w-full lg:py-8 lg:h-[206px] shadow-md lg:shadow-none  hover:scale-110 hover:bg-accent ease-in hover:ease-in transition cursor-pointer">
                        <div class="border-r-none lg:border-r-2  my-auto lg:px-12 h-[134px] group-hover:border-0">
                            <i class="fa-solid fa-child text-gray-500 text-4xl my-5 group-hover:text-white"></i>
                            <h3 class="text-primary text-2xl group-hover:text-white">Pre-school</h3>
                            <p class="text-gray-500 group-hover:text-white"><small>Nursery | Pre-Kinder | Kinder</small></p>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl group w-full lg:py-8 lg:h-[206px] shadow-md lg:shadow-none hover:scale-110 hover:bg-accent ease-in hover:ease-in transition cursor-pointer">
                        <div class="border-r-none w-full lg:border-r-2  my-auto lg:px-12 h-[134px] group-hover:border-0">
                            <i class="fa-solid fa-book-open text-gray-500 text-4xl my-5 group-hover:text-white"></i>
                            <h3 class="text-primary text-2xl group-hover:text-white">Elementary</h3>
                            <p class="text-gray-500 group-hover:text-white"><small>Primary | Intermediate</small></p>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl group w-full lg:py-8 lg:h-[206px] shadow-md lg:shadow-none hover:scale-110 hover:bg-accent ease-in hover:ease-in transition cursor-pointer">
                        <div class="my-auto w-full lg:px-12 h-[134px] group-hover:border-0">
                            <i class="fa-solid fa-user-tie text-gray-500 text-4xl my-5 group-hover:text-white"></i>
                            <h3 class="text-primary text-2xl group-hover:text-white">Junior High</h3>
                            <p class="text-gray-500 group-hover:text-white"><small>Highschool Education</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <section class="whyUs pt-64 lg:pt-52 lg:pb-24 text-center">
        <div class="container">
            <h2 class="text-3xl text-primary mb-10">Why Chooes Us?</h2>
            <div class="hidden lg:flex justify-center py-20">
                <div id="answer-1" class="answer active group relative text-center cursor-pointer  w-[250px] after:absolute after:h-[1px] after:w-[50%] after:bottom-2 after:content-[''] after:bg-gray-300 after:right-0 after:-z-10">
                    <h2 class="text-2xl text-primary">Holistic</h2>
                    <p class="text-gray-500">Education</p>
                    <span class="circle h-[20px] w-[20px] block bg-gray-500 mx-auto rounded-xl border-2  shadow-2xl group-hover:bg-accentYellow"></span>
                </div>
                <div id="answer-2" class="answer group relative text-center cursor-pointer  w-[250px] after:absolute after:h-[1px] after:w-full after:bottom-2 after:content-[''] after:bg-gray-300 after:left-0 after:-z-10">
                    <h2 class="text-2xl text-primary">Transform</h2>
                    <p class="text-gray-500">Individuals</p>
                    <span  class="circle h-[20px] w-[20px] block bg-gray-500 mx-auto rounded-xl border-2  shadow-2xl z-10 group-hover:bg-accentYellow"></span>
                </div>
                <div id="answer-3"  class="answer group relative text-center cursor-pointer  w-[250px] after:absolute after:h-[1px] after:w-[50%] after:bottom-2 after:content-[''] after:bg-gray-300 after:left-0 after:-z-10">
                    <h2 class="text-2xl text-primary">Give</h2>
                    <p class="text-gray-500">Hope</p>
                    <span class="circle h-[20px] w-[20px] block bg-gray-500 mx-auto rounded-xl border-2  shadow-2xl group-hover:bg-accentYellow"></span>
                </div>
            </div>
            <div id="answer-1-content" class="whyUsContent active">
                <div class="xl:grid xl:grid-cols-2 lg:grid-cols-1">
                    <iframe  class="mx-auto mb-10 w-full lg:w-[560px]"  height="315" src="https://www.youtube.com/embed/WvNaasp74cE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="whyUsContentDesc text-justify xl:mr-20">
                        <p>
                            Lorem1, ipsum dolor sit amet consectetur adipisicing elit. Natus, est explicabo? Officia saepe sunt repellendus nulla perspiciatis! Obcaecati amet alias, culpa aspernatur saepe fuga. Debitis ea laboriosam architecto quidem quas officia itaque hic voluptatem, deleniti expedita, perferendis aliquam, animi facere. Sunt non velit dolor mollitia molestiae excepturi optio eveniet est!
                        </p>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente ullam, provident quis odio ipsa rem aspernatur minus? Placeat incidunt non quibusdam voluptatem veniam voluptates illo nihil earum et facilis itaque repellendus nemo, consectetur assumenda mollitia libero labore exercitationem corrupti ab rerum architecto laudantium unde? Aperiam eos iusto sunt dolor itaque.
                        </p>
                    </div>
                </div>
            </div>
            <div id="answer-2-content" class="whyUsContent">
                <div class="xl:grid xl:grid-cols-2 lg:grid-cols-1">
                    <iframe  class="mx-auto mb-10 w-full lg:w-[560px]"  height="315" src="https://www.youtube.com/embed/WvNaasp74cE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="whyUsContentDesc text-justify xl:mr-20">
                        <p>
                            Lorem2, ipsum dolor sit amet consectetur adipisicing elit. Natus, est explicabo? Officia saepe sunt repellendus nulla perspiciatis! Obcaecati amet alias, culpa aspernatur saepe fuga. Debitis ea laboriosam architecto quidem quas officia itaque hic voluptatem, deleniti expedita, perferendis aliquam, animi facere. Sunt non velit dolor mollitia molestiae excepturi optio eveniet est!
                        </p>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente ullam, provident quis odio ipsa rem aspernatur minus? Placeat incidunt non quibusdam voluptatem veniam voluptates illo nihil earum et facilis itaque repellendus nemo, consectetur assumenda mollitia libero labore exercitationem corrupti ab rerum architecto laudantium unde? Aperiam eos iusto sunt dolor itaque.
                        </p>
                    </div>
                </div>
            </div>
            <div id="answer-3-content" class="whyUsContent">
                <div class="xl:grid xl:grid-cols-2 lg:grid-cols-1">
                    <iframe  class="mx-auto mb-10 w-full lg:w-[560px]"  height="315" src="https://www.youtube.com/embed/WvNaasp74cE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="whyUsContentDesc text-justify xl:mr-20">
                        <p>
                            Lorem3, ipsum dolor sit amet consectetur adipisicing elit. Natus, est explicabo? Officia saepe sunt repellendus nulla perspiciatis! Obcaecati amet alias, culpa aspernatur saepe fuga. Debitis ea laboriosam architecto quidem quas officia itaque hic voluptatem, deleniti expedita, perferendis aliquam, animi facere. Sunt non velit dolor mollitia molestiae excepturi optio eveniet est!
                        </p>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente ullam, provident quis odio ipsa rem aspernatur minus? Placeat incidunt non quibusdam voluptatem veniam voluptates illo nihil earum et facilis itaque repellendus nemo, consectetur assumenda mollitia libero labore exercitationem corrupti ab rerum architecto laudantium unde? Aperiam eos iusto sunt dolor itaque.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials py-24 bg-gray bg-[#f2f2f2] relative text-center">
        <div class="container">

            <div class="my-slider">

                <div class="testimonialItem">
                    <div class="lg:grid lg:grid-cols-[_2fr,_1fr] items-center">
                        <div class="testimonialContent w-full relative mt-16">
                            <img src="./img/qoute.svg" class="absolute -top-16 left-0" alt="">
                            <p class="mb-10 lg:mr-20 text-justify">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio doloremque corporis perferendis facilis ad incidunt asperiores quae quis praesentium possimus et placeat repellendus veritatis, quaerat laboriosam, sequi sint cum quam!
                            </p>
                            <ul class="flex items-center">
                                <li>
                                    <img class="w-[100px] h-[100px] mr-5" src="./img/testimony2.png" alt="">
                                </li>
                                <li>
                                    <div class="authorPhoto"></div>
                                    <div class="testimonialAuthor text-left">
                                        <p><b>Joanna Mae Briones-Alcantara</b></p>
                                        <p>
                                            Mother of Aebriel
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <img class="absolute bottom-0 right-0 lg:right-24" src="./img/qoute2.svg" alt="">
                        </div>
                    <div class="hidden lg:grid lg:grid-cols-2">
                            <a class="mx-auto" href="#">
                                <img class="w-[240px] h-[240px] object-cover" src="./img/fca-Studaent-receiving-certificate.webp" alt="">
                            </a>
                            <a class="mx-auto href="#">
                                <img class="w-[240px] h-[240px] lg:mt-28 object-cover" src="./img/fca-Studaent-receiving-certificate-2.webp" alt="">
                            </a>
                            <a class="mx-auto href="#">
                                <img class="w-[240px] h-[240px] lg:-mt-24 object-cover" src="./img/fca-Studaent-receiving-certificate-3.webp" alt="">
                            </a>
                    </div>
                    </div>
                </div>

                <div class="testimonialItem">
                    <div class="lg:grid lg:grid-cols-[_2fr,_1fr] items-center">
                        <div class="testimonialContent w-full relative mt-16">
                            <img src="./img/qoute.svg" class="absolute -top-16 left-0" alt="">
                            <p class="mb-10 lg:mr-20 text-justify">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio doloremque corporis perferendis facilis ad incidunt asperiores quae quis praesentium possimus et placeat repellendus veritatis, quaerat laboriosam, sequi sint cum quam!
                            </p>
                            <ul class="flex items-center">
                                <li>
                                    <img class="w-[100px] h-[100px] mr-5" src="./img/testimony2.png" alt="">
                                </li>
                                <li>
                                    <div class="authorPhoto"></div>
                                    <div class="testimonialAuthor text-left">
                                        <p><b>Joanna Mae Briones-Alcantara</b></p>
                                        <p>
                                            Mother of Aebriel
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <img class="absolute bottom-0 right-0 lg:right-24" src="./img/qoute2.svg" alt="">
                        </div>
                    <div class="hidden lg:grid lg:grid-cols-2">
                            <a class="mx-auto" href="#">
                                <img class="w-[240px] h-[240px] object-cover" src="./img/fca-Studaent-receiving-certificate.webp" alt="">
                            </a>
                            <a class="mx-auto href="#">
                                <img class="w-[240px] h-[240px] lg:mt-28 object-cover" src="./img/fca-Studaent-receiving-certificate-2.webp" alt="">
                            </a>
                            <a class="mx-auto href="#">
                                <img class="w-[240px] h-[240px] lg:-mt-24 object-cover" src="./img/fca-Studaent-receiving-certificate-3.webp" alt="">
                            </a>
                    </div>
                    </div>
                </div>


                <div class="testimonialItem">
                    <div class="lg:grid lg:grid-cols-[_2fr,_1fr] items-center">
                        <div class="testimonialContent w-full relative mt-16">
                            <img src="./img/qoute.svg" class="absolute -top-16 left-0" alt="">
                            <p class="mb-10 lg:mr-20 text-justify">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio doloremque corporis perferendis facilis ad incidunt asperiores quae quis praesentium possimus et placeat repellendus veritatis, quaerat laboriosam, sequi sint cum quam!
                            </p>
                            <ul class="flex items-center">
                                <li>
                                    <img class="w-[100px] h-[100px] mr-5" src="./img/testimony2.png" alt="">
                                </li>
                                <li>
                                    <div class="authorPhoto"></div>
                                    <div class="testimonialAuthor text-left">
                                        <p><b>Joanna Mae Briones-Alcantara</b></p>
                                        <p>
                                            Mother of Aebriel
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <img class="absolute bottom-0 right-0 lg:right-24" src="./img/qoute2.svg" alt="">
                        </div>
                    <div class="hidden lg:grid lg:grid-cols-2">
                            <a class="mx-auto" href="#">
                                <img class="w-[240px] h-[240px] object-cover" src="./img/fca-Studaent-receiving-certificate.webp" alt="">
                            </a>
                            <a class="mx-auto href="#">
                                <img class="w-[240px] h-[240px] lg:mt-28 object-cover" src="./img/fca-Studaent-receiving-certificate-2.webp" alt="">
                            </a>
                            <a class="mx-auto href="#">
                                <img class="w-[240px] h-[240px] lg:-mt-24 object-cover" src="./img/fca-Studaent-receiving-certificate-3.webp" alt="">
                            </a>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


<?php get_footer(); ?>