<template>
  <div>
      	<div class="table-responsive">
							<table class="table table-striped table-hover table-vcenter text-nowrap mb-0">
								<thead>
									<tr>
										<th class="w60">Name</th>
										<th>Description</th>
										<th></th>

										<th>Created Date</th>
										<!-- <th>Role</th> -->
										<th class="w100">Action</th>
									</tr>
								</thead>
								<tbody>


									<tr v-for="item in tours.data" :key="item.id">
										<td> <nametag :name="item.name"></nametag> </td>
										<td>
											<h6 class="mb-0">{{item.name}}</h6> <span></span> </td>
										<!-- <td><span class="tag tag-success">HR Admin</span></td> -->
										<td></td>
                                        <td>{{item.created_at | created_date}}</td>
										<!-- <td>HR</td> -->
										<td>
											<a  class="btn btn-icon" title="Edit"  data-toggle="tab" href="#user-add"><i class="fa fa-edit"></i></a>
											<button type="button" class="btn btn-icon js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
										</td>
									</tr>
								</tbody>
							</table>
                            <hr>
                            <pagination :data="tours" @pagination-change-page="getTours"></pagination>
						</div>
  </div>
</template>

<script>
import nametag from "../components/NameTag";
export default {
    props:['tours','getTours'],
    components:{
        nametag
    },

}
</script>

<style>

</style>
