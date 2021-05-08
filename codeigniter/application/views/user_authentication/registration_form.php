<div class="login-box" id="main">
	<div id="login">
		<h2>Registration</h2>
		<hr/>
		<?php
		echo "<div class='error_msg'>";
			echo validation_errors();
		echo "</div>";
		echo form_open('user_authentication/signup'); 

		echo "<div class='user-box'>";
		echo "<label>Username</label>";
		echo form_input('username');
		echo "<div class='error_msg'>";
		
		if (isset($message_display)) {
			echo $message_display;
		}
		echo "</div>";
		echo "</div>";

		echo "<div class='user-box'>";
		echo form_label('Email : ');
		$data = array(
		'type' => 'email',
		'name' => 'email_value'
		);
		echo form_input($data);
		echo "</div>";
		
		echo "<div class='user-box'>";
		echo form_label('Password : ');
		echo form_password('password');
		echo "</div>";

		echo form_submit('submit', 'Sign Up');
		echo form_close();
		?>
		<a href="<?php echo base_url() ?>index.php/user_authentication/ ">For Login Click Here</a>
	</div>
</div>