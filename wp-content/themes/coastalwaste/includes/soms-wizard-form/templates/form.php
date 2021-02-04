<div class="soms-wizard-form">
	<form action="" method="post" enctype="multipart/form-data" role="form" id="form">
		<ul class="clearfix">
			<li class="active"><a href="#section-1" data-toggle="tab">1</a><span class="step-title">Personal Detail</span></li>
			<li><a href="#section-2" data-toggle="tab">2</a><span class="step-title">Website Overview</span></li>
			<li><a href="#section-3" data-toggle="tab">3</a><span class="step-title">Site Audience</span></li>
			<li><a href="#section-4" data-toggle="tab">4</a><span class="step-title">Products and Services</span></li>
			<li><a href="#section-5" data-toggle="tab">5</a><span class="step-title">Site Design</span></li>
			<li><a href="#section-6" data-toggle="tab">6</a><span class="step-title">Site Content</span></li>
			<li><a href="#section-7" data-toggle="tab">7</a><span class="step-title">Market Intelligence</span></li>
			<li><a href="#section-8" data-toggle="tab">8</a><span class="step-title">Technical details</span></li>
		</ul>
		<div class="form-wrap">
			<?php
				for($i=1; $i<9; $i++){
					include 'section-'.$i.'.php';
				}
			?>
			<div class="section-navigation clearfix">
				<button type="button" class="btn btn-small btn-default pull-left button-prev"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</button>
				<button type="button" class="btn btn-small btn-primary pull-right button-next">Next <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
			</div>
		</div>
	</form>
</div>