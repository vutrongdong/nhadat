<template>
    <div class="row">
        <div class="col-12">
            <h4 class="page-title">
                Chỉnh sửa tag
            </h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><router-link :to="{ name: 'home'}">Bảng điều khiển</router-link></li>
                <li class="breadcrumb-item"><router-link :to="{ name: 'tag'}">Tag</router-link></li>
                <li class="breadcrumb-item active">Chỉnh sửa tag</li>
            </ol>
            <p class="clearfix"></p>
            <div class="card">
                <div class="card-body">
                    <tag-form v-if="tag.id" @submit="formSubmit" type="edit" :dataTag="tag" />
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { mapActions } from 'vuex'
import { debounce } from 'lodash'
import TagForm from './TagForm'
export default {
    components: {
        TagForm
    },
    data () {
        return {
            tag: {}
        }
    },
    methods: {
        ...mapActions(['pushTag', 'getTag']),
        formSubmit(tag) {
            this.pushTag({
                tag: tag,
                cb: () => {
                    $.Notification.autoHideNotify('success', 'top right', 'Thành công', 'Cập nhật dữ liệu thành công.')
                    this.$router.push({ name: 'tag'})
                }
            })
        }
    },
    mounted() {
        this.getTag({
            id: this.$route.params.id,
            cb: (tag) => {
                this.tag = Object.assign({}, this.tag, tag)
            }
        })
    }
}
</script>
