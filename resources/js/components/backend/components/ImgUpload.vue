<template>
  <div>
      <el-upload
  class="upload-demo"
  drag
  :action="uploadurl"


 :on-success="ImageUploadSuccess"
  >
  <i class="el-icon-upload"></i>
  <div class="el-upload__text">Drop file here or <em>click to upload</em></div>
  <div class="el-upload__tip" slot="tip">jpg/png files with a size less than 2MB</div>
</el-upload>
  </div>
  <!--   :on-preview="handlePreview"   :on-remove="handleRemove"-->
</template>

<script>
export default {
props:['uploadurl'],
methods:{
     ImageUploadSuccess(res, file) {
         console.log("res",res);
         console.log("file",file);
     this.$emit('filename',res);
    },
}
}
</script>

<style scoped>
@import url("//unpkg.com/element-ui@2.15.2/lib/theme-chalk/index.css");

</style>
