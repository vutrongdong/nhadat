<template>
  <div id="applar">
    <!-- app vue -->
    <app-header/>
    <div class='container-fluid content-app'>
      <div class=" view_source col-lg-9 col-md-9 col-sm-9 col-xs-12" style="padding-right: 0px; padding-left:0px;">
        <router-view />
      </div>
      <div class=" menu-right col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <MenuRight />
      </div>
      <counselors />
      <app-carousel/>
    </div>
    <app-footer/>
    <!-- end app vue -->
    <a id="calltrap-btn" class="b-calltrap-btn calltrap_offline hidden-phone visible-tablet" href="tel:0388162714"><div id="calltrap-ico"></div></a>
    <v-btn id="scrollToTop" style="outline-style: none" v-scroll="onScroll" v-show="fab" fab dark fixed bottom right color="red" @click="toTop">
     <v-icon>keyboard_arrow_up</v-icon >
   </v-btn>
   <div id="tu_facebook_messenger">
    <a href="javascript:void(0);" class="fb-click-btn is-active"><i class="fab fa-facebook-square" style="padding-right: 15px;"></i>Chat với chúng tôi<i class="fas fa-caret-down" style="float: right; margin-top: 10px;display: none;"></i><i class="fas fa-caret-up" style="float: right; margin-top: 10px;"></i></a>
    <div class="fb-chat-box" style="display: none;">
     <div class="fb-page fb_iframe_widget" data-tabs="messages" data-href="https://www.facebook.com/Vuminhtri-Land-194679014775325" data-width="300" data-height="400" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false" data-small-header="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;container_width=298&amp;height=400&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FVinCity.official%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false&amp;tabs=messages&amp;width=300"><span style="vertical-align: bottom; width: 298px; height: 400px;"><iframe name="f56660af7608e4" width="300px" height="400px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:page Facebook Social Plugin" class=""></iframe></span></div>
   </div>
 </div> 
 <!-- menu bar -->
 <div class="icon-bar">
  <a href="https://facebook.com" class="facebook"><i class="fab fa-facebook-f"></i></a> 
  <a href="https://twitter.com" class="twitter"><i class="fab fa-twitter"></i></a> 
  <a href="https://mail.google.com/" class="google"><i class="fab fa-google"></i></a> 
  <a href="https://www.linkedin.com/" class="linkedin"><i class="fab fa-linkedin"></i></a>
  <a href="https://youtube.com" class="youtube"><i class="fab fa-youtube"></i></a> 
</div> 
<!-- end menu bar -->
<div id='menuMobileBar' style='display: none;'>
 <v-speed-dial
 style="margin-left: 20px;"
 v-model="fab"
 bottom="bottom"
 right="right"
 direction="top"
 :open-on-hover="true"
 transition="slide-y-reverse-transition"
 >
 <v-btn slot="activator" v-model="fab" color="blue darken-2" dark fab>
  <v-icon>account_circle</v-icon>
  <v-icon>close</v-icon>
</v-btn>
<v-btn fab dark small color="green">
  <v-icon>edit</v-icon>
</v-btn>
<v-btn fab dark small color="indigo">
  <v-icon>add</v-icon>
</v-btn>
<v-btn fab dark small color="red">
  <v-icon>delete</v-icon>
</v-btn>
</v-speed-dial>
</div>
</div>
</template>
<script>

jQuery(document).ready(function ($) {
  $("#tu_facebook_messenger").click(function () {
    $("#tu_facebook_messenger").find(".fb-click-btn").toggleClass('is-active is-active-up is-active-down');
    $("#tu_facebook_messenger").find(".fa-caret-up").toggleClass('is-active-up');
    $("#tu_facebook_messenger").find(".fa-caret-down").toggleClass('is-active-down');
    $("#tu_facebook_messenger").find('.fb-chat-box').slideToggle();
    return false;
  });
});

