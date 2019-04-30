<template>
    <div class="container">
            <div class="row">
              
           <div class="col-md-4" v-for="Testimonial in Testimonials" :key="Testimonial.id">
            <div class="card">
                <div style="text-align: center;margin-top: 20px">
                    <div class="comment">
                       <img width="130px" height="130px" :src="Testimonial.image_path" style="margin:auto;border-radius:50%"></img>
                    </div>
                </div>

                <div class="card-body">
                    <p class="card-text">{{Testimonial.body}}</p>
                    <h5 class="card-title" style="text-align: center; margin-top: 100px">{{Testimonial.name}}</h5>
                    <p class="card-text" style="text-align: center; margin-top: -12px"><small class="text-muted">{{Testimonial.company}}</small></p>
                </div>
            </div>

            </div>   
            </div> 

             <nav aria-label="Page navigation example">
                <ul class="pagination mt-2">
                    <li v-bind:class="[{disabled:!pagination.prev_page_url}]" class="page-item"><a class="page-link" href="#page" @click="fetchTestimonial(pagination.prev_page_url)"><<</a></li>
                    <!-- <li class="page-item disabled"><a class="page-link" href="#">Page {{pagination.current_page}} of {{pagination.last_page}}</a></li> -->
                    <li v-bind:class="[{disabled:!pagination.next_page_url}]" class="page-item"><a class="page-link" href="#page" @click="fetchTestimonial(pagination.next_page_url)">>></a></li>
                </ul>
                </nav>

      </div>
</template>

<script>
    export default {
        data(){
            return{
                Testimonials:[],
                Testimonial:{
                    'body':'',
                    'name':'',
                    'company':'',
                    'image_path':'',
                },
                    pagination:{},
                    edit:false,
            }//end return
        },//end data

        created(){
            this.fetchTestimonial(); 
        },
   methods:{
            fetchTestimonial(page_url){
                let vm = this;
                page_url = page_url ||'api/testimonial'; 
                fetch(page_url)
                .then(res=>res.json())
                .then(res=>{
                    this.Testimonials=res.data;
                    vm.makePagination(res.meta, res.links);
                })
                .catch(err=>console.log(err));
            },
            makePagination(meta, links){
                let pagination = {
                    current_page:meta.current_page,
                    last_page:meta.last_page,
                    next_page_url:links.next,
                    prev_page_url:links.prev,
                }
              this.pagination = pagination;
            },


   },//method

        mounted() {
            console.log('sdfsdf Component mounted.')
        }
    }
</script>
