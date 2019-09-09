@extends('layouts.app')

@section('content')
    <section id="performers-list">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Исполнители</h5>
                        <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#create-event">Создать исполнителя</button>
                    </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Роль</th>
                            <th scope="col">Создатель</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="/performers/1">Исполнитель 1</a></td>
                            <td>Администратор</td>
                            <td><a href="#">Lorem ipsum [vk_name]</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="/performers/2">Исполнитель 2</a></td>
                            <td>Модератор</td>
                            <td><a href="#">Lorem ipsum [vk_name]</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><a href="/performers/3">Исполнитель 3</a></td>
                            <td>Менеджер</td>
                            <td><a href="#">Lorem ipsum [vk_name]</a></td>
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