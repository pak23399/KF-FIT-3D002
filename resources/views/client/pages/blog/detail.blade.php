@extends('client.layout.master')

@section('content')
    Blog detail
@endsection

@section('title')
    Blog
@endsection

@section('js-custom')
    <script>alert(123)</script>
@endsection

@section('side-bar')
    @parent
    Side Bar of Blog Detail
@endsection
