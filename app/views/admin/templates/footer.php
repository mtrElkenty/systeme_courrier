</body>
<script src="/systeme_courrier/public/assets/js/bootstrap.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
<script src="/systeme_courrier/public/assets/js/employees.js"></script>
<script src="/systeme_courrier/public/assets/js/roles.js"></script>
<script src="/systeme_courrier/public/assets/js/print-table.js"></script>
<script src="/systeme_courrier/public/assets/js/courriers.js"></script>
<script src="/systeme_courrier/public/assets/js/users.js"></script>
<script src="/systeme_courrier/public/assets/js/script.js"></script>

<script>
    const initAdminIndex = async() => {
        let data = await getAllEmployees()
        if (data.ok) {
            const html = renderEmployees(data.employees)
            document.getElementById('employees-list').innerHTML = html
        }

        data = await getAllUsers()
        if (data.ok) {
            const html = renderUsers(data.users)
            document.getElementById('users-list').innerHTML = html
        }

        data = await getAllCourriers()
        if (data.ok) {
            const html = renderCourriers(data.courriers)
            document.getElementById('courriers-list').innerHTML = html
        }
    }

    initAdminIndex()
</script>
</html>