<!DOCTYPE html>
<html>
<head>
    <script scr="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.6/vue.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDIFAKTOR - @yield('title') </title>
    <link rel="stylesheet" href="css/vendor.css" />
    <link rel="stylesheet" href="css/app.css" />
</head>
<body>

<div id="wrapper">
    <div id="page-wrapper" class="gray-bg">
        @yield('content')
    </div>
</div>
<script src="js/app.js" type="text/javascript"></script>
<script>
    var data = {
        message: 'Greetings your majesty'
    };
    new Vue({
        el: '#app',
        data: data
    })
</script>
@section('scripts')
@show
</body>
</html>