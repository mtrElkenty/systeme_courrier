<?php require 'header.php'; ?>

<?php require 'navbar.php'; ?>

<div class="container flex justify-center mx-auto">
    <div class="flex flex-col">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">
                <table>
                    <thead class="bg-gray-50">
                        <tr class="employee-table-header">
                            <th class="px-6 py-2 text-xs text-black" colspan="2">
                              Employees
                            </th>
                            <th colspan="4">
                              <div class="text-center flex-auto">
                                <input type="text" onkeypress="getEmployeesBy()" id="search-keyword" name="employee" placeholder="Search..." class=" w-1/3 py-2 border-b-2 border-blue-600 outline-none "/>
                                <select name="searchBy" id="by" class="w-1/4 py-2 border-b-2 border-blue-600 outline-none ">
                                  <option value="full_name">Nom</option>
                                  <option value="phone">Phone</option>
                                  <option value="email">Email</option>
                                  <option value="job_title">Position</option>
                                </select>
                              </div>
                            </th>
                            <th class="px-6 py-2 text-xs text-black text-right" colspan="2">
                              <button class="px-4 py-1 text-sm text-white bg-blue-500 rounded">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                              </button>
                            </th>
                        </tr>
                        <tr>
                            <th class="px-6 py-2 text-xs text-black">
                                ID
                            </th>
                            <th class="px-6 py-2 text-xs text-black">
                                Nom
                            </th>
                            <th class="px-6 py-2 text-xs text-black">
                                Phone
                            </th>
                            <th class="px-6 py-2 text-xs text-black">
                                Email
                            </th>
                            <th class="px-6 py-2 text-xs text-black">
                                Posotion
                            </th>
                            <th class="px-6 py-2 text-xs text-black">
                                Date Ajout
                            </th>
                            <th class="px-6 py-2 text-xs text-black">
                                Edit
                            </th>
                            <th class="px-6 py-2 text-xs text-black">
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                      <?php foreach ($data['employees'] as $employee) { ?>
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-sm text-gray-900">
                                <?= $employee['id'] ?>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">
                                <?= $employee['full_name'] ?>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">
                                <?= $employee['phone'] ?>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">
                                <?= $employee['email'] ?>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">
                                <?= $employee['created_at'] ?>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">
                                <?= $employee['full_name'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <button class="px-4 py-1 text-sm text-white bg-blue-500 rounded">
                                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                </button>
                            </td>
                            <td class="px-6 py-4">
                                <button class="px-4 py-1 text-sm text-white bg-red-500 rounded">
                                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>