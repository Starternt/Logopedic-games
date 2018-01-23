@extends('layouts.app_admin')

@section('content')
    <section>
        <div class="container">
            <div class="row">

                <br/>

                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="/admin/cabinet">Админпанель</a></li>
                        <li><a href="/admin/information">Управление информацией для родителей</a></li>
                        <li class="active">Добавить файл</li>
                    </ol>
                </div>

                <br/>

                <div class="col-lg-4">
                    <div class="login-form">
                        <form action="" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <!-- enctype необходим для отправки изображения -->
                            <p>Наименование:</p>
                            <textarea name="name" cols="140" rows="9" required></textarea>

                            <br><br>

                            <p>Файл </p>
                            <input type="file" name="document" placeholder="Документ в формате docx" value="" required>
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