@extends('template')
@section('title', 'Kota Palu')
@section('content')
    <div class="row">
        <h1>Unggah Excel Person Finder</h1>
        <form action="{{url('upload')}}" method="POST" enctype="multipart/form-data">
            <input type="file" name="excel">
            <input type="submit" value="UPLOAD"/>
            @csrf
        </form>
    </div>
@endsection
