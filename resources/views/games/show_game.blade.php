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
                    <div class="description-work">
                        <h4 style="text-align: center;">
                            {{$item[0]['name']}}
                        </h4>
                    </div>
                    <hr>
                    <img src="{{asset('/images/games/'.$id.'.jpg')}}" alt="image"
                          class="image-games">
                    <hr>
                    <div class="description-work">
                        <h5 style="text-align: center;">
                            {{$item[0]['description']}}
                        </h5>
                    </div>
                    <hr>
                    <div class="row" style="margin-top: -10px;">
                        <div class="col-xs-4" style="margin-left: 10px;">
                            <a href="">
                                <p>
                                    Как отблагодарить автора?
                                </p>
                            </a>
                        </div>
                        <div class="col-xs-offset-10">
                            <a href="/games_documents/{{$id}}.zip">
                                <div class="btn btn-primary">
                                    Скачать
                                </div>
                            </a>
                        </div>
                    </div>


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
                    {{csrf_field()}}
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
                            <p>
                                {{$comment->message}}
                            </p>
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