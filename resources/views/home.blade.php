@extends('template')
@section('title', 'Logistik')
@section('header')
    {{-- <div class="header pencarian">
    </div> --}}
@endsection
@section('content')
    <div class="row logistik">
        <div class="col-md-8">
            <h1>Informasi Kebutuhan</h1>
            <div id="container" style="width:100%; height:400px;"></div>
        </div>
        <div class="col-md-4">
        <form action="{{ url('search') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Kabupaten</label>
                    <input type="text" class="form-control" name="kota"/>
                </div>
                <div class="form-group">
                    <label>Kecamatan</label>
                    <input type="text" class="form-control" name="posko"/>
                </div>
                <button type="submit" class="btn btn-primary form-control">Cari</button>
            </form>
        </div>
    </div>
<script src="https://code.highcharts.com/highcharts.src.js"></script>
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
        name: 'Brands',
        colorByPoint: true,
        data: [
        {
            name: 'air minum',
            y: 25
        }, {
            name: 'makanan',
            y: 23
        }, {
            name: 'obat',
            y: 12
        }, {
            name: 'susu',
            y: 9
        }, {
            name: 'logistik umum',
            y: 6
        }, {
            name: 'selimut',
            y: 4
        }, {
            name: 'baju',
            y: 3
        }, {
            name: 'air bersih',
            y: 3
        },{
            name: 'alas tidur',
            y: 3
        },{
            name: 'popok bayi',
            y: 3
        },{
            name: 'beras',
            y: 2
        },{
            name: 'tenda',
            y: 2
        },{
            name: 'susu bayi',
            y: 2
        },{
            name: 'air mineral',
            y: 2
        },{
            name: 'pakaian',
            y: 1
        },{
            name: 'selimut',
            y: 1
        },{
            name: 'pampers',
            y: 1
        },
        {
            name: 'atap',
            y: 1
        },{
            name: 'sembako',
            y: 1
        },{
            name: 'bbm',
            y: 1
        },
        {
            name: 'terpal',
            y: 3
        },
        {
            name: 'bahan bakar',
            y: 3
        },
        {
            name: 'susu balita',
            y: 1
        },{
            name: 'pembalut wanita',
            y: 1
        }]
    }]
});

</script>
@endsection
