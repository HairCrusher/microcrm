@extends('layouts.app')

@section('content')
    <section id="tasks-list">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Мои задачи</h5>
                    </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Исполнитель</th>
                            <th scope="col">Эвент</th>
                            <th scope="col">Клиент</th>
                            <th scope="col">Назначен на</th>
                            <th scope="col">Статус</th>
                            <th scope="col">Комментарий</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="/performer/1">Исполнитель 1</a></td>
                            <td><a href="/event/1">Эвент 1</a></td>
                            <td><a href="/client/1">Клиент 1 vkname [vk_id]</a></td>
                            <td>Lorem ipsum</td>
                            <td>
                                <select class="custom-select">
                                    <option selected>Обработать</option>
                                    <option value="1">Ожидание ответа</option>
                                    <option value="2">Купил билет</option>
                                    <option value="3">Отказался</option>
                                </select>
                            </td>
                            <td><textarea class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="/performer/1">Исполнитель 1</a></td>
                            <td><a href="/event/1">Эвент 1</a></td>
                            <td><a href="/client/1">Клиент 1 vkname [vk_id]</a></td>
                            <td>Lorem ipsum</td>
                            <td>
                                <select class="custom-select">
                                    <option selected>Обработать</option>
                                    <option value="1">Ожидание ответа</option>
                                    <option value="2">Купил билет</option>
                                    <option value="3">Отказался</option>
                                </select>
                            </td>
                            <td><textarea class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><a href="/performer/1">Исполнитель 1</a></td>
                            <td><a href="/event/1">Эвент 1</a></td>
                            <td><a href="/client/1">Клиент 1 vkname [vk_id]</a></td>
                            <td>Lorem ipsum</td>
                            <td>
                                <select class="custom-select">
                                    <option selected>Обработать</option>
                                    <option value="1">Ожидание ответа</option>
                                    <option value="2">Купил билет</option>
                                    <option value="3">Отказался</option>
                                </select>
                            </td>
                            <td><textarea class="form-control"></textarea></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="create-event" tabindex="-1" role="dialog" aria-labelledby="create-event" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Создание исполнителя</h5>
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
                        <div class="form-group">
                            <select class="custom-select">
                                <option selected>Выберете группу VK</option>
                                <option value="1">Группа 1</option>
                                <option value="2">Группа 2</option>
                                <option value="3">Группа 3</option>
                            </select>
                            <small class="form-text text-muted">Если вы не нашли нужную группу в списке, то <a
                                        href="/groups">добавьте ее в систему</a></small>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Создать</button>
                </div>
            </div>
        </div>
    </div>
@endsection