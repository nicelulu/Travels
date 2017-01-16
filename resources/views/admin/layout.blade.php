<!doctype html>
<html lang="en">
<head>
    {!! \Lego\LegoAsset::styles() !!}
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
{!! $filter!!}

 {!! $grid !!}

<script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
{!! \Lego\LegoAsset::scripts() !!}
</body>
</html>