<template>
    <div id="header">
        <div id="menu">
            <div>
                <div dark class="topnav" id="myTopnav">
                    <div style="padding: 0px 20px">
                        <a id="logo_page" href="#" style="padding-top: 0px;display: block; padding-bottom: 0px;"><img style="margin-top: 10px;" class="ml-3" height="42px" width="76px" src="https://lh3.googleusercontent.com/VgStJG6DQuB18MkSLr9qDl0M1VnUP9Kbx0xcWdSsEpO1DZfi-CR7DXCJHXNs3VEza9p7T6waRp8FxvYJf7r26SLBNm1qw2ywIdqR5tIkSXilipRMupcpPWxxyOXye3vDC3JszkAAVsiu1Mb7peop1T9SAo-D7N9oqhWtjECHVAPF-9_XMEs5fT0mtJyvETWR6JwPbvnxhPTas2jU5ZwJA_HT8kKN44jXsk6kgk5I6JaDtlpadljKMjM-uot5AV8xxNiNUS78DJOddyTQihu3Dwe_wKpXNRVlp4BSM8ANQgIKnIQdpnnejgSGLeHz0vD1UZcUEDo1cJWjxRQ8x_LW4F0oj9mWFqFV0XNfjZ7mrmLK5Sxlsctdk7ekdNrmR0XbNU7zLNXaSsC8_p2a3khkZKjka_LCXX0cFinSsdunst-6xNXHSwzH7od3dzgCrlIwavWDIMwqnhox6lXqFb0sCD6IpcKPsbPqoHl6Z3-2DZbRM0KEufel_3-ed3uzxcx19h302jA4HOV61O5xeyV2nS31HiUfEWVdWNNrF1pqXYzBT0JuJXTqZL2svAcBDln0eAWDKeXaXjO7IXqiBtnkDgzi6cdfNf3wsRTdAZAppR8d6cSjtdoPLyp7GM9Bv8V8EmxtEeqrfI_5xtTUlMo_cLd7=w382-h140-no"></a>
                        <span style="float: right;">
                            <span v-for="(menu, i) in allCategories" :key="i">
                                <span @click="listBlog(menu)"><a>{{ menu.name }}</a></span>
                            </span>
                            <router-link :to="{ name: 'contact'}">Liên hệ</router-link>
                            <a id="bar-icon" style='color: #fff;' href="javascript:void(0);" class="icon" @click.stop="drawer = !drawer">
                                <i class="fa fa-bars" style="font-size: 22px;"></i>
                            </a>
                            <a id="CallMini" href="tel:0388162714" style="display: none;"><i class="fas fa-phone" style="transform:rotate(1.5rad);font-size:19px;"></i><span style="padding-left: 10px;">0388162714</span></a>
                            <v-btn id="searchClick" @click="searchClick" color="success" icon style="margin-top:12px;border: none; outline-style: none; float: right;"><v-icon>search</v-icon></v-btn>
                            <v-btn  id="searchClose" @click="searchClose" color="success" icon style="border: none;margin-top:12px; outline-style: none; display: none;float: right;"><v-icon>close</v-icon></v-btn>
                        </span>
                    </div>
                </div>
                <div style="display: none; padding-bottom: 10px;" id="menuSearch">
                    <div style="margin:0 auto" id="typeWrite">
                        <div @click="activeForm" id="vue-typer" style="margin-top: 16px; margin-left: 23px;">
                            <vue-typer :text='["Đại đô thị","Quy hoạch Vincity","Vincity Ocean park","Vincity Grant park","Công viên BBQ","Vincity Tây Mỗ","Công viên Gym"]' erase-style='clear'></vue-typer>
                        </div>
                        <v-form id="inputSearch" style="margin-top: 15px; display:none; margin-left: 23px;">
                            <div>
                                <input autofocus style="outline-style: none;max-width: 700px;width:70%; font-size: 15px;" type="text" name="serach" placeholder="Tìm kiếm tên dự án…">

                            </div>
                        </v-form>
                        <v-btn color="red" icon style="float: right; margin-top: -29px; margin-right: 17px;"><v-icon>search</v-icon></v-btn>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu mobile -->
        <v-navigation-drawer v-model="drawer" absolute temporary dark id="drawer">
            <v-list class="pt-0" dense>
              <div @click="formActive!=formActive" style="padding-bottom: 0px; margin-top: 24px;">
                <div style="margin:0 auto" id="typeWrite">
                    <div v-if="!formActive" id="vue-typer" style="margin-top: 11px; margin-left: 17px;">
                        <vue-typer :text='["Đại đô thị","Quy hoạch Vincity","Vincity Ocean park","Vincity Grant park","Công viên BBQ","Vincity Tây Mỗ","Công viên Gym"]' erase-style='clear' style="color: #fff !important;">
                        </vue-typer>
                    </div>
                    <v-form id="inputSearch" v-else style="margin-top: 10px; display:none; margin-left: 23px;">
                        <div class="form-group">
                            <input autofocus style="outline-style: none;max-width: 200px;" type="text" name="search" placeholder="Tìm kiếm tên dự án…">
                        </div>
                    </v-form>
                    <v-icon color="red" style="float: right; margin-top: -23px; margin-right: 7px;">search</v-icon>
                </div>
            </div>
            <v-divider style="margin-top: 10px;"></v-divider>
            <v-list-tile v-for="(menu, i) in allCategories" :key="i">
                <v-list-tile-action>
                  <v-icon>dashboard</v-icon>
              </v-list-tile-action>

              <v-list-tile-content>
                  <v-list-tile-title>
                    <span @click="listBlog(menu)"><a>{{ menu.name }}</a></span>
                </v-list-tile-title>
            </v-list-tile-content>
        </v-list-tile> </v-list>
    </v-navigation-drawer>
    <!-- end menu mobile -->

