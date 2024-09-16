@php
$dbusers = getdbusers();

@endphp

<style>
    .app-card {
        --bs-card-box-shadow: var(--bs-root-card-box-shadow);
        --bs-card-border-color: var(--bs-root-card-border-color);
        border: 1px solid var(--bs-card-border-color);
    }

    .app-card {
        --bs-card-spacer-y: 1rem;
        --bs-card-spacer-x: 1rem;
        --bs-card-title-spacer-y: 0.5rem;
        --bs-card-title-color: var(--bs-gray-900);
        --bs-card-border-width: 1px;
        --bs-card-border-color: #F1F1F4;
        --bs-card-border-radius: 0.625rem;
        --bs-card-box-shadow: 0px 3px 4px 0px rgba(0, 0, 0, 0.03);
        --bs-card-inner-border-radius: calc(0.625rem - 1px);
        --bs-card-cap-padding-y: 0.5rem;
        --bs-card-cap-padding-x: 1rem;
        --bs-card-cap-bg: transparent;
        --bs-card-bg: var(--bs-body-bg);
        --bs-card-img-overlay-padding: 1rem;
        --bs-card-group-margin: 0.75rem;
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        height: var(--bs-card-height);
        color: var(--bs-body-color);
        word-wrap: break-word;
        background-color: var(--bs-card-bg);
        background-clip: border-box;
        border: var(--bs-card-border-width) solid var(--bs-card-border-color);
        border-radius: var(--bs-card-border-radius);
        box-shadow: var(--bs-card-box-shadow);
    }
</style>

