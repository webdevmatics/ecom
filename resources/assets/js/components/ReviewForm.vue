<template>
    <div>
        <form @submit.prevent="postReview">
            <legend>Rate our product</legend>

            <div class="form-group">
                <label for="">Rate It</label>

                <star-rating :star-size="20" v-model="formData.rating"></star-rating>
            </div>

            <div class="form-group">
                <label for="">Headline</label>
                <input type="text" class="form-control" v-model="formData.headline" id="" placeholder="Input...">
            </div>

            <div class="form-group">
                <label for="">Tell us more</label>
                <input type="text" class="form-control" v-model="formData.description"  placeholder="Input...">
            </div>


            <button type="submit"  class="button" >Submit</button>

        </form>
    </div>
</template>

<script>
    export default {
        props:['product','url'],
        data(){
            return {
                formData:{}
            }
        },

        methods:{
          postReview(){
              this.formData.product_id=this.product.id;
              
              axios.post(this.url,this.formData)
                  .then(data=>{
                      location.reload();
                  })
                  .catch(error=>{
                      console.log(error);
                  })
          }

        },
    }
</script>
