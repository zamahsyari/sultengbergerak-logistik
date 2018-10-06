@extends('m_template')
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
            <div style="overflow-x:scroll; font-size:10pt;">
            <table class="table table-bordered table-striped table-condensed">
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
            </div>
        </div>
    </div>
@endsection
