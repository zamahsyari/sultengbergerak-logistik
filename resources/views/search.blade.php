@extends('template')
@section('title', 'Logistik')
@section('header')
    {{-- <div class="header pencarian">
    </div> --}}
@endsection
@section('content')
    <div class="row logistik">
        <div class="col-md-12">
            <h1>Informasi Kebutuhan</h1>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Kebutuhan</th>
                    <th>Jumlah</th>
                </tr>
                <?php
                    $kebutuhan = ['air minum','makanan','obat','susu','logistik umum','selimut','baju','air bersih','alas tidur','popok bayi','beras','tenda','susu bayi','air mineral','pakaian','selimut','pampers','atap','sembako','bbm','terpal','bahan bakar','susu balita','pembalut wanita'];
                    $jml = [25,23,12,9,6,4,3,3,3,3,2,2,2,2,1,1,1,1,1,1,1,1,1,1];
                    $i=0;
                    foreach($kebutuhan as $butuh){
                        ?>
                        <tr>
                            <td> {{$butuh}} </td>
                            <td> {{$jml[$i]}} </td>
                        </tr>
                        <?php
                        $i++;
                    }
                ?>
            </table>
        </div>
    </div>
@endsection
