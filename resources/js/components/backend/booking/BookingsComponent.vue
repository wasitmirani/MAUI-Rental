<template>
    <div>
    <div class="section-body">
	<div class="container-fluid">
		<div class="d-flex justify-content-between align-items-center">
			<ul class="nav nav-tabs page-header-tab">
				<li class="nav-item"><a class="nav-link active" id="booking-tab" data-toggle="tab" href="#booking-list">List</a></li>

			</ul>
			<div class="header-action">
                <a class="nav-link" id="booking-tab" data-toggle="tab" href="#booking-add">

                </a>
			</div>
		</div>
	</div>
</div>
<div class="section-body mt-3">
	<div class="container-fluid">
		<div class="tab-content mt-3">
			<div class="tab-pane fade show active" id="booking-list" role="tabpanel">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Booking List</h3>
						<div class="card-options">
							<form>
								<div class="input-group">
                                    <SearchInput label="Search Bookings" v-model="query"></SearchInput>
								</div>
							</form>
						</div>
					</div>
					<div class="card-body">
					  <!-- User Table -->
                      <BookingList :bookings="bookings"  :getBookings="getBookings"></BookingList>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="booking-add" role="tabpanel">
				<div class="card">
					<div class="card-body">
                        <!-- User Form -->

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

import BookingList from "./BookingList";
export default {
    name:"Booking",
    components:{
        SearchInput,
        BookingList,
    },
    data(){
    return{
        bookings:{},
        query:"",
        page_num: 1,
    };
    },
    methods:{
         getUrlParams(){

            this.$router.replace({ name: "bookings", query: { query: this.query,page:this.page_num } })
         },
        getBookings(page=this.page_num){
            this.getUrlParams();
            axios.get("/booking/bookings?page=" + page + "&query=" + this.query,).then((res)=>{
                console.log(res.data)
                this.bookings=res.data.bookings;
            });
        }
    },
    mounted(){
        if(this.$route.query.query){
                this.query=this.$route.query.query;
        }
        if(this.$route.query.page){
                 this.page_num=this.$route.query.page;
                 console.log(this.$route.query.page);
        }
        this.getBookings();

    }

}
</script>

<style>

</style>
