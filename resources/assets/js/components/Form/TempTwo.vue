<style>
	.btn-add{
		margin-top: 20px;
		width: 100%;
		background-color: white;
	}
	.btn-add:hover{
		background-color: #F9F9F9;
	}
	.btn-add:focus{
		outline: none;
	}
	.btn-remove{
		font-weight: bold;
		color:grey;
		border:1px solid grey;
		border-radius: 360px;
		padding:0 8px 0 8px;
	}
	.btn-remove:hover{
		text-decoration: none;
		color:black;
		cursor: pointer;
	}
	.btn-remove:focus{
		color:black;
	}

</style>
<template>
<div>

	<div class="col-md-8 col-md-offset-2 padd-0">
		<h3>Addable Field Template</h3>
	</div>

	<div class="col-md-8 col-md-offset-2 padd-0">
		<div class="center-all-content">
			<div class="general__profile-box">
				<!-- Sub Section One -->
				<div class="general__profile-box-content">
					<h4>Sub Header 1</h4>


					<!-- Default Field -->
					<div v. v-for="(field, index) in fields">
						<div class="form-group">
							
							<a type="button" v-on:click="removeField(index)" class="btn-remove pull-right">x</a>

							<label class="black-text">Default</label>
			                <input type="text" class="form-control" name="fields[][level]" 
			                		placeholder="Default Field" v-model="field.level">
						</div>
					</div>

			        <button type="button" @click="addNewField" class="btn btn-add">Add Field</button>


				</div>

			</div>
		</div>
	</div>

        <pre>{{ $data.fields }}</pre>

</div>
</template>

<script>

export default {

  data() {
  	return{
	    field: {
	      level: '',
	    },
	    fields: [
	    	{
	    		level:"",
	    	
	    	}
	    	]
    }
  },

  methods: {
    addNewField: function () {
      this.fields.push(Vue.util.extend({}, this.field))
    },
    removeField: function (index) {
      Vue.delete(this.fields, index);
    },

  },

  mounted() {
    /*
     * The "data-fields" could come from serverside (already saved fields)
     */
    this.fields = JSON.parse(this.$el.dataset.fields)
  }

}

</script>