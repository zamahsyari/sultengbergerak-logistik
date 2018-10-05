@extends('template')
@section('title', 'Kota Palu')
@section('content')
    <div class="row logistik">
        <div class="col-12">
            <h2>Unggah Excel Data Kebutuhan</h2>
            <br/>
        </div>
        <div class="col-12">
            <form action="{{url('upload')}}" method="POST" enctype="multipart/form-data">
                <input type="file" name="excel" class="btn"><br/><br/>
                <input type="submit" value="UPLOAD" class="btn btn-primary"/>
                @csrf
            </form>
        </div>
    </div>
@endsection
