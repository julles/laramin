<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="author" content="WEBARQ ~ Muhamad Reza Abdul Rohim"/>
<meta name="keywords" content="WCMS Version 2.0.10"/>
<meta name="_token" id = 'csrf-token' content="{{ csrf_token() }}"/>
<meta name="description" content="WCMS Version 1.0.0 Human Develop"/>
<link type="text/css" href="{{ \Helper::assetUrl() }}backend/css/reset.css" rel="stylesheet" media="screen,projection"/>
<link type="text/css" href="{{ \Helper::assetUrl() }}backend/css/main.css" rel="stylesheet" media="screen,projection"/>
<link type="text/css" href="{{ \Helper::assetUrl() }}backend/css/jquery.alert.css" rel="stylesheet" media="screen,projection"/>
<link type="text/css" href="{{ \Helper::assetUrl() }}backend/css/function.css" rel="stylesheet" media="screen,projection"/>
<link type="text/css" href="{{ \Helper::assetUrl() }}backend/css/tabular-css.css" rel="stylesheet" media="screen,projection"/>
<link type="text/css" href="{{ \Helper::assetUrl() }}backend/css/app.css" rel="stylesheet" media="screen,projection"/>
<link type="text/css" href="{{ \Helper::assetUrl() }}backend/tab/style.css" rel="stylesheet" media="screen,projection"/>
<link type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" rel="stylesheet" media="screen,projection"/>
<link rel="stylesheet" type="text/css" href="{{ \Helper::assetUrl() }}backend/sweetalert/dist/sweetalert.css">
<link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="{{ \Helper::assetUrl() }}backend/elfinder/css/elfinder.min.css">
<link rel="stylesheet" type="text/css" href="{{ \Helper::assetUrl() }}backend/elfinder/css/theme.css">
<link rel="stylesheet" href="{{ \Helper::assetUrl() }}backend/jstree/dist/themes/default/style.min.css" />

<script type="text/javascript" src="{{ \Helper::assetUrl() }}backend/js/1.8.0.js"></script>
<script type="text/javascript" src="{{ \Helper::assetUrl() }}backend/js/jquery.alert.js"></script>
<script type="text/javascript" src="{{ \Helper::assetUrl() }}backend/js/jquery.cookie.js"></script>
<script type="text/javascript" src="{{ \Helper::assetUrl() }}backend/js/function.js"></script>
<script type="text/javascript" src="{{ \Helper::assetUrl() }}backend/js/cms-scripting.js"></script>

<script type="text/javascript" src="{{ \Helper::assetUrl() }}backend/js/table.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{ \Helper::assetUrl() }}backend/tab/style.js"></script>
<script src="{{ \Helper::assetUrl() }}backend/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ \Helper::assetUrl() }}backend/jstree/dist/jstree.min.js"></script>
<script src="{{ \Helper::assetUrl() }}backend/ckeditor/ckeditor.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ \Helper::assetUrl() }}backend/js/app.js"></script>
<!-- elFinder CSS (REQUIRED) -->

<!-- elFinder JS (REQUIRED) -->
<script src="{{ \Helper::assetUrl() }}backend/elfinder/js/elfinder.min.js"></script>

<!-- elFinder translation (OPTIONAL) -->
<script src="{{ \Helper::assetUrl() }}backend/elfinder/js/i18n/elfinder.ru.js"></script>

<!-- elFinder initialization (REQUIRED) -->
<script src="http://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    
    $(function () {
    $('#chart').highcharts({
        title: {
            text: 'Dashboard Activity',
            x: -20 //center
        },
        subtitle: {
            //text: 'Source: WorldClimate.com',
            //x: -20
        },
        xAxis: {
            categories: {!! \Helper::showDays() !!}
        },
        yAxis: {
            title: {
           //     text: 'Temperature (°C)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            //valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Activities',
            data: {!! \Helper::countActivities()  !!}
        }]
    });
});

</script>
@include('backend.elfinder')


<script>

    $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': {!! json_encode(csrf_token()) !!},
            }
        });
    });

    var url = function(suffix) {
        suffix = (typeof suffix !== "undefined") ? suffix : "";
        return "{{ url() }}/" + suffix;
    };

    var thisUrl = function() {
        suffix = (typeof suffix !== "undefined") ? suffix : "";
        return "{{ \Helper::thisUrl() }}/";
    };

    function urlAction(suffix) {
        suffix = (typeof suffix !== "undefined") ? suffix : "";
        return "{{ \Helper::urlAction() }}/" + suffix;
    };
    
    var asset = function(suffix) {
        return "{{ asset(null) }}" + suffix;
    };



</script> 

