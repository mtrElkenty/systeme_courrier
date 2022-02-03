const renderEmployees = (employees) => {
    let html = ''
    employees.map(
        e => html += `<tr class="whitespace-nowrap cursor-pointer hover:bg-blue-300">
			<td onclick=displayEmployeeDetailModal(${e[0]}) class="px-6 py-2 text-sm text-gray-900">
				${e[0]}
			</td>
			<td onclick=displayEmployeeDetailModal(${e[0]}) class="px-6 py-2 text-sm text-gray-900">
				${e[1]}
			</td>
			<td onclick=displayEmployeeDetailModal(${e[0]}) class="px-6 py-2 text-sm text-gray-900">
				${e[3]}
			</td>
			<td onclick=displayEmployeeDetailModal(${e[0]}) class="px-6 py-2 text-sm text-gray-900">
				${e[4]}
			</td>
			<td onclick=displayEmployeeDetailModal(${e[0]}) class="px-6 py-2 text-sm text-gray-900">
				${e[2]}
			</td>
			<td onclick=displayEmployeeDetailModal(${e[0]}) class="px-6 py-2 text-sm text-gray-900">
				${e[5]}
			</td>
			<td class="px-6 py-2">
				<button onclick=displayEditEmployeeModal(${e[0]}) class="px-2 py-1 text-sm text-white bg-blue-500 rounded">
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
				</button>
			</td>
			<td class="px-6 py-2">
				<button onclick=displayEmployeeConfirmBox(${e[0]}) class="px-2 py-1 text-sm text-white bg-red-500 rounded">
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
				</button>
			</td>
		</tr>`
    )
    return html
}

const renderEmployeeDetails = (employee) => {
    return `
            <p class="my-3 font-bold text-xl flex">
                <svg class="w-6 h-6 mt-1 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                ${employee.full_name}
            </p>
            <table class="w-full">
                <tr class="w-full">
                    <td class="py-1">
                        <svg class="w-6 h-6 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </td>
                    <td class="w-2/5">
                        Phone
                    </td>
                    <td class="w-3/5 font-bold text-l">${employee.phone}</td>
                </tr>
                <tr>
                    <td class="py-1">
                        <svg class="w-6 h-6 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
                    </td>
                    <td class="w-2/5">
                        Email
                    </td>
                    <td class="w-3/5 font-bold text-l">${employee.email}</td>
                </tr>
                <tr>
                    <td class="py-1">
                        <svg class="w-6 h-6 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </td>
                    <td class="w-2/5">
                        Position
                    </td>
                    <td class="w-3/5 font-bold text-l">${employee.job_title}</td>
                </tr>
            </table>
            <p>Voir Les Courriers Par Cet Employee</p>
            <div class="py-2 mt-4 flex justify-end">
                <button onclick=displayEditEmployeeModal(${employee.id}) class="w-1/3 mr-4 flex justify-center px-2 py-1 text-sm text-white bg-blue-500 rounded">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    Modifier
                </button>
                <button onclick=displayEmployeeConfirmBox(${employee.id}) class="w-2/3 flex justify-center px-2 py-1 text-sm text-white bg-red-500 rounded">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    Supprimer
                </button>
            </div>`
}

const getAllEmployees = async() => {
    return await request('admin/getAllEmployees')
}

const displayEmployeeDetailModal = async(id) => {
    const url = 'admin/getEmployeesBy?by=id&keyword=' + id
    const method = 'GET'
    const res = await request(url, method)

    if (res.ok) {
        const html = renderEmployeeDetails(res.employees)
        document.getElementById('employee-details-div').innerHTML = html
    }
    document.getElementById('employee-details').style.display = 'flex'
}

const displayEditEmployeeModal = async(id) => {
    const url = 'admin/getEmployeesBy?by=id&keyword=' + id
    const method = 'GET'
    const res = await request(url, method)

    if (res.ok) {
        const form = document.getElementById('edit-employee-form')
        for (var i = 0; i < form.length - 1; i++) {
            form[i].value = res.employees[form[i].name]
        }
    }

    document.getElementById('edit-employee').style.display = 'flex'
}

const displayEmployeeConfirmBox = async(id) => {
    const url = 'admin/getEmployeesBy?by=id&keyword=' + id
    const method = 'GET'
    const res = await request(url, method)
    document.getElementById('employee-id').value = id
    document.getElementById('employee-name').innerText = res.employees.full_name
    document.getElementById('delete-employee').style.display = 'flex'
}

const getEmployeesBy = async() => {
    const keyword = document.getElementById('search-keyword').value
    const searchBy = document.getElementById('by').value

    const url = 'admin/getEmployeesBy?keyword=' + keyword + '&by=' + searchBy
    const method = 'GET'
    const res = await request(url, method)

    if (res.ok)
        document.getElementById('employees-list').innerHTML = renderEmployees(res.employees)
    else {
        document.getElementById('error-container').style.display = 'block'
        setAlertMessage('error-title', 'Error')
        setAlertMessage('error-message', res.error)
    }
}

const addEmployeeModal = () => {
    document.getElementById('add-employee').style.display = 'flex'
}

const submitAddEmployee = async(event) => {
    event.preventDefault()

    const form = document.getElementById('add-employee-form')

    const url = form.action
    const method = form.method
    const formData = new FormData(form)

    const res = await request(url, method, formData)

    if (res.ok) {
        const data = await getAllEmployees()
        if (data.ok) {
            const html = renderEmployees(data.employees)
            document.getElementById('employees-list').innerHTML = html
            form.reset();
        }
    } else {
        document.getElementById('error-container').style.display = 'block'
        setAlertMessage('error-title', 'Error')
        setAlertMessage('error-message', res.error)
    }
}

const submitEditEmployee = async(event) => {
    event.preventDefault()

    const form = document.getElementById('edit-employee-form')

    const url = form.action
    const method = form.method
    const formData = new FormData(form)

    const res = await request(url, method, formData)

    if (res.ok) {
        const data = await getAllEmployees()
        if (data.ok) {
            const html = renderEmployees(data.employees)
            document.getElementById('employees-list').innerHTML = html
            form.reset();
            closeModal('edit-employee')
        }
    } else {
        document.getElementById('error-container').style.display = 'block'
        setAlertMessage('error-title', 'Error')
        setAlertMessage('error-message', res.error)
    }
}

const addEmployeeForm = document.getElementById('add-employee-form')
addEmployeeForm && (addEmployeeForm.onsubmit = submitAddEmployee)

const editEmployeeForm = document.getElementById('edit-employee-form')
editEmployeeForm && (editEmployeeForm.onsubmit = submitEditEmployee)
