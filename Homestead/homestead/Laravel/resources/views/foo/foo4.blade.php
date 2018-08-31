@extends('../layouts/my')
@section('content')
    @include('components.alert-heading')
    @include('components.badge')
    @include('components.breadcrumb')
    @include('components.btn')
    @include('components.dropdown')

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <!-- Content -->
                @include('components.list-group')
            </div>
            <div class="col-sm-1">
            </div>
            <div class="col-sm-7">
                <!-- Content -->
                @include('components.data-spy')
                @include('components.modal-fade')
                @include('components.nav-tabs')
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection

