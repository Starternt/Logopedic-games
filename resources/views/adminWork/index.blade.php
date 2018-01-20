@extends('layouts.app_admin')

@section('content')
    <section>
        <div class="container-fluid" style="margin: 30px;">
            <div class="row">
                <br/>
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="/admin/cabinet">Админпанель</a></li>
                        <li class="active">Управление фотогалереей</li>
                    </ol>
                </div>
                <a href="/admin/photos/add" class="btn btn-success back"><i class="fa fa-plus"></i> Добавить
                    элемент</a>
                <h4>Список элементов</h4>
                <br/>
                <table class="table-bordered table-striped table">
                    <tr>
                        <th style="width: 150px;">ID элемента</th>
                        <th>Описание</th>
                        <th style="width: 150px; font-family: Geneva, Arial, Helvetica, sans-serif;">Дата добавления</th>
                        <th style="width: 100px;">edit</th>
                        <th style="width: 100px;">del</th>
                    </tr>

                    @foreach($data as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->created_at}}</td>
                            <td><a href="/admin/photos/edit/{{$item->id}}" title="Редактировать"><i
                                            class="fa fa-pencil-square-o"></i></a></td>
                            <td><a href="/admin/photos/destroy/{{$item->id}}" title="Удалить"><i
                                            class="fa fa-times"></i></a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection