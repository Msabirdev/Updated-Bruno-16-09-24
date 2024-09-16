@extends('layouts.app')
@section('content')
@section('css')
<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('title')
Roles
@endsection

@section('breadcrumbs')
{{ Breadcrumbs::render('user-management.roles.index') }}
@endsection

<!--begin::Content container-->
<div id="kt_app_content_container" class="app-container container-xxl">
    <livewire:permission.role-list></livewire:permission.role-list>
</div>
<!--end::Content container-->

<!--begin::Modal-->
<livewire:permission.role-modal></livewire:permission.role-modal>
<!--end::Modal-->


<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Vendors Javascript-->

<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('assets/js/custom/apps/user-management/roles/list/add.js')}}"></script>
<script src="{{ asset('assets/js/custom/apps/user-management/roles/list/update-role.js')}}"></script>
<script src="{{ asset('assets/js/widgets.bundle.js')}}"></script>
<script src="{{ asset('assets/js/custom/widgets.js')}}"></script>
<script src="{{ asset('assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
@endsection
