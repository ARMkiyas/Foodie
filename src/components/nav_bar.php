<?php

function nav($home_link, $food_link, $become_parner_link, $about_us_link, $contact_us_link,$no)
{

  echo  "
        <nav class=\"px-5 overflow-hidden w-screen flex lg:justify-between lg:items-center justify-between\">
    
          <div class=\" logo\">
            Foodie
          </div>
    
    
          <ul class=\"flex flex-col lg:flex-row text-gray font-bold  lg:space-x-5 items-center invisible lg:visible\">
            <li class=\"text-blue-600\"><a href=\"${home_link}\">Home</a></li>
            <li class=\"\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" stroke=\"currentColor\" class=\"w-4 invisible lg:visible h-4 lg:current-fill\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z\" />
              </svg>
            </li>
            <li class=\"nav_hover\"><a href=\"$food_link\"/>Foods</a></li>
            <li class=\"\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" stroke=\"currentColor\" class=\"w-4 h-4 invisible lg:visible lg:current-fill\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z\" />
              </svg>
            </li>
            <li class=\"nav_hover\"><a href=\"$become_parner_link\">Become a Partner</a></li>
            <li class=\"\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" stroke=\"currentColor\" class=\"w-4 invisible lg:visible h-4 lg:current-fill\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z\" />
              </svg>
            </li>
            <li class=\"nav_hover\"><a href=\"$about_us_link\">About us</a></li>
            <li class=\"\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" stroke=\"currentColor\" class=\"w-4 invisible lg:visible h-4 lg:current-fill\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z\" />
              </svg>
            </li>
            <li class=\"nav_hover\"><a href=\"$contact_us_link\">Contact US</a></li>
    
          </ul>
    
    
          <div class=\"lg:m-2 flex lg:space-x-3 invisible lg:visible\">
            <button class=\"log_btn\" id=\"sign_btn\">Sign in</button>
            <button class=\"log_btn\" id=\"reg_btn\">Register</button>
          </div>
    
          <!-- nav for mobile -->
          <div class=\"mr-2 mt-1 lg:hidden\">
            <button id=\"nav_btn\">
              <svg class=\" overflow-hidden h-6 w-8 fill-current text-blue-600\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
                <title>Mobile menu</title>
                <path d=\"M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z\"></path>
              </svg>
            </button>
          </div>
    
        </nav>
    
    
        <div class=\" \">
          <nav class=\" nav z-10 fixed bottom-0 top-0 inset-x-0 bg-white md:flex flex-col w-3/6 border-r overflow-y-auto transform -translate-x-full  lg:-translate-x-full transition duration-300 ease-in-out\">
            <div class=\"flex justify-between m-4 font-bold\">
            <div class=\" font-logo  font-semibold text-3xl text-pink-500\">
            Foodie
          </div>
              <div>
                <button id=\"nav_close\">
                  <svg class=\"h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"></path>
                  </svg>
                </button>
              </div>
            </div>
            <ul class=\"flex flex-col justify-center justify-items-stretch mx-5\">
              <li class=\"p-3 text-gray-400 hover:bg-blue-50 rounded-xl cursor-pointer mb-1 hover:text-blue-600  font-semibold text-md\">
                <a href=\"$home_link\">Home</a>
              </li>
              <li class=\"p-3 text-gray-400 hover:bg-blue-50 rounded-xl cursor-pointer mb-1 hover:text-blue-600  font-semibold text-md\">
                <a href=\"$food_link\">Find Food</a>
              </li>
              <li class=\"p-3 text-gray-400 hover:bg-blue-50 rounded-xl cursor-pointer mb-1 hover:text-blue-600  font-semibold text-md\">
                <a href=\"$become_parner_link\">Become a Partner</a>
              </li>
              <li class=\"p-3 text-gray-400 hover:bg-blue-50 rounded-xl cursor-pointer mb-1 hover:text-blue-600  font-semibold text-md\">
                <a href=\"$about_us_link\">About Us</a>
              </li>
              <li class=\"p-3 text-gray-400 hover:bg-blue-50 rounded-xl cursor-pointer mb-1 hover:text-blue-600  font-semibold text-md\">
                <a href=\"$contact_us_link\">Contact US</a>
              </li>
    
    
    
            </ul>
    
    
            <div class=\"my-auto mx-5 text-center\">
    
              <div class=\"mt-4\" id=\"sign_mobile\">
                <button class=\"p-3 bg-gray-100 min-w-full rounded-xl font-semibold hover:bg-gray-200\">
                  Sign in
                </button>
                <button class=\"p-3 bg-blue-500 min-w-full rounded-xl font-semibold hover:bg-blue-600 my-2 text-white\">
                  Register
                </button>
              </div>
              <p class=\"my-4 text-xs text-center text-gray-400\" id=\"reg_mobile\">
                <span>Copyright © 2021</span>
              </p>
            </div>
          </nav>
    
        </div>
   ";
}


