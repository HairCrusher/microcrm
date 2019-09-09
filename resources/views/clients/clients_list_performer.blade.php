@extends('layouts.app')

@section('content')
    <section id="manager">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="card-title">Список клиентов - <a href="#">Исполнитель 1</a></h5>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Статусы клиентов
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <button type="button" class="btn btn-success mb-3 dropdown-item" data-toggle="modal" data-target="#statuses-list">Список</button>
                                        <button type="button" class="btn btn-success mb-3 dropdown-item" data-toggle="modal" data-target="#status-create">Новый</button>
                                    </div>
                                </div>

                            </div>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Клиент</th>
                                    <th scope="col">VK id</th>
                                    <th scope="col">Комментарий</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <a href="/client/1"><img src="https://sun9-28.userapi.com/c639626/v639626950/916c/FWBAL99wdis.jpg?ava=1" alt=""> Иван Иванов</a>
                                    </td>
                                    <td>123456</td>
                                    <td><textarea class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>
                                        <a href="/client/1"><img src="https://sun9-28.userapi.com/c639626/v639626950/916c/FWBAL99wdis.jpg?ava=1" alt=""> Иван Иванов</a>
                                    </td>
                                    <td>123456</td>
                                    <td><textarea class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>
                                        <a href="/client/1"><img src="https://sun9-28.userapi.com/c639626/v639626950/916c/FWBAL99wdis.jpg?ava=1" alt=""> Иван Иванов</a>
                                    </td>
                                    <td>123456</td>
                                    <td><textarea class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>
                                        <a href="/client/1"><img src="https://sun9-28.userapi.com/c639626/v639626950/916c/FWBAL99wdis.jpg?ava=1" alt=""> Иван Иванов</a>
                                    </td>
                                    <td>123456</td>
                                    <td><textarea class="form-control"></textarea></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="statuses-list" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Статусы клиентов у исполнителя</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="sa-list list-group list-group-flush">
                        <li class="list-group-item">
                            <span>Статус 1</span>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-info"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fas fa-ban"></i></button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <span>Статус 1</span>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-info"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fas fa-ban"></i></button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <span>Статус 1</span>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-info"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fas fa-ban"></i></button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <span>Статус 1</span>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-info"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fas fa-ban"></i></button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="status-create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Статусы клиентов</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Статус">
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