@extends('template')
@section('title', 'Logistik')
@section('header')
    {{-- <div class="header pencarian">
    </div> --}}
@endsection
@section('content')
    <div class="row logistik">
        <div class="col-md-12">
            <h4>Hasil pencarian untuk {{$keyword}}</h4>
            <br/><br/>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Tanggal</th>
                    <th>Kebutuhan</th>
                    <th>Jumlah</th>
                    <th>Lokasi</th>
                    <th>Kontak</th>
                </tr>
                @foreach($data as $row)
                    <tr>
                        <td>{{$row['tgl']}}</td>
                        <td>{{implode(', ',$row['kebutuhan'])}}</td>
                        <td>{{$row['jumlah']}}</td>
                        <td>{{$row['lokasi']}}</td>
                        <td>{{$row['telp']}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