import appHeader from './components/Header'
import MenuRight from './components/MenuRight'
import appCarousel from './components/CarouselBottom'
import counselors from './components/counselors'
import appFooter from './components/Footer'
export default {
  data(){
    return {
      fab: false,
      caretActive: false
    }
  },
  components: {
    appHeader,
    MenuRight,
    appCarousel,
    counselors,
    appFooter
  },
  mounted(){
    this.$vuetify.goTo(0)
  },
  methods:{
            //scroll to top
            onScroll (e) {
              if (typeof window === 'undefined') return
                const top = window.pageYOffset ||   e.target.scrollTop || 0
              this.fab = top > 20
            },
            //to top
            toTop () {
              this.$vuetify.goTo(0)
            }
          },
        }
        </script>
        <style>

        @media only screen and (min-width: 1090px){
          .content-app{
            margin: 0px 30px;
          }
          /* Style the icon bar links */
          .icon-bar a {
            display: block;
            text-align: center;
            padding: 16px;
            transition: all 0.3s ease;
            color: white;
            font-size: 20px;
          }
        }
        @media only screen and (max-width: 1090px){
          .content-app{
            margin: 0px 20px;
          }
          /* Style the icon bar links */
          .icon-bar a {
            display: block;
            text-align: center;
            padding: 16px;
            transition: all 0.3s ease;
            color: white;
            font-size: 20px;
          }
        }
        @media only screen and (max-width: 961px){
          .content-app{
            margin: 0px 20px;
          }
          .icon-bar a {
            padding: 14px !important;
            transition: all 0.3s ease;
            color: white;
            font-size: 15px;
          }
          .menu-right{
            display: none;
          }
          .view_source{
            width: 100%;
          }
        }
        /*facebook*/
        #tu_facebook_messenger {
          position: fixed;
          bottom: 0;
          right: 120px;
          z-index: 99999;
          width: 300px;
          height: auto;
          border: 1px solid #133783;
          overflow: hidden;
          border-top-left-radius: 6px;
          border-top-right-radius: 6px;
          border-bottom: none;
          box-shadow: 0 0 10px rgba(0,0,0,0.25);
        }
        @media screen and (max-width: 768px) {
          .icon-bar,#calltrap-btn,#scrollToTop{
            display: none !important;
          }
          #tu_facebook_messenger{
            right: 0px;
          }
          #menuMobileBar{
            display: block !important;
          }  
          #menuMobileBar .v-speed-dial__list{
           left: 37px !important;
           width: 0 !important; 
         }
       }
       #tu_facebook_messenger .fb-click-btn {
        float: left;
        padding: 0 25px;
        width: 300px;
        color: #fff;
        text-decoration: none;
        height: 40px;
        line-height: 40px;
        background-color: #3a5795;
        border: 0;
        z-index: 99999;
        font-size: 16px;
        position: relative;
      }
      #tu_facebook_messenger .fb-chat-box {
        float: left;
        width: 100%;
        height: auto;
        overflow: hidden;
        display: none;
        background-color: #fff;
      }
      .fb_iframe_widget {
        display: inline-block;
        position: relative;
      }
      .fb_iframe_widget span {
        display: inline-block;
        position: relative;
        text-align: justify;
      }
      .fb_iframe_widget iframe {
        position: absolute;
      }
      .is-active-up{
        display:none;
      }
      .is-active-down{
        display:block !important;
      }
      a:active, a:focus {
        text-decoration: none;
        color: inherit;
      }

      a:focus {
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px;
      }
      a:focus, a:hover {
        color: #23527c;
        text-decoration: underline;
      }
      a {
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
      }
      a {
        color: inherit;
      }
      /*menu bar*/
      .icon-bar {
        position: fixed;
        top: 50%;
        left: 0;
        z-index: 1;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
      }

      /* Style the social media icons with color, if you want */
      .icon-bar a:hover {
        background-color: #000;
      }

      .facebook {
        background: #3B5998;
        color: white;
      }

      .twitter {
        background: #55ACEE;
        color: white;
      }

      .google {
        background: #dd4b39;
        color: white;
      }

      .linkedin {
        background: #007bb5;
        color: white;
      }

      .youtube {
        background: #bb0000;
        color: white;
      }
      /*end menu bar*/
      .top-facebook{
        background: #4165af;
        width:300px;
        height:40px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
      }
      .top-facebook span{
        color: #fff;
      }
      .btn-close-facebook{
        float: right;
        margin-top: 2px;
      }
      #calltrap-btn {
        background-color: #2074a1;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        display: block;
        height: 64px;
        line-height: 100px;
        opacity: 0.7;
        position: fixed;
        left: 15px;
        bottom: 15px;
        text-align: center;
        width: 64px;
        z-index: 9999;
        -webkit-animation: calltrap_opacity 3s infinite linear;
        -moz-animation: calltrap_opacity 3s infinite linear;
        -o-animation: calltrap_opacity 3s infinite linear;
        animation: calltrap_opacity 3s infinite linear
      }

      #calltrap-btn.calltrap_offline {
        background-color: #1CB2ED
      }

      #calltrap-ico {
        width: 32px;
        height: 32px;
        position: absolute;
        margin: auto;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        border: 0;
        -webkit-border-radius: 50% !important;
        border-radius: 50% !important;
        -o-background-clip: padding-box;
        background-clip: padding-box;
        -webkit-animation: uptocallmini 1.5s 0s ease-out infinite;
        -moz-animation: uptocallmini 1.5s 0s ease-out infinite;
        -o-animation: uptocallmini 1.5s 0s ease-out infinite;
        animation: uptocallmini 1.5s 0s ease-out infinite
      }

      #calltrap-ico:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background-size: cover;
        top: 0;
        left: 0;
        background-image: url("https://freeiconshop.com/wp-content/uploads/edd/phone-flat.png");
        background-repeat: no-repeat;
        background-position: center center;
        -webkit-animation: calltrap_spin 3s infinite linear;
        -moz-animation: calltrap_spin 3s infinite linear;
        -o-animation: calltrap_spin 3s infinite linear;
        animation: calltrap_spin 3s infinite linear
      }

      .calltrap_offline #calltrap-ico {
        -webkit-animation: uptocallmini_offline 1.5s 0s ease-out infinite;
        -moz-animation: uptocallmini_offline 1.5s 0s ease-out infinite;
        -o-animation: uptocallmini_offline 1.5s 0s ease-out infinite;
        animation: uptocallmini_offline 1.5s 0s ease-out infinite
      }

      #calltrap-overlay {
        background-color: #191919;
        background-color: rgba(25, 25, 25, 0.9);
        position: fixed;
        z-index: 9998;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        text-align: center;
        display: none
      }

      #calltrap-overlay .b-calltrap-overlay {
        display: table;
        width: 100%;
        height: 100%
      }

      #calltrap-overlay .b-calltrap-overlay__header, #calltrap-overlay .b-calltrap-overlay__body, #calltrap-overlay .b-calltrap-overlay__footer {
        display: table-row;
        padding: 0;
        margin: 0
      }

      #calltrap-overlay .b-calltrap-overlay__header-block, #calltrap-overlay .b-calltrap-overlay__body-block, #calltrap-overlay .b-calltrap-overlay__footer-block {
        display: table-cell;
        vertical-align: middle;
        text-align: center
      }

      #calltrap-overlay .b-calltrap-overlay__body-block {
        padding: 0 7px
      }

      #calltrap-overlay .b-calltrap-overlay__header, #calltrap-overlay .b-calltrap-overlay__footer {
        height: 1px
      }

      #calltrap-overlay .b-calltrap__container {
        background-color: white;
        border: 5px solid #2074a1;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        margin: 0;
        padding: 0;
        max-width: 500px;
        display: block;
        margin: 0 auto;
        font-size: 16px;
        line-height: 1.3;
        position: relative;
        font-family: Tahoma, Arial, self-serif !important
      }

      @media screen and (min-width: 1px) and (max-width: 500px) {
        #calltrap-overlay .b-calltrap__container {
          width: 290px
        }
      }

      #calltrap-overlay .b-calltrap__close {
        display: block;
        position: absolute;
        right: 20px;
        top: 20px;
        width: 20px;
        height: 20px;
        opacity: 0.5;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease
      }

      #calltrap-overlay .b-calltrap__close:hover {
        opacity: 1
      }

      #calltrap-success, #calltrap-form {
        display: block
      }

      #calltrap-success .b-calltrap_form__fields, #calltrap-form .b-calltrap_form__fields {
        margin: 20px 25px 35px
      }

      #calltrap-success .b-calltrap_form__title, #calltrap-form .b-calltrap_form__title {
        font-size: 20px;
        margin: 0 0 17px;
        text-align: left
      }

      @media screen and (min-width: 1px) and (max-width: 500px) {
        #calltrap-success .b-calltrap_form__title, #calltrap-form .b-calltrap_form__title {
          padding-right: 20px
        }
      }

      #calltrap-success .b-calltrap_form__text, #calltrap-form .b-calltrap_form__text {
        text-align: left
      }

      #calltrap-success .b-calltrap_form__text p, #calltrap-form .b-calltrap_form__text p {
        margin: 0 0 0.55em
      }

      #calltrap-success .b-calltrap_form__input, #calltrap-form .b-calltrap_form__input {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        font-size: 16px;
        padding: 0 15px 0;
        height: 44px;
        line-height: 40px;
        background-color: white;
        border: 2px solid #ccc;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        display: block;
        width: 100%;
        outline: none;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease
      }

      @media screen and (min-width: 1px) and (max-width: 500px) {
        #calltrap-success .b-calltrap_form__input, #calltrap-form .b-calltrap_form__input {
          margin-bottom: 13px
        }
      }

      #calltrap-success .b-calltrap_form__input.error, #calltrap-form .b-calltrap_form__input.error {
        background-color: #ffc0c0;
        color: red;
        border-color: red
      }

      #calltrap-success .b-calltrap_form__input:disabled, #calltrap-form .b-calltrap_form__input:disabled {
        background-color: #eee;
        border-color: #bdbdbd;
        cursor: default
      }

      #calltrap-success .b-calltrap_form__input:focus, #calltrap-form .b-calltrap_form__input:focus {
        border: 2px solid #2074a1
      }

      #calltrap-success .b-calltrap_form__submit, #calltrap-form .b-calltrap_form__submit {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        background-color: #2074a1;
        border: 2px solid #2074a1;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        border: medium none;
        color: #fff;
        cursor: pointer;
        font-size: 16px;
        padding: 0;
        height: 44px;
        line-height: 40px;
        outline: medium none;
        display: inline-block;
        width: 180px;
        text-align: center;
        outline: none;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease
      }

      @media screen and (min-width: 1px) and (max-width: 500px) {
        #calltrap-success .b-calltrap_form__submit, #calltrap-form .b-calltrap_form__submit {
          width: 100%
        }
      }

      #calltrap-success .b-calltrap_form__submit:hover, #calltrap-form .b-calltrap_form__submit:hover {
        background-color: #1c658c
      }

      #calltrap-success .b-calltrap_form__submit:disabled, #calltrap-form .b-calltrap_form__submit:disabled {
        background-color: #bdbdbd !important;
        cursor: default
      }

      #calltrap-success .b-calltrap_form__controls, #calltrap-form .b-calltrap_form__controls {
        margin: 20px 0 0;
        padding: 0;
        padding: 0 200px 0 0
      }

      @media screen and (min-width: 1px) and (max-width: 500px) {
        #calltrap-success .b-calltrap_form__controls, #calltrap-form .b-calltrap_form__controls {
          padding: 0
        }
      }

      #calltrap-success .b-calltrap_form__controls-item, #calltrap-form .b-calltrap_form__controls-item {
        position: relative;
        float: right
      }

      @media screen and (min-width: 1px) and (max-width: 500px) {
        #calltrap-success .b-calltrap_form__controls-item, #calltrap-form .b-calltrap_form__controls-item {
          float: none
        }
      }

      #calltrap-success .b-calltrap_form__controls-left, #calltrap-form .b-calltrap_form__controls-left {
        margin-left: -100%;
        width: 100%
      }

      @media screen and (min-width: 1px) and (max-width: 500px) {
        #calltrap-success .b-calltrap_form__controls-left, #calltrap-form .b-calltrap_form__controls-left {
          margin-left: 0
        }
      }

      #calltrap-success .b-calltrap_form__controls-right, #calltrap-form .b-calltrap_form__controls-right {
        margin-right: -200px;
        overflow: visible;
        width: 200px;
        text-align: right
      }

      @media screen and (min-width: 1px) and (max-width: 500px) {
        #calltrap-success .b-calltrap_form__controls-right, #calltrap-form .b-calltrap_form__controls-right {
          margin-right: 0;
          width: auto;
          text-align: left
        }
      }

      #calltrap-success .b-calltrap_form__controls-clear, #calltrap-form .b-calltrap_form__controls-clear {
        clear: both
      }

      #calltrap-success {
        display: none
      }

      #calltrap-overlay.calltrap_offline .b-calltrap_form__submit {
        background-color: #1CB2ED
      }

      #calltrap-overlay.calltrap_offline .b-calltrap_form__submit:hover {
        background-color: #2e8c1c
      }

      #calltrap-overlay.calltrap_offline .b-calltrap_form__input:focus {
        border-color: #1CB2ED
      }

      #calltrap-overlay.calltrap_offline .b-calltrap__container {
        border-color: #1CB2ED
      }

      @-webkit-keyframes calltrap_opacity {
        0% {
          opacity: 1
        }
        57% {
          opacity: 0.75
        }
        75% {
          opacity: 0.95
        }
        100% {
          opacity: 1
        }
      }

      @-moz-keyframes calltrap_opacity {
        0% {
          opacity: 1
        }
        57% {
          opacity: 0.75
        }
        75% {
          opacity: 0.95
        }
        100% {
          opacity: 1
        }
      }

      @-o-keyframes calltrap_opacity {
        0% {
          opacity: 1
        }
        57% {
          opacity: 0.75
        }
        75% {
          opacity: 0.95
        }
        100% {
          opacity: 1
        }
      }

      @keyframes calltrap_opacity {
        0% {
          opacity: 1
        }
        57% {
          opacity: 0.75
        }
        75% {
          opacity: 0.95
        }
        100% {
          opacity: 1
        }
      }

      @-webkit-keyframes calltrap_spin {
        0% {
          -webkit-transform: rotate(0deg);
          transform: rotate(0deg)
        }
        30% {
          -webkit-transform: rotate(0deg);
          transform: rotate(0deg)
        }
        33% {
          -webkit-transform: rotate(-10deg);
          transform: rotate(-10deg)
        }
        36% {
          -webkit-transform: rotate(10deg);
          transform: rotate(10deg)
        }
        39% {
          -webkit-transform: rotate(-10deg);
          transform: rotate(-10deg)
        }
        42% {
          -webkit-transform: rotate(10deg);
          transform: rotate(10deg)
        }
        45% {
          -webkit-transform: rotate(-10deg);
          transform: rotate(-10deg)
        }
        48% {
          -webkit-transform: rotate(10deg);
          transform: rotate(10deg);
          opacity: 1
        }
        51% {
          -webkit-transform: rotate(-10deg);
          transform: rotate(-10deg)
        }
        54% {
          -webkit-transform: rotate(10deg);
          transform: rotate(10deg)
        }
        57% {
          -webkit-transform: rotate(0deg);
          transform: rotate(0deg)
        }
      }

      @-moz-keyframes calltrap_spin {
        0% {
          -moz-transform: rotate(0deg);
          transform: rotate(0deg)
        }
        30% {
          -moz-transform: rotate(0deg);
          transform: rotate(0deg)
        }
        33% {
          -moz-transform: rotate(-10deg);
          transform: rotate(-10deg)
        }
        36% {
          -moz-transform: rotate(10deg);
          transform: rotate(10deg)
        }
        39% {
          -moz-transform: rotate(-10deg);
          transform: rotate(-10deg)
        }
        42% {
          -moz-transform: rotate(10deg);
          transform: rotate(10deg)
        }
        45% {
          -moz-transform: rotate(-10deg);
          transform: rotate(-10deg)
        }
        48% {
          -moz-transform: rotate(10deg);
          transform: rotate(10deg);
          opacity: 1
        }
        51% {
          -moz-transform: rotate(-10deg);
          transform: rotate(-10deg)
        }
        54% {
          -moz-transform: rotate(10deg);
          transform: rotate(10deg)
        }
        57% {
          -moz-transform: rotate(0deg);
          transform: rotate(0deg)
        }
      }

      @-o-keyframes calltrap_spin {
        0% {
          -o-transform: rotate(0deg);
          transform: rotate(0deg)
        }
        30% {
          -o-transform: rotate(0deg);
          transform: rotate(0deg)
        }
        33% {
          -o-transform: rotate(-10deg);
          transform: rotate(-10deg)
        }
        36% {
          -o-transform: rotate(10deg);
          transform: rotate(10deg)
        }
        39% {
          -o-transform: rotate(-10deg);
          transform: rotate(-10deg)
        }
        42% {
          -o-transform: rotate(10deg);
          transform: rotate(10deg)
        }
        45% {
          -o-transform: rotate(-10deg);
          transform: rotate(-10deg)
        }
        48% {
          -o-transform: rotate(10deg);
          transform: rotate(10deg);
          opacity: 1
        }
        51% {
          -o-transform: rotate(-10deg);
          transform: rotate(-10deg)
        }
        54% {
          -o-transform: rotate(10deg);
          transform: rotate(10deg)
        }
        57% {
          -o-transform: rotate(0deg);
          transform: rotate(0deg)
        }
      }

      @keyframes calltrap_spin {
        0% {
          -webkit-transform: rotate(0deg);
          -moz-transform: rotate(0deg);
          -o-transform: rotate(0deg);
          transform: rotate(0deg)
        }
        30% {
          -webkit-transform: rotate(0deg);
          -moz-transform: rotate(0deg);
          -o-transform: rotate(0deg);
          transform: rotate(0deg)
        }
        33% {
          -webkit-transform: rotate(-10deg);
          -moz-transform: rotate(-10deg);
          -o-transform: rotate(-10deg);
          transform: rotate(-10deg)
        }
        36% {
          -webkit-transform: rotate(10deg);
          -moz-transform: rotate(10deg);
          -o-transform: rotate(10deg);
          transform: rotate(10deg)
        }
        39% {
          -webkit-transform: rotate(-10deg);
          -moz-transform: rotate(-10deg);
          -o-transform: rotate(-10deg);
          transform: rotate(-10deg)
        }
        42% {
          -webkit-transform: rotate(10deg);
          -moz-transform: rotate(10deg);
          -o-transform: rotate(10deg);
          transform: rotate(10deg)
        }
        45% {
          -webkit-transform: rotate(-10deg);
          -moz-transform: rotate(-10deg);
          -o-transform: rotate(-10deg);
          transform: rotate(-10deg)
        }
        48% {
          -webkit-transform: rotate(10deg);
          -moz-transform: rotate(10deg);
          -o-transform: rotate(10deg);
          transform: rotate(10deg);
          opacity: 1
        }
        51% {
          -webkit-transform: rotate(-10deg);
          -moz-transform: rotate(-10deg);
          -o-transform: rotate(-10deg);
          transform: rotate(-10deg)
        }
        54% {
          -webkit-transform: rotate(10deg);
          -moz-transform: rotate(10deg);
          -o-transform: rotate(10deg);
          transform: rotate(10deg)
        }
        57% {
          -webkit-transform: rotate(0deg);
          -moz-transform: rotate(0deg);
          -o-transform: rotate(0deg);
          transform: rotate(0deg)
        }
      }

      @-webkit-keyframes uptocallmini {
        0% {
          -webkit-box-shadow: 0 0 8px 6px rgba(32, 116, 161, 0), 0 0 0px 0px transparent, 0 0 0px 0px rgba(32, 116, 161, 0);
          box-shadow: 0 0 8px 6px rgba(32, 116, 161, 0), 0 0 0px 0px transparent, 0 0 0px 0px rgba(32, 116, 161, 0)
        }
        10% {
          -webkit-box-shadow: 0 0 8px 6px #2074a1, 0 0 12px 10px transparent, 0 0 12px 14px #2074a1;
          box-shadow: 0 0 8px 6px #2074a1, 0 0 12px 10px transparent, 0 0 12px 14px #2074a1
        }
        100% {
          -webkit-box-shadow: 0 0 8px 6px rgba(32, 116, 161, 0), 0 0 0px 40px transparent, 0 0 0px 40px rgba(32, 116, 161, 0);
          box-shadow: 0 0 8px 6px rgba(32, 116, 161, 0), 0 0 0px 40px transparent, 0 0 0px 40px rgba(32, 116, 161, 0)
        }
      }

      @-moz-keyframes uptocallmini {
        0% {
          box-shadow: 0 0 8px 6px rgba(32, 116, 161, 0), 0 0 0px 0px transparent, 0 0 0px 0px rgba(32, 116, 161, 0)
        }
        10% {
          box-shadow: 0 0 8px 6px #2074a1, 0 0 12px 10px transparent, 0 0 12px 14px #2074a1
        }
        100% {
          box-shadow: 0 0 8px 6px rgba(32, 116, 161, 0), 0 0 0px 40px transparent, 0 0 0px 40px rgba(32, 116, 161, 0)
        }
      }

      @-o-keyframes uptocallmini {
        0% {
          box-shadow: 0 0 8px 6px rgba(32, 116, 161, 0), 0 0 0px 0px transparent, 0 0 0px 0px rgba(32, 116, 161, 0)
        }
        10% {
          box-shadow: 0 0 8px 6px #2074a1, 0 0 12px 10px transparent, 0 0 12px 14px #2074a1
        }
        100% {
          box-shadow: 0 0 8px 6px rgba(32, 116, 161, 0), 0 0 0px 40px transparent, 0 0 0px 40px rgba(32, 116, 161, 0)
        }
      }

      @keyframes uptocallmini {
        0% {
          -webkit-box-shadow: 0 0 8px 6px rgba(32, 116, 161, 0), 0 0 0px 0px transparent, 0 0 0px 0px rgba(32, 116, 161, 0);
          box-shadow: 0 0 8px 6px rgba(32, 116, 161, 0), 0 0 0px 0px transparent, 0 0 0px 0px rgba(32, 116, 161, 0)
        }
        10% {
          -webkit-box-shadow: 0 0 8px 6px #2074a1, 0 0 12px 10px transparent, 0 0 12px 14px #2074a1;
          box-shadow: 0 0 8px 6px #2074a1, 0 0 12px 10px transparent, 0 0 12px 14px #2074a1
        }
        100% {
          -webkit-box-shadow: 0 0 8px 6px rgba(32, 116, 161, 0), 0 0 0px 40px transparent, 0 0 0px 40px rgba(32, 116, 161, 0);
          box-shadow: 0 0 8px 6px rgba(32, 116, 161, 0), 0 0 0px 40px transparent, 0 0 0px 40px rgba(32, 116, 161, 0)
        }
      }

      @-webkit-keyframes uptocallmini_offline {
        0% {
          -webkit-box-shadow: 0 0 8px 6px rgba(53, 161, 32, 0), 0 0 0px 0px transparent, 0 0 0px 0px rgba(53, 161, 32, 0);
          box-shadow: 0 0 8px 6px rgba(53, 161, 32, 0), 0 0 0px 0px transparent, 0 0 0px 0px rgba(53, 161, 32, 0)
        }
        10% {
          -webkit-box-shadow: 0 0 8px 6px #35A120, 0 0 12px 10px transparent, 0 0 12px 14px #35A120;
          box-shadow: 0 0 8px 6px #35A120, 0 0 12px 10px transparent, 0 0 12px 14px #35A120
        }
        100% {
          -webkit-box-shadow: 0 0 8px 6px rgba(53, 161, 32, 0), 0 0 0px 40px transparent, 0 0 0px 40px rgba(53, 161, 32, 0);
          box-shadow: 0 0 8px 6px rgba(53, 161, 32, 0), 0 0 0px 40px transparent, 0 0 0px 40px rgba(53, 161, 32, 0)
        }
      }

      @-moz-keyframes uptocallmini_offline {
        0% {
          box-shadow: 0 0 8px 6px rgba(53, 161, 32, 0), 0 0 0px 0px transparent, 0 0 0px 0px rgba(53, 161, 32, 0)
        }
        10% {
          box-shadow: 0 0 8px 6px #35A120, 0 0 12px 10px transparent, 0 0 12px 14px #35A120
        }
        100% {
          box-shadow: 0 0 8px 6px rgba(53, 161, 32, 0), 0 0 0px 40px transparent, 0 0 0px 40px rgba(53, 161, 32, 0)
        }
      }

      @-o-keyframes uptocallmini_offline {
        0% {
          box-shadow: 0 0 8px 6px rgba(53, 161, 32, 0), 0 0 0px 0px transparent, 0 0 0px 0px rgba(53, 161, 32, 0)
        }
        10% {
          box-shadow: 0 0 8px 6px #35A120, 0 0 12px 10px transparent, 0 0 12px 14px #35A120
        }
        100% {
          box-shadow: 0 0 8px 6px rgba(53, 161, 32, 0), 0 0 0px 40px transparent, 0 0 0px 40px rgba(53, 161, 32, 0)
        }
      }

      @keyframes uptocallmini_offline {
        0% {
          -webkit-box-shadow: 0 0 8px 6px rgba(53, 161, 32, 0), 0 0 0px 0px transparent, 0 0 0px 0px rgba(53, 161, 32, 0);
          box-shadow: 0 0 8px 6px rgba(53, 161, 32, 0), 0 0 0px 0px transparent, 0 0 0px 0px rgba(53, 161, 32, 0)
        }
        10% {
          -webkit-box-shadow: 0 0 8px 6px #1CB2ED, 0 0 12px 10px transparent, 0 0 12px 14px #1CB2ED;
          box-shadow: 0 0 8px 6px #1CB2ED, 0 0 12px 10px transparent, 0 0 12px 14px #1CB2ED
        }
        100% {
          -webkit-box-shadow: 0 0 8px 6px rgba(53, 161, 32, 0), 0 0 0px 40px transparent, 0 0 0px 40px rgba(53, 161, 32, 0);
          box-shadow: 0 0 8px 6px rgba(53, 161, 32, 0), 0 0 0px 40px transparent, 0 0 0px 40px rgba(53, 161, 32, 0)
        }
      }
      </style>
