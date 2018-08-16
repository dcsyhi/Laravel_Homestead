
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
    <table>
    <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->mail }}</td>
            <td>{{ $item->age }}</td>
        </tr>
    @endforeach
    </table>
@endsection
 
@include('layouts.sub')
 
@section('pageSub')
    <p>個別サイドバーの内容</p>
@endsection
 
@section('pageJs')
<script src="{{ asset('js/page.js') }}"></script>
@endsection
 
@include('layouts.footer')