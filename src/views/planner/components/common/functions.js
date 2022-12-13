import planner from "../../../store/state"
import axios from "axios";
export default{
  methods: {
    async vehicles(){
        try{
          let response = await axios.get("front/vehicles");
            if(response.data){
              planner.weeks       = response.data.weeks
              planner.weeks_filter= response.data.weeks_filter
              planner.trains      = response.data.trains
              planner.clients     = response.data.clients
            } 
            
        }catch(error){
            console.log(error)
        }
    }, 
    async getBookings(page = 1){
      try{
        let response = await axios.get("user/bookings?page="+page);
          if(response.data){
            planner.bookings = response.data;
          }  
      }catch(error){
          console.log(error)
      }
    },
    async addBooking(){
      try{
      let response = await axios.post("user/bookings",{...planner.booking});
      if(response.data){
          return response.data;
      }  
      }catch(error){
          console.log(error)
      }
  },
    // async getBookingData(){
    //     try{
    //     let response = await axios.get("front/get_booking_data");
    //     if(response){
    //         return response;
    //     }  
    //     }catch(error){
    //         console.log(error)
    //     }
    // }

    }
}