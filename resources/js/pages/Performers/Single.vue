<template>
    <div>
        <div class="settings d-flex justify-content-between mb-2">
            <badge-role :role="performer.role"></badge-role>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="/clients" class="btn btn-info"><i class="fas fa-users"></i> Клиенты</a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-performer"><i
                        class="fas fa-edit"></i> Редактировать
                </button>
                <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i> Удалить</button>
            </div>
        </div>
        <div class="row row-mb">
            <div class="col-md-12">
                <div class="card domain-settings" :class="{loading: loading}">
                    <div class="card-body">
                        <h5 class="card-title">{{ performer.name }} </h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ performer.description }}</h6>
                        <p class="mb-0" v-if="performer.role != 'creator'"><b>Создатель</b> - <span v-html="vkUserLink(owner)"></span></p>
                    </div>
                </div>
            </div>
            <performer-users :users="users"></performer-users>
            <performer-events></performer-events>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Клиенты</h5>
                        <ul class="sa-list list-group list-group-flush mb-3">
                            <li class="list-group-item">Всего: <b><a href="/clients">1234</a></b></li>
                            <li class="list-group-item">Группа VK: <b><a href="/clients">900</a></b></li>
                            <li class="list-group-item">Сторонние: <b><a href="/clients">334</a></b></li>
                        </ul>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#client">
                            <i class="fas fa-user-plus"></i> Добавить
                        </button>
                    </div>
                </div>
            </div>


        </div>

        <div class="modal fade" id="edit-performer" tabindex="-1" role="dialog" aria-labelledby="create-event"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form @submit="checkPerfUpdate">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Редактирование исполнителя</h5>
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
                                <input v-model="updateForm.name" type="text" class="form-control" id="name"
                                       aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="desc">Описание</label>
                                <textarea v-model="updateForm.description" class="form-control" id="desc" cols="30"
                                          rows="10"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Сохранить">
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!--<div class="modal fade" id="client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"-->
        <!--aria-hidden="true">-->
        <!--<div class="modal-dialog" role="document">-->
        <!--<div class="modal-content">-->
        <!--<div class="modal-header">-->
        <!--<h5 class="modal-title" id="exampleModalLabel">Добавление клиента</h5>-->
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
        <!--<span aria-hidden="true">&times;</span>-->
        <!--</button>-->
        <!--</div>-->
        <!--<div class="modal-body">-->
        <!--<form>-->
        <!--<div class="form-group">-->
        <!--<div class="form-group">-->
        <!--<label for="exampleInputEmail1">Клиент</label>-->
        <!--<input type="text" class="form-control" id="exampleInputEmail1"-->
        <!--aria-describedby="emailHelp" placeholder="https://vk.com/clientname">-->
        <!--<small id="emailHelp" class="form-text text-muted">Введите ссылку на профиль в VK-->
        <!--</small>-->
        <!--</div>-->
        <!--</div>-->
        <!--</form>-->
        <!--</div>-->
        <!--<div class="modal-footer">-->
        <!--<button type="button" class="btn btn-primary">Добавить</button>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->

        <!--<div class="modal fade" id="manager" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"-->
        <!--aria-hidden="true">-->
        <!--<div class="modal-dialog" role="document">-->
        <!--<div class="modal-content">-->
        <!--<div class="modal-header">-->
        <!--<h5 class="modal-title" id="exampleModalLabel">Назначение менеджером</h5>-->
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
        <!--<span aria-hidden="true">&times;</span>-->
        <!--</button>-->
        <!--</div>-->
        <!--<div class="modal-body">-->
        <!--<form>-->
        <!--<div class="form-group">-->
        <!--<select class="custom-select">-->
        <!--<option selected>Выбрать пользователя</option>-->
        <!--<option value="1">Пользователь 1</option>-->
        <!--<option value="2">Пользователь 2</option>-->
        <!--<option value="3">Пользователь 3</option>-->
        <!--</select>-->
        <!--</div>-->
        <!--</form>-->
        <!--</div>-->
        <!--<div class="modal-footer">-->
        <!--<button type="button" class="btn btn-primary">Назначить</button>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->

        <!--<div class="modal fade" id="manager-list" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"-->
        <!--aria-hidden="true">-->
        <!--<div class="modal-dialog" role="document">-->
        <!--<div class="modal-content">-->
        <!--<div class="modal-header">-->
        <!--<h5 class="modal-title" id="exampleModalLabel">Редактирование списка менеджеров</h5>-->
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
        <!--<span aria-hidden="true">&times;</span>-->
        <!--</button>-->
        <!--</div>-->
        <!--<div class="modal-body">-->
        <!--<form>-->
        <!--<div class="form-group">-->
        <!--<ul class="sa-list list-group list-group-flush mb-3">-->
        <!--<li class="list-group-item">-->
        <!--<a href="#">Lorem ipsum</a>-->
        <!--<a href="#" class="btn btn-danger"><i class="fas fa-ban"></i></a>-->
        <!--</li>-->
        <!--<li class="list-group-item">-->
        <!--<a href="#">Lorem ipsum</a>-->
        <!--<a href="#" class="btn btn-danger"><i class="fas fa-ban"></i></a>-->
        <!--</li>-->
        <!--<li class="list-group-item">-->
        <!--<a href="#">Lorem ipsum</a>-->
        <!--<a href="#" class="btn btn-danger"><i class="fas fa-ban"></i></a>-->
        <!--</li>-->
        <!--<li class="list-group-item">-->
        <!--<a href="#">Lorem ipsum</a>-->
        <!--<a href="#" class="btn btn-danger"><i class="fas fa-ban"></i></a>-->
        <!--</li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--</form>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->



    </div>
</template>

<script>
    import {mapState, mapActions, mapMutations, mapGetters} from 'vuex'

    export default {
        name: "Show",
        data() {
            return {
                updateForm: {
                    name: '',
                    description: '',
                },
                errors: []
            }
        },
        computed: {
            ...mapState({
                loading: state => state.performers.loading,
            }),
            ...mapGetters({
                vkUserLink: 'users/vkUserLink',
                getUser: 'users/get',
                users: 'performers/getUsers'
            }),
            performer() {
                return this.$store.getters['performers/getById'](this.$route.params.id);
            },
            owner(){
                return this.getUser(this.performer.user_id);
            },
        },
        methods: {
            ...mapActions({
                updatePerformer: 'performers/update',
            }),
            ...mapMutations({
                setError: 'performers/setError',
                clearErrors: 'performers/clearErrors',
            }),
            checkPerfUpdate(e) {
                e.preventDefault();
                this.errors = [];

                if (!this.updateForm.name)
                    this.errors.push('Имя обязательный параметр');

                if (!this.updateForm.description)
                    this.errors.push('Описание обязательный параметр');

                if (!this.errors.length) {
                    $('.modal').modal('hide');
                    this.updateForm.id = this.$route.params.id;
                    this.updatePerformer(this.updateForm);
                }
            }
        },
        mounted() {
            this.updateForm.name = this.performer.name;
            this.updateForm.description = this.performer.description;

            if(!this.getUser(this.performer.user_id))
                this.$store.dispatch('users/getUser', this.performer.user_id);

            this.$store.dispatch('performers/getPerformerUsers', this.$route.params.id);
        }
    }
</script>

<style scoped>

</style>