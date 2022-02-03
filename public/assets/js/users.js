const renderUtilisateurs = (utilisateurs) => {
    let html = ''
    utilisateurs.map(
        u => html += `<tr class="whitespace-nowrap cursor-pointer hover:bg-blue-300">
			<td onclick=displayUtilisateurDetailModal(${u[0]}) class="px-6 py-2 text-sm text-gray-900">
				${u[0]}
			</td>
			<td onclick=displayUtilisateurDetailModal(${u[0]}) class="px-6 py-2 text-sm text-gray-900">
				${u[1]}
			</td>
			<td onclick=displayUtilisateurDetailModal(${u[0]}) class="px-6 py-2 text-sm text-gray-900">
				${u[2]}
			</td>
			<td onclick=displayUtilisateurDetailModal(${u[0]}) class="px-6 py-2 text-sm text-gray-900">
				${u[3]}
			</td>
			<td onclick=displayUtilisateurDetailModal(${u[0]}) class="px-6 py-2 text-sm text-gray-900">
				${u[4]}
			</td>
			<td class="px-6 py-2">
				<button onclick=displayEditUtilisateurModal(${u[0]}) class="px-2 py-1 text-sm text-white bg-blue-500 rounded">
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
				</button>
			</td>
			<td class="px-6 py-2">
				<button onclick=displayUtilisateurConfirmBox(${u[0]}) class="px-2 py-1 text-sm text-white bg-red-500 rounded">
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
				</button>
			</td>
		</tr>`
    )
    return html
}

const renderUtilisateurDetails = (utilisateur) => {
    return `
        <p class="my-3 font-bold text-xl">${utilisateur.username}</p>
        <table class="w-full">
            <tr class="w-full">
                <td class="p-0">
                    <svg class="w-6 h-6 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                </td>
                <td class="w-2/5">
                    Employee
                </td>
                <td class="w-3/5 font-bold text-l">
                    <a onclick=displayEmployeeDetailModal(${utilisateur.employee_id}) class="cursor-pointer border-b-2 border-blue-600 active:outline-none ">
                        ${utilisateur.full_name}
                    </a>
                </td>
            </tr>
            <tr>
                <td class="p-0">
                    <svg class="w-6 h-6 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
                </td>
                <td class="w-2/5">
                    Role
                </td>
                <td class="w-3/5 font-bold text-l">${utilisateur.role}</td>
            </tr>
        </table>
        <div class="py-2 mt-4 flex justify-end">
            <button onclick=displayEditUtilisateurModal(${utilisateur.id}) class="w-1/3 mr-4 flex justify-center px-2 py-1 text-sm text-white bg-blue-500 rounded">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                Modifier
            </button>
            <button onclick=displayUtilisateurConfirmBox(${utilisateur.id}) class="w-2/3 flex justify-center px-2 py-1 text-sm text-white bg-red-500 rounded">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                Supprimer
            </button>
        </div>
        <a onclick=showChangePasswordForm(${utilisateur.id}) class="w-full mr-4 flex justify-end px-2 py-1 text-sm text-blue-800 rounded cursor-pointer">
            Changer Password
        </a>`
}

const renderUtilisateurEmployeeOptions = (employees) => {
    let html = `
    <select class="w-full" id="employee_id" name="employee_id">
        <option class="" value="">Employees</option>`
    employees.map(e => html += `
        <option class="" value="${e[0]}">${e[1]}</option>
    `)
    html += `</select>`

    return html
}

const renderUtilisateurRoleOptions = (roles) => {
    let html = `
    <select class="w-full" id="role_id" name="role_id">
        <option class="" value="">Roles</option>`
    roles.map(r => html += `
        <option class="" value="${r[0]}">${r[1]}</option>
    `)
    html += `</select>`

    return html
}

const getAllUtilisateurs = async() => {
    return await request('admin/getAllUtilisateurs')
}

const addUtilisateurModal = async() => {
    const employee_res = await getAllEmployees()
    const role_res = await getAllRoles()

    document.getElementById('employee-options').innerHTML = renderUtilisateurEmployeeOptions(employee_res.employees)
    document.getElementById('role-options').innerHTML = renderUtilisateurRoleOptions(role_res.roles)
    document.getElementById('add-utilisateur').style.display = 'flex'
}

