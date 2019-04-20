<template>
    <div class="row">
        <div class="col-12">
            <h4 class="page-title">
                Đổi mật khẩu
            </h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><router-link :to="{ name: 'home'}">Bảng điều khiển</router-link></li>
                <li class="breadcrumb-item active">Đổi mật khẩu</li>
            </ol>
            <p class="clearfix"></p>
            <div class="card">
                <div class="card-body">
                    <form class="form" role="form" @submit.prevent="formSubmit">
                        <div class="form-group">
                            <label class="text-right" for="user_password">Mật khẩu (<span class="text-danger">*</span>)</label>
                            <input type="password" id="user_password" :class="{'form-control' : true, 'is-invalid': errors.has('user_password')}" placeholder="Nhập mật khẩu" v-model="user.password" name="user_password" v-validate="valid_password" data-vv-as="mật khẩu">
                            <div v-show="errors.has('user_password')" class="text-danger">{{ errors.first('user_password') }}</div>
                        </div>
                        <div class="form-group">
                            <label class="text-right" for="user_password_confirmation">Xác nhận mật khẩu (<span class="text-danger">*</span>)</label>
                            <input type="password" id="user_password_confirmation" :class="{'form-control' : true, 'is-invalid': errors.has('user_password_confirmation')}" placeholder="Nhập lại mật khẩu" v-model="user.password_confirmation" name="user_password_confirmation" v-validate="valid_repassword" data-vv-as="xác nhận mật khẩu" ref="confirmation">
                            <div v-show="errors.has('user_password_confirmation')" class="text-danger">{{ errors.first('user_password_confirmation') }}</div>
                        </div>
                        <button class="btn btn-default" type="submit">Lưu lại</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { mapGetters, mapActions } from 'vuex'
export default {
    data () {
        return {
            user: {}
        }
    },
    computed:{
        valid_password() {
            return 'required|min:6|confirmed:confirmation';
        },
        valid_repassword() {
            return 'required|min:6';
        }
    },
    methods: {
        ...mapActions(['resetPassWord']),
        formSubmit() {
            this.$validator.validate().then(result => {
                if (result) {
                    this.resetPassWord({
                        user: this.user,
                        cb: () => {
                            $.Notification.autoHideNotify('success', 'top right', 'Thành công', 'Cập nhật dữ liệu thành công.')
                            this.$router.push({ name: 'home'})
                        }
                    })
                }
            });
        }
    },
    created() {
        this.user = infoUser
    }
}
</script>
