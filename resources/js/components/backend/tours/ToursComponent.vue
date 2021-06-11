<template>
    <div>
    <div class="section-body">
	<div class="container-fluid">
		<div class="d-flex justify-content-between align-items-center">
			<ul class="nav nav-tabs page-header-tab">
				<li class="nav-item"><a class="nav-link active" id="user-tab" data-toggle="tab" href="#user-list">Tour List</a></li>
				<li class="nav-item"><a class="nav-link" id="user-tab" data-toggle="tab" href="#user-add">New Tour</a></li>
			</ul>
			<div class="header-action">
                <a class="nav-link user-togggle" id="user-tab" data-toggle="tab" href="#user-add">
				<button type="button" class="btn btn-primary"><i class="fe fe-plus mr-2"></i>New Tour</button>
                </a>
			</div>
		</div>
	</div>
</div>
<div class="section-body mt-3">
	<div class="container-fluid">
		<div class="tab-content mt-3">
			<div class="tab-pane fade show active" id="user-list" role="tabpanel">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Tour List</h3>
						<div class="card-options">
							<form>
								<div class="input-group">
                                    <SearchInput
                                    label="Search Tours"
                                    :apiUrl="'/tour/tours?page=' + this.page_num"
                                    v-on:query="isquery($event)"
                                    v-on:isLoading="isLoading($event)"
                                    v-on:reload="getTours()"
                                    v-on:searchResult="searchResult($event)">
                                    </SearchInput>
								</div>
							</form>
						</div>
					</div>
					<div class="card-body">
					  <!-- Packages Table -->
                      <TourTable :tours="tours"  :getTours="getTours"></TourTable>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="user-add" role="tabpanel">
				<div class="card">
					<div class="card-body">
                        <!-- User Form -->
                      <TourForm></TourForm>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</template>
<script>
import SearchInput from "../components/SearchInput";
import TourForm from "./TourForm";
import TourTable from "./TourList";
export default {
    name:"Tours",
    components:{
        SearchInput,
        TourForm,
        TourTable,
    },
    data(){
    return{
        tours:[],
        query:"",
        page_num: 1,
    };
    },
    methods:{
       isLoading(value) {
        this.is_loading = value;
        },
      isquery(query) {
        return (this.query = query);
        },
     searchResult(data) {
        this.tours = data.tours;
        },
         getUrlParams(){

            // this.$router.replace({ name: "packages", query: { query: this.query,page:this.page_num } })
         },
       async  getTours(page=this.page_num){
            this.getUrlParams();

          await  axios.get("/tour/tours?page=" + page + "&query=" + this.query,).then((res)=>{
              console.log(res.data.tuors)
                this.tours=res.data.tuors;
            });
        }
    },
    mounted(){
        // window.location.href="#user-add";


        this.getTours();

    }

}
</script>

<style>

</style>

