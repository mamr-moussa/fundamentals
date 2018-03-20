<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" href = "{{asset('css/app.css')}}"/>
    @yield('externals')

</head>
<body>
    <div id = "app">
    	@yield('content')
    </div>
</body>
@yield('tail')
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</html>