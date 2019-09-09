@extends('layouts.app')

@section('content')
    <section id="lk">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Список моих доменов</h3>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href="/domain">Домен металл</a></li>
                                    <li class="list-group-item"><a href="/domain">Lorem ipsum.</a></li>
                                    <li class="list-group-item"><a href="/domain">Lorem ipsum.</a></li>
                                    <li class="list-group-item"><a href="/domain">Lorem ipsum.</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h3>Список гостевых доменов</h3>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href="/domain">Lorem ipsum.</a></li>
                                    <li class="list-group-item"><a href="/domain">Lorem ipsum.</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection