@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row work-categories">
            @include('categories._categories')
        </div>
    </div>

    <div class="container-fluid">
        <div class="row work-container">
            <div class="col-xs-3"></div>
            <div class="col-xs-8 work-container-item" style="padding: 0;">
                <div class="work-content" style="margin: 2px; padding: 5px;!important;">
                    <img src="{{asset('/images/work/'.$id.'.jpg')}}" alt="image"
                         style="width: 885px;">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="padding-top: 10px;">
        <div class="row">
            <div class="col-xs-3"></div>
            <div class="col-xs-8 work-container-item">
                <div class="comments" style="font-size: 30px; text-align: center;">
                    Комментарии({{$quantityComments}})
                </div>

                <hr>

                <form class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="inputName" class="control-label col-xs-2">* Введите имя:</label>
                        <div class="col-xs-5">
                            <input type="text" name="name" class="form-control" id="inputName" placeholder="Имя:"
                                   value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="control-label col-xs-2">Ваш email:</label>
                        <div class="col-xs-5">
                            <input type="email" name="password" class="form-control" id="inputEmail"
                                   placeholder="Email:"
                                   value="">

                        </div>
                        <div id="passError" class="col-xs-1 alert alert-warning" hidden>Длина пароля должна быть не
                            менее 4-х
                            символов!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputComment" class="control-label col-xs-2">* Комментарий:</label>
                        <div class="col-xs-5">
                            <input type="text" name="comment" class="form-control" id="inputComment"
                                   placeholder="Комментарий:"
                                   value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-1">
                            <button type="submit" name="submit" class="btn btn-primary">Отправить</button>
                        </div>
                    </div>
                </form>

                <hr>
                @foreach($comments as $comment)
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="comments-user">#{{$comment->id}} {{$comment->name}}</div>
                        </div>
                        <div class="col-xs-offset-6 col-xs-3">
                            <div class="comments-date">{{$comment->created_at}}</div>
                        </div>
                        <br><br>
                        <div class="col-xs-12 comments-message">
                            {{$comment->message}}
                        </div>
                    </div>

                    <hr>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{asset('/js/fixed_navbar.js')}}"></script>
@endsection