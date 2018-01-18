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
                    <div class="work-content">
                        <a href=""><img src="{{asset('/images/myWork/1.jpg')}}" alt="image" width="400px"
                             style="border-radius: 2px; float:left; margin-right: 15px;">
                        </a>
                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi doloremque error facilis
                                hic, ipsa itaque magni, nostrum, optio placeat quas quisquam reprehenderit rerum sint suscipit?
                                Consectetur dolorem nobis sequi.Aut blanditiis commodi consequatur doloremque eligendi
                                enim eos, excepturi illum iste itaque iure libero maiores molestias, nobis odio possimus provident
                                quaerat qui repudiandae saepe sed tenetur, ullam. Commodi cum, sapiente!
                        </div>
                        <a href="/work/1">
                            <div class="btn btn-default" style="position:absolute; bottom: 28px; right: 30px;">Открыть
                                страницу с фотографией
                            </div>
                        </a>
                        <a href="">
                            <div style="position: absolute; bottom: 8px;">Добавлено: 21-04-2018</div>
                        </a>
                        <a href="">
                            <div style="position: absolute; bottom: 8px; left: 300px;">Комментарии(8)</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="row work-container">
                <div class="col-xs-3"></div>
                <div class="col-xs-8 work-container-item">
                    <div class="work-content">
                        <a href=""><img src="{{asset('/images/myWork/1.jpg')}}" alt="image" width="400px"
                             style="border-radius: 2px; float:left; margin-right: 15px;">
                        </a>
                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi doloremque error facilis
                                hic, ipsa itaque magni, nostrum, optio placeat quas quisquam reprehenderit rerum sint suscipit?
                                Consectetur dolorem nobis sequi.Aut blanditiis commodi consequatur doloremque eligendi
                                enim eos, excepturi illum iste itaque iure libero maiores molestias, nobis odio possimus provident
                                quaerat qui repudiandae saepe sed tenetur, ullam. Commodi cum, sapiente!
                        </div>
                        <a href="/work/1">
                            <div class="btn btn-default" style="position:absolute; bottom: 28px; right: 30px;">Открыть
                                страницу с фотографией
                            </div>
                        </a>
                        <a href="">
                            <div style="position: absolute; bottom: 8px;">Добавлено: 21-04-2018</div>
                        </a>
                        <a href="">
                            <div style="position: absolute; bottom: 8px; left: 300px;">Комментарии(8)</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="row work-container">
                <div class="col-xs-3"></div>
                <div class="col-xs-8 work-container-item">
                    <div class="work-content">
                        <a href=""><img src="{{asset('/images/myWork/1.jpg')}}" alt="image" width="400px"
                             style="border-radius: 2px; float:left; margin-right: 15px;">
                        </a>
                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi doloremque error facilis
                                hic, ipsa itaque magni, nostrum, optio placeat quas quisquam reprehenderit rerum sint suscipit?
                                Consectetur dolorem nobis sequi.Aut blanditiis commodi consequatur doloremque eligendi
                                enim eos, excepturi illum iste itaque iure libero maiores molestias, nobis odio possimus provident
                                quaerat qui repudiandae saepe sed tenetur, ullam. Commodi cum, sapiente!
                        </div>
                        <a href="/work/1">
                            <div class="btn btn-default" style="position:absolute; bottom: 28px; right: 30px;">Открыть
                                страницу с фотографией
                            </div>
                        </a>
                        <a href="">
                            <div style="position: absolute; bottom: 8px;">Добавлено: 21-04-2018</div>
                        </a>
                        <a href="">
                            <div style="position: absolute; bottom: 8px; left: 300px;">Комментарии(8)</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')
    <script src="{{asset('/js/fixed_navbar.js')}}"></script>
@endsection