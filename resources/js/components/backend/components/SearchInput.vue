<template>
     <div class="form-group">
        <label class="form-label" v-if="name">{{name}}</label>
        <div class="input-icon mb-3">
        <input type="text" v-model="query"  v-on:keyup="searchQuery" class="form-control" height="200px" :placeholder="label">
        <span class="input-icon-addon"><i class="fe fe-search"></i></span>
        </div>
      </div>
</template>

<script>
export default {
name:"search-input",
props:['label','name','apiUrl'],
data() {
    return {
      query: "",
    };
  },
  methods: {
    //asyncdata
    searchQuery: _.debounce(
      function () {
        this.$emit("isLoading", true);
        this.search();
      },
      500 // 500 milliseconds
    ),
   async search() {
      if (this.query.length > 1) {
       await axios.get(this.apiUrl + "&query=" + this.query)
          .then((response) => {
            this.$emit("isLoading", false);
            this.$emit("searchResult", response.data);
            this.$emit("query", this.query);
          });
      } else {
        this.query = "";
        this.$emit("query", this.query);
        this.$emit("reload");
      }
    },
  },
  watch: {
    query() {
      if (this.query == "") {
        this.query = "";
        this.$emit("query", this.query);
        this.$emit("reload");
      }
    },
  },
}
</script>

<style>
</style>
