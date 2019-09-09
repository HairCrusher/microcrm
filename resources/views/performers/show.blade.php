@extends('layouts.app')

@section('content')
    <section id="event">
        <div class="container">
            <div class="settings d-flex justify-content-between mb-2">
                <button type="button" class="btn btn-light disabled"><i class="fas fa-user-tag"></i>
                    <b>Администратор</b></button>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{$id}}/clients" class="btn btn-info"><i class="fas fa-users"></i> Клиенты</a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-performer"><i class="fas fa-edit"></i> Редактировать</button>
                    <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i> Удалить</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card domain-settings">
                        <div class="card-body">
                            <h5 class="card-title">Исполнитель {{$id}} <a href="#"><i class="fas fa-external-link-alt"></i></a></h5>
                            <h6 class="card-subtitle mb-2 text-muted">Далеко-далеко за словесными горами в стране,
                                гласных и согласных живут рыбные тексты. Повстречался он взобравшись свой, агенство
                                своего оксмокс, меня подпоясал! Парадигматическая.</h6>
                            <p class="mb-0"><b>Администратор</b> - <a href="#">Lorem ipsum</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
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
                                <tr>
                                    <td><a href="#">Mark [vk_name][vk_id]</a></td>
                                    <td>Модератор</td>
                                    <td><a href="#" class="btn btn-danger"><i class="fas fa-ban"></i></a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Jacob [vk_name][vk_id]</a></td>
                                    <td>Менеджер</td>
                                    <td><a href="#" class="btn btn-danger"><i class="fas fa-ban"></i></a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Larry [vk_name][vk_id]</a></td>
                                    <td>Менеджер</td>
                                    <td><a href="#" class="btn btn-danger"><i class="fas fa-ban"></i></a></td>
                                </tr>
                                </tbody>
                            </table>

                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                <i class="fas fa-lock-open"></i> Предоставить доступ
                            </button>
                        </div>
                    </div>
                </div>
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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#performer-create">
                                <i class="fas fa-calendar-plus"></i> Создать
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Клиенты</h5>
                            <ul class="sa-list list-group list-group-flush mb-3">
                                <li class="list-group-item">Всего: <b><a href="{{$id}}/clients">1234</a></b></li>
                                <li class="list-group-item">Группа VK: <b><a href="{{$id}}/clients">900</a></b></li>
                                <li class="list-group-item">Сторонние: <b><a href="{{$id}}/clients">334</a></b></li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#client">
                                <i class="fas fa-user-plus"></i> Добавить
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Предоставление гостевого доступа к исполнителю</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Пользователь</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID">
                            <small id="emailHelp" class="form-text text-muted">Введите ID пользователя, которому хотите предоставить доступ</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Роль</label>
                            <select class="custom-select">
                                <option value="1">Модератор</option>
                                <option value="2">Менеджер</option>
                            </select>
                            <small id="emailHelp" class="form-text text-muted">Введите ID пользователя, которому хотите предоставить доступ</small>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Предоставить</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Добавление клиента</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Клиент</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="https://vk.com/clientname">
                                <small id="emailHelp" class="form-text text-muted">Введите ссылку на профиль в VK</small>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Добавить</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="manager" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Назначение менеджером</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <select class="custom-select">
                                <option selected>Выбрать пользователя</option>
                                <option value="1">Пользователь 1</option>
                                <option value="2">Пользователь 2</option>
                                <option value="3">Пользователь 3</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Назначить</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="manager-list" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Редактирование списка менеджеров</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <ul class="sa-list list-group list-group-flush mb-3">
                                <li class="list-group-item">
                                    <a href="#">Lorem ipsum</a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-ban"></i></a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Lorem ipsum</a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-ban"></i></a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Lorem ipsum</a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-ban"></i></a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Lorem ipsum</a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-ban"></i></a>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-performer" tabindex="-1" role="dialog" aria-labelledby="create-event" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Редактирование исполнителя</h5>
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
                    <button type="button" class="btn btn-primary">Сохранить</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="performer-create" tabindex="-1" role="dialog" aria-labelledby="create-event" aria-hidden="true">
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
@endsection