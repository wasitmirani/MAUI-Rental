<template>
  <div>
      	<div class="table-responsive">
							<table class="table table-striped table-hover table-vcenter text-nowrap mb-0">
								<thead>
									<tr>
										<th class="w60">Name</th>
										<th>Description</th>
										<th>Tour</th>

										<th>Booking Date</th>
										<th>User</th>
										<th class="w100">Action</th>
									</tr>
								</thead>
								<tbody>


									<tr v-for="booking in bookings.data" :key="booking.id">
										<td>  </td>
										<td>
										 </td>
										<td><span class="tag tag-success">HR Admin</span></td>
										<td></td>
										<td>HR</td>
										<td>
											<button type="button" class="btn btn-icon" title="Edit"><i class="fa fa-edit"></i></button>
											<button type="button" class="btn btn-icon js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
										</td>
									</tr>
								</tbody>
							</table>
                            <hr>

						</div>
  </div>
</template>

<script>
Vue.filter('avatar_name',function(value){
    if(value){
        return value.slice(0,2);
    }
    return value;
});
export default {
    props:['Bookings','getBookings'],
}
</script>

<style>

</style>
