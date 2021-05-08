<?php
if (isset($logout_message)) {
	echo "<div class='message'>";
	echo $logout_message;
	echo "</div>";
}
?>
<?php
if (isset($message_display)) {
	echo "<div class='message'>";
	echo $message_display;
	echo "</div>";
}
?>
<div class="box-form">
	<div class="login-box" id="main">
		<h2>Login</h2>
		<div id="login">
			<?php echo form_open('user_authentication/signin'); ?>
			<?php
			echo "<div class='error_msg'>";
			if (isset($error_message)) {
				echo $error_message;
			}
			echo validation_errors();
			echo "</div>";
			?>
			<div class="user-box">
				<input type="text" name="username" id="name" required=""/>
				<label>Username</label>
			</div>
			<div class="user-box">
				<input type="password" name="password" id="password" required=""/>
				<label>Password</label>
			</div>
			<input type="submit" value=" Login " name="submit"/><br />
			<a href="<?php echo base_url() ?>index.php/user_authentication/register">To SignUp Click Here</a>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
