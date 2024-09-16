@extends('layouts.app')
@section('css')
<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

@section('title')
Users
@endsection

@section('breadcrumbs')
{{ Breadcrumbs::render('user-management.users.index') }}
@endsection

<div class="card">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-6">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                {!! getIcon('magnifier', 'fs-3 position-absolute ms-5') !!}
                <input type="text" data-kt-user-table-filter="search"
                    class="form-control form-control-solid w-250px ps-13" placeholder="Search user"
                    id="mySearchInput" />
            </div>
            <!--end::Search-->
        </div>
        <!--begin::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            @can('create user management')
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                <!--begin::Add user-->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_add_user">
                    {!! getIcon('plus', 'fs-2', '', 'i') !!}
                    Add User
                </button>
                <!--end::Add user-->
            </div>
            @endcan
            <!--end::Toolbar-->

            <!--begin::Modal-->
            <livewire:user.add-user-modal></livewire:user.add-user-modal>

            <!--end::Modal-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body py-4">
        <!--begin::Table-->
        <div class="table-responsive">
            {{ $dataTable->table() }}
        </div>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>

{{-- edit modal --}}
<div class="modal fade" id="kt_modal_edit_user" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_add_user_header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Edit User</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
                    {!! getIcon('cross','fs-1') !!}
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body px-5 my-7">
                <!--begin::Form-->
                <form id="kt_modal_edit_user_form" class="form" action="#" wire:submit="submit"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden"  name="user_id" value="" />
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll"
                        data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_modal_add_user_header"
                        data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">

                        @php
                        $fields = [
                        ['label' => 'First Name', 'name' => 'first_name', 'type' => 'text', 'placeholder' => 'First
                        Name', 'wire_model' => 'first_name'],
                        ['label' => 'Last Name', 'name' => 'last_name', 'type' => 'text', 'placeholder' => 'Last Name',
                        'wire_model' => 'last_name'],
                        ['label' => 'Email', 'name' => 'email', 'type' => 'email', 'placeholder' =>
                        'example@domain.com', 'wire_model' => 'email'],
                        ['label' => 'CRM Location ID', 'name' => 'location_id', 'type' => 'text', 'placeholder' =>
                        'Location ID', 'wire_model' => 'location_id'],
                        ['label' => 'Password', 'name' => 'password', 'type' => 'password', 'placeholder' => 'Password',
                        'wire_model' => 'password']
                        ];

                        @endphp

                        @foreach ($fields as $field)
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">{{ $field['label'] }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="{{ $field['type'] }}" wire:model="{{ $field['wire_model'] }}"
                                name="{{ $field['name'] }}" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="{{ $field['placeholder'] }}" />
                            <!--end::Input-->
                            @error($field['name'])
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!--end::Input group-->
                        @endforeach
                        <!--end::Input group-->

                    </div>
                    <!--end::Scroll-->
                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal" aria-label="Close"
                            wire:loading.attr="disabled">Discard</button>
                        <button type="submit" class="btn btn-primary submit-edit-user">
                            <span class="indicator-label" wire:loading.remove>Submit</span>
                            <span class="indicator-progress" wire:loading wire:target="submit">
                                Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>


@section('js')
{{ $dataTable->scripts() }}
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Vendors Javascript-->

<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('assets/js/custom/apps/user-management/users/list/table.js')}}"></script>
<script src="{{ asset('assets/js/custom/apps/user-management/users/list/export-users.js')}}"></script>
{{-- <script src="{{ asset('assets/js/custom/apps/user-management/users/list/add.js')}}"></script> --}}
<script src="{{ asset('assets/js/widgets.bundle.js')}}"></script>
<script src="{{ asset('assets/js/custom/widgets.js')}}"></script>
<script src="{{ asset('assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
<!--end::Custom Javascript-->
<script>
    document.getElementById('mySearchInput').addEventListener('keyup', function () {
                window.LaravelDataTables['users-table'].search(this.value).draw();
            });
            document.addEventListener('livewire:init', function () {
                Livewire.on('success', function () {
                    $('#kt_modal_add_user').modal('hide');
                    window.LaravelDataTables['users-table'].ajax.reload();
                });
            });
            $('#kt_modal_add_user').on('hidden.bs.modal', function () {
                Livewire.dispatch('new_user');
            });
</script>
<script>
    //ajax to send the form data on button click
    $(document).on('click', '.submit-add-user', function (e) {
           e.preventDefault();
           // alert("main kr raha hon");
           var form = $('#kt_modal_add_user_form');
           var form_data = new FormData(form[0]);
           $.ajax({
               url: "{{ route('user.save') }}",
               type: 'POST',
               data: form_data,
               contentType: false,
               processData: false,
               success: function (data) {
                   if (data.status == 'success') {
                       toastr.success(data.message);
                       $('#kt_modal_add_user').modal('hide');
                        $('#users-table').DataTable().ajax.reload();
                   } else {
                       toastr.error(data.message);
                   }
               },
               error: function (data) {
                   var errors = data.responseJSON.errors;
                   $.each(errors, function (key, value) {
                       toastr.error(value);
                   });
               }
           });
       });



       //edit modal show with values
       $('body').on('click', '.update-user', function(e){
        e.preventDefault();
        let user_data = $(this).attr('data-user-object');
         if(user_data){
            user_data = JSON.parse(user_data);
            console.log(user_data)
            $('#kt_modal_edit_user').find("input[name='user_id']").val(user_data.id);
            $('#kt_modal_edit_user').find("input[name='first_name']").val(user_data.first_name);
            $('#kt_modal_edit_user').find("input[name='last_name']").val(user_data.last_name);
            $('#kt_modal_edit_user').find("input[name='email']").val(user_data.email);
            $('#kt_modal_edit_user').find("input[name='location_id']").val(user_data.location_id);
            $('#kt_modal_edit_user').modal('show');
         }


       })

       $('body').on('click', '.submit-edit-user', function(e){
        e.preventDefault();
        let user_id = $('#kt_modal_edit_user').find('input[name="user_id"]').val();
        let first_name = $('#kt_modal_edit_user').find('input[name="first_name"]').val();
        let last_name = $('#kt_modal_edit_user').find('input[name="last_name"]').val();
        let email = $('#kt_modal_edit_user').find('input[name="email"]').val();
        let location_id = $('#kt_modal_edit_user').find('input[name="location_id"]').val();
        let password = $('#kt_modal_edit_user').find('input[name="password"]').val();
        let _token = $('input[name="_token"]').val();
        let url = "{{ route('user.save') }}/"+user_id;

        console.log(user_id,first_name,last_name,email,location_id);
        $.ajax({
            url: url,
            type: "POST",
            data: {
                user_id: user_id,
                first_name: first_name,
                last_name: last_name,
                email: email,
                location_id: location_id,
                _token: _token
            },
            success: function(response){
                if(response.status == 'success'){
                    $('#kt_modal_edit_user').modal('hide');
                    toastr.success(response.message);
                    $('#users-table').DataTable().ajax.reload();
                }else{
                    toastr.error(response.message);
                }
            }
        })
    })



</script>

@endsection

@endsection
