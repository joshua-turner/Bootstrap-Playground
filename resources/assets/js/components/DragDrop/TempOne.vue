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


      <tr>
          <!-- group 1 -->
          <td>
          <draggable id="dragGroup1" :list="group1" class="box box1" v-model="group1" 
                :options="groupOpt"
               @add="onAdd">
            
              <div v-for="g1 in group1" class="drag-content" :key="g1">

                <p>{{g1}}</p>
              </div>
          </draggable>
        </td>


        <!-- group 2 -->
        <td>
          <draggable id="dragGroup2" :list="group2" class="box box2" v-model="group2" 
                :options="groupOpt"
               @add="onAdd">

              <div v-for="g2 in group2" class="drag-content" :key="g2">
                <p>{{g2}}</p>
              </div>
          </draggable>
        </td>


        <!-- group 3 -->
        <td>
          <draggable id="dragGroup3" :list="group3" class="box box3" v-model="group3" 
                :options="groupOpt"
               @add="onAdd">

              <div v-for="g3 in group3" class="drag-content" :key="g3">
                <p>{{g3}}</p>
              </div>
          </draggable>
        </td>


      </tr>



    </table>

    
    </div>
</template>


<script>

import draggable from 'vuedraggable'
import {Tabs, Tab} from 'vue-tabs-component';

export default {
  components: {
    draggable,
    Tabs,
    Tab,
  },

  data() {
    return {

      group1: [],
      group2: [],
      group3: [],

      groupOpt: {
              group:{name: 'general'},
              animation: 130,
              ghostClass:'ghost',
              dragClass:'onDrag',

            },
    }

  },

  methods:{


        onAdd(event){
          console.log('Add');
          console.log({
                event: event,
                item:event.item.textContent,
                from_group: event.from.id,
                index_from:event.oldIndex,
                to_group: event.to.id,
                index_to:event.newIndex,
              });
          // toastr["success"]('Its');
        },


        onSort(event){
          console.log('Sort');
          console.log({
                event: event,
                item:event.item.textContent,
                from_group: event.from.id,
                index_from:event.oldIndex,
                to_group: event.to.id,
                index_to:event.newIndex,

              });
        },

        onMove (event,originalEvent) {
          console.log('Move');
          console.log({
                event: event,
                originalEvent: originalEvent,
                content: event.draggedContext.element,
                // from_group: event.from.id,
                // to_group: event.to.id,
                // type:event.to.type,
                // index_from: event.oldIndex,
                // index_to: event.newIndex,
              });
        },

        onEnd(event){
          console.log('End');
          console.log({
                event: event,
                item:event.item.textContent,
                from_group: event.from.id,
                to_group: event.to.id,

              });
        },

        onStart(event){
          console.log('Start');
          console.log({
                  event:event,
                  content: event.item.textContent,
                  from_group: event.target.id,
                  to_group: event.target.to,
                  index_from: event.oldIndex,
                  index_to: event.newIndex,
                  });
        },
          

      fetchData:function(){
      var self = this;
      console.log('Fetching data');
      axios.get('/fetchDraggableData').then(function(response){
        
        self.group1  = response.data['group1'];
        console.log('Data fetched');

        });
      
      },
        
  },
  mounted() {            
      this.fetchData();
    },

}
  
</script>