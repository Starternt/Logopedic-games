@extends('layouts.app_admin')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <br/>
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="/admin/cabinet">Админпанель</a></li>
                        <li><a href="/admin/education">Управление образовательной деятельностью</a></li>
                        <li class="active">Редактировать файл</li>
                    </ol>
                </div>
                <br/>
                <div class="col-lg-4">
                    <div class="login-form">
                        <form action="" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <p>Заголовок:</p>
                            <textarea name="name" cols="140"
                                      rows="9">{{$item->name}}</textarea>

                            <br><br>
                            <p>Наименование документа:</p>
                            <label for="">{{$item->id.'.docx'}}</label>
                            <input type="file" name="document" placeholder="Документ" value="">

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