<template>
    <div class="section fp-auto-height fp-section fp-table active fp-completely" data-anchor="footer" style="height: 424px;"><div class="fp-tableCell" style="height: 424px;">
        <footer>
            <div class="_layer col-lg-4 col-mg-4">
                <a href="/" class="_logo">
                    <img src="https://vincity.com/wp-content/themes/vincity/assets/images/logo3-01.png" alt="/">
                </a>
                <div id="_select_project_intro_list" class="clearfix">
                    <div class="project_intro_filter">
                        <div class="_intro_active" id="js_tab-project">
                            <a href="javascript:void();" class="is-active" data-head="">CÔNG TY CỔ PHẦN VINHOMES</a>
                        </div>
                        <div class="_select_project_intro_list">
                            <div class="_item"><a href="javascript:void();" class="is-active" data-project="1" data-title="CÔNG TY CỔ PHẦN VINHOMES">CÔNG TY CỔ PHẦN VINHOMES</a></div>
                        </div>
                    </div>
                    <div class="project_intro_list">
                        <ul data-project="1" class="is-active">
                            <li>
                                <div class="_text-icon">
                                    <i class="fas fa-map-marker"></i>
                                    <div class="_text">Số 458 phố Minh Khai, P. Vĩnh Tuy, Q. Hai Bà Trưng, Hà Nội.</div>
                                </div>
                            </li>
                            <li>
                                <div class="_text-icon">
                                    <i class="fas fa-paper-plane"></i>
                                    <div class="_text"><a href="mailto:info@vincity.com">info@vincity.com</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="_text-icon">
                                    <i class="fas fa-phone"></i>
                                    <div class="_text"><a href="tel:+842439749350">+84 24 39749350</a></div>
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
                    <div class="_label">Đại đô thị đẳng Cấp Singapore và hơn thế nữa</div>
                </div>
                <div class="_layer-rigt-bottom">
                    Thông tin, hình ảnh, các tiện ích trên website này chỉ mang tính chất minh hoạ tương đối và có thể được điều chỉnh theo quyết định của Chủ đầu tư tại từng thời điểm đảm bảo phù hợp quy hoạch và thực tế thi công dự án. Các thông tin, cam kết chính thức sẽ được quy định cụ thể tại Hợp đồng mua bán. Việc quản lý, vận hành và kinh doanh của khu đô thị sẽ theo quy định của Ban quản lý.
                </div>
                <div class="_label label-notice">Đăng ký nhận tin để chạm tới ước mơ</div>
                <form method="POST" id="form_subscribe_ajax" class="form_subscribe">
                    <input type="hidden" name="action" value="subscriber_submit_ajax">
                    <input type="hidden" name="nonce" value="7aa1ac1703">
                    <div class="form-group">
                        <input type="text" class="form-controls" id="contact_email" name="subscriber_email" placeholder="Email của bạn" required="">
                        <button type="submit" class="_submit" id="send_text">Đăng ký</button>
                    </div>
                    <div class="form-group-msg msg_frm"></div>
                </form>
                <div class="_label">Social Media</div>
                <ul class="socialMedia_list">
                    <li><a target="_blank" href="https://www.facebook.com/VinCity.official/"><i class="fab fa-facebook-f"></i></a></li>
                    <!--            <div class="zalo-share-button" data-href="--><!--" data-oaid="579745863508352884" data-layout="2" data-color="blue" data-customize=false></div>-->
                    <li><a target="_blank" href="https://zalo.me/4139690400021216450"><img src="https://vincity.com/wp-content/themes/vincity/assets/images/home/icon-zalo.png" alt="#"></a></li>
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
<script type="text/javascript">
    jQuery(document).ready(function($) {
        var name_project = $('._select_project_intro_list ._item:first a').attr('data-title');
        $('#js_tab-project a').text(name_project);
// $( "#_mutilsite-home" ).selectmenu();
// js tab_footer
$('#js_tab-project').click(function(){
    $('._select_project_intro_list').slideToggle(300);
});
$('[data-project]').each(function(index){
    $(this).click(function(){
        $(this).parent().parent('._select_project_intro_list').slideUp(300);
        var html_tab = $(this).parent('._select_project_intro_list ._item').html();
        $('#js_tab-project').html(html_tab);
        var data_project = $(this).attr('data-project');
        $('._select_project_intro_list ._item a').removeClass('is-active');
        $('.project_intro_list ul').removeClass('is-active');
        $('[data-project="'+ data_project +'"]').addClass('is-active');
    });
});
// end
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
var check_boolean_email = false;
$('#contact_email').change(function (event) {
    var contact_email = $(this).val();
    var contact_email_msg = $('body').find('.msg_frm');
    if ( !validateEmail(contact_email) && contact_email ) {
        contact_email_msg.text('Email không hợp lệ');
        check_boolean_email = false;
    } else {
        contact_email_msg.text('');
        check_boolean_email = true;
    }
});
var submit_form = $('#form_subscribe_ajax');
submit_form.submit(function (event) {
    event.preventDefault();
    var thisForm = $(this);
    var formFields = thisForm.find('.form-group');
    var formMessage = $('body').find('.msg_frm');
    var formButton = $('#send_text');
    var formButtonText = formButton.innerHTML;
    var formButtonHide = thisForm.find('button');
    if ( check_boolean_email ) {
        $.ajax({
            url: wp_vars.ADMIN_AJAX_URL,
            type: 'POST',
            dataType: 'json',
            data: thisForm.serialize(),
            beforeSend: function () {
                formButton.text('Gửi...');
            },
            complete: function () {
                formButton.text('Đăng ký');
            }
        })
        .done(function (response) {
            if (response.success) {
                $(formFields).hide();
                formButtonHide.hide();
            }
            if (response.msg) {
                formMessage.text(response.msg);
            }
        })
        .fail(function () {
            console.log("ERROR: Failed to save subscribe information.");
        });
    } else {
        console.log('Chưa thỏa mãn các điều kiện');
        return false;
    }
});
});
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
