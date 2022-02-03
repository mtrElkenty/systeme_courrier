<?php require 'templates/header.php'; ?>

<!-- Container -->
<div class="container mx-auto">
   <div class="flex justify-center px-6 my-12">
      <!-- Row -->
      <div class="w-full xl:w-2/4 lg:w-6/12 flex">
         <!-- Col -->
         <div class="w-full bg-white p-5 rounded-lg lg:rounded-l-none">
            <h3 class="pt-4 text-2xl text-center">Accedez Votre Compte!</h3>
            <form id="loginForm" action="login/auth" method="POST" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
               <div class="mb-4">
                  <label class="block mb-2 text-m font-bold text-gray-700" for="username">
                     Username
                  </label>
                  <input
                     autocomplete="off"
                     class="w-full px-3 py-2 mb-3 border-b-2 border-blue-600 outline-none "
                     id="username"
                     name="username"
                     type="text"
                     placeholder="Username"/>
               </div>
               <div class="mb-4">
                  <label class="block mb-2 text-m font-bold text-gray-700" for="password">
                     Password
                  </label>
                  <input
                     class="w-full px-3 py-2 mb-3 border-b-2 border-blue-600 outline-none "
                     id="password"
                     name="password"
                     type="password"
                     placeholder="******************" />
               </div>
               <div class="mb-6 text-center">
                  <button
                     class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                     type="submit">
                     Connecter
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<?php require 'templates/footer.php'; ?>







<!-- <section class="bg-[#F4F7FF] py-20 lg:py-[120px]">
   <div id="error-container">
      <div>
         <h5 class="error-header">
            <svg class="error-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <i id="error-title">Error</i>
         </h5>
         <p id="error-message">error message</p>
      </div>
      <div></div>
   </div>

   <div class="container">
      <div class="flex flex-wrap -mx-4">
         <div class="w-full px-4">
            <div class=" max-w-[525px] mx-auto text-center bg-white rounded-lg relative overflow-hidden py-16 px-10 sm:px-12 md:px-[60px]">
               <div class="mb-10 md:mb-16 text-center">
                  <a href="javascript:void(0)" class="inline-block max-w-[160px] mx-auto">
                     <img src="/systeme_courrier/public/images/logo.png" width="100" height="100" alt="logo" />
                  </a>
               </div>
               <form id="loginForm" action="login/auth" method="POST">
                  <div class="mb-6">
                     <input type="text" placeholder="Username" name="username" class=" w-full rounded-md border bordder-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-body-color placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-primary" />
                  </div>
                  <div class="mb-6">
                     <input type="password" name="password" placeholder="Password" class=" w-full rounded-md border bordder-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-body-color placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-primary" />
                  </div>
                  <div class="mb-10">
                     <input type="submit" value="Connecter" class=" w-full rounded-md border bordder-primary py-3 px-5 bg-primary text-base text-white cursor-pointer hover:bg-opacity-90 transition" />
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section> -->