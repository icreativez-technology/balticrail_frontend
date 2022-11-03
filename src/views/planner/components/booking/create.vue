<template>
  <div class="modal fade" id="addBooking" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog addBooking" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 style="color:black;">Add Booking</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">
       <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active"  @click="tab(1)">Home</button>
          <button class="nav-link active"  @click="tab(2)">Door</button>
        </div>
      </nav>
       <div v-if="tabHome" class="tabcontent">
           <form @submit.prevent="addBooking">
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputEmail4">ID</label>
                <input type="text" disabled class="form-control"  v-model="planner.bookingsCount">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">Booking Type</label>
                    <select class="form-control" v-model="planner.booking.booking_type">
                    <option value="outbound">Outbound</option>
                    <option value="inbound">Inbound</option>
                    <option value="passing">Passing</option>
                   </select>
              </div>
              <div class="form-group col-md-3">
                <label for="inputEmail4">Order Date</label>
                <flat-pickr v-model="planner.booking.order_date"></flat-pickr>
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">Order Time</label>
                <input type="time" class="form-control"  v-model="planner.booking.order_time">
              </div>
            
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                <label for="inputEmail4">Container nr</label>
                  <input type="text" class="form-control"  v-model="planner.booking.container_nr">
              </div>
          
              <div class="form-group col-md-3">
                <label for="inputPassword4">Seal</label>
                    <input type="text" class="form-control" maxlength="10"  v-model="planner.booking.seal">
              </div>

               <div class="form-group col-md-3">
              <label for="inputPassword4">ADR</label>
                <input type="text" class="form-control" maxlength="10"  v-model="planner.booking.adr">
            </div>
    
              <div class="form-group col-md-3">
                  <label for="inputPassword4">Container Owner</label>
                      <select class="form-control" v-model="planner.booking.container_owner_id">
                            <option v-for="(partner,index) in partners" :key="index"  :value="partner.id">{{partner.company_name}}</option>
                      </select>
                </div>
            </div>

    <div class="form-row">
      <div class="form-group col-md-3">
          <label for="inputPassword4">Cargo Owner</label>
                <select class="form-control" v-model="planner.booking.cargo_owner_id">
                    <option v-for="(partner,index) in partners" :key="index"  :value="partner.id">{{partner.company_name}}</option>
              </select>
        </div>
        <div class="form-group col-md-3">
          <label for="inputPassword4">Forworder</label>
                <select class="form-control" v-model="planner.booking.forworder_id">
                    <option v-for="(partner,index) in partners" :key="index"  :value="partner.id">{{partner.company_name}}</option>
              </select>
        </div>

      <div class="form-group col-md-3">
      <label for="inputPassword4">Terminal</label>
             <select class="form-control" v-model="planner.booking.terminal">
                <option v-for="(terminal,index) in terminals" :key="index"  :value="terminal.id">{{terminal.name}}</option>
            </select>
      </div>
    <div class="form-group col-md-3">
      <label for="inputEmail4">Type</label>
           <select class="form-control" v-model="planner.booking.type">
            <option  value="stock">Stock</option>
            <option  value="dropoff">Drop Off</option>
            <option  value="hotel">Hotel</option>
            <option  value="transfer">Transfer</option>
            <option  value="export">Export</option>
           </select>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputPassword4">Reference No</label>
         <input type="text" class="form-control" maxlength="10"  v-model="planner.booking.reference_number">
    </div>
         <div class="form-group col-md-3">
                <label for="inputPassword4">Train Start</label>
                    <select class="form-control" v-model="planner.booking.train_start" @change="getTransport">
                         <option v-for="(terminal,index) in terminals" :key="index"  :value="terminal.id">{{terminal.name}}</option>
                    </select>
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">Train End</label>
                      <select class="form-control" v-model="planner.booking.train_end">
                         <option v-for="(terminal,index) in terminals" :key="index"  :value="terminal.id">{{terminal.name}}</option>
                </select>
        </div>
        <div class="form-group col-md-3">
        <label for="inputEmail4">ETA Gate In</label>
          <flat-pickr v-model="planner.booking.gate_in_date"></flat-pickr>
      </div>
  </div>

  <div class="form-row">
     <div class="form-group col-md-6">
      <label for="inputPassword4">Carrier In</label>
          <select class="form-control" v-model="planner.booking.carrier_id">
             <option v-for="(partner,index) in partners" :key="index"  :value="partner.id">{{partner.company_name}}</option>
          </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Transport In</label>
          <select class="form-control" v-model="planner.booking.transport_type_id">
             <option v-for="(vehicle,index) in vehicles_types" :key="index"  :value="vehicle.id">{{vehicle.name}}</option>
          </select>
    </div>
  </div>
    <button type="submit" class="general-btn d-inline-block">Add Booking</button>
  </form>
</div>


