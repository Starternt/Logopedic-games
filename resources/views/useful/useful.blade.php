@extends('layouts.app')

@section('content')

    <style>

        .link {
            padding-bottom: 0;
            padding-top: 7px;
        }
        .link-icon {
            width: 50px;
        }
    </style>
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
                        <div class="work-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="description-work" style="text-align: center;">
                                        <img src="{{asset('images/useful/useful_sites.jpg')}}"
                                             alt="Интересные сайты для педагогов и родителей">
                                    </div>
                                </div>
                            </div>

                            <br>
                            <br>

                            <div class="row">
                                <div class="col-xs-12" style="min-height: 60px;">
                                    <div class="col-xs-1 link-icon">
                                        <i class="fa fa-link fa-2x" aria-hidden="true" style="color: #49839d"></i>
                                    </div>
                                    <a href="http://www.logoped.ru"
                                       style="outline: 0;" target="_blank"><h3
                                                class="file-header link">Сайт для учителей-логопедов.</h3>
                                    </a>
                                    <hr>
                                </div>

                                <div class="col-xs-12" style="min-height: 60px;">
                                    <div class="col-xs-1 link-icon">
                                        <i class="fa fa-link fa-2x" aria-hidden="true" style="color: #49839d"></i>
                                    </div>
                                    <a href="http://logoportal.ru"
                                       style="outline: 0;" target="_blank"><h3
                                                class="file-header link">Логопедический портал. Сайт для логопедов и родителей.</h3>
                                    </a>
                                    <hr>
                                </div>

                                <div class="col-xs-12" style="min-height: 60px;">
                                    <div class="col-xs-1 link-icon">
                                        <i class="fa fa-link fa-2x" aria-hidden="true" style="color: #49839d"></i>
                                    </div>
                                    <a href="http://correct.pupils.ru"
                                       style="outline: 0;" target="_blank"><h3
                                                class="file-header link">В помощь родителям и педагогам.</h3>
                                    </a>
                                    <hr>
                                </div>

                                <div class="col-xs-12" style="min-height: 60px;">
                                    <div class="col-xs-1 link-icon">
                                        <i class="fa fa-link fa-2x" aria-hidden="true" style="color: #49839d"></i>
                                    </div>
                                    <a href="https://www.vk.com/boltuska"
                                       style="outline: 0;" target="_blank"><h3
                                                class="file-header link">Сайт для родителей и педагогов ДОУ.</h3>
                                    </a>
                                    <hr>
                                </div>

                                <div class="col-xs-12" style="min-height: 60px;">
                                    <div class="col-xs-1 link-icon">
                                        <i class="fa fa-link fa-2x" aria-hidden="true" style="color: #49839d"></i>
                                    </div>
                                    <a href="http://открытыйурок.рф"
                                       style="outline: 0;" target="_blank"><h3
                                                class="file-header link">Сайт для воспитателей и педагогов.</h3>
                                    </a>
                                    <hr>
                                </div>

                                <div class="col-xs-12" style="min-height: 60px;">
                                    <div class="col-xs-1 link-icon">
                                        <i class="fa fa-link fa-2x" aria-hidden="true" style="color: #49839d"></i>
                                    </div>
                                    <a href="http://www.maam.ru"
                                       style="outline: 0;" target="_blank"><h3
                                                class="file-header link">Воспитателям и специалистам ДОУ.</h3>
                                    </a>
                                    <hr>
                                </div>

                                <div class="col-xs-12" style="min-height: 60px;">
                                    <div class="col-xs-1 link-icon">
                                        <i class="fa fa-link fa-2x" aria-hidden="true" style="color: #49839d"></i>
                                    </div>
                                    <a href="http://www.ya-roditel.ru"
                                       style="outline: 0;" target="_blank"><h3
                                                class="file-header link">Сайт в помощь родителям.</h3>
                                    </a>
                                    <hr>
                                </div>

                                <div class="col-xs-12" style="min-height: 60px;">
                                    <div class="col-xs-1 link-icon">
                                        <i class="fa fa-link fa-2x" aria-hidden="true" style="color: #49839d"></i>
                                    </div>
                                    <a href="https://solncesvet.ru"
                                       style="outline: 0;" target="_blank"><h3
                                                class="file-header link">Для воспитателей, логопедов и специалистов ДОУ.</h3>
                                    </a>
                                    <hr>
                                </div>

                                <div class="col-xs-12" style="min-height: 60px;">
                                    <div class="col-xs-1 link-icon">
                                        <i class="fa fa-link fa-2x" aria-hidden="true" style="color: #49839d"></i>
                                    </div>
                                    <a href="https://nsportal.ru/"
                                       style="outline: 0;" target="_blank"><h3
                                                class="file-header link">Социальная сеть работников образования «Наша сеть»</h3>
                                    </a>
                                    <hr>
                                </div>

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
            $('#category8').css({'background-color': '#D5D5D5'});
        });
    </script>
@endsection