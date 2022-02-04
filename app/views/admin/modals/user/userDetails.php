<div class="min-w-screen h-screen hidden animated fadeIn faster fixed left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover" id="user-details">
	<div onclick="closeModal('user-details')" class="absolute bg-black opacity-80 inset-0 z-0"></div>
	<div class="w-full max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white">
		<div class="w-full bg-white rounded-lg lg:rounded-l-none">
			<div id="user-details-div"></div>
			<div id="change-password-div" class="hidden">
				<form id="change-password-form" action="user/changeUserPassword" method="POST">
					<input name="id" type="hidden" id="change-pass-user-id">
					<div class="flex w-full">
						<input type="password" name="new-password" placeholder="Nouveau Password" class="w-2/3 px-3 py-2 text-sm leading-tight text-gray-900 border-b-2 border-blue-600 outline-none  shadow appearance-none focus:outline-none focus:shadow-outline">
						<input type="submit" value="Changer" class="w-1/3 px-3 py-2 text-sm leading-tight text-blue-600 border-2 border-blue-600 outline-none hover:bg-blue-600 hover:text-white shadow appearance-none focus:outline-none focus:shadow-outline">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>