<!--     carousel
<div id="carousel-top" style="margin-top:64px;">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    Indicators
    <ol class="carousel-indicators" style="z-index: 5;">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  Wrapper for slides
  <div class="carousel-inner">
      <div class="item active">
        <img src="https://lh3.googleusercontent.com/Ylzqp3Sswhmnr0Lndyl-KZHHXxZfcm-HgI2l3CB7-rkVry1S_09PavQyjVhs8edi7i7JBT9Xw4GINYmKN6677ND7Y38j4oX91uTW18ChD6i8PvYOcIPmMEMYTePIxhsj-FyO9zdDVvaGbZaoq_BQEzSAeu9dseRRFz6Ec1yz8VQTjn_V7MWLIpgkXOkHI2tgIMATTFbB-hyJ34QKdwBHp99jP-kNMYNEnHV9xBvqGQRw1lQdd1iwOttNGcm1dVLPOFQV-d6Xro38TRDiLuE99RPmLDT0HwYoO6W20BxOhNSZwPtQFSbtAUYPqmz57ZEWWkTA6lsfr8hxQDEj5nwT8skzwunYyXezwxM2MKGEKQAnt0Gfy1vnuvvi-rzH_fuJsmMG6ueqFULqwTO_BnQdY2FIqsellxgecawxWIueZTkVoXc-knh_SoafHabM4_BA7xD-ZMrg7FMuS4Nv3T1afVbyQ4Q0sC5NoEAOPHv0DW2v3irW0UuCcwztnykuSbFnsNwEGqANP3FrsKqVC3IViRlu5bfqcwe8yf3EN-KbwkOgu5zTSYGg3JdGqq4IyP1YhHeUwo9-OLQfHO_DxjS_BN_NtEBK9KdSIZ06SaBfo3NisPBo3nrqYqndYCZ_f_OPlZLz5dGW25cWMAG2EtYwC3yc=w1301-h468-no" alt="Los Angeles" style="width:100%;">
    </div>

    <div class="item">
        <img src="https://lh3.googleusercontent.com/_S16vugV7OJE2mVkmEPqDKsLfigDCsqQ_8bCw-bxuToN7EG5GS9GS8rClnYp8dMhs3wbLCrCTeXxDWkz44kqha88yp8oAymK31am_f8EyFozIawMQgGA1z0PvDW2bCSv1aZ07FhsSGWjYSBjgaGsRxvukWOQtHBn2m7MItAi18Cx0ymePYK57H8TvHnn-A1k83-R6by6xwKVH7ZJ--gqGN8GRa3kxjO9IGApNzllLZxtfHPS5V3BQS5AQCu7rhPF1I9IGvrJWlEx4y8HDO0a1aulXgsN_pea0ldjYqFiJynjuR_-eHLfDmMgRbcgCtt9biEYkYoHZ8nYWydqFb3OoehtM7R0ZadJUEAXdLb4ATQfCXWHfl7-ptU5q7QWnxaVtseWBgjIubGkjWw52PahTAm8XpgEZ0dAL2WKCea92uC0RzEPO7O5QxQr-J8jp4EtGgISjopQzvlKmI-yNz3zKNKhqZQjjh8_8bvrz2P-ZGg68M4iec1TlcCm15665LF4jQ-BcFSjL4lWlx7Cio-O1oPgJSGX5UjpEQOEA4CBrdwcPeKy5HIrp-KtfzkFMHKOuSj9gkDBfqA4wfij9JugCkUSQxfCcypcF2SvMnbwASBmOLUsx1HucoSSICeWL9tPfewaKWUzFzLuTQpuXVveNcf_=w1301-h468-no" alt="Chicago" style="width:100%;">
    </div>

    <div class="item">
        <img src="https://lh3.googleusercontent.com/5-vRnx4BY3p6DKg7-Y2t9TZ3uscnqQjj5PmxGhF1vWk69SDo0-WBqEU-pLjKfRS5fxAXWcpFhgS6nqwfgI5RWywQfd9Yn0AUUgm5m1GfAnNu-gn6ULhiVRKpd1J-OrowWtMC2md4Xt8xfINRj7Q4R8W_LJ33hZ79nED8eHTVdO1GylMuDVXJd1tRbJUweIuimsTKNcGlt2s6YNfjDFvVWeK3ymo3sMuQsjrhJ9rLSsXoc2oHQqYnreltoAP3-3Uk6Fq3OI9FdwdJF17a8PuFUYNrWHTSBUkuJPUnKGRxUCktZQYBd70WVMhg9WzkZbEsqRxPmmlmGA5OlCgyhqvYWiTRONFKt__I_8etnuNaxnBowZUEdbkBsht4Rv9JfsAd8KiFyk4g2My2Oy5p2tPXWEsmTJUtfsYy1IjGGQL9LVJc9bknA051FBfB6VXFk0FjZsRs5NkuiL5k_bl_MC1yVXEJ6qTx7XyChH00ijYdgdL0ZSF-rYVBlBy81A7uKrub3sFETeeTQxrjPsYm7g_ybjWBYfZIIXGdVkamS1QuWvAwpQvdVb3_tMV54PBbJHuLjIhLjwjWNetfd38eESKLxB0K1wn3HATIkdmqEWw8KzkmZuFLtPk8NBu9U48m4ZVZhUiFdwAuQYLt50cE6oXMMqpd=w1301-h468-no" alt="New york" style="width:100%;">
    </div>     
    <div class="item">
        <img src="https://lh3.googleusercontent.com/TUzdgo2xPJZFvbY9T2gPVxfvrLzJB1dASK0tycQGrf9NUAeOV7jF8aui-CMCdA4zKAMo8_RuIhkBT2VcbdXiDgvgpUevDyUUbFdwcm4UVAFBlatrNei44TqDMj0pnVBhSu-47jaX43L99KRYf9zhlR6X5BP6rK_67gnImx9fioEkyXjMW2j4n64pOsNmiYLGrfjNjKDrh5ixT2bylvSetmg5kG8dmP9k6LRGcg-p9HdVkfmfGhDbkZrnrmS7qoK__5QEir6x5CuVqQ7HOqHuBh8rzdXtqmJtE4ckzFu9MjLQ1wfTqlpnKnmSvsS-QclGzSky6KB6REurR1QPIlDZXJqDAPiZ4n4z0tR7cc4CcBwKrdMr3W-FUYoTT96AGOM_OLzaa57xOQPvUQxxQw8yjB1m4w2017fcRd-7-_Y4e2ycnq1s3r6DBatOsyfmkgPiyogkYr16qcMbbE2_NAUDoYEn_ukcRYBOaZFBFfi2_XIuR5z1y-HboS2mNBptXu38fb9B3vB52mpgWdUJAV2fV0qn0gArnV1wOVMC6c81hcSYNsC6ScO8ypVAM_-e9irT0LMr4dGh-V0m53fq0GIQPbVLz0Z4KWsHPjVbAKgrP4WKqJoDHSlPUrs3aVjclXycz6MfBhb9zand_suGC7zpZciQ=w1301-h468-no" alt="New york" style="width:100%;">
    </div>
