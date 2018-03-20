@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row work-categories">
            @include('categories._categories')
        </div>
    </div>
        <div class="container-fluid">
            <div class="row">
                <div class="row work-container">
                    <div class="col-xs-3"></div>
                    <div class="col-xs-8 work-container-item">
                        <div class="work-content"  style="text-align: center;">
                            <div class="description-work">
                                <br>
                                <p>Материал на сайте предоставлен учителем-логопедом Лактионовой Ириной Владимировной.</p><br>
                                <p>Если у вас возникли вопросы, вы можете задать их по адресу электронной почты: <b>malina0010@mail.ru</b></p>
                                <p>Если вы хотите отблагодарить автора, выразить благодарность можно следующими способами:</p>
                                <p>- Можете оставить комментарий под понравившейся вам работой;</p>
                                <p>- Или вы можете отблагодарить автора материально одним из следующих способов:</p>
                                <p><b>Кошелек WebMoney: R106780025283</b></p>
                                <p><b>На телефон: 8(960) 48-25-361</b></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('scripts')
    <script src="{{asset('/js/fixed_navbar.js')}}"></script>
    <script>
        $(function () {
            $('#category6').css({'background-color': '#D5D5D5'});
        });
    </script>
@endsection