function login_design()
{

  echo ' <div class="model hidden opacity-0 transition ease-in-out duration-1000 " role="dialog">
    <div class="model-body transform scale-0 opacity-0 transition ease-in-out duration-500 ">
      <button class="self-end " id="model_btn">
        <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
      <div class="logo self-center">
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
          <button class="submit_btn">
            Login
          </button>
        </div>

      </form>
      <hr>
      <div class="p-2 text-center font-semibold text-gray-600 hover:text-gray-800 text-md">
        <a href="#" id="goto_reg">Don\'t have a Account</a>
      </div>
    </div>
    </div>
        ';
}



function reg_form()
{
  echo ' <div class="model  hidden opacity-0 transition ease-in-out duration-1000 " role="dialog">
  <div class="model-body-reg transform scale-0 opacity-0 transition ease-in-out duration-500">
    <button class="self-end " id="model_btn_reg">
      <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>
    <div class="logo self-center">
      Foodie
    </div>
    <div class=" font-bold text-xl self-center">
      Create your Account
    </div>
    <form action="#" class="">

      <div class="p-2">
        <label for="name" class="form_lable">Full Name</label>
        <input type="text" class=" form_control" id="name" placeholder="Mohammed Kiyas">
        <div class="text-xs text-red-600 px-1 hidden">Invalid email</div>
      </div>

      <div class="p-2">
        <label for="email" class="form_lable">Email</label>
        <input type="text" class=" form_control" id="email" placeholder="abc@example.com">
        <div class="text-xs text-red-600 px-1 hidden">Invalid email</div>
      </div>

      <div class="p-2">
        <label for="phone" class="form_lable">Phone No</label>
        <input type="text" class=" form_control" id="phone" placeholder="0771234567">
        <div class="text-xs text-red-600 px-1 hidden">Invalid email</div>
      </div>

      <!-- <fieldset class="p-3 mx-3.5 border-2">
        <legend>Delivery Information<sup>*</sup></legend>

        <div class="p-2 ">

          <div class="p-2">
            <label for="name" class="form_lable">Address</label>
            <input type="text" class=" form_control" id="name" placeholder="No.488/A, Belagama Road Kelanimulla, Angoda">
            <div class="text-xs text-red-600 px-1 hidden">Invalid email</div>
          </div>
          <div class="p-2">
            <label for="name" class="form_lable">Country</label>
            <input type="text" class=" form_control" id="name" placeholder="Sri lanka">
            <div class="text-xs text-red-600 px-1 hidden">Invalid email</div>
          </div>
       


        </div>
      </fieldset> -->
      <div class="p-2">
        <label for="country" class="form_lable">Select your Country</label>
        <select class="form_control custom-select">
          <option value="select">select</option>

        </select>
        <div class="text-xs text-red-600 px-1 hidden">Invalid email</div>
      </div>
      <div class="sm:flex sm:w-full">
        <div class="p-2 sm:w-full">
          <label for="password" class="form_lable">Password</label>
          <input type="password" class=" form_control " id="password" placeholder="************">
          <div class="text-xs text-red-600 px-1 hidden">Invalid email</div>
        </div>
        <div class="p-2 sm:w-full">
          <label for="con_password" class="form_lable">Confirm Password</label>
          <input type="password" class=" form_control " id="con_password" placeholder="************">
          <div class="text-xs text-red-600 px-1 hidden">Invalid email</div>
        </div>
      </div>

      <div class="lg:flex w-full justify-between">
        <!-- gender  -->
        <div class="p-2 w-full justify-around ">
          <label for="gender " class="form_lable">Gender</label>

          <div class="ml-4 flex">
            <div class="w-2/6 mr-2">
              <input type="radio" class="hidden " name="gender" id="male">
              <label class="gender_radio" for="male">
                <span>Male</span>

              </label>

            </div>
            <div class="w-2/6">
              <input type="radio" class="hidden" name="gender" id="female">
              <label class="gender_radio " for="female">
                <span>Female</span>

              </label>

            </div>
          </div>


        </div>
        <div class="p-2 w-full">
          <label for="file" class="form_lable">Profile Picture</label>

          <input type="file" class=" opacity-0 cursor-pointer  absolute" id="file" placeholder="abc@example.com">
          <div class=" inline-flex p-2 bg-green-500 rounded-full text-white justify-between font-sans font-medium cursor-pointer w-full ml-1"> <span>Choose a photo</span> <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
            </svg></div>
          <div class="text-xs text-red-600 px-1 hidden">Invalid email</div>
        </div>

      </div>

      <div class="p-2 py-5">
        <button class="submit_btn">
          Register
        </button>
      </div>

    </form>
    <hr>
    <div class="p-2 text-center font-semibold text-gray-600 hover:text-gray-800 text-md">
      <a href="#" id="go_to_login">I already have an account</a>
    </div>
  </div>
</div>';
}