</div>

Left and right controls
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
  <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  <span class="sr-only">Next</span>
  </a>
</div>
</div> -->
<!-- end carousel -->
</div>
</template>
<script>
    import { mapActions, mapGetters } from 'vuex'
    import { VueTyper } from 'vue-typer'
    export default {
        components: {
            VueTyper
        },
        data () {
          return {
            itemss: [
            {
                src: 'images/slide1.jpg'
            },
            {
                src: 'images/slide2.jpg'
            },
            {
                src: 'images/slide3.jpg'
            },
            {
                src: 'images/slide5.jpg'
            }
            ],
            drawer: null,
            formActive: false
        }
    },
    computed:{
        ...mapGetters(['allCategories'])
    },
    methods:{
        ...mapActions(['getMenuTop','getByCategory']),
        searchClick() {
            $(document).ready(function() {
                $('#menuSearch').show()
                $('#searchClick').hide()
                $('#searchClose').show()
            })
        },
        searchClose() {
           $(document).ready(function() {
            $('#menuSearch').hide()
            $('#searchClick').show()
            $('#searchClose').hide()
            $('#inputSearch').hide()
            $('#vue-typer').show()
        })
       },
       listBlog(menu){
        console.log(menu)
        this.getByCategory({cid: menu.id})
        this.$router.push({ name: 'listblog', params: { cid: menu.id, slug: menu.slug } })
    },
        // show form search
        activeForm() {
            document.getElementById("vue-typer").style.display = 'none'
            $('#inputSearch').show()
            setTimeout(function(){
                $("#inputSearch").focus()
            },500)
        },
        myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    },
    mounted(){
        // this.fetchCategories()
        this.getMenuTop()
    }
}
</script>
<style scoped>
#typeWrite{
 border: 1px solid gray; 
 width: 65% !important;
 height: 50px;
 background: #fff;
 color: black;
 border-radius: 40px;
}
.showcode{
    display: block inline !important;
}
#menu{
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 100000000;
}
#menu img{
    display: inline-block;
    margin-top: 5px;
    vertical-align: middle;
    max-width: 225px;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}
