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
        <form action="{{ url('/postloginadm') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email" class="control-label">Email : </label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Email">
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
