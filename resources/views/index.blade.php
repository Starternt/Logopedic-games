@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-xs-offset-3 head">
                <div class="header"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">

            @include('categories/_categories')

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