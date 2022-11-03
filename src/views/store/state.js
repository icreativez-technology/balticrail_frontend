import { reactive } from "vue";

const planner = reactive({
    booking: [{
        filter:'unplanned'
      }],
    bookings: {},
    bookingsCount: null,
    train: [],
    trains:{},
    weeks_filter:{},
    weeks:{},
    clients:{}
})

export default planner


