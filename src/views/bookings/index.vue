<template>
  <main-header/>
  <sidebar/>
<div class="app-content content dashboard">
    <div class="content-wrapper content-wrapper-2">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="row mb-1 mb-md-3 align-items-center align-items-xl-start">
                            <div class="col-md-6">
                                <h1 class="main-heading mb-1">Booking Management</h1>
                                <h2 class="sub-heading">Booking Listing</h2>
                            </div>
                            <div class="col-md-6 text-left text-md-right mt-2 mt-md-0">
                                <a href="javascript:void(0)"  data-toggle="modal" data-target="#addBooking" class="general-btn d-inline-block">Add Booking</a>
                            </div>
                        </div>

                        <div class="dataTables_wrapper">
                            <div class="user-listing-top">

                                <!-- <div class="row align-items-end d-flex mb-1">
                                    <div class="col-md-6 mt-2 sort-datepicker">
                                        <div class="d-sm-flex align-items-center">
                                            <label >Sort by:</label>
                                            <div class="input-wrap mr-0 mr-sm-2 mb-2 mb-sm-0">
                                                <input type="date" placeholder="From" class="form-control" />
                                            </div>
                                            <div class="input-wrap">
                                                <input type="date" placeholder="To" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-2 text-left text-md-right">
                                        <a href="#_" class="general-btn d-inline-block mb-0">Apply/Clear</a>
                                    </div>
                                    <div class="col-12 text-left text-md-right mt-2">
                                        <label >Filter by:</label>
                                        <select name="" id="" class="general-select w-50">
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                </div> -->


                                <!-- <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-2">
                                        <div class="dataTables_length">
                                            <label class="d-inline-block">Show</label>
                                            <select class="form-control d-inline-block table-entry">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                            <label class="d-inline-block ml-1">Entries</label>

                                        </div>
                                    </div>
                                    <div
                                        class="col-12 col-md-6 mt-2 mt-md-0 d-md-flex d-block justify-content-start justify-content-md-end align-items-center">
                                        <div class="dataTables_filter">
                                            <div class="search-wrap">
                                                <input type="search" class="form-control" placeholder="Search" />
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="row row-table">
                                <div class="main-tabble table-responsive">
                                    <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <Bookings />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
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
                <label for="inputEmail4">Order Date</label>
                <input type="date" class="form-control" v-model="booking.order_date">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">Order Time</label>
                <input type="time" class="form-control"  v-model="booking.order_time">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">Select Week Number</label>
                    <select class="form-control" v-model="booking.week_number">
                    <option v-for="(week,index) in weeks" :key="index"  :value="week.id">{{week.name}}</option>>
                   </select>
              </div>
              <div class="form-group col-md-3">
                <label for="inputEmail4">Select Container</label>
                    <select class="form-control" v-model="booking.container_id">
                    <option v-for="(container,index) in containers" :key="index"  :value="container.id">{{container.name}}</option>>
                   </select>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputPassword4">Transport Type</label>
                    <select class="form-control" v-model="booking.transport_type_id" @change="getTransport">
                          <option v-for="(vehicle,index) in vehicles_types" :key="index"  :value="vehicle.id">{{vehicle.name}}</option>>
                    </select>
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4">Transport First</label>
                      <select class="form-control" v-model="booking.transport_first_id">
                          <option v-for="(vehicle,index) in other_vehicles" :key="index"  :value="vehicle.id">{{vehicle.name}}</option>>
                    </select>
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4">Transport Second</label>
                     <select class="form-control" v-model="booking.transport_second_id">
                          <option v-for="(vehicle,index) in other_vehicles" :key="index"  :value="vehicle.id">{{vehicle.name}}</option>>
                    </select>
              </div>
            </div>

   <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputPassword4">Seal</label>
           <select class="form-control" v-model="booking.seal_id">
                <option v-for="(item,index) in 10" :key="index"  :value="item">{{item}}</option>
            </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputPassword4">Container Owner</label>
           <select class="form-control" v-model="booking.container_owner_id">
                <option v-for="(partner,index) in partners" :key="index"  :value="partner.id">{{partner.company_name}}</option>>
           </select>
    </div>
    
  <div class="form-group col-md-2">
      <label for="inputPassword4">Cargo Owner</label>
          <select class="form-control" v-model="booking.cargo_owner_id">
                <option v-for="(partner,index) in partners" :key="index"  :value="partner.id">{{partner.company_name}}</option>>
           </select>
    </div>

  <div class="form-group col-md-2">
      <label for="inputPassword4">Forwarder</label>
            <select class="form-control" v-model="booking.forwarder_id">
                <option v-for="(partner,index) in partners" :key="index"  :value="partner.id">{{partner.company_name}}</option>>
           </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputPassword4">Terminal</label>
        <select class="form-control" v-model="booking.terminal_type_id">
                <option v-for="(terminal,index) in terminals" :key="index"  :value="terminal.id">{{terminal.name}}</option>>
           </select>
    </div>
     <div class="form-group col-md-2">
      <label for="inputPassword4">Terminal Accounts</label>
          <select class="form-control" v-model="booking.terminal_account">
                <option value="Ac-001">Ac-001</option>
                <option value="Ac-002">Ac-002</option>
                <option value="Ac-003">Ac-003</option>
                <option value="Ac-004">Ac-004</option>
                <option value="Ac-005">Ac-005</option>
            </select>
    </div>
  </div>

  <div class="form-row">
      <div class="form-group col-md-3">
      <label for="inputPassword4">Type</label>
            <select class="form-control" v-model="booking.booking_type_id">
             <option v-for="(item,index) in 10" :key="index"  :value="item">{{item}}</option>
             </select>
      </div>
    <div class="form-group col-md-3">
      <label for="inputEmail4">Reference Number</label>
           <select class="form-control" v-model="booking.reference_number">
            <option v-for="(item,index) in 10" :key="index"  :value="item">{{item}}</option>
           </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputEmail4">Gate In Date</label>
      <input type="date" class="form-control"  v-model="booking.gate_in_date">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Gate In Time</label>
      <input type="time" class="form-control"  v-model="booking.gate_in_time">
    </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputPassword4">Gate Out Date</label>
        <input type="date" class="form-control"  v-model="booking.gate_out_date">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Gate Out Time</label>
        <input type="time" class="form-control"  v-model="booking.gate_out_time">
    </div>
     <div class="form-group col-md-4">
      <label for="inputPassword4">Trucking Co IN</label>
          <select class="form-control" v-model="booking.trcuk_co_in">
              <option v-for="(item,index) in 10" :key="index"  :value="item">{{item}}</option>
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
      <label for="inputEmail4">Outgoing Date</label>
      <input type="date" class="form-control" v-model="booking.outgoingDate">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Outgoing Time</label>
      <input type="time" class="form-control"  v-model="booking.outgoingTime">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Door Delivery</label>
             <select class="form-control" v-model="booking.door_delivery">
                    <option v-for="(container,index) in containers" :key="index"  :value="container.id">{{container.name}}</option>>
             </select>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputPassword4">Door Date</label>
        <input type="date" class="form-control" v-model="booking.door_date">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Door Time</label>
      <input type="time" class="form-control"  v-model="booking.door_time">
    </div>
     <div class="form-group col-md-3">
      <label for="inputPassword4">Drop Of Date</label>
        <input type="date" class="form-control" v-model="booking.door_off_date">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Drop Of Time</label>
        <input type="time" class="form-control" v-model="booking.door_off_time" >
    </div>
  </div>

   <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputPassword4">Transport Type</label>
           <select class="form-control"  v-model="booking.transport_type_id" @change="getTransport">
                <option v-for="(vehicle,index) in vehicles_types" :key="index"  :value="vehicle.id">{{vehicle.name}}</option>
            </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Transport First</label>
          <select class="form-control"  v-model="booking.transport_first_id">
          <option v-for="(vehicle,index) in other_vehicles" :key="index"  :value="vehicle.id">{{vehicle.name}}</option>
            </select>
    </div>
    
  <div class="form-group col-md-4">
      <label for="inputPassword4">Transport Second</label>
          <select class="form-control" v-model="booking.transport_second_id">
            <option v-for="(vehicle,index) in other_vehicles" :key="index"  :value="vehicle.id">{{vehicle.name}}</option>
            </select>
    </div>
  </div>

  
   <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputPassword4">Driver out</label>
           <select class="form-control" v-model="booking.driver_out">
            <option v-for="(driver,index) in drivers" :key="index"  :value="driver.id">{{driver.name}}</option>
            </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Trucking Co OUT</label>
          <select class="form-control" v-model="booking.trucking_co_out">
            <option v-for="(item,index) in 10" :key="index"  :value="item">{{item}}</option>
            </select>
    </div>
    
  <div class="form-group col-md-4">
      <label for="inputPassword4">Receiver</label>
          <select class="form-control" v-model="booking.receiver">
            <option v-for="(item,index) in 10" :key="index"  :value="item">{{item}}</option>
            </select>
    </div>
  </div>
  <div class="form-row">
      <div class="form-group col-md-6">
      <label for="inputPassword4">Pickup</label>
            <select class="form-control" v-model="booking.pickup">
            <option v-for="(item,index) in 10" :key="index"  :value="item">{{item}}</option>
             </select>
      </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Drop off</label>
           <select class="form-control" v-model="booking.drop_off">
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
</div>
</template>
<script>
import { reactive, ref } from '@vue/reactivity';
import {onMounted } from "vue";
import { useRoute } from 'vue-router';
import Pagination from 'laravel-vue-pagination';
import axios from "axios";
import { useToast } from "vue-toastification";
import MainHeader from "../../core/header/index.vue";
import Sidebar from "../../core/sidebar/index.vue";
import Bookings from "./components/bookings.vue";
export default {
    components: {
    Pagination,
    Navigation,
    MainHeader,
    Sidebar,
    Bookings,
    },
    setup() {
        const toast = useToast();
        const route = useRoute();
        const weeks = ref([]);
        const bookings = ref([]);
        const booking = reactive([]);
        const tabHome = ref(true);
        const tabDoor = ref(false);
        const containers = ref([]);
        const vehicles_types = ref([]);
        const other_vehicles = ref([]);
        const partners = ref([]);
        const drivers = ref([]);
        const terminals = ref([]);
        const errors   = ref();


      onMounted(() => {
          getBookingData();
          getWeeks();
      })

        const getWeeks = async()=>{
                try{
                let response = await axios.get("front/weeks");
                    if(response.data){
                    weeks.value = response.data;
                    }  
                }catch(error){
                    console.log(error)
                }
            }

        const getBookingData = async()=>{
            try{
              let response = await axios.get("front/get_booking_data");
                if(response.data){
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
                let response = await axios.get("front/get_vehicles/"+booking.transport_type_id);
            if(response.data){
                   other_vehicles.value = response.data;
                }  
            }catch(error){
               console.log(error)
            }
       }
       
      const addBooking = async() =>{

           try{
            let response = await axios.post("user/bookings",{...booking});
            if(response.data){
                toast.success(response.data.message, {
                    timeout: 2000
                });
                $('#addBooking').modal('hide');
                getBookings();
                booking = "";
                
            }  
            }catch(error){
                console.log(error)
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
          weeks,
          bookings,
          booking,
          containers,
          partners,
          drivers,
          terminals,
          vehicles_types,
          other_vehicles,
          tabHome,
          tabDoor,
          errors,
          addBooking,
          tab,
          getTransport
        }
    }
}
</script>