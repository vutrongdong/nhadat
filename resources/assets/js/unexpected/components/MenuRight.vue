<template>
    <div style="margin-top: 40px;">
      <aside id="sidebar">
        <div id="video">
            <h3 class="widget-title" style="margin-bottom: 0px;">Video</h3>
            <video width="100%" controls>
              <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
              </video>
          </div>
          <div id="category-posts-2" class="widget cat-post-widget">
            <h3 class="widget-title" style="margin-bottom: 0px;">Dự án hot</h3>
            <div class="widget-details">
                <ul id="category-posts-2-internal" class="category-posts-internal">
                    <li class="cat-post-item" v-for="blog in blogHot">
                        <router-link :to="{ name: 'homefrontend', params: {id: blog.id}}">
                            <span> <img @click="BlogDetail(blog)" width="100%" height="91px" v-if="blog.image" :src="blog.image_path" alt=""></span> </router-link>
                            <a class="post-title cat-post-title" @click="BlogDetail(blog)">{{ blog.title }}</a> 
                        </li>
                    </ul>
                </div></div>
            </aside>
        </div>
    </template>
    <script>
        import { mapActions, mapGetters } from 'vuex'
        export default {
            methods:{
                ...mapActions(['fetchBlogHot']),
                ...mapActions(['getBlog']),
                BlogDetail(Blog){
                  this.getBlog({ id: Blog.id })
                  this.$router.push({ name: 'blogDetail', params: { id: Blog.id, slug: Blog.slug } })
              }
          },
          computed:{
            ...mapGetters(['blogHot'])
        },
        created(){
            this.fetchBlogHot()
        }
    }
</script>
<style scoped>
.widget {
    margin-bottom: 15px;
    background: #fff;
}
.widget-title {
    background: #1B5B87;
    color: #FFF;
    padding: 10px 0;
    text-transform: uppercase;
    text-align: center;
    display: block;
    font-size: 15px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}
.widget-details {
    border: 1px solid #ECECEC;
    background: #F2F2F2;
}
.cat-post-widget ul {
    width: 92%;
    margin: 0 auto;
}

.widget-details ul {
    margin-left: 2%;
    padding-left: 0px;
}
ul, ol {
    list-style: none;
}
#category-posts-2-internal .cat-post-item {
    border-bottom: 1px solid #ccc;
    list-style: none;
    list-style-type: none;
    margin: 3px 0;
    padding: 3px 0;
}

.cat-post-widget ul li {
    background: none;
    overflow: hidden;
    margin-bottom: 8px;
    padding: 5px 0;
    border-bottom: 1px dashed #d4d4d4!important;
}
.widget-details ul li {
    padding: 4px 0 4px 12px;
    /*background: url(images/icon_li.jpg) no-repeat scroll left 11px rgba(0,0,0,0);*/
}
#category-posts-2-internal .cat-post-thumbnail {
    margin: 5px 10px 5px 0;
    display: block;
}

.widget-details ul li a {
    display: block!important;
    font-size: 14px;
}
a {
    color: #000;
    text-decoration: none;
}
a, a:hover, a:focus {
    -webkit-transition: color 0.4s ease 0s;
    transition: color 0.4s ease 0s;
    text-decoration: none;
}
#category-posts-2-internal .cat-post-item img {
    margin: initial;
}

#category-posts-2-internal .cat-post-item img {
    margin: initial;
}
#category-posts-2-internal .cat-post-item img {
    max-width: initial;
    max-height: initial;
}
.cat-post-widget ul li a img {
    width: 27%;
    float: left;
    margin-right: 10px!important;
    height: 55px;
}
#category-posts-2-internal .cat-post-title {
    font-size: 12px;
}
.cat-post-widget ul li a.cat-post-title {
    display: block;
    font-size: 14px;
    color: #333;
}
.widget-details ul li a {
    display: block!important;
    font-size: 14px;
}
</style>
