<div id="section-1" class="form-page active">
	<div class="row">
		<div class="col-sm-6">
			<div class="subsection-title">Your Personal Detail</div>
			<div class="form-group">
				<div class="input-group margin-bottom-sm">
					<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
					<input class="form-control" type="text" placeholder="Your Name" name="personal_name" required>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group margin-bottom-sm">
					<span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
					<input class="form-control" type="text" placeholder="Phone Number" name="personal_phone" required>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group margin-bottom-sm">
					<span class="input-group-addon"><i class="fa fa-mobile fa-fw"></i></span>
					<input class="form-control" type="text" placeholder="Mobile Number" name="personal_mobile" required>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group margin-bottom-sm">
					<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
					<input class="form-control" type="email" placeholder="Email address" name="personal_email" required>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group margin-bottom-sm">
					<span class="input-group-addon"><i class="fa fa-building fa-fw"></i></span>
					<input class="form-control" type="text" placeholder="Business Name" name="business_name" required>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group margin-bottom-sm">
					<span class="input-group-addon"><i class="fa fa-certificate fa-fw"></i></span>
					<input class="form-control" type="text" placeholder="ABN Number" name="abn_number">
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="subsection-title">
				Business Detail &nbsp; &mdash; &nbsp;
				<input type="checkbox" name="sda" id="sda">
				<label for="sda">Same with Personal Detail</label>
			</div>
			<div class="form-group">
				<div class="input-group margin-bottom-sm">
					<span class="input-group-addon"><i class="fa fa-building fa-fw"></i></span>
					<input class="form-control sda-field" type="text" placeholder="Website - Company Name" name="website_company_name" data-pickup="company_name" required>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group margin-bottom-sm">
					<span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
					<input class="form-control sda-field" type="text" placeholder="Phone Number" name="website_phone" data-pickup="personal_phone" required>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group margin-bottom-sm">
					<span class="input-group-addon"><i class="fa fa-mobile fa-fw"></i></span>
					<input class="form-control sda-field" type="text" placeholder="Mobile Number" name="website_mobile" data-pickup="personal_mobile" required>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group margin-bottom-sm">
					<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
					<input class="form-control sda-field" type="email" placeholder="Email address for website" name="website_email" data-pickup="personal_email" required>
				</div>
			</div>
			<div class="form-group">
				<div class="input-group margin-bottom-sm">
					<span class="input-group-addon"><i class="fa fa-map-signs fa-fw"></i></span>
					<input class="form-control" type="text" placeholder="Location Address" name="location_address">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group margin-bottom-sm">
					<span class="input-group-addon"><i class="fa fa-bullseye fa-fw"></i></span>
					<textarea name="business_sell" id="" class="form-control" placeholder="What does your business sell" required></textarea>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label>Do you have a logo for this site?</label>
		<input type="checkbox" class="bs-toggle" id="has_logo" data-toggle="toggle" data-on="Yes" data-off="No" name="has_logo" value="yes">
	</div>
	<div class="form-group show_if_has_logo">
		<input type="file" name="logo_image">
	</div>
	<div class="form-group">
		<label>Do you require a logo to be designed for your website?</label>
		<input type="checkbox" class="bs-toggle" data-toggle="toggle" data-on="Yes" data-off="No" name="design_logo" value="yes">
	</div>
</div>