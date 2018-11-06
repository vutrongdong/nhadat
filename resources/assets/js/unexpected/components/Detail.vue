<template>
    <div id="detail">
        <ol class="breadcrumb" style="margin-top: 10px;">
            <li class="breadcrumb-item"><router-link :to="{ name: 'homefrontend'}">Trang chủ</router-link></li>
            <li class="breadcrumb-item active">{{ blogDetail.title }}</li>
        </ol>
        <div>
            <h4 class="page-title" style="color:blue">{{ blogDetail.title }}</h4>
            <b>{{ blogDetail.teaser }}</b>
            <img style="margin-top: 30px;" v-if="blogDetail.image_path" width="100%" :src="blogDetail.image_path" alt="">
        </div>
        <div style="margin-top: 20px;">
            <p style="text-align: center;"><span style="color: #000000; font-size: 14pt;"><strong>QÚY KHÁCH QUAN TÂM TỚI DỰ ÁN XIN VUI LÒNG&nbsp;LIÊN HỆ</strong></span></p>
            <p style="text-align: center;"><span style="color: #000000; font-size: 18pt;"><strong>Trưởng Phòng Kinh Doanh&nbsp;</strong></span></p>
            <p style="text-align: center;"><a href="tel:0915319398"><img class="aligncenter wp-image-153 size-full" src="http://sanvinhomes.net/wp-content/uploads/2016/11/hotline.gif" alt="Hotline" width="251" height="90"></a></p>
            <p style="text-align: center;"><span style="color: #000000; font-size: 14pt;"><strong>Ms Thúy 097&nbsp;989&nbsp;4596 –&nbsp;091 531 9398</strong></span></p>
        </div>
        <div class="content_detail" style="position: relative;">
            <p v-html="blogDetail.content">
            </p>
        </div>
    </div>
</template>
<script>
    import { mapActions, mapGetters } from 'vuex'
    import MenuRight from './MenuRight'
    export default {
        methods:{
            ...mapActions(['getBlog'])
        },
        computed:{
            ...mapGetters(['blogDetail'])
        },
        components:{
            MenuRight
        },
        mounted() {
            this.$vuetify.goTo(0)
            this.getBlog({ id: this.$route.params.id })
        }
    }
</script>
<style>
#detail{
    padding: 0px 45px 0px 30px;
}
.entry-content p {
    margin: 0 0 10px;
}
</style>
