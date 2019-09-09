<template>
    <div>
        <div class="card" :class="{loading: loading}">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">Исполнители</h5>

                    <button type="button" class="btn btn-success mb-3" data-toggle="modal"
                            data-target="#create-performer">
                        Создать исполнителя
                    </button>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Роль</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(performer, index) in list">
                        <td>{{index+1}}</td>
                        <td>
                            <router-link :to="{name: 'performerShow', params: {id: performer.id}}">{{ performer.name }}
                            </router-link>
                        </td>
                        <td>
                            {{ getRole(performer.role) }}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal fade" id="create-performer" tabindex="-1" role="dialog" aria-labelledby="create-event"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form @submit="submitForm">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Создание исполнителя</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div v-if="errors.length" class="alert alert-danger" role="alert">
                                <b>Пожалуйста исправьте указанные ошибки:</b>
                                <ul>
                                    <li v-for="error in errors">{{ error }}</li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label for="name">Название</label>
                                <input v-model="formCreate.name" type="text" class="form-control" id="name"
                                       aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="desc">Описание</label>
                                <textarea v-model="formCreate.description" class="form-control" id="desc" cols="30"
                                          rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <select class="custom-select" v-model="formCreate.group">
                                    <option selected disabled value="0">Выберете группу VK</option>
                                    <option v-for="group in groups" :value="group.id">
                                        {{ group.name }} - {{ group.service_id }}
                                    </option>
                                </select>
                                <small class="form-text text-muted">Если вы не нашли нужную группу в списке, то <a
                                        href="/groups">добавьте ее в систему</a></small>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Создать">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {mapState, mapActions, mapGetters} from 'vuex'

    export default {
        name: "Index",
        data() {
            return {
                errors: [],
                formCreate: {
                    name: '',
                    description: '',
                    group: 0
                }
            }
        },
        computed: {
            ...mapState({
                list: state => state.performers.list,
                groups: state => state.groups.list,
                loading: state => state.performers.loading,
            }),
            ...mapGetters({
                getRole: 'userRoles/getRole',
                vkUserLink: 'users/vkUserLink',
            }),
        },
        methods: {
            ...mapActions({
                store: 'performers/store'
            }),
            submitForm(e){
                e.preventDefault();

                this.errors = [];
                if(!this.formCreate.name)
                    this.errors.push('Укажите название исполнителя');

                if(!this.formCreate.description)
                    this.errors.push('Укажите описание исполнителя');

                if(!this.formCreate.group)
                    this.errors.push('Укажите группу исполнителя');

                if(this.errors.length === 0){
                    this.store(this.formCreate);
                    $('.modal').modal('hide');
                    this.formCreate.name = '';
                    this.formCreate.description = '';
                    this.formCreate.group = 0;
                }
            },
        },
    }
</script>

<style scoped>

</style>