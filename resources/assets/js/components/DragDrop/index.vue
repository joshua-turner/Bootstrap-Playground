<style type="text/css">
  .box{
  border-radius: 5px;
  border:grey 1px solid;
  background:#6A6A6A;
  height:500px;
  width:200px;
  margin:10px;
}

.box-header{
  text-align:center;
  font-weight:bold;
}

.box .drag-content{
  border-radius: 5px;
  width:95%;
  height:50px;
  padding:20px;
  margin:5px;
  background:white;
}


.drag-content:hover{
  cursor: grab;
    cursor: -moz-grab;
    cursor: -webkit-grab;
}

.ghost {
  border:transparent !important;
    background: #D6D2D2 !important;
    color:transparent !important;
}

.onDrag{
  background:white !important;
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
    width: 200px;
  }

</style>


<template>
	<div class="row">

    <Tabs>
      <Tab name="vue-draggable">
        <temp-one-drag></temp-one-drag>
      </Tab>

      <Tab name="Dragula">
        <temp-two-drag></temp-two-drag>
      </Tab>
    </Tabs>

  </div>

</template>

<script>

import {Tabs, Tab} from 'vue-tabs-component';

export default {
  components: {
    Tabs,
    Tab,
  },

}
	
</script>