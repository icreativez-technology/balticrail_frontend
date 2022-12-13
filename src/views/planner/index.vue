<template>
  <main-header/>
  <sidebar/>
  <div class="app-content content dashboard">
  <div class="content-wrapper content-wrapper-2">
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="configuration">
            <div class="row">
               <!-- <div class="col-sm-6">
                    <h1 class="ml-1 main-heading">Planner</h1>
              </div> -->
              <div class="col-sm-12">
                    <div class="collapse" id="collapseExample">
                      <ul class="d-inline-block table-entry white-div border-20 px-lg-5 px-2">
                        <label for="weeks" class="planned-filter"><b><i class="fa fa-calendar" aria-hidden="true"></i> Weeks</b></label>
                        <li  v-for="(week,index) in planner.weeks_filter" :key="index">
                        <input type="checkbox" class="train-select-booking"  @change="filterTrainBookings"  v-model="weeksFilter" :value="week.id"> {{week.name}}
                        </li>
                      </ul>&nbsp;&nbsp;
                      <ul class="d-inline-block table-entry white-div border-20 px-lg-5 px-2">
                        <label for="trains" class="planned-filter"><b><i class="fa fa-subway" aria-hidden="true"></i> Trains</b></label>
                        <li  v-for="(train,index) in planner.trains" :key="index">
                          <input type="checkbox" class="train-select-booking" @change="filterTrainBookings"  v-model="trainsFilter" :value="train.name"> {{train.name}}
                        </li>
                      </ul>&nbsp;&nbsp;
                        <ul class="d-inline-block table-entry white-div border-20 px-lg-5 px-2">
                        <label for="clints" class="planned-filter"><b><i class="fa fa-users" aria-hidden="true"></i> Clients</b></label>
                        <li  v-for="(client,index) in planner.clients" :key="index">
                        <input type="checkbox" class="train-select-booking"  @change="filterTrainBookings"  v-model="clientsFilter" :value="client.id"> {{client.name}}
                        </li>
                      </ul>&nbsp;&nbsp;
                      <ul class="d-inline-block table-entry white-div border-20 px-lg-5 px-2">
                        <label for="clints" class="planned-filter"><b><i class="fa fa-rocket" aria-hidden="true"></i> Directions</b></label>
                        <li>
                        <input type="checkbox" class="train-select-booking"  @change="filterTrainBookings"  v-model="directionFilter" value="sb"> South Bound
                        </li>
                        <li>
                        <input type="checkbox" class="train-select-booking"  @change="filterTrainBookings"  v-model="directionFilter" value="nb"> North Bound
                        </li>
                      </ul>
                      &nbsp;&nbsp;
                        <ul class="d-inline-block table-entry white-div border-20 px-lg-5 px-2">
                        <label for="clints" class="planned-filter"><b><i class="fa fa-terminal" aria-hidden="true"></i>Terminal</b></label>
                        <li  v-for="(terminal,index) in planner.terminals" :key="index">
                        <input type="checkbox" class="train-select-booking"  @change="filterTrainBookings"  v-model="terminalFilter" :value="terminal.id"> {{terminal.name}}
                        </li>
                      </ul>&nbsp;&nbsp;
                      &nbsp;&nbsp;
                        <ul class="d-inline-block table-entry white-div border-20 px-lg-5 px-2">
                        <label for="clints" class="planned-filter"><b><i class="fa fa-product-hunt" aria-hidden="true"></i> Booking Type</b></label>
                        <li>
                        <input type="checkbox" class="train-select-booking"  @change="filterTrainBookings"  v-model="bookingTypeFilter" value="pre-booking"> Pre Booking
                        </li>
                        <li>
                        <input type="checkbox" class="train-select-booking"  @change="filterTrainBookings"  v-model="bookingTypeFilter" value="booking"> Booking
                        </li>
                      </ul>
                    </div> 
                  <div class="col-md-12 order-log-btns text-right">              
                    <a href="javascript:void(0)" class="general-btn d-inline-block mb-2"  data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Filters <i class="fa fa-filter" aria-hidden="true"></i></a>&nbsp;
                    <!-- <a href="javascript:void(0)"  data-toggle="modal" data-target="#addBooking"   class="general-btn d-inline-block">Booking <i class="fa fa-plus" aria-hidden="true"></i></a> -->
                     &nbsp;<a href="javascript:void(0)"   data-toggle="modal" data-target="#addTrain" class="general-btn d-inline-block">Train <i class="fa fa-plus" aria-hidden="true"></i></a>
                     &nbsp;<a href="javascript:void(0)"   data-toggle="modal" data-target="#addBookingToPlanner" class="general-btn d-inline-block">B To P <i class="fa fa-plus" aria-hidden="true"></i></a>
               </div>
              </div>
            </div>
        <div class="row">
          <div class="col-sm-2">
            <div class="white-div border-20 px-lg-5 px-2">
                <div class="form-group">
                <label for="inputAddress">Select Filter</label>
                 <div class="search-wrap mt-0.5">
                      <input type="search" class="form-control" placeholder="Search" v-model="search" @keyup="getFilteredBooking(1)">
                 </div>
                    <br />
                    <label for="inputAddress">Select Booking Category</label>
                   <select class="form-control mt-0.5" v-model="filter" @change="getFilteredBooking(1)">
                          <option value="all" selected="selected">All</option>
                          <option value="planned">Planned</option>
                          <option value="unplanned">Unplanned</option>
                          <option value="old">Old</option>
                  </select>
                </div>
               <h2 class="sub-heading mt-2 ml-1">New Bookings</h2>
              <div class="mt-2" v-if="planner.bookings.data != ''">
                         <div class="row row-table">
                                <div class="main-tabble table-responsive">
                                    <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                                       <div class="row">
                                          <div class="col-sm-12">
                                          <span id="all-bookings"><input type="checkbox" class="train-select-booking"  v-model="allSelected" @click="selectAll"></span>
                                          <span id="train-booking-actions">
                                            <div class="btn-group ml-1">
                                                            <button type="button" class=""
                                                              data-toggle="dropdown">
                                                                <i class="fa fa-bars"></i>
                                                            </button>
                                                              <div class="dropdown-menu">
                                                                <a class="dropdown-item"
                                                                  href="javascript:void(0)"  data-toggle="modal" data-target="#moveBooking" @click="moveBookingToTrain(0)"><i class="fa fa-exchange"></i>Move</a> 
                                                              <a class="dropdown-item"
                                                                  href="javascript:void(0)" v-if="!planner.booking.is_copied"  data-toggle="modal" data-target="#moveBooking" @click="moveBookingToTrain(1)"><i class="fa fa-copy"></i>Copy</a>                                     
                                                            </div>
                                                        </div>
                                                 </span>
                                                <table cellspacing="4" cellpanding="1">
                                                <tr class="booking-items" v-for="(booking,index) in planner.bookings.data" :key="index">
                                                <td :id="`booking-types-`+booking.booking_type"><input type="checkbox" class="train-select-booking"  v-model="bookingIds" @change="select" :value="booking.booking_display_id">
                                                </td>
                                                <td><mark :id="`booking-status-`+booking.status">{{booking.status}}</mark>&nbsp;{{booking.container_number}}  {{booking.user ? booking.user.name : 'N/A'}}<br><small>Ref</small> {{booking.reference_number}}</td>
                                                <td>Wk {{booking.week_number}} {{booking.goods ? booking.goods.container_net : 'N/A' }}<small>kg</small> <br>{{booking.terminal ? booking.terminal.name : 'N/A'}}</td>
                                                <td>{{booking.created_at}}<br>  {{booking.goods ? booking.goods.size_type : 'N/A' }} <br><small>ID</small> {{booking.booking_display_id}}</td>
                                                </tr>            
                                                </table>
                                                <Pagination :data="planner.bookings" align="right" :limit="-1" @pagination-change-page="getFilteredBooking" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

              </div>
              <div v-else class="mt-3 pb-2 text-center">No Record found</div>
            </div>
           </div>
          <div class="col-sm-10">
            <div class="white-div border-20 px-lg-5 px-2">
               <!-- <h2 class="sub-heading mt-2 ml-1">Weeks Planner</h2> -->
                <div v-if="planner.weeks != ''">
                   <carousel :breakpoints="breakpoints">
                      <slide v-for="(week,wekIndex) in planner.weeks" :key="wekIndex">
                        <div class="col d-flex flex-column">
                          <div class="">
                             <div class="slice">
                             <div class="card">
                            <div class="card-body">
                            <p class="card-text heading"><strong>{{week.name}} - {{week.from_date}}</strong></p>
                            <hr/>
                                <div class="trains" v-if="week.trains != null">

                                  <div v-for="(train,trIndex) in week.trains" :key="trIndex"  class="trains-info" :id="`train-details-`+train.id">
                                   <a href="javascript:void(0)">

                                    <div :class="`train-meta-`+train.direction" data-toggle="collapse" :data-target="`#train-bookings-`+train.id" aria-expanded="false" :aria-controls="`train-bookings-`+train.id">
                                       <div :class="`train-heading-`+train.direction" @click="getTrianInfo(train.id,train.direction)">
                                          <strong><i class="fa fa-subway" aria-hidden="true"></i> &nbsp;{{train.name}}</strong>&nbsp;&nbsp;
                                          <strong>{{train.direction}}</strong>&nbsp;&nbsp;
                                          &nbsp;<span id="booking-ref"></span><span>{{train.departure_date}}</span>
                                          <br/>
                                          <span>Cap- </span> <strong>{{getTrainCapcity(wekIndex,trIndex,train.id)}} kg</strong>&nbsp;&nbsp;
                                          <span>TEU- </span><strong>{{train.total_tue}}</strong>
                                       </div>
                                   </div>
                                   </a>
                                    <br />
                                        <div v-if="train.train_booking.length > 0" class="booking-train collapse" :id="`train-bookings-`+train.id">
                                          <span id="all-bookings"><input type="checkbox" class="train-select-booking"  v-model="trainBookingSelected[train.id]" @click="selectAllTrainBooking(wekIndex,trIndex,bokIndex,train.id)"></span>
                                          <span id="train-booking-actions">
                                          <div class="btn-group ml-1">
                                                      <button type="button" class=""
                                                        data-toggle="dropdown">
                                                          <i class="fa fa-bars"></i>
                                                      </button>
                                                        <div class="dropdown-menu">
                                                          <a class="dropdown-item"
                                                            href="javascript:void(0)"  data-toggle="modal" data-target="#moveBooking" @click="moveBookingToTrain(0,'move-to-trian')"><i class="fa fa-exchange"></i>Move</a> 
                                                        <a class="dropdown-item"
                                                            href="javascript:void(0)" v-show="!planner.booking.is_copied"  data-toggle="modal" data-target="#moveBooking" @click="moveBookingToTrain(1,'copy-to-trian')"><i class="fa fa-copy"></i>Copy</a>                                     
                                                      </div>
                                                  </div>
                                         </span>
                                          <table  width="50%" cellspacing="4" cellpanding="1">
                                            <tr class="booking-items" v-for="(booking,bokIndex) in train.train_booking" :key="bokIndex">
                                              <td :id="`booking-types-`+booking.bookings.booking_type"><input type="checkbox" class="train-select-booking"  v-model="booking.checked"  @change="selectTrainBooking(bokIndex,booking.checked,train.id,booking.bookings.booking_display_id)" :value="booking.bookings.id">
                                               <br>
                                               <br>
                                               <i v-show="booking.is_copied" class="fa fa-clone" aria-hidden="true"></i>
                                               <br>
                                               <br>
                                               <i class="fa fa-trash" id="trash-icon" aria-hidden="true"  @click="removeBooking(booking.bookings.booking_display_id,booking.is_copied,train.id)"></i>
                                              </td>
                                              <td><mark :id="`booking-status-`+booking.bookings.status">{{booking.bookings.status}}</mark>&nbsp;{{booking.bookings.container_number}}  {{booking.bookings.user ? booking.bookings.user.name : 'N/A'}}<br><small>Ref</small> <span id="bok-ref">{{booking.bookings.reference_number}}</span></td>
                                              <td>Wk {{booking.bookings.week_number}} {{booking.goods ? booking.goods.container_net : 'N/A' }}<small>kg</small><br>{{booking.bookings.terminal ? booking.bookings.terminal.name : 'N/A'}}</td>
                                              <td>{{booking.bookings.created_at}}  {{booking.goods ? booking.goods.size_type : 'N/A' }}<br><small>ID</small> {{booking.bookings.booking_display_id}}</td>
                                            </tr>
                                          </table>
                                        </div> 
                                        <div v-else class="booking-train collapse" :id="`train-bookings-`+train.id">
                                        <p class="text-center">No Bookings available</p>  
                                        </div>                                  
                                  </div>

                                </div>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      </slide>
                      <template #addons>
                      <navigation />
                    </template>
                  </carousel>
                </div>
                <div v-else>
                  <p class="text-center">No Record Found</p>
                </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
 

