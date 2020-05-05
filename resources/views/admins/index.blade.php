<!DOCTYPE html>
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
      <div class="row">
        <div class="col-9">
          <h1 class="mt-3">Product</h1>

            <form method="GET" action="{{ url('/products') }}" class="form-inline">
                <a href="{{url('/admins/create')}}" class="btn btn-success my-2">Tambah Karyawan</a>
                <a href="{{url('/procategorie')}}" class="btn btn-success my-2 ml-2">Categories</a>
                <a href="" class="ml-auto"><img src="{{ asset('assets/img/user.png')}}" width="44px" alt=""><span>{{ auth()->user()->name }}</span></a>
                <a href="{{ ('/logout') }}" class="btn btn-warning ml-2 mr-auto">Logout</a>
                <input name="cari" type="search" class="form-control ml-4 ml-auto mr-2">
                <button class="btn btn-outline-primary" type="submit">Cari</button>
            </form>
            <a href="{{url('/carts')}}" class="btn btn-success my-2">Show Request Customer</a>




          <ul class="list-group mb-4">
              @foreach ($employees as $employ)
              <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $employ -> id }}
                  {{ $employ -> nama }}
                  {{ $employ -> nik }}
                  {{ $employ -> jabatan }}
                  {{ $employ -> type }}
                  {{ $employ -> type }}
                  {{ $employ -> type }}
                  {{ $employ -> type }}
              <a href="admins/{{ $employ->id }}" class="badge badge-info">Read more ...</a>
              </li>
              @endforeach
          </ul>
        </div>
      </div>
    </div>
</body>
</html>
