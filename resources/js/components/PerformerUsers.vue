<template>
    <div class="col-md-6">
        <div class="card" :class="{loading: loading}">
            <div class="card-body">
                <h5 class="card-title">Пользователи</h5>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Имя</th>
                        <th scope="col">Роль</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(user, index) in users" :key="index">
                        <td><span v-html="vkUserLink(user)"></span></td>
                        <td>{{getRole(user.role)}}</td>
                        <td><a href="#" class="btn btn-danger"><i class="fas fa-ban"></i></a></td>
                    </tr>
                    </tbody>
                </table>

                <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#accessModal">
                    <i class="fas fa-lock-open"></i> Предоставить доступ
                </button>
            </div>
        </div>


        <div class="modal fade" id="accessModal" tabindex="-1" role="dialog"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form @submit="checkAccessForm">
                        <div v-if="errors.length" class="alert alert-danger" role="alert">
                            <b>Пожалуйста исправьте указанные ошибки:</b>
                            <ul>
                                <li v-for="error in errors">{{ error }}</li>
                            </ul>
                        </div>
                        <div class="modal-header">
                            <h5 class="modal-title" id="accessModalLabel">Предоставление гостевого доступа к
                                исполнителю</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="accessUserId">Пользователь</label>
                                <input v-model="form.id" type="text" class="form-control" id="accessUserId" placeholder="ID">
                                <small id="accessUserIdHelp" class="form-text text-muted">Введите ID пользователя,
                                    которому
                                    хотите предоставить доступ
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="accessUserRole">Роль</label>
                                <select v-model="form.role_id" class="custom-select" id="accessUserRole">
                                    <option selected disabled value="0">Выберете роль</option>
                                    <option v-for="(role, index) in userRoles" :key="index" :value="role.id">
                                        {{role.name}}
                                    </option>
                                </select>
                                <small id="emailHelp" class="form-text text-muted">Введите ID пользователя, которому
                                    хотите предоставить доступ
                                </small>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Предоставить">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {mapState, mapGetters} from 'vuex'

    export default {
        name: "PerformerUsers",
        props: ['users'],
        data() {
            return {
                form: {
                    id: '',
                    role_id: 0
                },
                errors: []
            }
        },
        computed: {
            ...mapState({
                userRoles: state => state.userRoles.list,
                loading: state => state.performers.usersLoading
            }),
            ...mapGetters({
                vkUserLink: ['users/vkUserLink'],
                getRole: ['userRoles/getRole'],
            }),
        },
        methods: {
            checkAccessForm(e){
                e.preventDefault();

                this.errors = [];

                if(!this.form.id)
                    this.errors.push('Введите ID');

                if(!this.form.role_id)
                    this.errors.push('Выберете роль');

                if(this.errors.length === 0){
                    this.$store.dispatch('performers/provideAccess', {data:this.form, perfId:this.$route.params.id});
                }
            }
        },
    }
</script>

<style scoped>

</style>