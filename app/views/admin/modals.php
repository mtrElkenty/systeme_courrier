<div class="min-w-screen h-screen animated fadeIn faster fixed left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover" id="add-employee">
  <div onclick="closeModal('add-employee')" class="absolute bg-black opacity-80 inset-0 z-0"></div>
  <div class="w-full max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white">
    <div class="w-full bg-white rounded-lg lg:rounded-l-none">
      <h3 class="text-3xl text-center">Ajouter Employee!</h3>
      <form id="add-employee-form" action="admin/addEmployee" method="POST" class="px-6 pt-6 pb-8 mb-4 bg-white rounded">
        <div class="mb-4">
          <label class="block mb-2 text-sm font-bold text-gray-800" for="full_name">Nom Complet</label>
          <input class="w-full px-3 py-2 text-sm leading-tight text-gray-900 border rounded shadow appearance-none focus:outline-none focus:shadow-outline border-b-2 border-blue-600 outline-none " type="text" name="full_name" placeholder="Nom Complet" />
        </div>
        <div class="mb-4">
          <label class="block mb-2 text-sm font-bold text-gray-800" for="phone">Telephone</label>
          <input class="w-full px-3 py-2 text-sm leading-tight text-gray-900 border rounded shadow appearance-none focus:outline-none focus:shadow-outline border-b-2 border-blue-600 outline-none " type="number" name="phone" placeholder="Telephone" />
        </div>
        <div class="mb-4">
          <label class="block mb-2 text-sm font-bold text-gray-800" for="email">Email</label>
          <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-900 border rounded shadow appearance-none focus:outline-none focus:shadow-outline border-b-2 border-blue-600 outline-none "  type="email" name="email" placeholder="Email"/>
        </div>
        <div class="mb-4">
          <label class="block mb-2 text-sm font-bold text-gray-800" for="job_title">Position</label>
          <input class="w-full px-3 py-2 text-sm leading-tight text-gray-900 border rounded shadow appearance-none focus:outline-none focus:shadow-outline border-b-2 border-blue-600 outline-none " type="text" name="job_title" placeholder="Position" />
        </div>
        <div class="mb-6 text-center">
          <button class="w-full flex justify-center px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="button" onclick="submitAddEmployee()">
              <svg class="w-6 h-6 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
              </svg> Ajouter
          </button>
        </div>
      </form>
    </div>
  </div>
</div>