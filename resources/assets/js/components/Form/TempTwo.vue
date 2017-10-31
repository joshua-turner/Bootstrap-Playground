<template>
<div>
	<div class="col-md-8 col-md-offset-2 padd-0">
		<h3>Form Template 2</h3>
	</div>

	<div class="col-md-8 col-md-offset-2 padd-0">
		<div class="center-all-content">
			<div class="general__profile-box">
				<div class="general__profile-box-content">
					<h4>Sub Header 1</h4>
								
					<div v-for="i in (0,10)" class="form-group">
						<label class="black-text">Field {{i}}</label>
						<input type="text" class="form-control" value="" autofocus>
					</div>
				</div>
			</div>
		</div>
		<div class="center-all-content">
			<div class="general__profile-box">
				<div class="general__profile-box-content">
					<h4>Sub Header 2</h4>
					<div v-for="i in (0,5)" class="form-group">
						<label class="black-text">Field {{i}}</label>
			            <input type="text" class="form-control" value="" autofocus>
					</div>
				</div>
			</div>
		</div>
		<div class="margin-right-5">
			<div class="form-group">
				<button class="btn btn-success btn-sm btn-flat general__primary-btn form-control">Submit</button>
			</div>
		</div>
	</div>
</div>
</template>