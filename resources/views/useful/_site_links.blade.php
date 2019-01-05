<style>
    .site_links {
        position: absolute;
        float: left;
        margin-top: 540px;
    }

    #block-wrapper {
        background: #FFFFFF;
        height: 100%;
        width: 300px;
        z-index: 1000;
        border-color: lightgray;
    }

    #block-wrapper > ul > li > a {
        padding: 0;
    }
</style>

<div class="col-xs-3 site_links">
    <nav class="navbar navbar-inverse" id="block-wrapper" role="navigation">
        <ul class="nav">
            {{--<a href="/" id="category0"><i class="fa fa-fw fa-home"></i> Главная</a>--}}

            <li>
                <a href="http://specdetsad-bg.ucoz.ru/" target="_blank">
                    <img src="{{asset('images/site_links/mdoy12.jpg')}}" alt="МБДОУ д/с № 12 " width="100%">
                </a>
            </li>

            <li>
                <a href="http://iro23.ru/" target="_blank">
                    <img src="{{asset('images/site_links/irokr.jpg')}}"
                         alt="Институт развития образования Краснодарского края" width="100%">
                </a>
            </li>

            <li>
                <a href="https://minobr.krasnodar.ru/" target="_blank">
                    <img src="{{asset('images/site_links/minobr_kr.jpg')}}"
                         alt="Министерство образования Краснодарского края" width="100%">
                </a>
            </li>

            <li>
                <a href="https://xn--80abucjiibhv9a.xn--p1ai/" target="_blank">
                    <img src="{{asset('images/site_links/minobr_rf.jpg')}}"
                         alt="Министерство образования Российской Федерации" width="100%">
                </a>
            </li>
        </ul>
    </nav>
</div>