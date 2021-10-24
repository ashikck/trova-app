<template>
<div>
    <div v-for="booking in bookings" :key="booking.id">
        <Booking   :booking="booking"/>
    </div>
    <button v-if="nextPage" class="btn btn-sm btn-primary float-right" @click="next">View More</button>
    <span class="float-right" v-else>No More Bookings</span>
</div>
</template>

<script>
import Booking from '../components/BookingComponent.vue';
import {ApiGet} from '../helpers/ApiCall'
export default {
    components :{
        Booking
    },
      props: ['status','currentService'],
    data() {
            return {
                bookings: [],
                loading:false,
                nextPage:null
            }
        },
        watch:{
            status: function (from, to) {
                this.loadBookings()
             },
             currentService:function (from, to) {
                this.loadBookings()
             },

        },

        methods: {
            next(){
                if(this.nextPage){
               ApiGet(this.nextPage,{},{}, (res) => {
                  this.bookings.push(...res.data);
                  this.nextPage=res.next_page_url
              })
                }
            },
            loadBookings(){
                ApiGet('/api/bookings/status/'+ this.currentService+'/'+this.status,{},{}, (res) => {
                  this.bookings = res.data;
                  this.nextPage=res.next_page_url
              })
            }
        },
       mounted() {
           this.loadBookings()

            }
};
</script>
