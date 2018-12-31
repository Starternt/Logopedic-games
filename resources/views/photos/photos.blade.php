@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row work-categories">
            @include('categories._categories')
        </div>
    </div>
    @foreach($data as $item)
        <div class="container-fluid">
            <div class="row">
                <div class="row work-container">
                    <div class="col-xs-3"></div>
                    <div class="col-xs-8 work-container-item">
                        <div class="work-content"  style="text-align: center;">
                            <div class="description-work">
                                <h4 style="text-align: center;">
                                    {{$item->description}}
                                </h4>
                            </div>
                            <a href="/photos/{{$item->id}}" style="outline: 0;">
                                <img class="image-gallery" src="{{asset('/images/photos/'.$item->id.'.jpg')}}"
                                     alt="image" width="">
                            </a>
                            <a href="/photos/{{$item->id}}">
                                <div class="btn btn-default open-button">
                                    Открыть
                                    страницу с фотографией
                                </div>
                            </a>
                            <a href="#">
                                <div style="position: absolute; bottom: 8px;">Добавлено: {{$item->created_at}}</div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-2" style="text-align: center;">
                {{$data->links()}}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('/js/fixed_navbar.js')}}"></script>
    <script>
        $(function () {
            $('#category3').css({'background-color': '#D5D5D5'});
        });
    </script>
@endsection