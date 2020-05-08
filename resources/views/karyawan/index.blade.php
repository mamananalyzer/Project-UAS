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
        @foreach ($employees as $emp)
        <div class="row">
            <div class="col">
                <table>
                    <tr>
                        <td>NIK/Nama</td>
                        <td class="pl-4 pr-2">:</td>
                        <td>{{ $emp->nik }} - {{ $emp->name }}</td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td class="pl-4 pr-2">:</td>
                        <td>{{ $emp->jabatan }}</td>
                    </tr>
                    <tr>
                        <td>Dept/Sect</td>
                        <td class="pl-4 pr-2">:</td>
                        <td>{{ $emp->dept }}</td>
                    </tr>
                </table>
            </div>
            <div class="col">
                <table>
                    <tr>
                        <td>NPWP</td>
                        <td class="pl-4 pr-2">:</td>
                        <td>{{ $emp->npwp }}</td>
                    </tr>
                    <tr>
                        <td>Gol/Grade</td>
                        <td class="pl-4 pr-2">:</td>
                        <td>{{ $emp->grade }}</td>
                    </tr>
                    <tr>
                        <td>Cabang</td>
                        <td class="pl-4 pr-2">:</td>
                        <td>{{ $emp->cabang }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <hr>
        <div class="row" style="letter-spacing: 4px;">
            <div class="col">
                <h5>PENERIMAAN</h5>
            </div>
            <div class="col">
                <h5>POTONGAN</h5>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-4">
                <p>Gaji Pokok</p>
                <p>Tunjangan Makan</p>
                <p>Tunjangan Transport</p>
            </div>
            <div class="col text-right">
                <p>{{ $emp->gajipokok }}</p>
                <p>{{ $emp->makan }}</p>
                <p>{{ $emp->transport }}</p>
            </div>
            <div class="col-4">
                <p>Potongan Absen ({{ $emp->absen }})hr</p>
            </div>
            <div class="col text-right">
                {{-- {{$potong=$emp->nik*100000}} --}}
                <p>{{ $emp->absen }} hr</p>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h6>Total Penerimaan</h6>
                    </div>
                    <div class="col text-right">
                        <h6>{{ $total=$emp->gajipokok+$emp->makan+$emp->transport }}</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h6>Total Potongan</h6>
                    </div>
                    <div class="col text-right">
                        <h6>{{ $potong=$total/30*$emp->absen }}</h6>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <hr>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h6>Take Home Pay</h6>
                    </div>
                    <div class="col text-right">
                        <button disabled class="btn btn-info">{{ $takehome=$total-$potong }}</button>
                    </div>
                </div>
                <br>
                <h6>Ditransfer Ke :</h6>
                <p>Permata Cab.</p>
                <p>No. A/C 0041.2050.4075</p>
                <p>a.n. {{ $emp->name }}</p>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col"></div>
                    <div class="col text-center">JAKARTA, {{ $emp->bulan }}</div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <br>
                        <h6>Disetujui :</h6>
                        <br>
                        <br>
                        <br>
                        <h6>Tobby</h6>
                    </div>
                    <div class="col text-center">
                        <br>
                        <h6>Diterima Oleh :</h6>
                        <br>
                        <br>
                        <br>
                        <h6>{{ $emp->name }}</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <button>PRINT</button>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>
