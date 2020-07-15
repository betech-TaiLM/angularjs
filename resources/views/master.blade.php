@php
$url = 'public/themes/';
@endphp

<!DOCTYPE html>
<html lang="ja" xml:lang="ja" ng-app="app">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Demo AngularJS - Betech</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ url($url . 'vendors/core/core.css')}}">
    <link rel="stylesheet" href="{{ url($url . 'fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{ url($url . 'vendors/flag-icon-css/css/flag-icon.min.css')}}">
    @stack('customCSS')
    <link rel="stylesheet" href="{{ url($url . 'css/demo_1/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.materialdesignicons.com/5.3.45/css/materialdesignicons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js"></script>
    <script src="{{ url($url . '/angularjs/angularjsConfig.js')}}"></script>
</head>

<body ng-app="app">
    <div class="main-wrapper">
        @include('menu')
		<div class="page-wrapper">
            @include('navbar')
			<div class="page-content">
                @yield('content')
			</div>
		</div>
    </div>
    <script src="{{ url($url . 'vendors/core/core.js')}}"></script>
    <script src="{{ url($url . 'vendors/feather-icons/feather.min.js')}}"></script>
    <script src="{{ url($url . 'js/template.js')}}"></script>
    @stack('customScript')
</body>

</html>
