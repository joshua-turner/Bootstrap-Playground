<template>
<div>
	<div class="col-md-8 col-md-offset-2 padd-0">
		<h3>User Profile Template</h3>
	</div>

	<div class="col-md-8 col-md-offset-2 padd-0">
		<div class="center-all-content">
			<div class="general__profile-box">
				
				<!-- Sub Section One -->
				<div class="general__profile-box-content">
					<h4>Personal</h4>
					
					<!-- First Name -->
					<div class="form-group">
						<label class="black-text">First Name</label>
		                <input type="text" class="form-control" value="" placeholder="First Name" v-model="form.first_name" autofocus>
					</div>

					<!-- Last Name -->
					<div class="form-group">
						<label class="black-text">Last Name</label>
		                <input type="text" class="form-control" value="" placeholder="Last Name" v-model="form.last_name">
					</div>

					<!-- Email -->
					<div class="form-group">
						<label class="black-text">Email</label>
		                <input type="email" class="form-control" value="" placeholder="Email Address" v-model="form.email">
					</div>


					<!-- Gender -->
					<div class="form-group">
                        <label class="black-text">Gender</label>
                            
                        <div>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="male" v-model="form.gender">
                                    Male
                            </label>

                            <label class="radio-inline">
                                <input type="radio" name="gender" value="female" v-model="form.gender">
                                    Female
                            </label>
                        </div>
                    </div>


                    <!-- Date of Birth -->
                    <div class="form-group">
                        <label class="black-text">Date of Birth</label>
                        <datepicker v-model="form.dob" input-class="form-control" placeholder="Date of Birth" input-readonly="false"></datepicker>
                    </div>


                    <!-- Citizenship -->
                    <div class="form-group">
                        <label class="black-text">Citizenship</label>
                        <select v-model="form.citizen" class="form-control" required>
                            <option value="" selected disabled>{{placeholder}}</option>
                            <option v-for="c in country">
                                    {{ c }}
                            </option>
                        </select>
                    </div>



				</div>

				<!-- Sub Section Two -->
				<div class="general__profile-box-content">
					<h4>Educational</h4>
					<div v-for="i in (0,5)" class="form-group">
						<label class="black-text">Field {{i}}</label>
		                <input type="text" class="form-control" value="">
					</div>
				</div>

				<div class="form-group">
					<button class="btn btn-success btn-sm btn-flat general__primary-btn form-control">Submit</button>
				</div>
			</div>
		</div>
	</div>

	<pre>{{ $data.form }}</pre>
</div>
</template>

<script>

	import datepicker from 'vuejs-datepicker'

	export default {

	    components:{
	        datepicker,
	    },

	    data() {
	      return {
	      		placeholder:"Please Select",
	      		country:['Malaysia','Indonesia','Singapore','Thailand','India','China','Laos'],
				form:({
					gender:"male",
				}),
			}
		}
	}


</script>