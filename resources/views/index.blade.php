@extends('layouts.app')

@section('content')

    {{--<link rel="stylesheet" href="{{asset('/css/main.css')}}">--}}
    {{--<link rel="stylesheet" href="{{asset('/css/test.less')}}">--}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-3 head">
                <div class="header"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row left">
            <div class="col-md-3 ">

                <!-- Sidebar -->
                <nav class="navbar navbar-inverse" id="sidebar-wrapper" role="navigation">
                    <ul class="nav sidebar-nav">
                        <li class="sidebar-brand">
                            <a href="#">
                                Категории
                            </a>
                        </li>
                        <li>
                            <a href="/"><i class="fa fa-fw fa-home"></i> Главная</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-folder"></i> Образовательная деятельность</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-file-o"></i> Информация для родителей</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-cog"></i> Моё творчество</a>
                        </li>
                        {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i>--}}
                                {{--Dropdown--}}
                                {{--<span class="caret"></span></a>--}}
                            {{--<ul class="dropdown-menu" role="menu">--}}
                                {{--<li class="dropdown-header">Dropdown heading</li>--}}
                                {{--<li><a href="#">Action</a></li>--}}
                                {{--<li><a href="#">Another action</a></li>--}}
                                {{--<li><a href="#">Something else here</a></li>--}}
                                {{--<li><a href="#">Separated link</a></li>--}}
                                {{--<li><a href="#">One more separated link</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        <li>
                            <a href="#"><i class="fa fa-fw fa-bank"></i> Игры</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-dropbox"></i> Фотогалерея</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-twitter"></i> Моя творческая деятельность</a>
                        </li>
                    </ul>
                </nav>
                <!-- /#sidebar-wrapper -->
            </div>


            <div class="col-md-8">
                <!-- Page Content -->
                <div id="page-content-wrapper">
                    <h1 class="page-header">Awesome Bootstrap 3 Sidebar Navigation</h1>
                    <p class="lead">Originally authored by <a href="https://bootsnipp.com/maridlcrmn">maridlcrmn</a>
                        on Bootsnipp and then converted to Less and customized further by <a
                                href="http://twiter.com/j_holtslander">j_holtslander</a> who is building a <a
                                href="https://codepen.io/collection/nJGkWV" target="_new">collection</a> of great
                        Bootstrap 3 navbars.</p>
                    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Sed posuere consectetur est
                        at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                        ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis
                        euismod. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra
                        augue.</p>
                    <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum
                        dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus
                        posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum.</p>
                    <p>Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac,
                        vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                        ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Duis mollis, est
                        non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean
                        lacinia bibendum nulla sed consectetur.</p>
                    <h3>A heading in the mix.</h3>
                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante
                        venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod.
                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis
                        consectetur purus sit amet fermentum. Curabitur blandit tempus porttitor. Praesent commodo
                        cursus magna, vel scelerisque nisl consectetur et.</p>
                    <blockquote>Maecenas sed diam eget risus varius blandit sit amet non magna. Sed posuere
                        consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem
                        malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae
                        elit libero, a pharetra augue.
                    </blockquote>
                    <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum
                        dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus
                        posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum.</p>
                    <p>Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac,
                        vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                        ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Duis mollis, est
                        non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean
                        lacinia bibendum nulla sed consectetur.</p>
                    <h3>Another heading for typography's sake.</h3>
                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante
                        venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod.
                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis
                        consectetur purus sit amet fermentum. Curabitur blandit tempus porttitor. Praesent commodo
                        cursus magna, vel scelerisque nisl consectetur et.</p>
                    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Sed posuere consectetur est
                        at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                        ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis
                        euismod. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra
                        augue.</p>
                    <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum
                        dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus
                        posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum.</p>
                    <p>Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac,
                        vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                        ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Duis mollis, est
                        non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean
                        lacinia bibendum nulla sed consectetur.</p>
                </div>

                <!-- /#page-content-wrapper -->
            </div>
        </div>

    </div>












@endsection

@section('script')
    <script src="{{asset('/js/index.js')}}"></script>
@endsection