<div class="modal fade" id="moveBooking" tabindex="-1" role="dialog" aria-labelledby="trainModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 style="color:black;">Select Train to {{isCopied ? 'Copy' : 'Move'}}</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form @submit.prevent="addMultipleBookingToPlanner(isCopied ? 'copy' : 'move')">
            <div class="form-group">
                <label for="inputAddress">Select Train</label>
                <select class="form-control" v-model="planner.train.train_id">
                    <option v-for="(train,index) in planner.trains" :key="index"  :value="train.id">({{train.train_week.name}})  {{train.name}}</option>
                </select>
            </div>
            <button type="submit" class="general-btn d-inline-block">{{isCopied ? 'Copy' : 'Move'}}</button>
            </form>
      </div>
    </div>
  </div>
</div>


 <div class="modal fade" id="addBookingToPlanner" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 style="color:black;">Add Booking To Planner</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form @submit.prevent="addBookingToPlanner">
           <div class="form-group">
                <label for="inputAddress">Select Train</label>
                <select class="form-control" v-model="planner.train.train_id">
                    <option v-for="(train,index) in planner.trains" :key="index"  :value="train.id">{{train.name}}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputAddress">Select Booking</label>
                <select class="form-control" v-model="planner.train.booking_id">
                    <option v-for="(booking,index) in planner.bookings.data" :key="index"  :value="booking.id">{{booking.booking_display_id}}</option>
                    </select>
            </div>
             <div class="form-group" v-if="errors">
                <p class="text-center train-booking-error">{{errors}}</p>
            </div>
            <button type="submit" class="general-btn d-inline-block">Add</button>
      </form>
      </div>
    </div>
  </div>
