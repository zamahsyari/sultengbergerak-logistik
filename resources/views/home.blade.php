@extends('template')
@section('title', 'Logistik')
@section('header')
    {{-- <div class="header pencarian">
    </div> --}}
@endsection
@section('content')
    <div class="row logistik">
        <div class="col-md-8">
            <h4>Informasi Kebutuhan</h4>
            <div id="container" style="width:100%; height:400px;"></div>
        </div>
        <div class="col-md-4">
        <form action="{{ url('search') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Kabupaten</label>
                    <select name="kabupaten" class="form-control" id="kabupaten">
                        @foreach ($kabupaten as $bupati)
                            <option value="{{$bupati['kabupaten']}}">{{$bupati['kabupaten']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Kecamatan</label>
                    <select name="kecamatan" class="form-control" id="kecamatan">
                    @foreach ($kecamatan as $camat)
                        <option value="{{$camat['kecamatan']}}">{{$camat['kecamatan']}}</option>
                    @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary form-control">Cari</button>
            </form>
        </div>
    </div>
<script src="https://code.highcharts.com/highcharts.src.js"></script>
<script>
    var kabupaten = document.getElementById('kabupaten');
    kabupaten.onchange = function(){
        var http = new XMLHttpRequest();
        http.onreadystatechange = function(){
            var parsed = JSON.parse(http.responseText);
            var kecamatan = document.getElementById('kecamatan');
            kecamatan.innerHTML = '';
            for(var i=0; i < parsed.length; i++){
                kecamatan.innerHTML += '<option>'+parsed[i]+'</option>';
            }
        };
        http.open('GET',"<?php echo url('getkecamatan') ?>/"+kabupaten.value);
        http.send();
    };
</script>
<script>
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: ''
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'jumlah',
        colorByPoint: true,
        data: <?php echo json_encode($data) ?>
    }]
});
</script>
@endsection
