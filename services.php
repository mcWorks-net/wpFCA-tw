<?php 

/**
 * Template Name: services
 */

?>


<?php get_header(); ?>

<section class="services py-[130px] lg:py-[90px]">
      <div class="container">
        <h2 class="text-center text-huge font-extralight mb-24">
          Other Services
        </h2>
        <h3 class="text-2xl mb-10">Regular Instructional Services:</h3>
        <div class="gap-5 lg:grid lg:grid-cols-[_2fr,_1fr] lg:gag-5">
          <div class="leading-9 text-justify">
            <p class="mb-5">
              FCA offers instructional and educational services throughout the
              school year, which is currently from August to June. The
              curriculum followed is the K-12 Basic Education Curriculum,
              utilizing textbooks from the USA, as well as those from local
              Philippine publishers. FCA focuses on building academic excellence
              and character, believing that the kind of people our children
              become is more important than how academically smart they are.
            </p>
            <p class="mb-5">
              One of our key focus areas is Social Emotional Learning (in
              partnership with a US Youth Leadership organization: “Growing
              Leaders”), mentoring, and leadership development. We believe this
              is something that our young people need, especially in such
              challenging and unprecedented global times. We prioritize the
              holistic development and wellbeing of our students, their
              families, and our staff and faculty, providing periodic group
              counseling sessions for parents and students with a PRC-registered
              Guidance Counselor.
            </p>
            <p class="mb-5">
              We provide parent support through our regular Parenting Peer
              Groups, which are bi-monthly gatherings (online/virtual if
              in-person is not possible) of small groups of parents to provide
              moral and academic support to one another. FCA accepts students
              from diverse backgrounds, religions, and walks of life. Our
              primary language used for teaching and communication is the
              English language, except for the subjects of Filipino, Araling
              Panlipunan, and certain topics under Home Economics and Livelihood
              Education/Technology and Livelihood Education.
            </p>
          </div>
          <img
            class="hidden lg:block mx-auto"
            src="https://demo.frontlinebusiness.com.ph/dev/fca2023/wp-content/uploads/2022/11/Rectangle-53-1.png"
            alt=""
          />
        </div>

        <?php 
                $args = array(
                'post_type' => 'services',
                'posts_per_page' => -1,
                );
                $newQuery = new WP_Query($args)
        ?>
        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

        <?php
              $thePost = get_post();
              $sectionHook = $thePost->post_name;
        ?>

        <div id="<?php echo $sectionHook ?>" class="servicesCard p-5 bg-clrGray my-10">
          <div class="lg:flex items-center">
            <?php echo get_the_post_thumbnail()?>
            <div class="servicesItemDesc lg:mx-20 text-center lg:text-left">
              <ul
                class="flex items-center mb-7 justify-center lg:justify-start"
              >
                <li class="">
                  <i class="<?php echo get_field('icon'); ?> text-accent text-3xl mr-5"></i>
                </li>
                <li class="text-3xl font-bold text-accent">
                    <?php echo the_title(); ?>
                </li>
              </ul>
              <p class="mb-7">
                <?php echo get_field('description'); ?>
              </p>
              <a id="btnInquire" href="#"
                class="btn bg-accent text-white w-[120px] text-center mx-auto lg:mx-0"
                data-inquire="<?php echo the_title(); ?>"
                >Inquire</a
              >
            </div>
          </div>
        </div>

        <?php
            endwhile;
            else :
                echo "no available content yet";
            endif;
            wp_reset_postdata();
        ?>

      </div>
    </section>

    <section class="volunteer text-center pb-24">
        <div class="container">
            <h2 class="text-3xl text-primary mb-10">Volunteer Service Opportunity</h2>
            <p class="mb-10 lg:w-[500px] mx-auto">
                opportunity for teacher volunteers to spend a year (12-month period) in the Philippines, serving at the school and in various ministry activities of Philippine Frontline Ministries.
            </p>
            <a class="btn bg-accentYellow text-white text-center w-[150px] mx-auto" href="<?php echo site_url('volunteer') ?>">See more</a>
        </div>
    </section>

    
    <div class="hidden modalInquire fixed z-10 w-full h-full pt-[5%] left-0 right-0 top-0 bg-gray-800/[0.3] overflow-auto">
        <div class="theModal relative bg-white lg:m-auto mt-[20%] md:mt-[10%] mx-auto py-6 px-5 border border-gray-400 w-[80%] lg:w-[30%] h-auto">
            <div id="modalCLose" class="absolute top-2 right-4 p-1 text-xl font-extrabold cursor-pointer text-gray-500 hover:text-black">X</div>
            <h2 id="inqureTitle" class="text-xl mb-5">Inquire for</h2>
            <form action="">
                <div class="inputGroup mb-3">
                  <input class="w-full h-[40px] p-3 border rounded-md border-gray-400 focus:outline-none" type="text" name="" id="" placeholder="Grade Level">
                </div>
                <div class="inputGroup mb-3">
                    <input class="w-full h-[40px] p-3 border rounded-md border-gray-400 focus:outline-none" type="text" name="" id="" placeholder="Full Name">
                </div>
                <div class="inputGroup mb-3">
                    <input class="w-full h-[40px] p-3 border rounded-md border-gray-400 focus:outline-none" type="email" name="" id="" placeholder="Email">
                </div>
                <div class="inputGroup mb-3">
                    <input class="w-full h-[40px] p-3 border rounded-md border-gray-400 focus:outline-none" type="text" name="" id="" placeholder="Mobile Number">
                </div>
                <div class="inputGroup">
                    <textarea class="w-full p-3 border rounded-md border-gray-400 h-32 lg:h-auto focus:outline-none" name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                </div>
                <a href="#" class="block w-full bg-accent text-white p-2 text-center rounded-md hover:bg-accentYellow">Send</a>
            </form>
        </div>
    </div>

    <script>
        const btnInquire = document.querySelectorAll("#btnInquire");
        const displayModal = document.querySelector(".modalInquire");
        const modalCLose = document.querySelector("#modalCLose");
        const hiddenInput = document.getElementById("hiddenInput");

        const inquireTitle = document.getElementById('inqureTitle');

        btnInquire.forEach((btn)=> {
        btn.addEventListener('click', (e)=> {
            e.preventDefault();
            displayModal.classList.add('active');

            inquireTitle.innerText = "Inquire for " + btn.getAttribute('data-inquire');
            hiddenInput.value = btn.getAttribute('data-inquire');

        })
        })

        modalCLose.addEventListener('click', (e) => {
        e.preventDefault();
        displayModal.classList.remove('active');
        })

        window.addEventListener('click', (e)=> {
        console.log(e.target)
        if(e.target.classList.contains('modalInquire')) {
            displayModal.classList.remove('active');
        }
        })


        
    </script>

<?php get_footer(); ?>