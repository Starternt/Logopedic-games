@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            @include('categories._categories')
            <div class="col-xs-8 education-content">
                <h2 style="text-align: center">
                    Информация для родителей
                </h2>
                <hr>
                @php
                    function human_filesize($bytes, $decimals = 2) {
                    $sz = 'BKMGTP';
                    $factor = floor((strlen($bytes) - 1) / 3);
                    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor] . 'b';
                    }
                @endphp
                @foreach($data as $dataItem)
                    <div class="row">
                        <div class="col-xs-1" style="margin-left: 20px;">
                            <i class="fa fa-file-text fa-4x" aria-hidden="true" style="color: mediumblue"></i>
                        </div>
                        <div class="col-xs-8" style="min-height: 60px;">
                            <a href="/info_documents/{{$dataItem->id}}.{{$dataItem->extension}}" style="outline: 0;" download><h3
                                        class="file-header">{{$dataItem->name}}.{{$dataItem->extension}}</h3></a>
                        </div>

                        <div class="col-xs-8">
                            <span class="size-and-date">
                                @php
                                    echo human_filesize(filesize(public_path().'/info_documents/'.$dataItem->id.'.'.$dataItem->extension));
                                @endphp
                                , {{$dataItem->created_at}}</span>
                        </div>
                        <div class="col-xs-2 down-button-container col-xs-offset-2">
                            <a href="/info_documents/{{$dataItem->id}}.{{$dataItem->extension}}" download>
                                <button type="button" class="btn btn-primary down-button">Скачать</button>
                            </a>
                        </div>
                    </div>
                    <hr>
                @endforeach


            </div>
        </div>
    </div>

    <br>

    {{-- COMMENTS --}}

    <div class="container-fluid" style="padding-top: 10px;">
        <div class="row">
            <div class="col-xs-3"></div>
            <div class="col-xs-8 work-container-item">
                <div class="comments" style="font-size: 30px; text-align: center;">
                    Комментарии({{$qComments}})
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
                                   placeholder="Email:" value="">
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
    <script>
        $(function () {
            $('#category5').css({'background-color': '#D5D5D5'});
        });
    </script>
@endsection