<!--begin::Menu wrapper-->
<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
    data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
    data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
    data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
    data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
    data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
    <!--begin::Menu-->
    <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
        id="kt_app_header_menu" data-kt-menu="true">
        <!--begin:Menu item-->
        <div data-kt-menu-placement="bottom-start"
            class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
            <!--begin:Menu link-->
            <a class="menu-link" href={{ route('dashboard') }}>
                <span class="menu-title">Dashboards</span>
                <span class="menu-arrow d-lg-none"></span>
            </a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
            class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
            <!--begin:Menu link-->
            <span class="menu-link">
                <span class="menu-title">Menus</span>
                <span class="menu-arrow d-lg-none"></span>
            </span>
            <!--end:Menu link-->
            <!--begin:Menu sub-->
            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                <!--begin:Dashboards menu-->
                <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible"
                    data-kt-menu-dismiss="true">
                    <!--begin:Row-->
                    <div class="row">
                        <!--begin:Col-->
                        <div class="col-lg-8 mb-3 mb-lg-0 py-3 px-3 py-lg-6 px-lg-6">
                            <!--begin:Row-->
                            <div class="row">
                                <!--begin:Col-->
                                <div class="col-lg-6 mb-3">
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="{{ route('dashboard') }}" class="menu-link active">
                                            <span
                                                class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!!
                                                getIcon('element-11', 'text-primary fs-1') !!}</span>
                                            <span class="d-flex flex-column">
                                                <span class="fs-6 fw-bold text-gray-800">Default</span>
                                                <span class="fs-7 fw-semibold text-muted">Reports & statistics</span>
                                            </span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Col-->
                                <!--begin:Col-->
                                <div class="col-lg-6 mb-3">
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="{{ route('dashboard') }}" class="menu-link">
                                            <span
                                                class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!!
                                                getIcon('basket', 'text-danger fs-1') !!}</span>
                                            <span class="d-flex flex-column">
                                                <span class="fs-6 fw-bold text-gray-800">eCommerce</span>
                                                <span class="fs-7 fw-semibold text-muted">Sales reports</span>
                                            </span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Col-->
                                <!--begin:Col-->
                                <div class="col-lg-6 mb-3">
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="{{ route('dashboard') }}" class="menu-link">
                                            <span
                                                class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!!
                                                getIcon('abstract-44', 'text-info fs-1') !!}</span>
                                            <span class="d-flex flex-column">
                                                <span class="fs-6 fw-bold text-gray-800">Projects</span>
                                                <span class="fs-7 fw-semibold text-muted">Tasts, graphs & charts</span>
                                            </span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Col-->
                                <!--begin:Col-->
                                <div class="col-lg-6 mb-3">
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="{{ route('dashboard') }}" class="menu-link">
                                            <span
                                                class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!!
                                                getIcon('color-swatch', 'text-success fs-1') !!}</span>
                                            <span class="d-flex flex-column">
                                                <span class="fs-6 fw-bold text-gray-800">Online Courses</span>
                                                <span class="fs-7 fw-semibold text-muted">Student progress</span>
                                            </span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Col-->
                                <!--begin:Col-->
                                <div class="col-lg-6 mb-3">
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="{{ route('dashboard') }}" class="menu-link">
                                            <span
                                                class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!!
                                                getIcon('chart-simple', 'text-gray-900 fs-1') !!}</span>
                                            <span class="d-flex flex-column">
                                                <span class="fs-6 fw-bold text-gray-800">Marketing</span>
                                                <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                            </span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Col-->
                                <!--begin:Col-->
                                <div class="col-lg-6 mb-3">
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="{{ route('dashboard') }}" class="menu-link">
                                            <span
                                                class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!!
                                                getIcon('switch', 'text-warning fs-1') !!}</span>
                                            <span class="d-flex flex-column">
                                                <span class="fs-6 fw-bold text-gray-800">Bidding</span>
                                                <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                            </span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Col-->
                                <!--begin:Col-->
                                <div class="col-lg-6 mb-3">
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="{{ route('dashboard') }}" class="menu-link">
                                            <span
                                                class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!!
                                                getIcon('abstract-42', 'text-danger fs-1') !!}</span>
                                            <span class="d-flex flex-column">
                                                <span class="fs-6 fw-bold text-gray-800">POS System</span>
                                                <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                            </span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Col-->
                                <!--begin:Col-->
                                <div class="col-lg-6 mb-3">
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="{{ route('dashboard') }}" class="menu-link">
                                            <span
                                                class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">{!!
                                                getIcon('call', 'text-primary fs-1') !!}</span>
                                            <span class="d-flex flex-column">
                                                <span class="fs-6 fw-bold text-gray-800">Call Center</span>
                                                <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                            </span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Col-->
                            </div>
                            <!--end:Row-->
                            <div class="separator separator-dashed mx-5 my-5"></div>
                            <!--begin:Landing-->
                            <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
                                <div class="d-flex flex-column me-5">
                                    <div class="fs-6 fw-bold text-gray-800">Landing Page Template</div>
                                    <div class="fs-7 fw-semibold text-muted">Onpe page landing template with pricing &
                                        others</div>
                                </div>
                                <a href="{{ route('dashboard') }}" class="btn btn-sm btn-primary fw-bold">Explore</a>
                            </div>
                            <!--end:Landing-->
                        </div>
                        <!--end:Col-->
                        <!--begin:Col-->
                        <div class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
                            <!--begin:Heading-->
                            <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">More Dashboards</h4>
                            <!--end:Heading-->
                            <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="{{ route('dashboard') }}" class="menu-link py-2">
                                    <span class="menu-title">Logistics</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="{{ route('dashboard') }}" class="menu-link py-2">
                                    <span class="menu-title">Website Analytics</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="{{ route('dashboard') }}" class="menu-link py-2">
                                    <span class="menu-title">Finance Performance</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="{{ route('dashboard') }}" class="menu-link py-2">
                                    <span class="menu-title">Store Analytics</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="{{ route('dashboard') }}" class="menu-link py-2">
                                    <span class="menu-title">Social</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="{{ route('dashboard') }}" class="menu-link py-2">
                                    <span class="menu-title">Delivery</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="{{ route('dashboard') }}" class="menu-link py-2">
                                    <span class="menu-title">Crypto</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="{{ route('dashboard') }}" class="menu-link py-2">
                                    <span class="menu-title">School</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="{{ route('dashboard') }}" class="menu-link py-2">
                                    <span class="menu-title">Podcast</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end:Col-->
                    </div>
                    <!--end:Row-->
                </div>
                <!--end:Dashboards menu-->

            </div>
            <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
            class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
            <!--begin:Menu link-->
            <span class="menu-link">
                <span class="menu-title">Apps</span>
                <span class="menu-arrow d-lg-none"></span>
            </span>
            <!--end:Menu link-->
            <!--begin:Menu sub-->
            <!--begin::My apps-->
            <div class="menu menu-sub menu-sub-dropdown menu-column w-100 w-sm-350px" data-kt-menu="true">
                <!--begin::Card-->
                <div class="app-card">
                    <!--begin::Card body-->
                    <div class="card-body py-5">
                        <!--begin::Scroll-->
                        <div class="mh-450px scroll-y me-n5 pe-5">

                            <!--begin::Row-->
                            <div class="row g-2">

                                <div class="col-4">
                                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="bottom-start"
                                        class="menu-item  menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                                        <!--begin:Menu link-->
                                        <a href=""
                                            class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                            <img src="{{ asset('uploads/dashboard.png') }}" class="w-25px h-25px mb-2"
                                                alt="" />
                                            <span class="fw-semibold">Dashboards</span>
                                        </a>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column w-100 w-sm-350px"
                                            data-kt-menu="true">
                                            <!--begin::Card-->
                                            <div class="card">
                                                <!--begin::Card header-->
                                                <div class="card-header">
                                                    <!--begin::Card title-->
                                                    <div class="card-title">My Dashboards</div>
                                                    <!--end::Card title-->

                                                </div>
                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div class="card-body py-5">
                                                    <!--begin::Scroll-->
                                                    <div class="mh-450px scroll-y me-n5 pe-5">
                                                        <!--begin::Row-->
                                                        <div class="row g-2">

                                                            @foreach ($dbusers as $user)

                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="{{ route('view.company.dashboard', ['id' => $user->location_id]) }}"
                                                                    class=" menu-link ">
                                                                    <span
                                                                        class=" symbol symbol-70px symbol-circle me-5">
                                                                        <img src="{{ logo('company_main_logo',$user->id) }}"
                                                                            class="ki-duotone ki-element-11 text-primary fs-1">
                                                                        </img></span>

                                                                    <span class="d-flex flex-column">
                                                                        <span
                                                                            class="fs-6 fw-bold  text-gray-800">{{isset($user)
                                                                            ? $user->first_name .' '.$user->last_name :
                                                                            'Location name'}}</span>
                                                                        <span
                                                                            class="fs-7 fw-semibold text-muted">{{isset($user)
                                                                            ? $user->location_id :
                                                                            '0fu8c2Te17KqLDYyr8RE'}}</span>
                                                                    </span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            @endforeach
                                                            <!--begin::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Scroll-->
                                                </div>
                                                <!--end::Card body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                </div>


                                <!--begin::Col-->
                                <div class="col-4">
                                    <a href="{{ route('property.list') }}"
                                        class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                        <img src="{{ asset('uploads/property.png') }}" class="w-25px h-25px mb-2"
                                            alt="" />
                                        <span class="fw-semibold">PMS</span>
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4">
                                    <a href="{{ route('style.dashboard') }}"
                                        class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">

                                        <img src="{{ asset('uploads/designer.png') }}" class="w-25px h-25px mb-2"
                                            alt="" />
                                        <span class="fw-semibold">Designer</span>
                                    </a>
                                </div>
                                <!--end::Col-->








                                <!--begin::Col-->
                                <div class="col-4">
                                    <a href="#"
                                        class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                        <img src="{{ image('svg/brand-logos/amazon.svg') }}" class="w-25px h-25px mb-2"
                                            alt="" />
                                        <span class="fw-semibold">AWS</span>
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4">
                                    <a href="#"
                                        class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                        <img src="{{ image('svg/brand-logos/angular-icon-1.svg') }}"
                                            class="w-25px h-25px mb-2" alt="" />
                                        <span class="fw-semibold">AngularJS</span>
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4">
                                    <a href="#"
                                        class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                        <img src="{{ image('svg/brand-logos/atica.svg') }}" class="w-25px h-25px mb-2"
                                            alt="" />
                                        <span class="fw-semibold">Atica</span>
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4">
                                    <a href="#"
                                        class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                        <img src="{{ image('svg/brand-logos/beats-electronics.svg') }}"
                                            class="w-25px h-25px mb-2" alt="" />
                                        <span class="fw-semibold">Music</span>
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4">
                                    <a href="#"
                                        class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                        <img src="{{ image('svg/brand-logos/codeigniter.svg') }}"
                                            class="w-25px h-25px mb-2" alt="" />
                                        <span class="fw-semibold">Codeigniter</span>
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4">
                                    <a href="#"
                                        class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                        <img src="{{ image('svg/brand-logos/bootstrap-4.svg') }}"
                                            class="w-25px h-25px mb-2" alt="" />
                                        <span class="fw-semibold">Bootstrap</span>
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4">
                                    <a href="#"
                                        class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                        <img src="{{ image('svg/brand-logos/google-tag-manager.svg') }}"
                                            class="w-25px h-25px mb-2" alt="" />
                                        <span class="fw-semibold">GTM</span>
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4">
                                    <a href="#"
                                        class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                        <img src="{{ image('svg/brand-logos/disqus.svg') }}" class="w-25px h-25px mb-2"
                                            alt="" />
                                        <span class="fw-semibold">Disqus</span>
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4">
                                    <a href="#"
                                        class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                        <img src="{{ image('svg/brand-logos/dribbble-icon-1.svg') }}"
                                            class="w-25px h-25px mb-2" alt="" />
                                        <span class="fw-semibold">Dribble</span>
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4">
                                    <a href="#"
                                        class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                        <img src="{{ image('svg/brand-logos/google-play-store.svg') }}"
                                            class="w-25px h-25px mb-2" alt="" />
                                        <span class="fw-semibold">Play Store</span>
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4">
                                    <a href="#"
                                        class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                        <img src="{{ image('svg/brand-logos/google-podcasts.svg') }}"
                                            class="w-25px h-25px mb-2" alt="" />
                                        <span class="fw-semibold">Podcasts</span>
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4">
                                    <a href="#"
                                        class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                        <img src="{{ image('svg/brand-logos/figma-1.svg') }}" class="w-25px h-25px mb-2"
                                            alt="" />
                                        <span class="fw-semibold">Figma</span>
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4">
                                    <a href="#"
                                        class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                        <img src="{{ image('svg/brand-logos/github.svg') }}" class="w-25px h-25px mb-2"
                                            alt="" />
                                        <span class="fw-semibold">Github</span>
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4">
                                    <a href="#"
                                        class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                        <img src="{{ image('svg/brand-logos/gitlab.svg') }}" class="w-25px h-25px mb-2"
                                            alt="" />
                                        <span class="fw-semibold">Gitlab</span>
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4">
                                    <a href="#"
                                        class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                        <img src="{{ image('svg/brand-logos/instagram-2-1.svg') }}"
                                            class="w-25px h-25px mb-2" alt="" />
                                        <span class="fw-semibold">Instagram</span>
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-4">
                                    <a href="#"
                                        class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                        <img src="{{ image('svg/brand-logos/pinterest-p.svg') }}"
                                            class="w-25px h-25px mb-2" alt="" />
                                        <span class="fw-semibold">Pinterest</span>
                                    </a>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::My apps-->

            <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
            class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
            <!--begin:Menu link-->
            <span class="menu-link">
                <span class="menu-title">Settings</span>
                <span class="menu-arrow d-lg-none"></span>
            </span>
            <!--end:Menu link-->
            <!--begin:Menu sub-->
            <!--begin::My apps-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                data-kt-menu="true">

                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="#" class="menu-link px-5">My Profile</a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                    data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                    <a href="#" class="menu-link px-5">
                        <span class="menu-title">My Subscription</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-5">Referrals</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-5">Billing</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-5">Payments</a>
                        </div>
                        <!--end::Menu item-->

                    </div>
                    <!--end::Menu sub-->
                </div>
                <!--end::Menu item-->

                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                    data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                    <a href="#" class="menu-link px-5">
                        <span class="menu-title position-relative">Mode
                            <span class="ms-5 position-absolute translate-middle-y top-50 end-0">{!!
                                getIcon('night-day', 'theme-light-show fs-2') !!} {!! getIcon('moon', 'theme-dark-show
                                fs-2') !!}</span></span>
                    </a>
                    @include('partials/theme-mode/__menu')
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                    data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                    <a href="#" class="menu-link px-5">
                        <span class="menu-title position-relative">Language
                            <span
                                class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                                <img class="w-15px h-15px rounded-1 ms-2" src="{{ image('flags/united-states.svg') }}"
                                    alt="" /></span>
                        </span>
                    </a>
                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5 active">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="{{ image('flags/united-states.svg') }}" alt="" />
                                </span>
                                English</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="{{ image('flags/spain.svg') }}" alt="" />
                                </span>
                                Spanish</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="{{ image('flags/germany.svg') }}" alt="" />
                                </span>
                                German</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="{{ image('flags/japan.svg') }}" alt="" />
                                </span>
                                Japanese</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="{{ image('flags/france.svg') }}" alt="" />
                                </span>
                                French</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu sub-->
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                    data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                    <a href="#" class="menu-link px-5">
                        <span class="menu-title">Account Settings</span>
                        <span class="menu-arrow"></span>
                    </a>



                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-dropdown w-250 py-4">

                        <div class="menu-item px-3">
                            <a class="menu-link px-5" href="{{ route('setting') }}">
                                <span class="menu-icon">
                                    <img width="25" height="25" src="{{ asset('uploads/setting.png') }}"
                                        alt="settings--v1" />
                                </span>
                                <span class="menu-title">Settings</span>
                            </a>
                        </div>

                        <div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
                            <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                        class="ki-duotone ki-abstract-28 fs-2"><span class="path1"></span><span
                                            class="path2"></span></i></span><span class="menu-title">User
                                    Management</span><span class="menu-arrow"></span></span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion" kt-hidden-height="128"
                                style="display: none; overflow: hidden;">
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                    <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Users</span><span class="menu-arrow"></span></span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion" kt-hidden-height="83"
                                        style="display: none; overflow: hidden;">
                                        <!--begin:Menu item-->



                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('user-management.users.index') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Users List</span></a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->


                                        <div class="menu-item">
                                            <!--begin:Menu link--><a class="menu-link"
                                                href="{{ route('user-management.users.index') }}"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">View User</span></a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->

                                @can('read role management')
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link--><a class="menu-link"
                                        href="{{ route('user-management.roles.index') }}"><span
                                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                            class="menu-title">Roles List</span></a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                @endcan
                            </div>
                        </div>

                        <!--begin::Menu item-->
                        {{-- <div class="menu-item px-3">
                            <a class="menu-link px-5" href="{{ route('role.list') }}">
                                <span class="menu-icon">
                                    <img width="25" height="25" src="{{ asset('uploads/roles.png') }}"
                                        alt="customer-insights-manager" />
                                </span>
                                <span class="menu-title">Roles</span>
                            </a>
                        </div>
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a class="menu-link px-5" href="{{ route('permission.manage') }}">
                                <span class="menu-icon">
                                    <img width="25" height="25" src="{{ asset('uploads/permissions.png') }}"
                                        alt="external-key-user-tanah-basah-basic-outline-tanah-basah" />
                                </span>
                                <span class="menu-title">Manage Permissions</span>
                            </a>
                        </div>
                        <div class="menu-item px-3">
                            <a class="menu-link px-5" href="{{ route('user.list') }}">

                                <span class="menu-icon">
                                    <img width="25" height="25" src="{{ asset('uploads/users.png') }}"
                                        alt="conference-call--v1" />
                                </span>
                                <span class="menu-title">Users</span>
                            </a>
                        </div>
                        <div class="menu-item px-3">
                            <a class="menu-link px-5" href="{{ route('setting') }}">
                                <span class="menu-icon">
                                    <img width="25" height="25" src="{{ asset('uploads/setting.png') }}"
                                        alt="settings--v1" />
                                </span>
                                <span class="menu-title">Settings</span>
                            </a>
                        </div> --}}
                    </div>
                    <!--end::Menu sub-->


                </div>

                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a class="button-ajax menu-link px-5" href="#" data-action="{{ route('logout') }}"
                        data-method="post" data-csrf="{{ csrf_token() }}" data-reload="true">
                        Sign Out
                    </a>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::My apps-->

            <!--end:Menu sub-->
        </div>

    </div>
    <!--end::Menu-->
</div>
<!--end::Menu wrapper-->
