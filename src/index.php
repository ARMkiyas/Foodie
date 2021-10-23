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

<body>

  <section class="bg-image bg-cover w-screen">


    <?php
    nav("index.php", "pages/foods.php", "pages/join_partner.php", "pages/about_us.php", "pages/contact_us.php");
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

  <div class="model fixed z-10 inset-0 hidden justify-center  items-center overflow-y-auto bg-black  bg-opacity-75 opacity-0 transition ease-in-out duration-1000 "  role="dialog" >
    <div class="model-body transform scale-0 opacity-0 transition ease-in-out duration-500 ">
      <button class="self-end " id="model_btn">
        <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
      <div class="font-logo font-semibold text-3xl self-center text-pink-500">
        Foodie
      </div>
      <div class=" font-bold text-xl self-center">
        Sign in to your account
      </div>
      <form action="#" class="">

        <div class="p-2">
          <label for="name" class="form_lable">Email Address</label>
          <input type="text" class=" form_control" id="name" placeholder="abc@example.com">
          <div class="text-xs text-red-600 px-1 hidden">Invalid email</div>
        </div>

        <div class="p-2">
          <label for="name" class="form_lable">Password</label>
          <input type="password" class=" form_control " id="password" placeholder="************">
          <div class="text-xs text-red-600 px-1 hidden">Invalid email</div>
        </div>

        <div class="p-2 flex justify-between">
          <div class=" font-medium text-gray-700 "><input type="checkbox" name="remember" id="" class="mr-1">Remember me</input></div>
          <a href="#" class=" text-indigo-500 hover:text-indigo-600 font-bold"> Forgot your password?</a>
        </div>

        <div class="p-2 py-5">
          <button class="bg-indigo-600 form_control text-white font-semibold hover:bg-indigo-700">
            Login
          </button>
        </div>

      </form>
      <hr>
      <div class="p-2 text-center font-semibold text-gray-600 hover:text-gray-800 text-md">
        <a href="#">Don't have a Account</a>
      </div>
    </div>
  </div>




  <script type="text/javascript" src="./assets/js/index.js"></script>


</body>

</html>