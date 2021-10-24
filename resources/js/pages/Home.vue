 <template>
 <div>
     <h1>Home Page</h1>
     <button @click="dbSeed" class="btn btn-primary">db seed</button>
 </div>
</template>

<script>
import {ApiGet} from '../helpers/ApiCall'
export default {
    methods:{
        dbSeed(){
            ApiGet('/api/dbseed',{},{}, (res) => {
                  console.log(res)
              })
        }
    }
};
</script>
