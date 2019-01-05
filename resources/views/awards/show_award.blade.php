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
                <div class="work-content" style="margin: 2px; padding: 5px;!important; text-align: center;">
                    <img src="{{asset('/images/awards/'.$id.'.jpg')}}" alt="image"
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
                        <div id="passError" class="col-xs-1 alert alert-warning" hidden>Длина пароля должна быть не
                            менее 4-х
                            символов!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputComment" class="control-label col-xs-2">* Комментарий:</label>
                        <div class="col-xs-5">
                            <textarea name="comment" id="inputComment" cols="55" rows="7" required
                                      style="width: 100%;" placeholder="Написать комментарий..."></textarea>
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
                            @if($auth == true)
                                <button class="btn btn-default response" id="{{$comment->id}}">Ответить</button>
                            @endif

                        </div>
                    </div>
                    @foreach($responses as $response)
                        @if($response->idComment == $comment->id)
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="alert alert-success"><b>Ответ администратора</b>
                                        <div style="padding-left: 20px; padding-top: 15px;">{{$response->message}}</div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                    <hr>
                @endforeach
                @if($auth == true)
                    <div class="col-xs-12 response-form" style="text-align: center;" hidden>
                        <h2>Ответ на комментарий #<span id="id-comment"></span></h2>
                        <textarea name="response" id="response-message" cols="100" rows="5"></textarea> <br> <br>
                        <button class="btn btn-primary" id="send-response" style="margin-bottom: 10px;">Отправить
                        </button>
                    </div>
                @endif

            </div>
        </div>
    </div>

@endsection

@section('scripts')
    @if($auth)
        <script>
            $(document).ready(function () {
                $('.response').on('click', function () {
                    var id = $(this).attr('id');
                    $('#id-comment').text(id);
                    $('.response-form').show();
                    $('html, body').animate({scrollTop: $(document).height()}, 'slow');
                });
                $('#send-response').on('click', function () {
                    var id = $('#id-comment').text();
                    var message = $('#response-message').val();
                    $.ajax({
                        type: 'POST',
                        data: "id="+id+"&message="+message,
                        url: '/comment/response',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        beforeSend: function() {
                            $('#send-response').attr('disabled', 'disabled');
                        },
                        success: function(data){
                            if (data.success === false) {
                                alert(data.error);
                                $('.response-form').hide();
                            } else {
                                location.reload();
                            }
                            $('#send-response').removeAttr('disabled');
                        },
                        error: function () {
                            $('#send-response').removeAttr('disabled');
                            alert("Error sending");
                        }
                    });
                });
            });
        </script>
    @endif
    <script src="{{asset('/js/fixed_navbar.js')}}"></script>
@endsection