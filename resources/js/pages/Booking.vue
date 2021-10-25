<template>
    <div class="container">
        <ServiceList :services="services"/>
        <button v-if="prevPage" @click="prevService" class="btn btn-primary btn-sm float-left" >Previous</button>
        <button  v-if="nextPage" @click="nextService" class="btn btn-primary btn-sm float-right" >Next</button>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                            Bookings - {{status}}
                        </div>

                    <div class="card-body">

                        <BookingList  :currentService="currentService" v-bind:status="status" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import BookingList from "../components/BookingListComponent.vue";
import ServiceList from "../components/ServiceListComponent.vue";
import {ApiGet} from "../helpers/ApiCall"
export default {
    components:{
        BookingList,ServiceList
    },
     data() {
            return {
                services:[],
                // status:this.$route.params.status,
                nextPage:null,
                prevPage:null,
            }
        },
        computed:{
            status(){
                return this.$route.params.status
            },
            currentService(){
                return this.services[0]?.id ?? 1
            }
        },
        methods: {
            prevService(){
                if(this.prevPage){
               ApiGet(this.prevPage,{},{}, (res) => {
                   this.services = res.data;
                  this.nextPage=res.next_page_url
                  this.prevPage=res.prev_page_url
              })
                }
            },
             nextService(){
                if(this.nextPage){
               ApiGet(this.nextPage,{},{}, (res) => {
                  this.services = res.data;
                  this.nextPage=res.next_page_url
                  this.prevPage=res.prev_page_url
              })
                }
            }
            },
      mounted() {
              ApiGet('/api/services',{},{}, (res) => {
                  this.services = res.data;
                  this.nextPage=res.next_page_url
                  this.prevPage=res.prev_page_url
              })
            },


};
</script>
