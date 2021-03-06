<?php



require_once('components/nav_bar.php');
require_once('components/footer.php')

?>


<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css" />

  <title>
    Foodie
  </title>
</head>

<body class=" overflow-x-hidden ">

  <section class="start bg-image bg-cover w-screen transform -translate-x-full  transition duration-700 ease-out ">


    <?php
    nav("index.php", "pages/foods.php", "pages/join_partner.php", "pages/about_us.php", "pages/contact_us.php", 1);


    ?>



    <div class="self-center text-center px-20 lg:px-44 lg:py-44">

      <div class="text-white font-extrabold text-3xl">
        Expolre <br>
      </div>
      <span class="text-white  font-semibold text-2xl">Your favorite foods</span>

      <div class="mt-5 ">
        <form action="./pages/foods.php" method="get">
          <label for="search" class="relative flex justify-center">
            <input id="search" name="search" class="text-center w-full py-2 rounded-full  outline-white border-2 border-transparent focus:border-blue-400" type="text" name="search" value="" placeholder="Search">
            <button type="submit" class="absolute top-1 bottom-1 rounded-full px-3 text-white bg-red-500 hover:bg-red-600 right-1"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg></bt<button>
          </label>
        </form>


      </div>

    </div>


  </section>


  <!-- login and register models -->
  <section>
    <?php
    login_design();
    reg_form();
    ?>
  </section>


  <section>
    <?php
      under_construction();
    ?>
  </section>

  <section class="start my-10 mx-5 flex flex-col md:flex-row md:justify-evenly transform translate-x-full transition duration-700 ease-out ">
    <div class="flex md:w-1/3 flex-col flex-wrap justify-center text-center ">
      <img class=" h-40 " src="./assets/includes/svg/food_find.svg" alt="">
      <h2 class="m-2 font-bold text-xl">Find Your Favorite Food</h2>
      <span>What do you fancy? Browse through countless menus and reviews.</span>
      <a class="m-3 text-orange font-bold" href="./pages/foods.php">Start Explore <svg class=" inline-flex w-4" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
        </svg> </a>
    </div>
    <div class="flex flex-col md:w-1/3 flex-wrap justify-center text-center ">
      <img class=" h-40" src="./assets/includes/svg/Storefront.svg" alt="">
      <h2 class="m-2 font-bold text-xl">Become a Partner</h2>
      <span>Grow your business and reach new customers by partnering with us.</span>
      <a class="m-3 text-orange font-bold" href="./pages/join_partner.php">Sign up your store <svg class=" inline-flex w-4" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
        </svg> </a>
    </div>
    <div class="flex flex-col  md:w-1/3 flex-wrap justify-center text-center ">
      <img class=" h-40" src="./assets/includes/svg/sign.svg" alt="">
      <h2 class="m-2 font-bold text-xl">Become a Foodie</h2>
      <span>we are welcoming you to be a one of our honoured guest(users) to get our seamless service.</span>
      <a class="m-3 text-orange font-bold cursor-pointer" id="reg_link">Register <svg class=" inline-flex w-4" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
        </svg> </a>
    </div>

  </section>

  <section class="revel flex flex-col md:flex-row   md:px-10 px-5 w-full md:space-x-10 items-center  transform translate-y-96 opacity-0 transition  ease-out duration-700">
    <div class="  space-y-5 md:w-1/2 text-center flex flex-col items-center md:items-start md:text-left order-2 md:order-1">
      <div class=" text-indigo-500  font-medium">
        Established Since 2014
      </div>
      <div class=" lg:text-5xl text-4xl text- font-extrabold text-gray-800 ">
        We've been serving for <span class=" inline-block text-white bg-indigo-700 transform -skew-x-12  px-4 pb-2">over 5 years.</span>
      </div>
      <div class="text-gray-500 text-md lg:text-lg">
        Discover local, on-demand delivery or Pickup from restaurants, nearby grocery and convenience stores, and more.
      </div>
      <div class="text-gray-500 text-md lg:text-lg">
        From your neighborhood sushi spot to the burger and fries you crave, choose from over 300,000 local and national favorites across the Sri lanka, U.S., Canada, Australia and more.
      </div>

      <div class=" bg-indigo-600 py-2 px-3 w-auto text-center hover:bg-indigo-700 text-white font-bold rounded-md ">
        <a href="#" class="">Latest offers</a>
      </div>


    </div>
    <div class="md:w-1/2 order-1 md:order-2">
      <img src="./assets/includes/card.png" class=" rounded-max2  " alt="">
    </div>



  </section>

  <section class="revel flex flex-col md:flex-row   md:px-10 px-5 py-10 w-full md:space-x-10 md:space-y-10 items-center transform translate-y-96 opacity-0 transition  ease-out duration-700">

    <div class="md:w-1/2 ">
      <img src="./assets/includes/card.png" class=" rounded-max2  " alt="">
    </div>
    <div class="  space-y-5 md:w-1/2 text-center flex flex-col items-center md:items-start md:text-left">
      <div class=" text-indigo-500  font-medium">
        A Reputed Brand
      </div>
      <div class=" lg:text-5xl text-4xl text- font-extrabold text-gray-800 ">
        Why <span class=" inline-block text-white bg-indigo-700 transform -skew-x-12  px-4 pb-2">Choose Us ?</span>
      </div>
      <div class="text-gray-500 text-md lg:text-lg">
        Foodie is a lead??ing glob??al online food deliv??ery mar??ket??place, con??nect??ing con??sumers with over 580,000 con??nect??ed restau??rants in 25 countries.
      </div>
      <div class="text-gray-500 text-md lg:text-lg flex space-x-12">
        <div>
          <div class=" text-2xl text-gray-800 font-extrabold"> 94000+</div>

          <div class=" text-indigo-500 font-medium">Orders</div>
        </div>
        <div>
          <div class=" text-2xl text-gray-800 font-extrabold">
            11000+
          </div>
          <div class=" text-indigo-500 font-medium">Customers</div>
        </div>
        <div>
          <div class=" text-2xl text-gray-800 font-extrabold">
            1500+
          </div>

          <div class=" text-indigo-500 font-medium">Chefs</div>
        </div>
      </div>

      <div class=" bg-indigo-600 py-2 px-5 w-auto text-center hover:bg-indigo-700 text-white font-bold rounded-md ">
        <a href="#" class="">Order Now</a>
      </div>


    </div>



  </section>


  <footer class="revel transform translate-y-96 opacity-0 transition  ease-out duration-700">

    <?php
    footer("index.php", "pages/foods.php", "pages/join_partner.php", "pages/about_us.php", "pages/contact_us.php");
    ?>
  </footer>

  <!-------------------------------- scripts --------------------------------------->
  <script type="text/javascript" src="./assets/js/jquery.js"></script>
  <script type="text/javascript" src="./assets/js/index.js"></script>



</body>

</html>