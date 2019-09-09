@extends('layouts.app')

@section('content')
    <section id="client">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="https://sun9-28.userapi.com/c639626/v639626950/916c/FWBAL99wdis.jpg?ava=1"
                                         alt="">
                                </div>
                                <div class="col-md-10">
                                    <h5 class="card-title">Имя Фамилия - <a href="/performer/1">Исполнитель 1</a></h5>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-user"></i> Профиль</a>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-comments"></i> Диалог</a>
                                    <select class="custom-select mt-3">
                                        <option selected>Статус</option>
                                        <option value="1">Фанат</option>
                                        <option value="3">Не писать</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Информация</h5>
                            <ul class="sa-list list-group list-group-flush mb-3">
                                <li class="list-group-item"><b>Lorem ipsum</b><span>lorem</span></li>
                                <li class="list-group-item"><b>Lorem ipsum</b><span>lorem</span></li>
                                <li class="list-group-item"><b>Lorem ipsum</b><span>lorem</span></li>
                                <li class="list-group-item"><b>Lorem ipsum</b><span>lorem</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Эвенты</h5>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Исполнитель</th>
                                    <th scope="col">Эвент</th>
                                    <th scope="col">Назначен на</th>
                                    <th scope="col">Статус</th>
                                    <th scope="col">Город</th>
                                    <th scope="col">Дата</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="/performer/1">Исполнитель 1</a></td>
                                    <td><a href="/event/1">Эвент 1</a></td>
                                    <td>
                                        <select class="custom-select">
                                            <option selected>Mngr 1</option>
                                            <option value="1">Mngr 2</option>
                                            <option value="2">Mngr 3</option>
                                            <option value="3">Mngr 4</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="custom-select">
                                            <option selected>Обработать</option>
                                            <option value="1">Ожидание ответа</option>
                                            <option value="2">Купил билет</option>
                                            <option value="3">Отказался</option>
                                        </select>
                                    </td>
                                    <td>Москва</td>
                                    <td>22.12.2019</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td><a href="/performer/1">Исполнитель 1</a></td>
                                    <td><a href="/event/1">Эвент 1</a></td>
                                    <td>
                                        <select class="custom-select">
                                            <option selected>Mngr 1</option>
                                            <option value="1">Mngr 2</option>
                                            <option value="2">Mngr 3</option>
                                            <option value="3">Mngr 4</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="custom-select">
                                            <option selected>Обработать</option>
                                            <option value="1">Ожидание ответа</option>
                                            <option value="2">Купил билет</option>
                                            <option value="3">Отказался</option>
                                        </select>
                                    </td>
                                    <td>Москва</td>
                                    <td>22.12.2019</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td><a href="/performer/1">Исполнитель 1</a></td>
                                    <td><a href="/event/1">Эвент 1</a></td>
                                    <td>
                                        <select class="custom-select">
                                            <option selected>Mngr 1</option>
                                            <option value="1">Mngr 2</option>
                                            <option value="2">Mngr 3</option>
                                            <option value="3">Mngr 4</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="custom-select">
                                            <option selected>Обработать</option>
                                            <option value="1">Ожидание ответа</option>
                                            <option value="2">Купил билет</option>
                                            <option value="3">Отказался</option>
                                        </select>
                                    </td>
                                    <td>Москва</td>
                                    <td>22.12.2019</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td><a href="/performer/1">Исполнитель 1</a></td>
                                    <td><a href="/event/1">Эвент 1</a></td>
                                    <td>
                                        <select class="custom-select">
                                            <option selected>Mngr 1</option>
                                            <option value="1">Mngr 2</option>
                                            <option value="2">Mngr 3</option>
                                            <option value="3">Mngr 4</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="custom-select">
                                            <option selected>Обработать</option>
                                            <option value="1">Ожидание ответа</option>
                                            <option value="2">Купил билет</option>
                                            <option value="3">Отказался</option>
                                        </select>
                                    </td>
                                    <td>Москва</td>
                                    <td>22.12.2019</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection