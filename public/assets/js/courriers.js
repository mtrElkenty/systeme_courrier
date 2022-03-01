function renderCourriers(courriers) {
	let html = ''
	courriers.map(
		(c) =>
			(html += `<tr class="whitespace-nowrap cursor-pointer hover:bg-blue-300">
			<td onclick=displayCourrierDetailModal(${c[0]}) class="px-6 py-2 text-sm text-gray-900">
				${c[0]}
			</td>
			<td onclick=displayCourrierDetailModal(${c[0]}) class="px-6 py-2 text-sm text-gray-900">
				${c[1]}
			</td>
			<td onclick=displayCourrierDetailModal(${c[0]}) class="px-6 py-2 text-sm text-gray-900">
				${c[2]}
			</td>
			<td onclick=displayCourrierDetailModal(${c[0]}) class="px-6 py-2 text-sm text-gray-900">
				${c[3]}
			</td>
			<td onclick=displayCourrierDetailModal(${c[0]}) class="px-6 py-2 text-sm text-gray-900">
				${c[4]}
			</td>
			<td onclick=displayCourrierDetailModal(${c[0]}) class="px-6 py-2 text-sm text-gray-900">
				${c[5]}
			</td>
			<td onclick=displayCourrierDetailModal(${c[0]}) class="px-6 py-2 text-sm text-gray-900">
				${c[6]}
			</td>
			<td onclick=displayCourrierDetailModal(${c[0]}) class="px-6 py-2 text-sm text-gray-900">
				${c[7]}
			</td>
			<td class="px-6 py-2">
				<button onclick=displayEditCourrierModal(${c[0]}) class="px-2 py-1 text-sm text-white bg-blue-500 rounded">
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
				</button>
			</td>
			<td class="px-6 py-2">
				<button onclick=courrierPrint(${c[0]}) class="px-2 py-1 text-sm text-white bg-green-500 rounded">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
				</button>
			</td>
		</tr>`)
	)
	return html
}

const renderCourrierDetails = (courrier) => {
	return `
            <p class="my-3 font-bold text-xl flex">
                <svg class="w-6 h-6 mt-1 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path></svg>
                ${courrier.numero_inscription}
            </p>
            <table class="w-full">
                <tr class="w-full">
                    <td class="py-1">
                    <svg class="w-6 h-6 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </td>
                    <td class="w-2/5">
                        Designateur
                    </td>
                    <td class="w-3/5 font-bold text-l">${courrier.designateur}</td>
                </tr>
                <tr class="w-full">
                    <td class="py-1">
                        <svg class="w-6 h-6 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </td>
                    <td class="w-2/5">
                        Destination
                    </td>
                    <td class="w-3/5 font-bold text-l">${courrier.destination}</td>
                </tr>
                <tr class="w-full">
                    <td class="py-1">
                        <svg class="w-6 h-6 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </td>
                    <td class="w-2/5">
                        Recu Par
                    </td>
                    <td class="w-3/5 font-bold text-l">
                    <a onclick=displayEmployeeDetailModal(${courrier.received_by_employee_id}) class="cursor-pointer border-b-2 border-blue-600 active:outline-none ">
                        ${courrier.full_name}
                    </a>
                </tr>
                <tr class="w-full">
                    <td class="py-1">
                        <svg class="w-6 h-6 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </td>
                    <td class="w-2/5">
                        Date Depart
                    </td>
                    <td class="w-3/5 font-bold text-l">${courrier.date_depart}</td>
                </tr>
                <tr class="w-full">
                    <td class="py-1">
                        <svg class="w-6 h-6 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </td>
                    <td class="w-2/5">
                        Date Arrive
                    </td>
                    <td class="w-3/5 font-bold text-l">${courrier.date_arrive}</td>
                </tr>
                <tr class="w-full">
                    <td class="py-1">
                        <svg class="w-6 h-6 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </td>
                    <td class="w-2/5">
                        Ajouter Le
                    </td>
                    <td class="w-3/5 font-bold text-l">${courrier.created_at}</td>
                </tr>
            </table>
            <div class="py-2 mt-4 flex justify-end">
                <button onclick=displayCourrierConfirmBox(${courrier.id}) class="w-2/3 flex justify-center px-2 py-1 text-sm text-white bg-green-500 rounded">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                    Imprimer
                </button>
                <button onclick=displayEditCourrierModal(${courrier.id}) class="w-1/3 ml-4 flex justify-center px-2 py-1 text-sm text-white bg-blue-500 rounded">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    Modifier
                </button>
            </div>`
}

