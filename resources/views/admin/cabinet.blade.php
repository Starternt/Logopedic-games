@extends('layouts.app_admin')

@section('content')
    <section>
        <div class="container">
            <div class="row">

                <br/>

                <h4>Добрый день, администратор!</h4>

                <br/>

                <p>Вам доступны такие возможности:</p>

                <br/>

                <ul class="categories-list">
                    <li><a href="/admin/work">Управление моими увлечениями</a></li>
                    <li><a href="/admin/games">Управление играми</a></li>
                    <li><a href="/admin/photos">Управление фотогалереей</a></li>
                    <li><a href="/admin/education">Управление образовательной деятельностью</a></li>
                    <li><a href="/admin/information">Управление информацией для родителей</a></li>
					<li><a href="/admin/awards">Управление достижениями</a></li>
                    <li><a href="/admin/comments">Управление комментариями</a></li>
                </ul>
                <br><br>
                <div class="cabinet-options">
                    <a href="/logout">
                        <button class="btn btn-default">Выйти из аккаунта</button>
                    </a>
                    {{--<a href="/change">--}}
                        {{--<button class="btn btn-default">Изменить пароль</button>--}}
                    {{--</a>--}}
                </div>

            </div>
        </div>
    </section>
@endsection