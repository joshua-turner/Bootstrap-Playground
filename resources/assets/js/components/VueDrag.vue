<template>
	
	<div align="center">

   	<table>

   			<th>
   				<div class="box-header"><p>Group One</p></div>
   			</th>
   			<th>
   				<div class="box-header"><p>Group Two</p></div>
   			</th>
   			<th>
   				<div class="box-header"><p>Group Three</p></div>
   			</th>
   			<th>
   				<div class="box-header"><p>Group Four</p></div>
   			</th>

	 	<tr>
	   		<!-- group 1 -->
   			<td>
				<draggable class="box box1" v-model="group1" 
							:options="group1Opt" 
							@start="drag=true" @end="drag=false">
					
				   	<div v-for="g1 in group1" class="drag-content">

				   		<p class="group1Item">{{g1}}</p>
				   	</div>
				</draggable>
			</td>



			<!-- group 2 -->
			<td>
				<draggable class="box box2" v-model="group2" 
							:options="group2Opt" 
							@start="drag=true" @end="drag=false">
				   	<div v-for="g2 in group2" class="drag-content">
				   		<p class="group2Item">{{g2}}</p>
				   	</div>
				</draggable>
			</td>




			<!-- group 3 -->
			<td>
				<draggable class="box box3" v-model="group3" 
						:options="group3Opt" 
	    				@start="drag=true" @end="drag=false">
				   	<div v-for="g3 in group3" class="drag-content">
				   		<p class="group3Item">{{g3}}</p>
				   	</div>
				</draggable>
			</td>



			<!-- group 4 -->
			<td>
				<draggable class="box box4" v-model="group4" 
						:options="group4Opt" 
	    				@start="drag=true" @end="drag=false">
				   	<div v-for="g4 in group4" class="drag-content">
				   		<p class="group4Item">{{g4}}</p>
				   	</div>
				</draggable>
			</td>

		</tr>



	</table>
  </div>

</template>

<script>

import draggable from 'vuedraggable'

export default {
  components: {
    draggable
  },

  data() {
    return {

      group1: ['Munir','Chong','Samad','Gopal','Ling','Siva','Maniam','Ahmad'],
      group2: ['Abu','Siti'],
      group3:[],
      group4:[],
      group1Opt: {
      				group:{name: 'general'},
      				animation: 130,
      				ghostClass:'ghost',
      				dragClass:'onDrag',
      			},
      group2Opt:{
      				group:{name: 'general'},
      				animation: 130,
      				ghostClass:'ghost',
      				dragClass:'onDrag',
      			},
      group3Opt:{
      				group:{name: 'general'},
      				animation: 130,
      				ghostClass:'ghost',
      				dragClass:'onDrag',
      			},
      	group4Opt:{
      				group:{name: 'general'},
      				animation: 130,
      				ghostClass:'ghost',
      				dragClass:'onDrag',
      			},
  	}

  },

  mounted() {
            console.log('Component mounted.');
        },

}
	
</script>