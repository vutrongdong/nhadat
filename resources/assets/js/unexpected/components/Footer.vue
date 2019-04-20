<template>
    <div class="section fp-auto-height fp-section fp-table active fp-completely" data-anchor="footer" style="height: 424px;"><div class="fp-tableCell" style="height: 424px;">
        <footer>
            <div class="_layer col-lg-4 col-mg-4">
                <a href="/" class="_logo">
                    <img src="http://vincityhanoigiagoc.com/wp-content/uploads/2018/08/logo-vincity.jpg" alt="/">
                </a>
                <div id="_select_project_intro_list" class="clearfix">
                    <div class="project_intro_list">
                        <ul data-project="1" class="is-active">
                            <li>
                                <div class="_text-icon">
                                    <i class="fas fa-map-marker"></i>
                                    <div class="_text">{{ allSettings.address }}</div>
                                </div>
                            </li>
                            <li>
                                <div class="_text-icon">
                                    <i class="fas fa-paper-plane"></i>
                                    <div class="_text"><a :href="allSettings.email">{{ allSettings.email }}</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="_text-icon">
                                    <i class="fas fa-phone"></i>
                                    <div class="_text"><a :href="allSettings.phone">{{ allSettings.phone }}</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="_layer col-lg-8 col-mg-8">
                <div class="_layer-left clearfix">
                </div>
                <div class="_layer-right clearfix">
                    <div class="_label">{{ allSettings.title }}</div>
                </div>
                <div class="_layer-rigt-bottom">
                    <p v-html="allSettings.about"></p>
                </div>
                <div class="_label" style="margin-top: 30px;">Social Media</div>
                <ul class="socialMedia_list">
                    <li><a target="_blank" href="https://www.facebook.com/dong.vutrong.79"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a target="_blank" href="https://chat.zalo.me/"><img src="https://expressmagazine.net/sites/default/files/imagesArticle/img-1376920218-1.png" alt="#"></a></li>
                    <li><a target="_blank" href="https://www.youtube.com/channel/UCvUEmvnvqTCCcE9ufC_Q8Ww"><i class="fab fa-youtube-square"></i></a></li>
                </ul>
                <div class="copyright_top">
                    <a target="_blank" href="http://vingroup.net/">Đây là website chính thức của VinCity. Nếu bạn muốn kết nối với Tập đoàn Vingroup, hoặc các đơn vị thành viên, hãy bấm vào <span>đây</span>!</a>
                </div>
            </div>
            <div class="copyright">
                <v-divider style="margin-top: 10px;"></v-divider>
                Copyright © 2018 VINCITY. All Right Reserved | Một thành viên của Tập đoàn Vingroup | <a href="https://vincity.com/dieu-khoan/">Điều khoản</a> |
                <a href="404">Sitemap</a>
            </div>
        </footer>

    </div></div>
</template>
<script>
import { mapActions, mapGetters } from 'vuex'
export default {
    computed: {
        ...mapGetters(['allSettings'])
    },
    methods: {
        ...mapActions(['fetchSetting']),
    },
    created() {
        this.fetchSetting()
    },
    mounted() {
        console.log(this.allSettings)
    }
}
</script>

<style scoped>
.fp-auto-height.fp-section, .fp-auto-height .fp-slide, .fp-auto-height .fp-tableCell {
    height: auto !important;
}

