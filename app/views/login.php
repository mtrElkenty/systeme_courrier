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
                     required
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
                     required
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