<div class="login_form">
	<h1>login page</h1>
	<?php 

	echo form_open('admin/loginvalidate');
	echo form_input('username');
	echo form_password('password');
	echo form_submit('submit', 'login');
	echo form_close();

	 ?>
</div>