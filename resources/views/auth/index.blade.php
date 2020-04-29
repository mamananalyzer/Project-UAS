<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/style2.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container text-center" style="margin-top : 20%">
        <a href="{{ url('/loginkar') }}" class="btn btn-lg btn-primary">Login Karyawan</a>
        <a href="{{ url('/loginadm') }}" class="btn btn-lg btn-primary">Login Admin</a>
    </div>




    {{-- {!! Form::open(['url' => '/login']) !!}
    <div class="form-group">
        {!! Form::label('nik', 'NIK     : ', ['class' => 'control-label']) !!}
        {!! Form::text('nik', null, ['class' => 'form-control']) !!}
    </div> --}}
</body>
</html>
