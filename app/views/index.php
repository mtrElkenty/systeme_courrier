<?php require 'templates/header.php'; ?>

<?php require 'common/modals/courrier/addCourrier.php'; ?>
<?php require 'common/modals/courrier/courrierDetails.php'; ?>
<?php require 'common/modals/courrier/editCourrier.php'; ?>
<?php require 'common/modals/courrier/confirmDelete.php'; ?>

<?php require 'templates/navbar.php'; ?>

<div class="flex justify-center h-screen">
	<div class="bg-white mx-auto border">
        <div id="courriers" class="container flex">
            <div class="flex flex-col">
                <div class="w-full">
                    <div class="border-b border-gray-200 shadow">
                        <table>
                            <thead class="text-left bg-gray-50">
                                <tr class="courrier-table-header">
                                    <th class="px-6 py-2 text-xs text-black" colspan="2">
                                        Courriers
                                    </th>
                                    <th colspan="6" class="text-right">
                                        <div class="flex justify-end">
                                            <input type="text" onkeypress="getCourriersBy()" id="courrier-search-keyword" name="courrier" placeholder="Search..." class="w-1/3 py-2 border-b-2 border-blue-600 outline-none "/>
                                            <select name="searchBy" id="courrier-by" class="w-1/4 py-2 border-b-2 border-blue-600 outline-none ">
                                                <option value="numero_inscription">Numero inscription</option>
                                                <option value="designateur">Designateur</option>
                                                <option value="destination">Destination</option>
                                                <option value="date_depart">Date Depart</option>
                                                <option value="date_arrive">Date Arrive</option>
                                                <option value="full_name">Nom Employee</option>
                                            </select>
                                        </div>
                                    </th>
                                    <th class="px-6 py-2 text-xs text-black text-right" colspan="2">
                                        <button onclick="addCourrierModal()" class="px-4 py-1 text-sm text-white bg-blue-500 rounded">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </button>
                                    </th>
                                </tr>
                                <tr>
                                    <th class="px-6 py-2 text-xs text-black">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs text-black">
                                        Numero Inscription
                                    </th>
                                    <th class="px-6 py-2 text-xs text-black">
                                        Designateur
                                    </th>
                                    <th class="px-6 py-2 text-xs text-black">
                                        Destination
                                    </th>
                                    <th class="px-6 py-2 text-xs text-black">
                                        Date Depart
                                    </th>
                                    <th class="px-6 py-2 text-xs text-black">
                                        Date Arrivee
                                    </th>
                                    <th class="px-6 py-2 text-xs text-black">
                                        Recu Par
                                    </th>
                                    <th class="px-6 py-2 text-xs text-black">
                                        Date Ajout
                                    </th>
                                    <th class="px-6 py-2 text-xs text-black"></th>
                                    <th class="px-6 py-2 text-xs text-black"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white" id="courriers-list">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'templates/footer.php'; ?>