.fp-section.fp-table, .fp-slide.fp-table {
    display: table;
    table-layout: fixed;
    width: 100%;
}
.fp-section {
    position: relative;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.fp-auto-height .fp-tableCell {
    height: auto !important;
}

.fp-tableCell {
    display: table-cell;
    vertical-align: middle;
    width: 100%;
    height: 100%;
}  
footer {
    display: flex;
    flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    overflow: hidden;
    padding: 45px 8.3333333333% 20px;
    background-color: #0c2f40;
    font-size: 13px;
    color: #acb8be;
    border-top: 2px solid #23AF60;
}

@media only screen and (min-width: 769px)
footer ._layer:nth-child(1) {
    width: 30%;
    padding-right: 45px;
}
@media only screen and (min-width: 769px)
footer ._layer:nth-child(1) {
    width: 30%;
    padding-right: 45px;
}
footer ._layer {
    display: block !important;
}


@media only screen and (min-width: 769px)
footer ._layer:nth-child(2) {
    width: 40%;
    padding: 40px 40px 40px 0;
    border-bottom: 1px solid #304f5d;
}
@media only screen and (min-width: 769px)
footer ._layer:nth-child(2), footer ._layer:nth-child(3) {
    position: relative;
}
@media only screen and (min-width: 769px)
footer ._layer:nth-child(3) {
    width: 30%;
    padding: 40px 0;
    border-top: 1px solid #304f5d;
    border-bottom: 1px solid #304f5d;
}

@media only screen and (min-width: 769px)
footer ._layer:nth-child(2), footer ._layer:nth-child(3) {
    position: relative;
}
@media only screen and (min-width: 769px)
footer ._layer:nth-child(3) {
    width: 30%;
    padding: 40px 0;
    border-top: 1px solid #304f5d;
    border-bottom: 1px solid #304f5d;
}
@media only screen and (min-width: 769px)
footer ._layer:nth-child(2), footer ._layer:nth-child(3) {
    position: relative;
}
footer ._layer {
    display: block !important;
}

footer .copyright {
    text-align: center;
    margin: 0 auto;
    padding-top: 20px;
    padding-bottom: 50px;
    color: rgba(255, 255, 255, 0.25);
    font-size: 13px;
    line-height: 18px;
    font-family: 'iCielGotham-Light';
    text-align: left;
}

footer a {
    color: #acb8be;
}
footer ._logo {
    display: block;
    margin-bottom: 20px;
    max-width: 178px;
    height: auto;
}
img {
    border-style: none;
}
footer ._logo img {
    display: block;
    max-width: 100%;
    height: auto;
}
footer ._layer-right ._label {
    margin-bottom: 10px;
}
footer .socialMedia_list li:nth-of-type(2) a img {
    width: 20px;
    margin-top: -2px;
}
.project_intro_filter {
    position: relative;
    margin-bottom: 20px;
    width: 100%;
}
.project_intro_filter ._intro_active {
    position: relative;
    width: 100%;
    border: 1px solid rgba(255, 255, 255, 0.6);
    outline: none;
    background-color: transparent;
    color: #fff;
    font-size: 12px;
    text-transform: uppercase;
    font-family: "iCielGotham-Bold";
    padding: 7px 15px;
    height: 30px;
    cursor: pointer;
}
.project_intro_filter ._select_project_intro_list {
    position: absolute;
    top: 100%;
    z-index: 10;
    left: 0;
    width: 100%;
    display: none;
    background-color: #FFFFFF;
    box-shadow: 0 7px 15px 0 rgba(2, 4, 12, 0.2);
}
.project_intro_filter ._select_project_intro_list ._item a.is-active {
    color: #FFFFFF;
    font-size: 11px;
    background-color: #20AD5D;
}
._item a.is-active {
    color: #FFFFFF;
    font-size: 11px;
    background-color: #20AD5D;
}
.project_intro_filter ._select_project_intro_list ._item a {
    display: inline-block;
    width: 100%;
    color: #053B4E;
    font-family: "iCielGotham-Book";
    font-size: 11px;
    line-height: 40px;
    background-color: #fff;
    padding: 0 10px 0 17px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
.project_intro_list ul.is-active {
    display: block;
    padding-left: 0px !important;
}
li {
    padding: 0px;
    list-style: none;
    margin: 0px;
}
ul{
    padding-left: 0px !important;
}
footer ._text-icon {
    display: block;
    overflow: hidden;
    margin-bottom: 10px;
}
footer ._text-icon i {
    float: left;
    width: 22px;
    margin-top: 3px;
}
footer ._text-icon ._text {
    display: block;
    overflow: hidden;
}
footer ._label {
    opacity: 0.85;
    color: #20AD5D;
    font-size: 12px;
    line-height: 14px;
    font-family: 'iCielGotham-Bold';
    text-transform: uppercase;
}
@media only screen and (min-width: 769px)
footer ._menu.two {
    margin-bottom: 0;
}

@media only screen and (min-width: 769px)
footer ._layer ._layer-rigt-bottom {
    text-align: justify;
    padding-top: 20px;
}
footer .form_subscribe {
    position: relative;
    padding-top: 30px;
    padding-bottom: 35px;
}
footer .form-group {
    display: block;
    overflow: hidden;
    margin: 0;
}
footer .form-group input {
    float: left;
    width: calc(100% - 105px);
    height: 40px;
    padding: 0 20px;
    display: block;
    background-color: transparent;
    outline: none;
    opacity: 0.65;
    color: #FFFFFF;
    font-size: 13px;
    font-weight: 300;
    line-height: 16px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-right: none;
}
footer .form-group button {
    float: left;
    width: 105px;
    height: 40px;
    color: #fff;
    border: none;
    outline: none;
    border-radius: 0;
    background-color: #20AD5D;
    font-family: 'iCielGotham-Bold';
    font-size: 12px;
    text-transform: uppercase;
}


footer .form_subscribe .form-group-msg {
    color: #fff;
    font-size: 13px;
    position: absolute;
    left: 0;
    bottom: 10px;
}
footer .socialMedia_list {
    width: 100%;
    display: flex;
    margin-top: 19px;
}
footer .socialMedia_list li {
    margin-right: 35px;
}
footer .socialMedia_list li a {
    display: inline-block;
    color: #fff;
    font-size: 22px;
    opacity: 0.75;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
</style>
