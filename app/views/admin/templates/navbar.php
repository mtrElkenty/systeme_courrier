<div class="relative bg-white">
	<div class="max-w-7xl mx-auto px-4 sm:px-6">
		<div class="flex justify-between items-center border-b-2 border-gray-100 pb-6 md:justify-start md:space-x-10">
			<div class="flex justify-start lg:w-0 lg:flex-1">
				<a href="">
				  <span class="sr-only">Systeme Courrier</span>
				  <img class="h-8 w-auto sm:h-10" src="/systeme_courrier/public/images/logo.png" alt="">
				</a>
			</div>
			<div class="-mr-2 -my-2 md:hidden">
				<button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
					<span class="sr-only">Open menu</span>
					<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
					</svg>
				</button>
			</div>
			<nav class="hidden md:flex space-x-10">
				<ul class="flex justify-center items-center my-4">
					<li class="cursor-pointer py-2 px-4 text-gray-900 border-b-2"
						:class="activeTab===0 ? 'text-blue-700 border-blue-500' : ''" @click="activeTab = 0">Employees</li>
					<li class="cursor-pointer py-2 px-4 text-gray-900 border-b-2"
						:class="activeTab===1 ? 'text-blue-700 border-blue-500' : ''" @click="activeTab = 1">Courrier</li>
					<li class="cursor-pointer py-2 px-4 text-gray-900 border-b-2"
						:class="activeTab===2 ? 'text-blue-700 border-blue-500' : ''" @click="activeTab = 2">Users</li>
				</ul>
			</nav>

			<div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
				<?php

				if (isset($_SESSION['user']) && strpos($_SERVER['REQUEST_URI'], 'login') == false)
					echo '<a href="#" onclick="logout()" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-red-600 hover:bg-white hover:text-red-700">
							Deconnecter
						</a>';
				?>
			</div>
		</div>
	</div>
</div>