#menuSearch{
    background-color: #0C2E40;
    background-repeat: no-repeat;
    width: 100%;
}
#myTopnav{
    position: relative;
    width: 100%;
    text-align: center;
    background-color: #0C2E40;
    background-repeat: no-repeat;
}
.theme--light.v-btn{
    color: #fff;
}
.topnav a img{
    float:left;
}
.topnav a {
    float: left;
    display: block;
    color: #ffff;
    text-align: center;
    padding: 20px 16px;
    text-decoration: none;
    font-size: 17px;
}

.topnav a:not(#logo_page):not(#bar-icon):not(#CallMini):hover {
  background-color: #69F0AE;
  color: red;
  transition: all 0.7s 0.2s;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (min-width: 960px) {
    #drawer{
        display: none !important;
    }
}

@media screen and (max-width: 960px) {
  .topnav a {display: none;}
  #logo_page{ display: block; }
  .topnav a.icon {
    float: right;
    display: block;
}
.topnav.responsive {position: relative;}
#CallMini{
    display: block !important;
    position: absolute;
    right: 63px;
    /*transform:rotate(3rad);*/
    margin-top: 0px;
    top: 0;
}
#menuSearch{
    display: none !important;
}
#drawer{
    margin-top: 50px !important;
    position: fixed !important;
    top: 0px;
}
#typeWrite{
    margin-top: 20px;
    border: 1px solid gray; 
    width: 90% !important;
    height: 40px;
    background: #fff;
    color: black;
    border-radius: 40px;
}
.topnav.responsive .icon {
    position: absolute;
    right: 20px;
    top: 0;
}
#searchClick,#searchClose {
    display: none;
}
#bar-icon{
    top: 5px;
    /*padding: 15px 16px;*/
}
a img{
    height: 44px;
    width: 70px;
    position: absolute;
    left: 20px;
    top: 0;
}
.topnav.responsive span{
    background: blue !important;
    margin-top: 50px !important;
    clear: both;
    float: none !important;
}
.topnav.responsive span a{
    padding: 16px 16px;
}
.topnav.responsive span a:first-child{
    margin-top: 50px;
}
.topnav.responsive a {
    clear: both;
    float: none;
    /*margin: 0 auto;*/
    display: block;
    transition: all 0.5s 0.5s;
}
}
@media screen and (max-width: 768px) {
    #bar-icon{
        top: 5px;
        margin-top: 2px;
        padding: 15px 16px;
        margin-right: -10px;
    }
    #drawer{
        margin-top: 40px !important;
    }
    #CallMini{
        right: 45px;
        margin-top: -2px;
        top: 0;
    }
    a img{
        height: 37px;
        width: 60px;
        position: absolute;
        left: 10px;
        top: 0;
    }
    #carousel-top{
        margin-top: 54px !important;
    }
}
@media screen and (max-width: 425px) {
    #bar-icon{
        top: 5px;
        margin-top: 5px;
        padding: 15px 16px;
        margin-right: -10px;
    }
    #CallMini{
        right: 45px;
        margin-top: 1px;
        top: 0;
    }
    #CallMini span{
        display: none;
    }
    a img{
        position: absolute;
        left: 10px;
        top: 0;
    }
    #drawer{
        margin-top: 42px !important;
    }
}
@media screen and (max-width: 375px) {
    #bar-icon{
        top: 5px;
        padding: 14px 16px;
        margin-right: -17px;
    }
    #CallMini{
        right: 38px;
        top: 0;
    }
    a img{
        height: 37px;
        width: 53px;
        position: absolute;
        left: 5px;
        top: 0;
    }
    #drawer{
        margin-top: 42px !important;
    }
    #carousel-top{
        margin-top: 52px !important;
    }
}
</style>
