@extends('layouts.app')

@section('content')
    <section id="groups">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Список моих групп в VK</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Добавьте в систему группу VK исполнителя для
                                отслеживания клиентов</h6>
                            <ul class="list-group-flush mt-3">
                                @foreach($groups as $group)
                                    <li class="list-group-item d-flex justify-content-between">
                                        <a href="{{ $group->link }}"><img src="{{ $group->poster }}"
                                                                          alt="{{ $group->slug }}"> {{ $group->name }}
                                            - {{ $group->id }}</a>
                                        @if($group->inSystem)
                                            <span>В системе!</span>
                                        @else
                                            <span><a href="{{ route('createPerformer')  }}" class="btn btn-primary action-btn" data-method="POST" data-id="{{ $group->id }}" data-_token="{{ csrf_token()  }}">Добавить в систему</a></span>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection