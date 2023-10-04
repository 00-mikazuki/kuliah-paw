			<fieldset>
				<legend><h3>Person Details</h3></legend>
				<table>
					<tr>
						<td><label for="surname">Surname</label></td>
						<td><input type="text" name="surname" id="surname" value="<?php if(isset($_POST['surname'])) echo htmlspecialchars($_POST['surname'])?>"></td>
					</tr>
					<tr>
						<td><label for="text">Email address</label></td>
						<td><input type="email" name="email" id="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])?>"></td>
					</tr>
					<tr>
						<td><label for="password">Password</label></td>
						<td><input type="password" name="password" id="password" value="<?php if(isset($_POST['password'])) echo htmlspecialchars($_POST['password'])?>"></td>
					</tr>
					<tr>
						<td><label for="street-address">Street Address</label></td>
						<td><textarea name="address" id="street-address"><?php if(isset($_POST['address'])) echo htmlspecialchars($_POST['address'])?></textarea></td>
					</tr>
					<tr>
						<td><label for="state">State</label></td>
						<td>
							<select id="state" name="state">
								<option value="Queensland">Queensland</option>
								<option value="Brooklyn">Brooklyn</option>
								<option value="Ohioo">Ohio</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label for="gender">Gender</label></td>
						<td>
							<input type="radio" name="gender" id="male" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked' ?> >
							<label for="male">Male</label>
							<input type="radio" name="gender" id="female" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked' ?> >
							<label for="female">Female</label>
						</td>
					</tr>
					<tr>
						<td><label for="vegetarian">Vegetarian?</label></td>
						<td><input type="checkbox" name="vegetarian" id="vegetarian"></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<button type="submit" name="submit">Submit</button>
							<button type="reset">Reset</button>
						</td>
					</tr>
				</table>
			</fieldset>