<div class="card card-flush h-72 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header pt-5">
        <!--begin::Title-->
        <div class="card-title d-flex flex-column">
            <!--begin::Amount-->
            <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">{{ count($assigned_per_user)
                }}</span>
            <!--end::Amount-->

            <!--begin::Subtitle-->
            <span class="text-gray-500 pt-1 fw-semibold fs-6">Total Users</span>
            <!--end::Subtitle-->
        </div>
        <!--end::Title-->
    </div>
    <!--end::Header-->

    @php
    // Limit to the first 12 visible users
    $visibleUsers = array_slice($assigned_per_user, 0, 9);
    $remainingCount = count($assigned_per_user) - 9;
    @endphp
    <div class="card-body d-flex flex-column justify-content-end pe-0">
        <!--begin::Title-->
        <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Our Heroes</span>
        <!--end::Title-->

        <!--begin::Users group-->
        <div class="symbol-group symbol-hover flex-nowrap">
            @foreach ($visibleUsers as $key => $user)
            @php
            // Explode the "name - email" string to extract only the name part
            $key_split = explode('-', trim($key)); // Split the "Name - Email" string
            $name = $key_split[0] ?? 'X'; // First part is the name
            $initials = strtoupper(substr($name, 0, 1)); // Get the first letter of the name for initials
            $bgColor = getRandomColor(); // Random background color for the initials
            @endphp
            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="{{ $name }}">
                <span class="symbol-label" style="background-color: {{ $bgColor }}; color: #fff;">
                    {{ $initials }}
                </span>
            </div>
            @endforeach

            <!-- Show the "+N" for remaining users if there are more than 12 -->
            @if ($remainingCount > 0)
            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                data-bs-target="#kt_modal_view_users">
                <span class="symbol-label bg-light text-gray-400 fs-8 fw-bold">+{{ $remainingCount }}</span>
            </a>
            @endif
        </div>
        <!--end::Users group-->
    </div>
</div>
<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    {!! getIcon('cross', 'fs-1') !!}</div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">Browse Users</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-muted fw-semibold fs-5">If you need more info, please check out our
                        <a href="#" class="link-primary fw-bold">Users Directory</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Users-->

                <div class="mb-15">
                    <!--begin::List-->
                    <div class="mh-375px scroll-y me-n7 pe-7">
                        <!--begin::User-->
                        @foreach ($assigned_per_user as $key => $asu)
                        @php

                        $key_split = explode('-', trim($key)); // Explode the name and email
                        $name = $key_split[0] ?? 'X';
                        $email = $key_split[1] ?? '';
                        $initials = strtoupper(substr($name, 0, 1));
                        $bgColor = getRandomColor();
                        $total_sales = count($asu);
                        @endphp
                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                    title="{{ $name }}">
                                    <span class="symbol-label" style="background-color: {{ $bgColor }}; color: #fff;">{{
                                        $initials
                                        }}</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-6">
                                    <!--begin::Name-->
                                    <a href="#"
                                        class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">{{
                                        $name }}</a>
                                    <!--end::Name-->
                                    <!--begin::Email-->
                                    <div class="fw-semibold text-muted">{{ $email }}</div>
                                    <!--end::Email-->
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Stats-->
                            <div class="d-flex">
                                <!--begin::Sales-->
                                <div class="text-end">
                                    @php
                                    $amount = 0;
                                    foreach ($asu as $key => $value) {
                                    if ($value && ($value['status'] = 'won')) {
                                    $amount += $value['monetary_value'] ?? 0;
                                    }
                                    }
                                    @endphp
                                    <div class="fs-5 fw-bold text-gray-900">$ {{ $amount }}</div>
                                    <div class="fs-7 text-muted">Sales</div>
                                </div>
                                <!--end::Sales-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        @endforeach
                        <!--end::User-->
                    </div>
                    <!--end::List-->
                </div>
                <!--end::Users-->
                <!--begin::Notice-->
                <div class="d-flex justify-content-between">
                    <!--begin::Label-->
                    <div class="fw-semibold">
                        <label class="fs-6">Adding Users by Team Members</label>
                        <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                    </div>
                    <!--end::Label-->

                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>