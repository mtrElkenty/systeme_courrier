<?php require 'admin/templates/header.php'; ?>

<?php require 'admin/modals/courrier/addCourrier.php'; ?>
<?php require 'admin/modals/courrier/courrierDetails.php'; ?>
<?php require 'admin/modals/courrier/editCourrier.php'; ?>
<?php require 'admin/modals/courrier/confirmDelete.php'; ?>

<?php require 'admin/modals/user/addUser.php'; ?>
<?php require 'admin/modals/user/userDetails.php'; ?>
<?php require 'admin/modals/user/editUser.php'; ?>
<?php require 'admin/modals/user/confirmDelete.php'; ?>

<?php require 'admin/modals/employee/addEmployee.php'; ?>
<?php require 'admin/modals/employee/employeeDetails.php'; ?>
<?php require 'admin/modals/employee/editEmployee.php'; ?>
<?php require 'admin/modals/employee/confirmDelete.php'; ?>

<?php require 'admin/templates/navbar.php'; ?>

<div class="flex justify-center h-screen">
	<div class="bg-white mx-auto border">
		<div id="employees" class="container flex" x-show="activeTab===0">
			<?php require 'admin/tabs/employees.php'; ?>
		</div>
		<div id="courriers" class="container flex" x-show="activeTab===1">
			<?php require 'admin/tabs/courriers.php'; ?>
		</div>
		<div id="users" class="container flex" x-show="activeTab===2">
			<?php require 'admin/tabs/users.php'; ?>
		</div>
		<div id="roles" class="container flex" x-show="activeTab===3">
			<?php require 'admin/tabs/roles.php'; ?>
		</div>
	</div>
</div>

<?php require 'admin/templates/footer.php'; ?>