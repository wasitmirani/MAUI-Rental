<template>
  <span class="avatar avatar-blue" data-toggle="tooltip" data-placement="top" title="" :data-original-title="name">{{name | avatar_name}}</span>
</template>

<script>
Vue.filter('avatar_name',function(value){
    if(value){
        return value.slice(0,2);
    }
    return value;
});
export default {
    props:['name']
}
</script>

<style>

</style>
