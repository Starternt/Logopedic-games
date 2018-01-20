@extends('layouts.app_admin')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <br/>
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="/admin/cabinet">Админпанель</a></li>
                        <li><a href="/admin/work">Управление моими увлечениями</a></li>
                        <li class="active">Редактировать запись</li>
                    </ol>
                </div>
                <br/>
                <div class="col-lg-4">
                    <div class="login-form">
                        <form action="" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <p>Описание</p>
                            <textarea name="description" cols="140"
                                      rows="20">{{$item->description}}</textarea>

                            <br><br>
                            <p>Изображение</p>
                            <img src="{{asset("/images/work/$item->id.jpg")}}" width="200" alt="">
                            <input type="file" name="image" placeholder="Изображение" value="">

                            <br><br><br>
                            <input type="submit" class="btn btn-default" name="submit" value="Сохранить">
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection