@extends('layouts.app')

@section('meta-description')

    <meta name="description" content="Развивающие игры и игрушки из фетра и пряжи своими руками." />

@endsection

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
                <div class="col-xs-8 work-container-item work-container-item-fix">
                    <div class="work-content">
                        <a href="/work/{{$item->id}}"><img src="{{asset('/images/work/'.$item->id.'.jpg')}}" alt="image" width="400px"
                             style="border-radius: 2px; float:left; margin-right: 15px;">
                        </a>
                        <div class="description-work">
                            <p>
                                {{$item->description}}
                            </p>
                        </div>
                        <a href="/work/{{$item->id}}">
                            <div class="btn btn-default" style="position:absolute; bottom: 28px; right: 30px;">Открыть
                                страницу с фотографией
                            </div>
                        </a>
                        <a href="#">
                            <div style="position: absolute; bottom: 8px;">Добавлено: {{$item->created_at}}</div>
                        </a>
                        <a href="/work/{{$item->id}}">
                            <div style="position: absolute; bottom: 8px; left: 300px;">
                                Комментарии(
                                @php
                                if(is_array($amountComments)){
                                try{
                                     if($amountComments[$item['id']]){
                                     echo $amountComments[$item['id']];
                                    }
                                    }
                                catch (Exception $e){
                                    echo '0';
                                }
                                }
                                @endphp
                                )
                            </div>
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
            $('#category1').css({'background-color': '#D5D5D5'});
        });
    </script>
@endsection