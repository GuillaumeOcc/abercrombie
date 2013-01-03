
	<div class="register">
		<div class="title">
			<h2>Sign Up</h2>
		</div>
		<form method="post" action="connect.php">
			<input type="text" name="firstname" placeholder="Firstname" required/>
			<input type="text" name="lastname" placeholder="Lastname" required/>
			<input type="email" name="email" placeholder="Email" required/>
			<select name="jobs">
				<option value="choose" selected="selected">Choose your job</option>
				<option value="cashier">Cashier</option>
				<option value="impact1">Impact 1</option>
				<option value="impact2">Impact 2</option>
				<option value="model">Model</option>
				<option value="stylist">Stylist</option>
			</select>
			<input type="password" name="password" placeholder="Password" required/>
			<input type="password" name="confirmpassword" placeholder="Confirm Password" required/>
			<div class="button"><input type="submit" value="Register"/></div>
		</form>
	</div>
