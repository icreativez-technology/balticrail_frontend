<template>
 <div class="modal fade" id="addTrain" tabindex="-1" role="dialog" aria-labelledby="trainModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 style="color:black;">Add New Train</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form @submit.prevent="create">
             <div class="form-group">
                <label for="inputAddress">Name</label>
                <input type="text" class="form-control" v-model="planner.train.name" placeholder="Name">
            </div>
             <div class="form-group">
                <label for="inputAddress">Number</label>
                <input type="text" maxlengspan="10" class="form-control" v-model="planner.train.number"  placeholder="#123445">
            </div>
            <div class="form-group">
                <label for="inputAddress">Select Week</label>
                <select class="form-control" v-model="planner.train.week">
                    <option v-for="(week,index) in planner.weeks" :key="index"  :value="week.id">{{week.name}}</option>
                </select>
            </div>
             <div class="form-group">
                <label for="inputAddress">Select Direction</label>
                <select class="form-control" v-model="planner.train.direction">
                    <option value="SB">SB</option>
                    <option value="NB">NB</option>
                </select>
             </div>
             <div class="form-group">
                <label for="inputAddress">Departure Date</label>
                 <flat-pickr v-model="planner.train.departure_date"></flat-pickr>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Description</label>
                <textarea name="" id="" v-model="planner.train.description" cols="5" rows="5" class="form-control" placeholder="Description"></textarea>
            </div>
            <button type="submit" class="general-btn d-inline-block">Add</button>
            </form>
      </div>
    </div>
  </div>
</div>
</template>
<script>
import { useToast } from "vue-toastification";
import flatPickr from 'vue-flatpickr-component';
import 'flatpickr/dist/flatpickr.css';
import planner from "../../../store/state.js";
import axios from "axios";
import CustomFunction from "../common/functions";
export default {
    props:{
      weeks:Array
    },
    components:{flatPickr},
    mixins:[CustomFunction],
    setup() {
        const toast = useToast();
        const create = async()=>{
          try{
            let response = await axios.post("user/trains",{...planner.train});
              if(response.data){
                  CustomFunction.methods.vehicles();
                  toast.success(response.data.message, {
                  timeout: 5000
                  });
                  $('#addTrain').modal('hide');
                  train.name = "";
                  train.number = "";
                  train.description = "";
              }  
          }catch(error){
              console.log(error)
           }
          }
        return {planner,create}
    },
}
</script>