<template>
	<div align="center">
		<div class="wrapper">
		  <!-- <div class="box box1" style="display:inline-block;" v-dragula="colOne" drake="first"> -->
		  	<div class="box box1" style="display:inline-block;">
		    <div v-for="text in colOne" :key="text" @click="onClick" class="drag-content">
		    	<p>{{text}}</p>
			</div>
		  </div>
		</div>
	</div>
</template>

<script>

import Vue2Dragula from 'vue2-dragula';

export default {
  components: {
    Vue2Dragula,
  },

  data() {
  	return{
  		colOne:[
	  		'any',
	        'body',
	        'home'
	        ],
  	}
  },

  methods:{
  	fetchData:function(){
		var self = this;
		console.log('Fetching data');
		axios.get('/fetchDraggableData').then(function(response){
		        
		  self.colOne  = response.data['group1'];
		  console.log('Data fetched');

		  });
		      
		},

		onClick(){
		 console.log('clicked');
		},

  	},

    mounted() {            
      // this.fetchData();
    },



}
</script>