</div>


<CreateBooking />
<CreateTrain />
</div>
</template>
<script>
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide, Navigation } from 'vue3-carousel';
import Pagination from 'laravel-vue-pagination';
import { ref } from '@vue/reactivity';
import {onMounted} from "vue";
import axios from "axios";
import { useToast } from "vue-toastification";
import CreateBooking from "./components/booking/create.vue";
import CreateTrain from "./components/train/create.vue";
import planner from "../store/state.js";
import MainHeader from "../../core/header/index.vue";
import Sidebar from "../../core/sidebar/index.vue";
import $ from "jquery";
export default {
    components: {
    Carousel,
    Slide,
    Pagination,
    Navigation,
    CreateBooking,
    CreateTrain,
    MainHeader,
    Sidebar
    },
    setup() {
        const toast = useToast();
        const errors   = ref();
        const allSelected = ref(false);
        const trainBookingSelected  = ref(false);
        const bookingIds  = ref([]);
        const trainBookingIds  = ref([]);
        const isCopied    = ref(false);
        const isMoved     = ref();
        const trainId     = ref();
        const isCopiedValue  = ref();
        const oldTrain     = ref();
        const clientsFilter  = ref([]);
        const trainsFilter   = ref([]);
        const weeksFilter    = ref([]);
        const terminalFilter = ref([]);
        const bookingTypeFilter = ref([]);
        const directionFilter = ref([]);
        const filter = ref('unplanned');
        const search = ref('');
        const token  = ref();

        onMounted(async () => {
          token.value = localStorage.getItem("token");
          axios.defaults.headers.common = {'Authorization': `Bearer ${token.value}`} 
          await getBookings();
          await vehicles();         
        })

      const vehicles = async()=>{
        try{
          
          let response = await axios.get("front/vehicles");
            if(response.data){
              planner.weeks       = response.data.weeks
              planner.weeks_filter= response.data.weeks_filter
              planner.trains      = response.data.trains
              planner.clients     = response.data.clients
              planner.terminals   = response.data.terminals
            } 
            
        }catch(error){
            console.log(error)
        }
      }
        const getBookings = async(page = 1)=>{
          try{
            let response = await axios.get("user/bookings?page="+page);
              if(response.data){
                planner.bookings = response.data;
              }  
          }catch(error){
              console.log(error)
          }
        }

      //  const getBookingData = async()=>{
      //     try{
      //     let response = await axios.get("front/get_booking_data");
      //     if(response){
      //         return response;
      //     }  
      //     }catch(error){
      //         console.log(error)
      //     }
      // }
        const addBookingToPlanner = async()=>{
            try{
              let response = await axios.post("user/bookings/planners/add_booking_to_train",{
                train_id:planner.train.train_id,
                booking_id:planner.train.booking_id
              });
                if(response.data){
                   toast.success(response.data.message, {
                    timeout: 5000
                    });
                    $('#addBookingToPlanner').modal('hide');
                    await vehicles();
                    await getBookings();
                    train.train_id   = " ";
                    train.booking_id = " ";
                }  
            }catch(error){
                 errors.value = error.response.data.message
                 toast.error(error.response.data.message, {
                    timeout: 5000
                  });
            }
        }

        const addMultipleBookingToPlanner = async(action)=>{
            try{
              let response = await axios.post("user/bookings/planners/add_multiple_booking_to_train",{
                train_id:planner.train.train_id,
                old_train_id:oldTrain.value,
                bookingIds:(bookingIds.value.length > 0) ? bookingIds.value : trainBookingIds.value,
                is_copied:isCopiedValue.value,
                action:action,
                status:isMoved.value
              });
                if(response.data){
                  toast.success(response.data.message, {
                      timeout: 5000
                  });  
                await vehicles();
                await getBookings();
                for(var i=0; i<planner.trains.length; i++){
                    if(planner.trains[i].id == planner.train.train_id){
                      var  trainDirection = planner.trains[i].direction;
                    } 
                }
                $('#moveBooking').css("display","none");
                $("body").removeClass("modal-open");
                $('.modal-backdrop').remove();
                $('#train-bookings-'+planner.train.train_id).addClass("show");
                $('#train-details-'+planner.train.train_id).addClass("train-details-"+trainDirection);
                $('#train-details-'+planner.train.train_id).addClass("trains-info");
                $('#train-details-'+planner.train.train_id).addClass("trains-opened");
        
                }  
            }catch(error){
                 errors.value = error.response.data.message
                 toast.error(error.response.data.message, {
                    timeout: 5000
                  });
            }
        }
       
      const getFilteredBooking = async(page) =>{
           try{
            let response  = await axios.post("user/get_filtered_bookings?page="+page+"&filter="+filter.value+"&search="+search.value);
            if(response.data){
                planner.bookings = response.data 
              }  
            }catch(error){
                 toast.error(error, {
                    timeout: 2000
                 });
            }
       }
       
         const removeBooking = async(booking_id,is_copied,train_id) =>{
           try{
            let response = await axios.post("user/bookings/planners/remove_booking",{
              booking_id:booking_id,
              is_copied:is_copied,
              train_id:train_id
            });
            if(response.data){
               await vehicles();
               await getBookings();
                toast.success(response.data.message, {
                    timeout: 5000
                });
            }  
            }catch(error){
                 toast.error(error.response.data.message, {
                    timeout: 5000
                  });
            }
       }

        const selectAll = ()=>{
             if(!allSelected.value){
                for(var i=0; i<=planner.bookings.data.length; i++){
                    bookingIds.value.push(planner.bookings.data[i].booking_display_id);
                }
            }
            else{
              bookingIds.value = [];
            }
        }

        const select = () =>{
          //console.log(bookingIds.value)
            allSelected.value = false;
        }

         const filterTrainBookings = async()=>{

           try{
            let response  = await axios.post("front/get_filtered_train_booking",{
              clients:clientsFilter.value ? clientsFilter.value : null,
              trains:trainsFilter.value ? trainsFilter.value : null,
              weeks:weeksFilter.value ? weeksFilter.value : null,
              direction:directionFilter.value ? directionFilter.value : null,
              booking_type:bookingTypeFilter.value ? bookingTypeFilter.value : null,
              terminals:terminalFilter.value ? terminalFilter.value : null
            });
            if(response.data){
                planner.weeks    = response.data.weeks;
                planner.bookings = response.data.bookings ? response.data.bookings : planner.bookings;
              }  
            }catch(error){
              console.log(error)
                 toast.error(error, {
                    timeout: 2000
                 });
            }
         }

        const selectAllTrainBooking = (wekIndex,trIndex,bokIndex,train_id)=>{
            oldTrain.value = train_id;
            if(!trainBookingSelected.value){
                for(var i=0; i<=planner.weeks.length; i++){
                  for(var j=0; j<=planner.weeks[wekIndex].trains.length; j++){
                            for(var k=0; k<=planner.weeks[wekIndex].trains[trIndex].train_booking.length;k++){
                                  if(planner.weeks[wekIndex].trains[trIndex].id == train_id){
                                   planner.weeks[wekIndex].trains[trIndex].train_booking[k]['checked'] = true;
                                   trainBookingIds.value.push(planner.weeks[wekIndex].trains[trIndex].train_booking[k].booking_id)
                                   trainBookingSelected.value = true;
                              }
                          }
                  }
              }
            }
            else{
                for(var i=0; i<=planner.weeks.length; i++){
                  for(var j=0; j<=planner.weeks[wekIndex].trains.length; j++){
                          if(planner.weeks[wekIndex].trains[trIndex].id == train_id){
                            for(var k=0; k<=planner.weeks[wekIndex].trains[trIndex].train_booking.length;k++){
                                   planner.weeks[wekIndex].trains[trIndex].train_booking[k]['checked'] = false;
                                   trainBookingSelected.value = false;
                              }
                          }
                  }
              }
            }
        }

         const selectTrainBooking = (bokIndex,value,trainId,bookingId) =>{
           oldTrain.value = trainId;
              if(value){
                trainBookingIds.value.push(bookingId); 
              }else{
                trainBookingIds.value.splice(bokIndex,1);
              }
               
         }

         const getTrainCapcity = (wekIndex,trIndex,train_id) =>{

              var totalWeight = 0;
                for(var i=0; i<=planner.weeks.length; i++){
                  for(var j=0; j<=planner.weeks[wekIndex].trains.length; j++){
                          if(planner.weeks[wekIndex].trains[trIndex].id == train_id){
                            for(var k=0; k<planner.weeks[wekIndex].trains[trIndex].train_booking.length;k++){
                                if(planner.weeks[wekIndex].trains[trIndex].train_booking[k].goods){
                                    totalWeight += planner.weeks[wekIndex].trains[trIndex].train_booking[k].goods.container_net
                                }else{
                                    totalWeight = 0;
                                }
                              }
                              return totalWeight;
                          }
                  }
               }

         }

        const bookingToTrain = (value, bok_id = null, copied = 0 ,status = null) =>{
          isCopied.value = value;
          bok_id ? bookingIds.value.push(bok_id) : bookingIds.value;
          status ? isMoved.value = status : isMoved.value = "";
          copied ? isCopiedValue.value = copied : isCopiedValue.value = "";
        }

        const moveBookingToTrain = (value,status) =>{
           isCopied.value = value;
           status ? isMoved.value = status : isMoved.value = "";
        }

        const getTrianInfo = (id,direction) =>{
             (direction == 'NB') ?  $('#train-details-'+id).toggleClass("train-details-NB") : $('#train-details-'+id).toggleClass("train-details-SB")
             $('#train-details-'+id).toggleClass("trains-info");
             $('#train-details-'+id).toggleClass("trains-opened");
        }

        return{
          planner,
          errors,
          bookingIds,
          trainBookingIds,
          allSelected,
          trainBookingSelected,
          isCopied,
          clientsFilter,
          trainsFilter,
          weeksFilter,
          bookingTypeFilter,
          terminalFilter,
          directionFilter,
          filter,
          search,
          addBookingToPlanner,
          select,
          selectAll,
          selectTrainBooking,
          selectAllTrainBooking,
          getFilteredBooking,
          bookingToTrain,
          removeBooking,
          moveBookingToTrain,
          addMultipleBookingToPlanner,
          getTrainCapcity,
          filterTrainBookings,
          getTrianInfo,
             breakpoints: {
              370: {
                itemsToShow: 1,
                snapAlign: "center"
              },
              768: {
                itemsToShow: 1,
                snapAlign: "center"
              },
              1024: {
                itemsToShow: 3,
                snapAlign: "center"
              },
              1440: {
                itemsToShow: 3,
                snapAlign: "center"
              },
              1600: {
                itemsToShow: 5,
                snapAlign: "center"
              }
            }
          }
    }
}
</script>