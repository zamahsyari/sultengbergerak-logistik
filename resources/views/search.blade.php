@extends('template')
@section('title', 'Logistik')
@section('header')
    {{-- <div class="header pencarian">
    </div> --}}
@endsection
@section('content')
    <div class="row logistik  pencarian">
        <div class="col">
            <h2>HASIL PENCARIAN UNTUK {{$keyword}}</h2>
            <br/><br/>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Tanggal laporan</th>
                    <th>Jenis Laporan</th>
                    <th>Kebutuhan</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th>Alamat</th>
                    <th>Kontak</th>
                </tr>
                @foreach($data as $row)
                    <tr>
                        <td>{{$row['tgl']}}</td>
                        <td>{{$row['jenis']}}</td>
                        <td>{{implode(', ',$row['kebutuhan'])}}</td>
                        <td>{{$row['jumlah']}}</td>
                        <td>{{$row['status']}}</td>
                        <td>{{$row['lokasi']}}</td>
                        <td>{{$row['telp']}}</td>
                    </tr>
                @endforeach
            </table>
        <a href="{{url('/')}}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection
