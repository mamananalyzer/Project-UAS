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
        <div class="col-8">
          <h1 class="mt-3">Form Add Karyawan</h1>
            <form enctype="multipart/form-data" action="{{ url('/admins') }}" method="POST" onsubmit="if(document.getElementById('agree').checked) { return true; }
            else {
                alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy');
                return false;
            }">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name" class="sr-only"></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name" value="{{ old('name')}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="role" class="sr-only"></label>
                <select class="form-control @error('role') is-invalid @enderror" id="role" name="role">
                    <option value="admin">admin</option>
                    <option value='user'>user</option>
                    @error('role')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </select>
            </div>
            <div class="form-group">
                <label for="nik" class="sr-only"></label>
                <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="nik" name="nik" value="{{ old('nik')}}">
                @error('nik')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" class="sr-only"></label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" name="email" value="{{ old('email')}}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password" class="sr-only"></label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password" name="password" value="{{ old('password')}}">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jabatan" class="sr-only"></label>
                <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" placeholder="jabatan" name="jabatan" value="{{ old('jabatan')}}">
                @error('jabatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="dept" class="sr-only"></label>
                <input type="text" class="form-control @error('dept') is-invalid @enderror" id="dept" placeholder="dept" name="dept" value="{{ old('dept')}}">
                @error('dept')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="npwp" class="sr-only"></label>
                <input type="text" class="form-control @error('npwp') is-invalid @enderror" id="npwp" placeholder="npwp" name="npwp" value="{{ old('npwp')}}">
                @error('npwp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="grade" class="sr-only"></label>
                <input type="text" class="form-control @error('grade') is-invalid @enderror" id="grade" placeholder="grade" name="grade" value="{{ old('grade')}}">
                @error('grade')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="cabang" class="sr-only"></label>
                <input type="text" class="form-control @error('cabang') is-invalid @enderror" id="cabang" placeholder="cabang" name="cabang" value="{{ old('cabang')}}">
                @error('cabang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="bulan" class="sr-only"></label>
                <input type="text" class="form-control @error('bulan') is-invalid @enderror" id="bulan" placeholder="bulan" name="bulan" value="{{ old('bulan')}}">
                @error('bulan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="picture">Picture *</label>
                <input type="file" class="form-control @error('picture') is-invalid @enderror" id="picture" placeholder="picture" name="picture" value="{{ old('picture')}}">
            </div>
            <div class="form-group">
                <label for="gajipokok" class="sr-only"></label>
                <input type="number" class="form-control @error('gajipokok') is-invalid @enderror" id="gajipokok" placeholder="gajipokok" name="gajipokok" value="{{ old('gajipokok')}}">
                @error('gajipokok')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="makan" class="sr-only"></label>
                <input type="number" class="form-control @error('makan') is-invalid @enderror" id="makan" placeholder="makan" name="makan" value="{{ old('makan')}}">
                @error('makan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="transport" class="sr-only"></label>
                <input type="number" class="form-control @error('transport') is-invalid @enderror" id="transport" placeholder="transport" name="transport" value="{{ old('transport')}}">
                @error('transport')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="absen" class="sr-only"></label>
                <input type="number" class="form-control @error('absen') is-invalid @enderror" id="absen" placeholder="absen" name="absen" value="{{ old('absen')}}">
                @error('absen')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            <input type="checkbox" name="checkbox" value="check" id="agree" />
            <label for="agree">I have read and agree to the Terms and Conditions and Privacy Policy</label>
            <br>
            <br>
            <input class="btn btn-success mb-4" type="submit" name="submit" value="Tambah Karyawan" />
            </form>
        </div>
      </div>
    </div>
</body>
</html>
