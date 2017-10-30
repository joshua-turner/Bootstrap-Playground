<style type="text/css">
	label{
		display: inline-block;
    	max-width: 100%;
    	margin-bottom: 5px;
    	font-weight: bold;
	}
	.black-text{
		color: #636b6f;
	}
	h3{
		font-weight: bold;
		border-bottom:solid 1px grey !important;
		padding-bottom: 10px !important;
	}
	h4{
		font-weight: bold;
		padding-bottom: 20px;
	}
	.center-all-content{
		display: -webkit-box;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-box-align: center;
	    -ms-flex-align: center;
	    align-items: center;
	    -webkit-box-pack: center;
	    -ms-flex-pack: center;
	    justify-content: center;
	}
	.general__profile-box{
		min-height: 500px;
	    width: 90%;
	    background: #f0f1f3;
	    margin-top: 20px;
	    margin-bottom: 20px;
	    padding: 15px;
	    overflow: hidden;
	}
	.general__profile-box-content{
		margin-bottom: 50px;
	}
	.general__primary-btn{
		background: #0D5496 !important;
    	border-color: #0D5496 !important;
	}
	.general__primary-btn:hover{
		background: rgba(13, 84, 150, 0.78) !important;
	}

</style>
<template>
	<div class="row">

		<div class="col-md-8 col-md-offset-2 padd-0">
			<h3>General Form</h3>
		</div>

		<div class="col-md-8 col-md-offset-2 padd-0">
		<div class="center-all-content">
		<div class="general__profile-box">
			<div class="general__profile-box-content">
				<h4>Sub Header 1</h4>
				
					<div v-for="i in (0,10)" class="form-group">
						<label class="black-text">Field {{i}}</label>
		                <input type="text" class="form-control" value="" required autofocus>
					</div>
			</div>
			<div class="general__profile-box-content">
				<h4>Sub Header 2</h4>

					<div v-for="i in (0,5)" class="form-group">
						<label class="black-text">Field {{i}}</label>
		                <input type="text" class="form-control" value="" required autofocus>
					</div>
			</div>

			<div class="form-group">
				<button class="btn btn-success btn-sm btn-flat general__primary-btn form-control">Submit</button>
			</div>
		</div>
		</div>
		</div>

	</div>

</template>