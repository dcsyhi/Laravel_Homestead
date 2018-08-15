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

    @component('components.breadcrumb')
    @endcomponent
    @component('components.btn')
    @endcomponent()
    @component('components.btn-group')
    @endcomponent()
    @component('components.radio-as-btn')
    @endcomponent
    @component('components.list-group')
    @endcomponent
    @component('components.card-footer')
    @endcomponent
@endsection


