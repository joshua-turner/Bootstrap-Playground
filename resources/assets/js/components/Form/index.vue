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
		/*min-height: 500px;*/
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
        width: 100px;
    	float: right;
	}
	.general__primary-btn:hover{
		background: rgba(13, 84, 150, 0.78) !important;
	}

	.margin-right-5{
		margin-right: 5%;
	}


	/**/
	/*        tab list style          */
	/**/
	ul li{
		list-style-type: none !important;
	}
	ul.tabs-component-tabs{
		position: fixed;
		padding-bottom: 30px;
		font-weight: bold;
		border: 1px solid #E0E0E0;
		border-radius: 5px;
		padding: 10px;
		background-color: white;
	}

	ul.tabs-component-tabs .is-active a{
		color:black !important;
	}

	ul.tabs-component-tabs a{
		color:grey !important;
		text-decoration: none;
	}
	ul.tabs-component-tabs a:hover{
		color:black !important;
	}

  pre{
  	position: fixed;
  	right:50px;
  }

</style>
<template>
	<div class="row">

		 <Tabs>
		    <Tab name="User Profile">
		    	<temp-one-form></temp-one-form>
		    </Tab>

		    <Tab name="Addable Field">
		    	<temp-two-form></temp-two-form>
		    </Tab>
		</Tabs>

	</div>

</template>

<script>

	import {Tabs, Tab} from 'vue-tabs-component';

	export default {
        components:{
            Tabs,
            Tab,
        },

    }
</script>