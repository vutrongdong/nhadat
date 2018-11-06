<template>
    <div id="home">
        <div id="title_main">
            <h2 class="prohomeone-title"><a href="#">Các dự án bất động sản đang được phân phối</a></h2>
            <div class="prohomeone-line"></div>
            <div class="prohomeone-desc"><p>Thông tin mở bán chính thức, bảng giá, chính sách bán hàng trực tiếp chủ đầu tư</p>
            </div>
        </div>
        <div class="background-img">
            <app-carousel-3d/>
        </div>
        <div id="conten-main" style="clear:both">
            <v-flex class="col-lg-4 col-md-4 col-sm-4 col-xs-6 card-main" v-for="(Blog, index) in allBlogs" :key="index">
                <v-card class="mt-4 text-xs-center">
                    <img @click="BlogDetail(Blog)" width="100%" v-if="Blog.image" :src="Blog.image_path" class="attachment-cat1 size-cat1 wp-post-image" alt=""></li>
                    <v-list-tile-title style="clear: both;" class="company mt-1 text-xs-center">
                        <span @click="BlogDetail(Blog)">{{ Blog.title }}</span>
                    </v-list-tile-title>
                    <span style="text-align: center"><i>Nguyễn Trãi, Hà Nội</i></span>
                </v-card>
            </v-flex>
        </div>
    </div>
</template>
<script>
    import appCarousel3d from './carousel-3d'
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=326008708185166&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
    import { mapActions, mapGetters } from 'vuex'
    export default {
        methods:{
            ...mapActions(['GetBlogForHome']),
            ...mapActions(['getBlog']),
            BlogDetail(Blog){
              this.getBlog({ id: Blog.id })
              this.$router.push({ name: 'blogDetail', params: { id: Blog.id, slug: Blog.slug } })
          }
      },
      components:{
        appCarousel3d
    },
    computed: {
        ...mapGetters(['allBlogs'])
    },
    mounted() {
        this.$vuetify.goTo(0)
        this.GetBlogForHome()
    }
}
</script>
<style scoped>
.v-card--reveal {
    /*align-items: center;*/
    bottom: 0;
    /*justify-content: center;*/
    opacity: .5;
    position: absolute;
    width: 100%;
}
/*.background-img{
    z-index: -1;
    position: relative !important;
    background-image: url(https://vincity.com/wp-content/themes/vincity/assets/images/home/news/bg.jpg);
    background-repeat: no-repeat;
    width: 100%;
    }*/
    @media only screen and (max-width: 960px){
        .container {
            padding: 0px;
        }
        .card-main{
            padding-right: 0px;
        }
    }
</style>
