@extends('layouts.common')
 
@section('title', 'ページタイトル')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
<link href="{{ asset('css/page.css') }}" rel="stylesheet">
@endsection
@include('layouts.head')

@include('layouts.header')
 
@section('content')
    <p>コンテンツ内容が入ります</p>
@endsection
 
@include('layouts.sub')
 
@section('pageSub')
    <p>個別サイドバーの内容</p>
@endsection
 
@section('pageJs')
<script src="{{ asset('js/page.js') }}"></script>
@endsection
 
@include('layouts.footer')