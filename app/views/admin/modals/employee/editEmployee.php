<div class="min-w-screen h-screen hidden animated fadeIn faster fixed left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover" id="edit-employee">
	<div onclick="closeModal('edit-employee')" class="absolute bg-black opacity-80 inset-0 z-0"></div>
	<div class="w-full max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white">
		<div class="w-full bg-white rounded-lg lg:rounded-l-none">
			<h3 class="text-3xl text-center">Modifier Employee!</h3>
			<form id="edit-employee-form" action="employee/editEmployee" method="POST" class="px-6 pt-6 pb-8 mb-4 bg-white rounded">
				<input id="employee-id" type="hidden" name="id" />
				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-800 flex align-items-center" for="full_name">
						<svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
						Nom Complet
					</label>
					<input class="w-full px-3 py-2 text-sm leading-tight text-gray-900 border-b-2 border-blue-600 outline-none  shadow appearance-none focus:outline-none focus:shadow-outline" type="text" name="full_name" placeholder="Nom Complet" />
				</div>
				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-800 flex align-items-center" for="phone">
						<svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
						Telephone
					</label>
					<input class="w-full px-3 py-2 text-sm leading-tight text-gray-900 border-b-2 border-blue-600 outline-none  shadow appearance-none focus:outline-none focus:shadow-outline" type="number" name="phone" placeholder="Telephone" />
				</div>
				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-800 flex align-items-center" for="email">
						<svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
						Email
					</label>
					<input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-900 border-b-2 border-blue-600 outline-none  shadow appearance-none focus:outline-none focus:shadow-outline"  type="email" name="email" placeholder="Email"/>
				</div>
				<div class="mb-4">
					<label class="block mb-2 text-sm font-bold text-gray-800 flex align-items-center" for="job_title">
						<svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
						Position
					</label>
					<input class="w-full px-3 py-2 text-sm leading-tight text-gray-900 border-b-2 border-blue-600 outline-none  shadow appearance-none focus:outline-none focus:shadow-outline" type="text" name="job_title" placeholder="Position" />
				</div>
				<div class="mb-6 text-center">
					<button class="w-full flex justify-center px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit">
						<svg class="w-6 h-6 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
						</svg>
						Modifier Employee
					</button>
				</div>
			</form>
		</div>
	</div>
</div>