<title>{{ \Helper::backendTitle() }}</title>
</head>
<body>
<div id="wrapper">
    <div id="app_header">
        <div id="icon">WEBARQ Content Management System 2.1.0</div>
        <div id="welcome-message">
            <div class="fl" id="message">
                Welcome <span class="username">
                            <a href="{{ \Helper::urlBackend('profile') }}">

                                {{ \Auth::user()->firstname }}

                        </a>
                    </span>
            </div>
            <div class="fl" id="logout">
                <a href="{{ url('logout') }}"></a>
            </div>
        </div>
        <div id="inbox" class="hidden"></div>
        <div id="notification" class="hidden"></div>
        <div class="clear break1"></div>
    </div>
    <div id="app_shorcut">
        <div>
            <div class="fl" style="margin:10px 0 0 30px;width: 230px;max-height: 120px;">
                <img src="{{ \Helper::assetUrl() }}backend/img/logo-client.png" style="width: 145px;"/>
            </div>
            <div class="clear break1"></div>
        </div>
    </div>
    <div id="app_navigation">
        <link type="text/css" href="{{ \Helper::assetUrl() }}backend/css/style.css" rel="stylesheet"/>
        <script type="text/javascript" src="js/script.js"></script>
        <div id="slick-navigation">
            <div class="wg_base_module_navigation" id="main">
                <ul id="list_container">
                    <li class="root">
                        <a class="dashboard" href="{{ url(\Helper::backendName()) }}" id = 'active'><span>Dashboard</span></a>
                    </li>
                    <?php
                        $menu = \Helper::injectModel('Menu');
                        $parents = $menu->whereParentId(0)->orderBy('order' , 'asc')->get();
                    ?>

                    @foreach($parents as $parent)

                        <?php
                            $countChild = $menu->whereParentId($parent->id)->count(); // menghitung child dari id parent

                            if($countChild > 0)
                            {
                                $url = '#';

                            }else{
                                $url = \Helper::urlBackend($parent->permalink);
                            }
                        ?>


                        @if(!empty(\Helper::getMenu()->parent_id))
                            @if(\Helper::getMenu()->parent_id  == $parent->id)    
                                @yield($class = 'root hover')

                            @else 

                                @yield($class = 'root')

                            @endif
                        @else

                            @yield($class = 'root')

                        @endif

                        <li class="{{ $class }}">
                        
                        <a class="developer" onclick = "return showChild({{ $parent->id }})" id = 'parent{{ $parent->id }}' id = 'active' href="{{ $url }}">
                                <span>{{ $parent->title }}</span>
                        </a>
                        
                        </li>

                    @endforeach

                     <li class="root" id="open">
                        <a style="background-color: #D2D2D2;font-weight: bolder;" target="_blank" onclick="return swal('this link frontend!');">GO TO WEB</a>
                    </li>

                    </ul>
                </div>
            </div>
            <div id="navigation-slick-children">
                
                <ul class="child_menu" data-parent="dashboard">
                    <li class = "">
                        <a class="a_child_menu" href="http://localhost:94/wcms/admin-cp/config/general-setting">General Configuration</a>
                    </li>
                    <li style="clear:left;">&nbsp;</li>
                </ul>
                @foreach($parents as $parent)
                    <?php
                        $countChild = $menu->whereParentId($parent->id)->count(); // menghitung child dari id parent
                    ?>

                    @if($countChild > 0)
                    
                    @if(!empty(\Helper::getMenu()->parent_id))

                        @if(\Helper::getMenu()->parent_id  == $parent->id)    
                            @yield($display = 'display:block')

                        @else 

                            @yield($display = '')

                        @endif

                    @else

                    @yield($display = '')

                    @endif

                    <ul class="child_menu" id = 'child{{ $parent->id }}' style = '{{ $display }}'>
                       


                        <li class = "childLi">
                        @foreach($menu->whereParentId($parent->id)->orderBy('order' , 'asc')->get() as $child)
                            
                            @if(!empty(\Helper::getMenu()->id))
                                @yield($color = \Helper::getMenu()->id == $child->id ? '#14c005' : '#666')
                            @else
                                @yield($color = '#666')
                            @endif
                            
                            <a style="color:{{ $color }}" class="a_child_menu" href="{{ \Helper::urlBackend($child->permalink) }}">
                                {{ $child->title }}
                            </a>  &nbsp; &nbsp;
                       
                        @endforeach
                       
                        </li>
                        
                        <li style="clear:left;">&nbsp;</li>
                    </ul>

                    @endif
                @endforeach


                <div id="snbp">&lt;</div>
                <div id="snbn">&gt;</div>
            </div>
            <div style="height: 30px;background-color:#fff;width:100%">&nbsp;</div>
            <div id="app_header_shadowing"></div>
                @yield('content')
            <div id="app_footer">
                <div class="logo">Copyright &COPY; 2015 WEBARQ </div>
                <div class="clear"></div>
            </div>
        </div>
        </body>
</html>