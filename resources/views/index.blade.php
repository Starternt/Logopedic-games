@extends('layouts.app')

@section('meta-description')

    <meta name="description"
          content="Персональный сайт учителя-логопеда МБДОУ д/с № 12 с.Белая Глина Лактионовой Ирины."/>

@endsection

@section('content')
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter50186065 = new Ya.Metrika2({
                        id: 50186065,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true
                    });
                } catch (e) {
                }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () {
                    n.parentNode.insertBefore(s, n);
                };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/tag.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks2");
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/50147173" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="photo"></div>
            </div>
            <div class="col-md-8 head">
                <div class="header"></div>
            </div>
        </div>
    </div>
    <style>
        @keyframes fade {
            0% {
                opacity: 0;
            }
            11.11% {
                opacity: 1;
            }
            33.33% {
                opacity: 1;
            }
            44.44% {
                opacity: 0;
            }
            100% {
                opacity: 0;
            }
        }

        .fadein {
        }

        .fadein img {
            position: absolute;
            left: 0;
            right: 0;
            opacity: 0;
            animation-name: fade;
            animation-duration: 12s;
            animation-iteration-count: infinite;
        }

        .fadein img:nth-child(1) {
            animation-delay: 0s;
        }

        .fadein img:nth-child(2) {
            animation-delay: 3s;
        }

        .fadein img:nth-child(3) {
            animation-delay: 6s;
        }

        .fadein img:nth-child(4) {
            animation-delay: 9s;
        }

        .header-h1 {
            position: relative;
            margin-bottom: .5rem;
            text-align: center;
        }
        .header-h1 h1 {
            display: inline-block;
            background: #5e38cd;
            font-size: 2.5rem;
            text-transform: uppercase;
            padding: .5rem 1.5rem;
            border: .125rem solid #5e38cd;
            color: #fff;
            margin-top: 10px;
        }
        .header-h1 h1::after {
            content: "";
            position: absolute;
            background: #5e38cd;
            height: .125rem;
            left: 0;
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
            z-index: -999;
        }
        .header-h1-dark h1 {
            background: #5e38cd;
            color: #fff;
        }
    </style>
    <div class="container-fluid">
        <div class="row">

            @include('categories/_categories')
            @include('useful/_site_links')

            <div class="col-md-8">
                <!-- Page Content -->
                <div id="page-content-wrapper">
                    <h2 class="page-header" style="text-align: center; padding-top: 25px;">
                        <i>Персональный сайт учителя-логопеда МБДОУ д/с №12 <br>Лактионовой Ирины Владимировны. <br>
                            С.Белая Глина, Краснодарский край.</i>
                    </h2>
                    <h3 style="text-align:center; color: mediumblue;">
                        Мой девиз
                    </h3>
                    <p style="text-align:center; font-size: 20px;">
                        «Хочешь сделать хорошо, сделай это сам!»
                    </p>

                    <div class="images">
                        <div class="fadein">
                            <img src="{{asset("/images/index_page/1.jgp")}}">
                            <img src="{{asset("/images/index_page/2.jpg")}}">
                            <img src="{{asset("/images/index_page/3.jpg")}}">
                            <img src="{{asset("/images/index_page/4.jpg")}}">
                            <img src="{{asset("/images/index_page/5.jpg")}}">
                        </div>
                    </div>


                    <h3 style="text-align:center; color: mediumblue;">
                        Мой взгляд на мир
                    </h3>

                    <p style="text-align: center; font-size: 18px;">
                        «Никем не любимый ребенок перестает быть ребенком: он лишь маленький беззащитный взрослый»
                        (Жильбер Сесброн)
                    </p>

                    <div class="header-h1">
                        <h1>Моя визитная карточка</h1>
                    </div>

                    <div style="text-align: center;">
                        <iframe width="600" height="335" src="https://www.youtube.com/embed/mKSN9hexuW8" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <hr>
                    <p style="text-align: center;">Уважаемые посетители! В целях исполнения закона 152-РФ от 27.07.2014
                        "О защите персональных данных" все фото и видео материалы размещены мною с письменного согласия
                        родителей (законных представителей).</p>

                </div>

            </div>

        </div>

    </div>

@endsection

@section('scripts')
    <script>
        $(function () {
            $('#category0').css({'background-color': '#D5D5D5'});
        });
    </script>
@endsection