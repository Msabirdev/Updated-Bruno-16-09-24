@extends('layouts.app')
@section('content')

@section('title')
Dashboard
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.52.0/apexcharts.min.css"
    integrity="sha512-w3pXofOHrtYzBYpJwC6TzPH6SxD6HLAbT/rffdkA759nCQvYi5AHy5trNWFboZnj4xtdyK0AFMBtck9eTmwybg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .contacts_charts_container .card-toolbar {
        display: none !important;
    }

    .total_opportunities {
        display: none !important;
    }

    .cards {
        height: 25vh;
    }

    .apexcharts-legend-text {
        display: flex;
        gap: 10px;
    }

    .apexcharts-legend-marker {
        height: 8px !important;
        width: 13px !important;
        left: -3px !important;
        top: 0px !important;
    }

    .main-div {
        margin-top: -7%;
    }
</style>
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<script src="assets/plugins/global/plugins.bundle.js"></script>
@section('breadcrumbs')
{{ Breadcrumbs::render('dashboard') }}
@endsection


@php
$data_stats = mainDataCounts();
@endphp

<div class="row gx-5 gx-xl-10">
    <!--begin::Col-->
    <div class="col-xl-4 mb-10">

        <!--begin::Lists Widget 19-->
        <div class="card card-flush h-xl-100">
            <!--begin::Heading-->
            <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"
                style="background-image:url('{{ asset('assets/media/svg/shapes/top-green.png') }}')"
                data-bs-theme="light">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column text-white pt-15">
                    <span class="fw-bold fs-2x mb-3">My Dashboard</span>

                    <div class="fs-4 text-white">
                        <span class="opacity-75">You have</span>

                        <span class="position-relative d-inline-block">
                            <a href="/metronic8/demo1/pages/user-profile/projects.html"
                                class="link-white opacity-75-hover fw-bold d-block mb-1">
                                {{ $data_stats['total_users'] }} Active Locations
                            </a>

                            <!--begin::Separator-->
                            <span
                                class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
                            <!--end::Separator-->
                        </span>

                        <span class="opacity-75">in total</span>
                    </div>
                </h3>
                <!--end::Title-->

                <!--begin::Toolbar-->
                <div class="card-toolbar pt-5">
                    <!--begin::Menu-->
                    <button
                        class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">

                        <i class="ki-duotone ki-dots-square fs-4"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                    </button>


                    <!--begin::Menu 2-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu separator-->
                        <div class="separator mb-3 opacity-75"></div>
                        <!--end::Menu separator-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">
                                New Ticket
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">
                                New Customer
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                            <!--begin::Menu item-->
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">New Group</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--end::Menu item-->

                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        Admin Group
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        Staff Group
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        Member Group
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">
                                New Contact
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu separator-->
                        <div class="separator mt-3 opacity-75"></div>
                        <!--end::Menu separator-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content px-3 py-3">
                                <a class="btn btn-primary  btn-sm px-4" href="#">
                                    Generate Reports
                                </a>
                            </div>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 2-->

                    <!--end::Menu-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Heading-->

            <!--begin::Body-->
            <div class="card-body mt-n20">
                <!--begin::Stats-->
                <div class="mt-n20 position-relative">
                    <!--begin::Row-->
                    <div class="row g-3 g-lg-6">
                        @php

                        $stats = [
                        'total_users' => ['label' => 'Users', 'icon' => 'ki-user'],
                        'total_contacts' => ['label' => 'Contacts', 'icon' => 'ki-flask'],
                        'total_opportunities' => ['label' => 'Opportunities', 'icon' => 'ki-briefcase'],
                        'total_appointments' => ['label' => 'Appointments', 'icon' => 'ki-calendar'],
                        'total_calls' => ['label' => 'Calls', 'icon' => 'ki-phone'],
                        ];
                        @endphp
                        @foreach ($stats as $key => $stat)
                        @continue($key === 'total_users')
                        <!--begin::Col-->
                        <div class="col-6">
                            <!--begin::Items-->
                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-5 mb-8">
                                    <span class="symbol-label">
                                        <i class="ki-duotone {{ $stat['icon'] }} fs-1 text-primary">
                                            <span class="path1"></span><span class="path2"></span>
                                        </i>
                                    </span>
                                </div>
                                <!--end::Symbol-->

                                <!--begin::Stats-->
                                <div class="m-0" data-bs-toggle="tooltip" data-bs-placement="top" title="{{
                                    number_format ($data_stats[$key]) }}">
                                    <!--begin::Number-->
                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1" >{{
                                        number_format_short ($data_stats[$key]) }}</span>
                                    <!--end::Number-->

                                    <!--begin::Desc-->
                                    <span class="text-gray-500 fw-semibold fs-6">{{ $stat['label'] }}</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Col-->
                        @endforeach
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Lists Widget 19-->
    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-xl-8 ">
        <!--begin::Row-->

        <!--begin::Engage widget 4-->
        <div class="card border-transparent mb-10" data-bs-theme="light" style="background-color: #1C325E;">
            <!--begin::Body-->
            <div class="card-body d-flex ps-xl-15">
                <!--begin::Wrapper-->
                <div class="m-0">
                    <!--begin::Title-->
                    <div class="position-relative fs-2x z-index-2 fw-bold text-white mb-7">
                        <span class="me-2">
                            Hey
                            <span class="position-relative d-inline-block text-danger">
                                <a href="#"
                                    class="text-danger opacity-75-hover">{{ auth()->user()->first_name ?? 'Howdy'
                                    }}!</a>

                                <!--begin::Separator-->
                                <span
                                    class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                <!--end::Separator-->
                            </span>
                        </span>
                        <br>
                        Welcome to the dashboard
                    </div>
                    <!--end::Title-->

                    <!--begin::Action-->
                    <div class="mb-3">
                        <a href="#" class="btn btn-danger fw-semibold me-2" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_upgrade_plan">
                            Upgrade Plan
                        </a>

                        <a href="#" class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold">
                            How to
                        </a>
                    </div>
                    <!--begin::Action-->
                </div>
                <!--begin::Wrapper-->

                <!--begin::Illustration-->
                <img src="{{ asset('assets/media/illustrations/sigma-1/17-dark.png') }}"
                    class="position-absolute me-3 bottom-0 end-0 h-200px" alt="">
                <!--end::Illustration-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Engage widget 4-->


        <div class="row g-5 g-xl-10">
            <!--begin::Col-->
            <div class="col-xl-6 mb-xl-10">

                @php
                $recent_users = recentLocations();
                @endphp

                <!--begin::Slider Widget 1-->
                <div id="kt_sliders_widget_2_slider"
                    class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100"
                    data-bs-ride="carousel" data-bs-interval="5500">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h4 class="card-title d-flex align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">Recent Locations</span>
                            <span class="text-gray-500 mt-1 fw-bold fs-7">{{ count($recent_users) }} users in the last
                                24 hours</span>
                        </h4>
                        <!--end::Title-->

                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Carousel Indicators-->
                            <ol
                                class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
                                @foreach ($recent_users as $key => $user)
                                <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="{{ $key }}"
                                    class="{{ $key == 0 ? 'active' : '' }} ms-1"></li>
                                @endforeach
                            </ol>
                            <!--end::Carousel Indicators-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body py-6">
                        <!--begin::Carousel-->
                        <div class="carousel-inner">
                            @foreach ($recent_users as $key => $user)
                            <!--begin::Item-->
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center mb-9">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-70px symbol-circle me-5">
                                        <span class="symbol-label bg-light-success">
                                            @if (!empty($user->photo) && file_exists(public_path($user->photo)))
                                            <img src="{{ asset($user->photo) }}" alt="{{ $user->first_name }}"
                                                class="h-100 w-100" />
                                            @else
                                            <i class="ki-duotone ki-user fs-3x text-success"></i>
                                            @endif
                                        </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Subtitle-->
                                        <h4 class="fw-bold text-gray-800 mb-3">{{ $user->first_name }}
                                            {{ $user->last_name }}</h4>
                                        <!--end::Subtitle-->

                                        <!--begin::Items-->
                                        <div class="d-flex d-grid gap-5">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                    <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    {{ $user->email }}

                                                </span>
                                                <!--end::Section-->

                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                    <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    {{ $user->location_id ?? '' }}
                                                </span>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-shrink-0">
                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                    <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    <span class="badge badge-{{
                                                        $user->status == 1 ? 'success' : 'danger' }} fs-7 fw-bold">{{
                                                        $user->status == 1 ? 'active': 'disabled' }}</span>
                                                </span>
                                                <!--end::Section-->

                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                    <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    {{ $user->created_at->diffForHumans() }}
                                                </span>
                                                <!--end::Section-->


                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Action-->
                                <div class="m-0">
                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">View Profile</a>
                                    <a href="#" class="btn btn-sm btn-success mb-2">Contact User</a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Item-->
                            @endforeach
                        </div>
                        <!--end::Carousel-->
                    </div>
                    <!--end::Body-->
                </div>

                <!--end::Slider Widget 1-->



            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-xl-6 mb-5 mb-xl-10">


                <!--begin::Slider Widget 2-->
                <div id="kt_sliders_widget_2_slider"
                    class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100"
                    data-bs-ride="carousel" data-bs-interval="5500">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h4 class="card-title d-flex align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">Today’s Events</span>
                            <span class="text-gray-500 mt-1 fw-bold fs-7">24 events on all activities</span>
                        </h4>
                        <!--end::Title-->

                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Carousel Indicators-->
                            <ol
                                class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
                                <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="0"
                                    class="ms-1 active" aria-current="true"></li>
                                <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="1" class="ms-1">
                                </li>
                                <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="2" class="ms-1">
                                </li>

                            </ol>
                            <!--end::Carousel Indicators-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body py-6">
                        <!--begin::Carousel-->
                        <div class="carousel-inner">
                            <!--begin::Item-->
                            <div class="carousel-item show active">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center mb-9">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-70px symbol-circle me-5">
                                        <span class="symbol-label bg-light-success">
                                            <i class="ki-duotone ki-abstract-24 fs-3x text-success"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Subtitle-->
                                        <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                        <!--end::Subtitle-->

                                        <!--begin::Items-->
                                        <div class="d-flex d-grid gap-5">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                    <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                            class="path1"></span><span class="path2"></span></i> 5
                                                    Topics
                                                </span>
                                                <!--end::Section-->

                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                    <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                            class="path1"></span><span class="path2"></span></i> 1
                                                    Speakers
                                                </span>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-shrink-0">
                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                    <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                            class="path1"></span><span class="path2"></span></i> 60
                                                    Min
                                                </span>
                                                <!--end::Section-->

                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                    <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                            class="path1"></span><span class="path2"></span></i> 137
                                                    students
                                                </span>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Action-->
                                <div class="m-0">
                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>

                                    <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="carousel-item">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center mb-9">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-70px symbol-circle me-5">
                                        <span class="symbol-label bg-light-danger">
                                            <i class="ki-duotone ki-abstract-25 fs-3x text-danger"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Subtitle-->
                                        <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                        <!--end::Subtitle-->

                                        <!--begin::Items-->
                                        <div class="d-flex d-grid gap-5">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                    <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                            class="path1"></span><span class="path2"></span></i> 12
                                                    Topics
                                                </span>
                                                <!--end::Section-->

                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                    <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                            class="path1"></span><span class="path2"></span></i> 1
                                                    Speakers
                                                </span>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-shrink-0">
                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                    <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                            class="path1"></span><span class="path2"></span></i> 50
                                                    Min
                                                </span>
                                                <!--end::Section-->

                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                    <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                            class="path1"></span><span class="path2"></span></i> 72
                                                    students
                                                </span>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Action-->
                                <div class="m-0">
                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>

                                    <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="carousel-item">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center mb-9">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-70px symbol-circle me-5">
                                        <span class="symbol-label bg-light-primary">
                                            <i class="ki-duotone ki-abstract-36 fs-3x text-primary"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Subtitle-->
                                        <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                        <!--end::Subtitle-->

                                        <!--begin::Items-->
                                        <div class="d-flex d-grid gap-5">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                    <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                            class="path1"></span><span class="path2"></span></i> 3
                                                    Topics
                                                </span>
                                                <!--end::Section-->

                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                    <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                            class="path1"></span><span class="path2"></span></i> 1
                                                    Speakers
                                                </span>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex flex-column flex-shrink-0">
                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                    <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                            class="path1"></span><span class="path2"></span></i> 50
                                                    Min
                                                </span>
                                                <!--end::Section-->

                                                <!--begin::Section-->
                                                <span class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                    <i class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                            class="path1"></span><span class="path2"></span></i> 72
                                                    students
                                                </span>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Action-->
                                <div class="m-0">
                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>

                                    <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Item-->

                        </div>
                        <!--end::Carousel-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Slider Widget 2-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->




    </div>
    <!--end::Col-->
</div>
@endsection
