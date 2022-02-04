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

const deleteItem = async(table) => {
    const id = document.getElementById(table + '-id').value
    const url = table + '/' + table + 'Delete?id=' + id
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
            // window.location.replace('home') 
        let redirect = ""
        if (res.user[0].role_id == 3) redirect += 'home'
        if (res.user[0].role_id == 2) redirect += 'admin'
        if (res.user[0].role_id == 1) redirect += 'admin'

        window.location.replace(redirect)
    } else {
        setAlertMessage('error-text', res.error)
        const alerts = document.getElementById('alerts')

        alerts.style.display = 'block'
        document.getElementById('error-alert').style.display = 'block'
        for (let i = -350; i <= 0; i += 2) {
            alerts.style.right = `${i}px`
            await sleep(1)
        }
    }
}

const logout = async() => {
    const res = await request('login/deauth', null, null)
    window.location.replace('login')
}

const closeModal = (id) => document.getElementById(id).style.display = 'none'

const form = document.getElementById('loginForm')
form && (form.onsubmit = submitLoginForm)
