@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col">
    <table class="table">
        <thead>
            @foreach ($titles as $title)
                <tr>
                    <th>{{ $title }}</th>
                </tr>
            @endforeach
        </thead>
        <tbody>
        @foreach ($data as $item)
            <tr>
                @foreach ($item as $field)
                    <th>{{ $field }}</th>
                @endforeach
                <th>
                    <div class="d-flex">
                        <form class="m-2" action="{{$type}}/delete" method="post">
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <button type="submit" class="btn btn-primary">Удалить</button>
                        </form>
                    </div>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</div>
<div class="row">
    <div class="col">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Добавить запись
        </button>
    </div>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Добавление данных</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
    </div>
    <div class="modal-body">
        <form action="{{$type}}/change" method="post">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="">
        <div class="container-fluid">
            @foreach ($titles as $title)
                <div class="row mb-3">
                    <input name="{{$title}}" class="form-control" type="text" placeholder="{{$title}}">
                </div>
            @endforeach
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            <button type="submit" class="btn btn-primary">Добавить запись</button>
        </div> 
        </form>
    </div>
</div>
</div>
@endsection