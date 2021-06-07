<template>
    <div>
    <div class="section-body">
	<div class="container-fluid">
		<div class="d-flex justify-content-between align-items-center">
			<ul class="nav nav-tabs page-header-tab">
				<li class="nav-item"><a class="nav-link active" id="user-tab" data-toggle="tab" href="#user-list">List</a></li>
				<li class="nav-item"><a class="nav-link" id="user-tab" data-toggle="tab" href="#user-add">New Package</a></li>
			</ul>
			<div class="header-action">
                <a class="nav-link user-togggle" id="user-tab" data-toggle="tab" href="#user-add">
				<button type="button" class="btn btn-primary"><i class="fe fe-plus mr-2"></i>New Package</button>
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
						<h3 class="card-title">Packages List</h3>
						<div class="card-options">
							<form>
								<div class="input-group">
                                    <SearchInput
                                    label="Search Packages"
                                    :apiUrl="'/package/packages?page=' + this.page_num"
                                    v-on:query="isquery($event)"
                                    v-on:isLoading="isLoading($event)"
                                    v-on:reload="getPackages()"
                                    v-on:searchResult="searchResult($event)">
                                    </SearchInput>
								</div>
							</form>
						</div>
					</div>
					<div class="card-body">
					  <!-- Packages Table -->
                      <PackagesTable :packages="packages"  :getPackages="getPackages"></PackagesTable>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="user-add" role="tabpanel">
				<div class="card">
					<div class="card-body">
                        <!-- User Form -->
                      <PackageForm></PackageForm>
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
import PackageForm from "./PackageForm";
import PackagesTable from "./PackagesList";
export default {
    name:"Package",
    components:{
        SearchInput,
        PackageForm,
        PackagesTable,
    },
    data(){
    return{
        packages:{},
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
        this.packages = data.packages;
        },
         getUrlParams(){

            // this.$router.replace({ name: "packages", query: { query: this.query,page:this.page_num } })
         },
       async  getPackages(page=this.page_num){
            this.getUrlParams();
          await  axios.get("/package/packages?page=" + page + "&query=" + this.query,).then((res)=>{
                this.packages=res.data.packages;
            });
        }
    },
    mounted(){
        // window.location.href="#user-add";


        this.getPackages();

    }

}
</script>

<style>

</style>