<div v-if="tabDoor" class="tabcontent">
  <form @submit.prevent="addBooking">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Door Date</label>
      <flat-pickr v-model="planner.booking.door_date"></flat-pickr>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Door Time</label>
      <input type="time" class="form-control"  v-model="planner.booking.door_time">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Receiver</label>
             <select class="form-control" v-model="planner.booking.receiver">
                <option v-for="(partner,index) in partners" :key="index"  :value="partner.id">{{partner.company_name}}</option>
             </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputPassword4">CC Address 1</label>
        <input type="text" class="form-control" v-model="planner.booking.cc_address">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Pickup</label>
        <input type="text" class="form-control" v-model="planner.booking.pickup">
    </div>
     <div class="form-group col-md-4">
      <label for="inputPassword4">Drop Of</label>
        <input type="text" class="form-control" v-model="planner.booking.drop_off">
    </div>
  </div>

   <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputPassword4">Drop Of Date</label>
        <flat-pickr v-model="planner.booking.drop_off_date"></flat-pickr>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Door Delivary</label>
          <select class="form-control"  v-model="planner.booking.transport_first_id">
          <option v-for="(vehicle,index) in other_vehicles" :key="index"  :value="vehicle.id">{{vehicle.name}}</option>
            </select>
    </div>
    
  <div class="form-group col-md-4">
      <label for="inputPassword4">Trucking Co Out</label>
             <select class="form-control" v-model="planner.booking.receiver">
                <option v-for="(partner,index) in partners" :key="index"  :value="partner.id">{{partner.company_name}}</option>
             </select>
    </div>
  </div>

  
   <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputPassword4">Driver out</label>
           <select class="form-control" v-model="planner.booking.driver_out">
            <option v-for="(driver,index) in drivers" :key="index"  :value="driver.id">{{driver.name}}</option>
            </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Trucking Co OUT</label>
          <select class="form-control" v-model="planner.booking.trucking_co_out">
            <option v-for="(item,index) in 10" :key="index"  :value="item">{{item}}</option>
            </select>
    </div>
    
  <div class="form-group col-md-4">
      <label for="inputPassword4">Receiver</label>
          <select class="form-control" v-model="planner.booking.receiver">
            <option v-for="(item,index) in 10" :key="index"  :value="item">{{item}}</option>
            </select>
    </div>
  </div>
  <div class="form-row">
      <div class="form-group col-md-6">
      <label for="inputPassword4">Pickup</label>
            <select class="form-control" v-model="planner.booking.pickup">
            <option v-for="(item,index) in 10" :key="index"  :value="item">{{item}}</option>
             </select>
      </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Drop off</label>
           <select class="form-control" v-model="planner.booking.drop_off">
            <option v-for="(item,index) in 10" :key="index"  :value="item">{{item}}</option>
           </select>
    </div>
  </div>
      <button type="submit" class="general-btn d-inline-block">Add Booking</button>
          </form>
       </div>
      </div>
    </div>
  </div>
</div>
</template>
<script>
import { ref } from '@vue/reactivity';
import { useToast } from "vue-toastification";
import planner from "../../../store/state.js";
import axios from "axios";
import CustomFunction from "../common/functions";
import {onMounted} from "vue";
import flatPickr from 'vue-flatpickr-component';
import 'flatpickr/dist/flatpickr.css';
export default {
     props: {
            weeks: Array,
            containers: Array,
            vehicles_types: Array,
            partners: Array,
            drivers: Array,
            terminals: Array,
        },
     components:{flatPickr},   
     mixins:[CustomFunction],  
     setup() {
        const toast = useToast();
        const tabHome = ref(true);
        const tabDoor = ref(false);
        const containers = ref([]);
        const vehicles_types = ref([]);
        const partners = ref([]);
        const drivers = ref([]);
        const terminals = ref([]);
        const other_vehicles = ref([]);
        
        onMounted(() => {
          getBookingData();
       })
      
        const addBooking = async() =>{
          try{
           let response = await CustomFunction.methods.addBooking();
            if(response){
                toast.success(response.message, {
                    timeout: 5000
                });
                $('#addBooking').modal('hide');
                CustomFunction.methods.getBookings();
           }
          }catch(error){
               console.log(error)
          }

        }

        const getBookingData = async()=>{
          try{
           let response = await CustomFunction.methods.getBookingData();
            if(response){
                containers.value = response.data.containers;
                partners.value   = response.data.partners;
                terminals.value  = response.data.terminals;
                vehicles_types.value = response.data.vehicles_types;
                drivers.value  =  response.data.drivers;
           }
          }catch(error){
               console.log(error)
          }
        }

       const getTransport = async() =>{
           try{
            let response = await axios.get("front/get_vehicles/"+planner.booking.transport_type_id);
            if(response.data){
                   other_vehicles.value = response.data;
                }  
            }catch(error){
                 toast.error(error, {
                    timeout: 2000
                 });
            }
       }

       const tab = (tabId) =>{
            if(tabId == 2){
              tabHome.value = false;
              tabDoor.value = true; 
            }if(tabId == 1){
              tabDoor.value = false; 
              tabHome.value = true;
            }
            
        }

    return{
        tabHome,
        tabDoor,
        planner,
        containers,
        vehicles_types,
        partners,
        drivers,
        terminals,
        other_vehicles,
        tab,
        addBooking,
        getTransport
      }
    },
}
</script>