<template>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Эвенты</h5>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Город</th>
                        <th scope="col">Дата</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <a href="/event/1">Lorem ipsum</a>
                        </td>
                        <td>Москва</td>
                        <td>20.12.2019</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <a href="/event/1">Lorem ipsum</a>
                        </td>
                        <td>Москва</td>
                        <td>20.12.2019</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>
                            <a href="/event/1">Lorem ipsum</a>
                        </td>
                        <td>Москва</td>
                        <td>20.12.2019</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>
                            <a href="/event/1">Lorem ipsum</a>
                        </td>
                        <td>Москва</td>
                        <td>20.12.2019</td>
                    </tr>

                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#event-create">
                    <i class="fas fa-calendar-plus"></i> Создать
                </button>
            </div>
        </div>

        <div class="modal fade" id="event-create" tabindex="-1" role="dialog" aria-labelledby="create-event"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Создание эвента</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Название</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="desc">Описание</label>
                                <textarea class="form-control" id="desc" cols="30" rows="10"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Создать</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "PerformerEvents",

    }
</script>

<style scoped>

</style>