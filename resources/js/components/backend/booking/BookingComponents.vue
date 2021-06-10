<template>
    <div>
    <div class="section-body">
	<div class="container-fluid">
		<div class="d-flex justify-content-between align-items-center">
			<ul class="nav nav-tabs page-header-tab">
				<li class="nav-item"><a class="nav-link active" id="user-tab" data-toggle="tab" href="#user-list">List</a></li>

			</ul>
			<div class="header-action">
                <a class="nav-link user-togggle" id="user-tab" data-toggle="tab" href="#user-add">

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
						<h3 class="card-title">Bookings List</h3>
						<div class="card-options">
							<form>
								<div class="input-group">
                                    <SearchInput
                                    label="Search Booking"
                                    :apiUrl="'/booking/bookings?page=' + this.page_num"
                                    v-on:query="isquery($event)"
                                    v-on:isLoading="isLoading($event)"
                                    v-on:reload="getBookings()"
                                    v-on:searchResult="searchResult($event)">
                                    </SearchInput>
								</div>
							</form>
						</div>
					</div>
					<div class="card-body">
					  <!-- Packages Table -->
                      <BookingsTable :bookings="bookings"  :getBookings="getBookings"></BookingsTable>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="user-add" role="tabpanel">
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

import BookingsTable from "./BookingList";
export default {
    name:"Booking",
    components:{
        SearchInput,

        BookingsTable,
    },
    data(){
    return{
        bookings:{},
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
        this.bookings = data.bookings;
        },
         getUrlParams(){

            // this.$router.replace({ name: "packages", query: { query: this.query,page:this.page_num } })
         },
       async  getBookings(page=this.page_num){
            this.getUrlParams();
          await  axios.get("/booking/bookings?page=" + page + "&query=" + this.query,).then((res)=>{

                this.bookings=res.data.bookings;
            });
        }
    },
    mounted(){
        // window.location.href="#user-add";


        this.getBookings();

    }

}
</script>

<style>

</style>
