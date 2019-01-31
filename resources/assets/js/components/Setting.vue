<template>
    <div class="row">
        <div class="col-12">
            <h4 class="page-title">
                Cài đặt trang web
            </h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><router-link :to="{ name: 'home'}">Bảng điều khiển</router-link></li>
                <li class="breadcrumb-item active"> Cài đặt</li>
            </ol>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal" role="form">
                                <div class="form-group row">
                                    <label class="col-2 col-form-label text-right" for="setting_title">Tiêu đề website(<span class="text-danger">*</span>)</label>
                                    <div class="col-7">
                                        <input type="text" v-validate="'required'" data-vv-as="Tiêu đề" name="title" id="setting_title" class="form-control" placeholder="Nhập tiêu đề trang web" v-model="setting.title">
                                        <div v-show="errors.has('title')" class="text-danger">{{ errors.first('title') }}</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label text-right" for="setting_keyword">Từ khóa(<span class="text-danger">*</span>)</label>
                                    <div class="col-7">
                                        <input type="text"  v-validate="'required'" data-vv-as="Từ khóa" id="setting_keyword" class="form-control" name="keywords" placeholder="Nhập từ khóa" v-model="setting.keywords">
                                        <div v-show="errors.has('keywords')" class="text-danger">{{ errors.first('keywords') }}</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label text-right" for="setting_description">Mô tả website(<span class="text-danger">*</span>)</label>
                                    <div class="col-7">
                                        <textarea id="setting_description" v-validate="'required'" data-vv-as="Mô tả" name="description" class="form-control" v-model="setting.description" placeholder="Nhập mô tả"></textarea>
                                        <div v-show="errors.has('description')" class="text-danger">{{ errors.first('description') }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label text-right" for="setting_company_name">Tên công ty(<span class="text-danger">*</span>)</label>
                                    <div class="col-7">
                                        <input type="text" name="name" v-validate="'required'" data-vv-as="Tên công ty" id="setting_company_name" class="form-control" placeholder="Nhập tên công ty" v-model="setting.name">
                                        <div v-show="errors.has('name')" class="text-danger">{{ errors.first('name') }}</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label text-right" for="setting_company_addr">Địa chỉ(<span class="text-danger">*</span>)</label>
                                    <div class="col-7">
                                        <input type="text" name="address" v-validate="'required'" data-vv-as="Địa chỉ" id="setting_company_addr" class="form-control" placeholder="Nhập địa chỉ" v-model="setting.address">
                                        <div v-show="errors.has('address')" class="text-danger">{{ errors.first('address') }}</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label text-right" for="setting_company_phone">Số điện thoại(<span class="text-danger">*</span>)</label>
                                    <div class="col-7">
                                        <input type="number" id="setting_company_phone" name="phone" v-validate="'required|max:13|min:10'" data-vv-as="Số điện thoại" class="form-control" placeholder="Nhập số điện thoại" v-model="setting.phone">
                                        <div v-show="errors.has('phone')" class="text-danger">{{ errors.first('phone') }}</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label text-right" for="setting_company_email">Email(<span class="text-danger">*</span>)</label>
                                    <div class="col-7">
                                        <input type="text" name="email" v-validate="'required|email'" data-vv-as="Email" id="setting_company_email" class="form-control" placeholder="Nhập Email" v-model="setting.email">
                                        <div v-show="errors.has('email')" class="text-danger">{{ errors.first('email') }}</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label text-right" for="setting_company_tax">Mã số thuế</label>
                                    <div class="col-7">
                                        <input type="text" id="setting_company_tax" class="form-control" placeholder="Nhập mã số thuế doanh nghiệp" v-model="setting.tax_number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label text-right" for="setting_company_bank">Tài khoản ngân hàng</label>
                                    <div class="col-7">
                                        <textarea id="setting_company_bank" class="form-control" v-model="setting.bank" placeholder="Nhập thông tin tài khoản ngân hàng"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label text-right" for="setting_company_about">Giới thiệu công ty(<span class="text-danger">*</span>)</label>
                                    <div class="col-9">
                                        <tinymce
                                        id="about"
                                        v-validate="'required'" data-vv-as="Nội dung"
                                        name="about"
                                        :plugins="plugins"
                                        v-model="setting.about"
                                        toolbar1="formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent | removeformat | codesample"
                                        toolbar2=""
                                        :other_options="{ height: '300px'}"
                                        @editorInit="e => e.setContent(setting.about ? setting.about : '')"
                                        ></tinymce>
                                        <div v-show="errors.has('about')" class="text-danger">{{ errors.first('about') }}</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label text-right" for="setting_company_fb">Facebook</label>
                                    <div class="col-7">
                                        <input type="text" id="setting_company_fb" class="form-control" placeholder="Nhập link facebook fanpage" v-model="setting.facebook">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label text-right" for="setting_company_insta">Instagram</label>
                                    <div class="col-7">
                                        <input type="text" id="setting_company_insta" class="form-control" placeholder="Nhập link instagram" v-model="setting.instagram">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label text-right" for="setting_company_zalo">Zalo</label>
                                    <div class="col-7">
                                        <input type="text" id="setting_company_zalo" class="form-control" placeholder="Nhập link zalo page" v-model="setting.zalo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-7 offset-2">
                                        <button type="button" class="btn btn-default" @click="submitForm"><i class="ti-save"></i> Cập nhật</button>
                                        <router-link to="/" class="btn btn-link">Trở lại</router-link>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import tinymce from 'vue-tinymce-editor'
import { assign } from 'lodash'
import { mapActions, mapGetters } from 'vuex'

export default {
    components: {
        tinymce
    },
    data() {
        return {
            setting: {},
            plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor"
            ],
        }
    },
    computed: {
        ...mapGetters(['allSettings'])
    },
    methods: {
        ...mapActions(['fetchSetting', 'pushSetting']),
        loadSetting() {
            this.setting = assign({}, this.setting, this.allSettings)
        },
        submitForm() {
            this.$validator.validate().then(result => {
                if (result) {
                    this.pushSetting({
                        setting: this.setting,
                        cb: $.Notification.autoHideNotify('success', 'top right', 'Thành công','Cập nhật dữ liệu thành công.')
                    })
                } else {
                    $.Notification.autoHideNotify('warning', 'top right', 'Cảnh báo', 'Vui lòng kiểm tra thông tin cần nhập')
                }
            })
        }
    },
    mounted() {
        this.fetchSetting().then(() => this.loadSetting())
    }
}
</script>
