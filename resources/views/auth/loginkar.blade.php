<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/style2.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="{{ url('/login') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nik" class="control-label">NIK : </label>
                <input name="nik" type="nik" class="form-control" id="nik" placeholder="87654321">
            </div>
            <div class="form-group">
                <label for="signin-password" class="control-label">Password : </label>
                <input name="password" type="password" class="form-control" id="signin-password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
        </form>
    </div>




    {{-- {!! Form::open(['url' => '/login']) !!}
    <div class="form-group">
        {!! Form::label('nik', 'NIK     : ', ['class' => 'control-label']) !!}
        {!! Form::text('nik', null, ['class' => 'form-control']) !!}
    </div> --}}
</body>
</html>
