@extends('layouts.app_admin')

@section('content')
    <section>
        <div class="container-fluid" style="margin: 30px;">
            <div class="row">
                <br/>
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="/admin/cabinet">Админпанель</a></li>
                        <li class="active">Управление комментариями</li>
                    </ol>
                </div>

                <h4>Список комментариев</h4>
                <br/>
                <table class="table-bordered table-striped table">
                    <tr>
                        <th style="width: 150px;">ID комментария</th>
                        <th>Имя</th>
                        <th>Комментарий</th>
                        <th>email</th>
                        <th>ID категории</th>
                        <th>ID записи</th>
                        <th style="width: 150px; font-family: Geneva, Arial, Helvetica, sans-serif;">Дата добавления</th>
                        <th style="width: 100px;">Удалить</th>
                    </tr>

                    @foreach($data as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->message}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->category_id}}</td>
                            <td>{{$item->note_id}}</td>
                            <td>{{$item->created_at}}</td>

                            <td><a href="/admin/comments/destroy/{{$item->id}}" title="Удалить"><i
                                            class="fa fa-times"></i></a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection