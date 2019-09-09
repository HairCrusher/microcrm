@extends('layouts.app')

@section('content')
    <section id="events">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Эвенты</h5>
                    </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Исполнитель</th>
                            <th scope="col">Эвент</th>
                            <th scope="col">Роль</th>
                            <th scope="col">Дата</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><a href="#">Исполнитель 1</a></td>
                            <td><a href="#">Эвент 1</a></td>
                            <td>Администратор</td>
                            <td>22.09.2019</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><a href="#">Исполнитель 1</a></td>
                            <td><a href="#">Эвент 2</a></td>
                            <td>Администратор</td>
                            <td>22.09.2019</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td><a href="#">Исполнитель 2</a></td>
                            <td><a href="#">Эвент 1</a></td>
                            <td>Модератор</td>
                            <td>22.09.2019</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td><a href="#">Исполнитель 2</a></td>
                            <td><a href="#">Эвент 2</a></td>
                            <td>Менеджер</td>
                            <td>22.09.2019</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection