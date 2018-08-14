@extends('../layouts/my')
@section('title', $title)
@section('content')
    {{-- 個別ページの内容 --}}
    <h2>{{ $title }}</h2>
    <p>{{ $body }}</p>
    @component('components.message')
    @endcomponent
    @component('components.alert-success')
    @endcomponent
    @component('components.alert-heading')
    @endcomponent
    @component('components.badge')
    @endcomponent
@endsection