const displayUtilisateurDetailModal = async(id) => {
    const url = 'admin/getUtilisateursBy?by=id&keyword=' + id
    const method = 'GET'
    const res = await request(url, method)

    if (res.ok) {
        const html = renderUtilisateurDetails(res.utilisateurs)
        document.getElementById('utilisateur-details-div').innerHTML = html
    }
    document.getElementById('utilisateur-details').style.display = 'flex'
}

const displayEditUtilisateurModal = async(id) => {
    const employee_res = await getAllEmployees()
    const role_res = await getAllRoles()

    document.getElementById('edit-employee-options').innerHTML = renderUtilisateurEmployeeOptions(employee_res.employees)
    document.getElementById('edit-role-options').innerHTML = renderUtilisateurRoleOptions(role_res.roles)

    const url = 'admin/getUtilisateursBy?by=id&keyword=' + id
    const method = 'GET'
    const res = await request(url, method)

    if (res.ok) {
        const form = document.getElementById('edit-utilisateur-form')
        for (var i = 0; i < form.length - 1; i++) {
            form[i].value = res.utilisateurs[form[i].name]
        }
    }

    document.getElementById('edit-utilisateur').style.display = 'flex'
}

const showChangePasswordForm = (id) => {
    document.getElementById("change-pass-user-id").value = id
    document.getElementById("change-password-div").style.display = 'block'
}

const displayUtilisateurConfirmBox = async(id) => {
    const url = 'admin/getUtilisateursBy?by=id&keyword=' + id
    const method = 'GET'
    const res = await request(url, method)
    document.getElementById('utilisateur-id').value = id
    document.getElementById('utilisateur-name').innerText = res.utilisateurs.full_name
    document.getElementById('delete-utilisateur').style.display = 'flex'
}

const getUtilisateursBy = async() => {
    const keyword = document.getElementById('users-search-keyword').value
    const searchBy = document.getElementById('users-by').value

    const url = 'admin/getUtilisateursBy?keyword=' + keyword + '&by=' + searchBy
    const method = 'GET'
    const res = await request(url, method)

    if (res.ok)
        document.getElementById('utilisateurs-list').innerHTML = renderUtilisateurs(res.utilisateurs)
    else {
        document.getElementById('error-container').style.display = 'block'
        setAlertMessage('error-title', 'Error')
        setAlertMessage('error-message', res.error)
    }
}

const submitAddUtilisateur = async(event) => {
    event.preventDefault()

    const form = document.getElementById('add-utilisateur-form')

    const url = form.action
    const method = form.method
    const formData = new FormData(form)

    const res = await request(url, method, formData)

    if (res.ok) {
        const data = await getAllUtilisateurs()
        if (data.ok) {
            const html = renderUtilisateurs(data.utilisateurs)
            document.getElementById('utilisateurs-list').innerHTML = html
            form.reset()
        }
    } else {
        document.getElementById('error-container').style.display = 'block'
        setAlertMessage('error-title', 'Error')
        setAlertMessage('error-message', res.error)
    }
}

const submitEditUtilisateur = async(event) => {
    event.preventDefault()

    const form = document.getElementById('edit-utilisateur-form')

    const url = form.action
    const method = form.method
    const formData = new FormData(form)

    const res = await request(url, method, formData)

    if (res.ok) {
        const data = await getAllUtilisateurs()
        if (data.ok) {
            const html = renderUtilisateurs(data.utilisateurs)
            document.getElementById('utilisateurs-list').innerHTML = html
            form.reset()
            closeModal('edit-utilisateur')
        }
    } else {
        document.getElementById('error-container').style.display = 'block'
        setAlertMessage('error-title', 'Error')
        setAlertMessage('error-message', res.error)
    }
}

const submitChangePassword = async(event) => {
    event.preventDefault()

    const form = document.getElementById('change-password-form')

    const url = form.action
    const method = form.method
    const formData = new FormData(form)

    const res = await request(url, method, formData)

    if (res.ok) {
        console.log(res)
    } else {
        console.log(res)
            // document.getElementById('error-container').style.display = 'block'
            // setAlertMessage('error-title', 'Error')
            // setAlertMessage('error-message', res.error)
    }

}

const addUtilisateurForm = document.getElementById('add-utilisateur-form')
addUtilisateurForm && (addUtilisateurForm.onsubmit = submitAddUtilisateur)

const editUtilisateurForm = document.getElementById('edit-utilisateur-form')
editUtilisateurForm && (editUtilisateurForm.onsubmit = submitEditUtilisateur)

const changePasswordForm = document.getElementById('change-password-form')
changePasswordForm && (changePasswordForm.onsubmit = submitChangePassword)
