<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" @click="log()">Список моих групп в VK</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Добавьте в систему группу VK исполнителя для
                        отслеживания клиентов</h6>
                    <table :class="{loading : loading}" class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Название</th>
                            <th scope="col">VK_ID</th>
                            <th scope="col">Исполнитель</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in groups">
                                <td><img :src="item.poster" alt=""></td>
                                <td><a :href="item.link">{{ item.name }}</a></td>
                                <td>{{ item.id }}</td>
                                <td><a href="#">Исполнитель</a></td>
                                <td>
                                    <button v-if="!item.inSystem" @click="add(item.id)" class="btn btn-primary">Добавить в систему</button>
                                    <button v-if="item.inSystem" class="btn btn-primary" disabled>В системе</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapState, mapActions } from 'vuex'

    export default {
        name: "GroupsList",
        computed: {
            ...mapState({
                groups: state => state.groups.list,
                loading: state => state.groups.loading,
            }),
        },
        methods: {
            ...mapActions({
                add: 'groups/addToSystem'
            })
        },
    }
</script>

<style scoped>

</style>