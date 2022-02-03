const sleep = async(ms) => {
    return new Promise((resolve => setTimeout(resolve, ms)))
}


const request = async(url, method, data = null) => {
    const res = await fetch(url, {
            method: method,
            body: data
        })
        .then(response => { return response.json() })

    return res
}

const initAdminIndex = async() => {
    let data = await getAllEmployees()
    if (data.ok) {
        const html = renderEmployees(data.employees)
        document.getElementById('employees-list').innerHTML = html
    }

    data = await getAllUtilisateurs()
    if (data.ok) {
        const html = renderUtilisateurs(data.utilisateurs)
        document.getElementById('utilisateurs-list').innerHTML = html
    }

    data = await getAllCourriers()
    if (data.ok) {
        const html = renderCourriers(data.courriers)
        document.getElementById('courriers-list').innerHTML = html
    }
}

sessionStorage.getItem('user') && initAdminIndex()

const deleteItem = async(table) => {
    const id = document.getElementById(table + '-id').value
    const url = 'admin/' + table + 'Delete?id=' + id
    const method = 'GET'
    const res = await request(url, method)

    if (res.ok) {
        const data = await getAllEmployees()
        if (data.ok) {
            const html = renderEmployees(data.employees)
            document.getElementById('employees-list').innerHTML = html
            closeModal('delete-'.table)
        }
    }
}

const setAlertMessage = (id, message) => {
    const element = document.getElementById(id)
    element.innerText = message
}

const submitLoginForm = async() => {
    event.preventDefault()
    const form = document.getElementById('loginForm')
    const url = form.action
    const method = form.method
    const data = new FormData(form)

    const res = await request(url, method, data)

    if (res.ok) {
        sessionStorage.setItem('user', JSON.stringify(res.user[0]))
        window.location.replace('home')
    } else {
        setAlertMessage('error-text', res.error)
        const alerts = document.getElementById('alerts')

        alerts.style.display = 'block'
        document.getElementById('error-alert').style.display = 'block'
        for (let i = -350; i <= 0; i += 2) {
            alerts.style.right = `${i}px`
            await sleep(1)
        }
        console.log(i);
    }
}

const logout = async() => {
    const res = await request('login/deauth', null, null)
    window.location.replace('login')
}

const closeModal = (id) => document.getElementById(id).style.display = 'none'

const form = document.getElementById('loginForm')
form && (form.onsubmit = submitLoginForm)