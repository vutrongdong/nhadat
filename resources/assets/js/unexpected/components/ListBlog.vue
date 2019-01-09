<template>
    <div style="margin-top: 40px;">
        <ol class="breadcrumb" style="margin-top: 10px;">
            <li class="breadcrumb-item"><router-link :to="{ name: 'homefrontend'}">Trang chủ</router-link></li>
            <li class="breadcrumb-item active">Danh sách</li>
        </ol>
        <div :key="index" v-for="(Blog, index) in allBlogs">
            <div class="row" style="margin-top: 20px;">
                <div class="col-lg-3 col-md-3 col-xs-3 col-sm-12">
                    <img @click="BlogDetail(Blog)" width="100%" height="91px" v-if="Blog.image" :src="'../images/blogs/'+Blog.image" alt="">
                </div>  
                <div class="col-lg-9 col-md-9 col-xs-9 col-sm-12">
                    <h4 style="margin-top: 0px;" @click="BlogDetail(Blog)">{{ Blog.title }}</h4>
                    <p @click="BlogDetail(Blog)">{{ Blog.teaser }}</p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { mapActions, mapGetters } from 'vuex'
export default {
    methods:{
     ...mapActions(['getByCategory']),
     ...mapActions(['getBlog']),
     BlogDetail(Blog){
      this.getBlog({ id: Blog.id })
      this.$router.push({ name: 'blogDetail', params: { id: Blog.id, slug: Blog.slug } })
  }
},
computed:{
    ...mapGetters(['allBlogs'])
},
mounted() {
    this.getByCategory({cid: this.$route.params.cid})
}
}
</script>
