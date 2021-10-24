<template>
<div>
     <b-card v-if="isShow">
        <b-card-text>
            {{booking.location}}
            </b-card-text>
            <b-card-text>
            {{booking.from}}
            </b-card-text>
            <b-card-text>
            {{booking.to}}
            </b-card-text>
            <b-card-text>
            {{booking.status}}
            </b-card-text>
            <button v-if="checkStatus" @click="changeStatus" class="btn btn-primary btn-sm">
                <template v-if="this.booking.status === 'Pending'"> Change to Active</template>
                <template v-if="this.booking.status === 'Active'"> Change to Payment</template>
                </button>
      </b-card>

      </div>
</template>

<script>
import {ApiPost} from '../helpers/ApiCall'
    export default {
       data() {
            return {
                isShow:true,
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('value')
            }
        },
        props:['service','status','booking'],
        computed:{
            checkStatus(){
            return this.booking.status == "Payment" ? false :true
            }
        },
        methods: {
            changeStatus(){
                if(this.booking.id){
                ApiPost('/api/status/'+this.booking.id,{status:this.booking.status},{}, (res) => {
                  if(res){
                    this.isShow =false   
                  }else{
                      console.log("error in updating")
                      this.isShow =true  
                  }
              })
            } 
        },
    }
    }
</script>
