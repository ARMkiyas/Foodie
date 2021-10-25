<?php



require_once('components/nav_bar.php');


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

<body class=" ">

  <section class="bg-image bg-cover w-screen">


    <?php
    nav("index.php", "pages/foods.php", "pages/join_partner.php", "pages/about_us.php", "pages/contact_us.php",1);

    login_design();
    reg_form();
    ?>



    <div class="self-center text-center px-20 lg:px-44 lg:py-44">

      <div class="text-white font-extrabold text-3xl">
        Expolre <br>
      </div>
      <span class="text-white  font-semibold text-2xl">Your favorite foods</span>

      <div class="mt-5 ">
        <label for="search" class="relative flex justify-center">
          <input id="search" class="text-center w-full py-2 rounded-full  outline-white border-2 border-transparent focus:border-blue-400" type="text" name="search" value="" placeholder="Search">
          <button class="absolute top-1 bottom-1 rounded-full px-3 text-white bg-red-500 hover:bg-red-600 right-1"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg></button>
        </label>


      </div>

    </div>


  </section>
  <section class="m-10 flex flex-col md:flex-row md:justify-evenly">
    <div class="flex md:w-1/3 flex-col flex-wrap justify-center text-center ">
      <img class=" h-40 " src="./assets/includes/svg/food_find.svg" alt="">
      <h2 class="m-2 font-bold text-xl">Find Your Favorite Food</h2>
      <span>Grow your business and reach new customers by partnering with us.</span>
      <a class="m-3 text-orange font-bold" href="./pages/join_partner.php">Start Explore <svg class=" inline-flex w-4" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
        </svg> </a>
    </div>
    <div class="flex flex-col md:w-1/3 flex-wrap justify-center text-center ">
      <img class=" h-40" src="./assets/includes/svg/Storefront.svg" alt="">
      <h2 class="m-2 font-bold text-xl">Become a Partner</h2>
      <span>Grow your business and reach new customers by partnering with us.</span>
      <a class="m-3 text-orange font-bold" href="/public/pages/join_partner.php">Sign up your store <svg class=" inline-flex w-4" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
        </svg> </a>
    </div>
    <div class="flex flex-col  md:w-1/3 flex-wrap justify-center text-center ">
      <img class=" h-40" src="./assets/includes/svg/sign.svg" alt="">
      <h2 class="m-2 font-bold text-xl">Become a Foodie</h2>
      <span>we are welcoming you to be a one of our honoured guest(users) to get our seamless service.</span>
      <a class="m-3 text-orange font-bold" href="./pages/join_partner.php">Register <svg class=" inline-flex w-4" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
        </svg> </a>
    </div>

  </section>

 


   <!-------------------------------- scripts --------------------------------------->
  <script type="text/javascript" src="./assets/js/jquery.js"></script>
  <script type="text/javascript" src="./assets/js/index.js"></script>


</body>

</html>