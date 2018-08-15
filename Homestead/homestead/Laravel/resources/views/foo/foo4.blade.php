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
    @component('components.dropdown')
    @endcomponent

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <!-- Content -->
    @component('components.list-group')
    @endcomponent
    </div>
    <div class="col-sm-1">
    </div>
    <div class="col-sm-7">
      <!-- Content -->
      @include('components.card-footer')
      @include('components.card-footer')
      @include('components.card-footer')
      @include('components.modal-fade')
      @include('components.nav-tabs')
      @include('components.data-spy')
    </div>
  </div>
</div>

@include('layouts.footer')
@endsection



