@extends('layouts.app_admin')

@section('content')
    <section>
        <div class="container">
            <div class="row">

                <br/>

                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="/admin/cabinet">Админпанель</a></li>
                        <li><a href="/admin/photos">Управление фотогалереей</a></li>
                        <li class="active">Добавить фотографию</li>
                    </ol>
                </div>

                <br/>

                <div class="col-lg-4">
                    <div class="login-form">
                        <form action="" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <!-- enctype необходим для отправки изображения -->
                            <p>Описание:</p>
                            <textarea name="description" cols="140" rows="20"></textarea>

                            <br><br>

                            <p>Изображение </p>
                            <img src="" width="200" alt="">
                            <input type="file" name="image" placeholder="Изображение" value="">
                            <br><br><br>
                            <input type="submit" class="btn btn-default" name="submit" value="Сохранить">
                            <br><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection