<template>
<div>
  <ul>
    <li v-for="booking in bookings" :key="booking.id"  :id="`item`+booking.id" @dragstart="drag($event)"  draggable="true">{{booking.title}}</li>
</ul>
</div>
<div id="left">
<div v-for="train in trains" :key="train.id"
 :id="`train`+train.id"
 class="trains"
  @drop="drop($event)" 
   @dragover="allowDrop($event)">
   {{train.title}}</div>
</div>
</template>
<script>
import {reactive, ref} from "vue";
export default{
  setup(){
      const trainBooking = reactive([]);
      const bookings = ref([
        {
          id:1,
          title:'Item A',
          trainId:0,
          list:1
        },
        {
          id:2,
          title:'Item B',
          trainId:0,
          list:1
         },
          {
          id:3,
          title:'Item C',
          trainId:0,
          list:1
        },
         {
          id:4,
          title:'Item D',
          trainId:2,
          list:0
         },
          {
          id:5,
          title:'Item E',
          trainId:1,
          list:0
        }
      ]);

      const trains = ref([
        {
          id:1,
          title:'Train A',
        },
        {
          id:2,
          title:'Train B',
         }
      ]);

      const allowDrop = (ev) => {
          ev.preventDefault();
      }
      
      const  drag = (ev) =>{
          console.log(ev)
          ev.dataTransfer.setData("text", ev.target.id);
      }

      const drop = (ev) =>{
          ev.preventDefault();
          var itemId = ev.dataTransfer.getData("text");
          let booking = [];
          booking['trainId'] =  ev.target.id;
          booking['itemId'] = itemId;
          trainBooking.push(booking);
          console.log(trainBooking);
          ev.target.appendChild(document.getElementById(itemId));
      }

      return{trains,bookings,drop,drag,allowDrop}
  }
}
</script>
<style>
.trains {width:200px;height:200px;padding:10px;border:1px solid #0067b8;}

#left
{
	width: 200px;
	float: left
	
}

#right
{

	width: 200px;
	float: right;
	
}
#container
{
	width: 580px;
	margin: auto;
}
p
{
	font-size: 25px;
	text-align: center;
}
img{
	height: 170px; 
}
</style>
