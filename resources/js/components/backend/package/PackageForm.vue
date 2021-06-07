<template>
  <div>
      <form action="" method="post">
      <div class="row clearfix">
					      <div class="col-lg-12 col-md-12 col-sm-12">
							<div class="form-group">
                                <label class="form-label">Name</label>
								<input type="text" class="form-control" placeholder="Name *"> </div>
							</div>
                             <div class="col-lg-5 col-md-5 col-sm-12">
							<div class="form-group">
                                <!-- <label class="form-label">Thumbnail</label> -->
								<ImgUpload v-on:filename="getFilename($event)" uploadurl="api/package/upload/image" label="Upload Package Imge"> </ImgUpload>
                                </div>
							</div>
							<div class="col-lg-7 col-md-7 col-sm-12">

								<div class="form-group">
                                     <label class="form-label">Description</label>
								    <textarea rows="5" class="form-control" placeholder="Here can be your description" value=""></textarea>
                                </div>
							</div>




                             <div class="col-md-8 col-sm-12">
								<div class="row">

								<button type="button" class="btn btn-primary">Submit</button>
                                 <a class="nav-link" id="user-tab" data-toggle="tab" href="#user-list">
								<button type="button" class="btn btn-danger">CLOSE</button>
                                 </a>
                                </div>
                             </div>
						</div>
      </form>
  </div>
</template>

<script>
import ImgUpload from "../components/ImgUpload";
export default {
    components:{
        ImgUpload,
    },
    data(){
        return {
            thumbnail:null,
        };
    },
    methods:{
        getFilename(img){
            this.thumbnail=img;
        }
    },
}
</script>

<style>

</style>
