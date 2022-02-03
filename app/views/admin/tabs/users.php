<div class="flex flex-col">
    <div class="w-full">
        <div class="border-b border-gray-200 shadow">
            <table>
                <thead class="text-left bg-gray-50">
                    <tr class="utilisateur-table-header">
                        <th class="px-6 py-2 text-xs text-black" colspan="2">
                          Utilisateurs
                        </th>
                        <th colspan="4" class="text-right">
                          <div class="flex justify-end">
                            <input type="text" onkeypress="getUtilisateursBy()" id="users-search-keyword" name="utilisateur" placeholder="Search..." class="w-1/3 py-2 border-b-2 border-blue-600 outline-none "/>
                            <select name="searchBy" id="users-by" class="w-1/4 py-2 border-b-2 border-blue-600 outline-none ">
                                <option value="full_name">Nom Employee</option>
                                <option value="username">Username</option>
                                <option value="role">Role</option>
                            </select>
                          </div>
                        </th>
                        <th class="px-6 py-2 text-xs text-black text-right" colspan="2">
                          <button onclick="addUtilisateurModal()" class="px-4 py-1 text-sm text-white bg-blue-500 rounded">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                          </button>
                        </th>
                    </tr>
                    <tr>
                        <th class="px-6 py-2 text-xs text-black">
                            ID
                        </th>
                        <th class="px-6 py-2 text-xs text-black">
                            Username
                        </th>
                        <th class="px-6 py-2 text-xs text-black">
                            Employee
                        </th>
                        <th class="px-6 py-2 text-xs text-black">
                            Role
                        </th>
                        <th class="px-6 py-2 text-xs text-black">
                            Date Ajout
                        </th>
                        <th class="px-6 py-2 text-xs text-black"></th>
                        <th class="px-6 py-2 text-xs text-black"></th>
                    </tr>
                </thead>
                <tbody class="bg-white" id="utilisateurs-list">
                </tbody>
            </table>
        </div>
    </div>
</div>