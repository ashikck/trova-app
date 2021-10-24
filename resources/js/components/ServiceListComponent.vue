<template>
<div>
    <div v-for="service in services" :key="service.id">
    <b-card img-src="https://via.placeholder.com/200" img-alt="Card image" img-left class="mb-3" :title=service.name sub-title="Card subtitle">
    <b-card-text>
       {{service.category}}
      </b-card-text>
      <b-card-text>
       {{service.description}}
      </b-card-text>
      <b-card-text>
       ${{service.price}}
      </b-card-text>
    </b-card>
    </div>
</div>
</template>

<script>
import Service from "../components/ServiceComponent.vue"
    export default {
         components :{
        Service
    },
        props: ['services','status'],
    }
</script>