const getAllCourriers = async () => {
	return await request('courrier/getAllCourriers')
}

const displayCourrierDetailModal = async (id) => {
	const url = 'courrier/getCourriersBy?by=id&keyword=' + id
	const method = 'GET'
	const res = await request(url, method)
	if (res.ok) {
		const html = renderCourrierDetails(res.courriers)
		document.getElementById('courrier-details-div').innerHTML = html
		document.getElementById('courrier-details').style.display = 'flex'
	} else {
		setErrorAlert(res.error)
	}
}

const displayEditCourrierModal = async (id) => {
	const url = 'courrier/getCourriersBy?by=id&keyword=' + id
	const method = 'GET'
	const res = await request(url, method)

	if (res.ok) {
		const form = document.getElementById('edit-courrier-form')
		for (var i = 0; i < form.length - 1; i++) {
			form[i].value = res.courriers[form[i].name]
		}
		document.getElementById('edit-courrier').style.display = 'flex'
	} else {
		setErrorAlert(res.error)
	}
}

const courrierPrint = async (id = '') => {
	const url = 'courrier/getCourriersBy?by=id&keyword=' + id
	const method = 'GET'
	const res = await request(url, method)
	console.log(res)
	if (res.ok) {
		createAndPrintTable(res.courriers)
	} else {
		setErrorAlert(res.error)
	}
}

const getCourriersBy = async () => {
	const keyword = document.getElementById('courrier-search-keyword').value
	const searchBy = document.getElementById('courrier-by').value

	const url = 'courrier/getCourriersBy?keyword=' + keyword + '&by=' + searchBy
	const method = 'GET'
	const res = await request(url, method)

	if (res.ok)
		document.getElementById('courriers-list').innerHTML = renderCourriers(
			res.courriers
		)
}

const addCourrierModal = () => {
	document.getElementById('add-courrier').style.display = 'flex'
}

const submitAddCourrier = async (event) => {
	event.preventDefault()

	const form = document.getElementById('add-courrier-form')

	const url = form.action
	const method = form.method
	const formData = new FormData(form)

	const res = await request(url, method, formData)

	if (res.ok) {
		const data = await getAllCourriers()
		if (data.ok) {
			const html = renderCourriers(data.courriers)
			document.getElementById('courriers-list').innerHTML = html
			form.reset()
			courrierPrint()
		}
		setSuccessAlert(res.message)
	} else {
		setErrorAlert(res.error)
	}
}

const submitEditCourrier = async (event) => {
	event.preventDefault()

	const form = document.getElementById('edit-courrier-form')

	const url = form.action
	const method = form.method
	const formData = new FormData(form)

	const res = await request(url, method, formData)

	if (res.ok) {
		const data = await getAllCourriers()
		if (data.ok) {
			const html = renderCourriers(data.courriers)
			document.getElementById('courriers-list').innerHTML = html
			form.reset()
			closeModal('edit-courrier')
		}
		setSuccessAlert(res.message)
	} else {
		setErrorAlert(res.error)
	}
}

const addCourrierForm = document.getElementById('add-courrier-form')
addCourrierForm && (addCourrierForm.onsubmit = submitAddCourrier)

const editCourrierForm = document.getElementById('edit-courrier-form')
editCourrierForm && (editCourrierForm.onsubmit = submitEditCourrier)
