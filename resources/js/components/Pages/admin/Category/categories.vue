<template>
    <div>
        {{ this.$Progress.start() }}
        <!--begin::Content-->
        <div
            class="content d-flex flex-column flex-column-fluid"
            id="kt_content"
        >
            <!--begin::Subheader-->
            <div
                class="subheader py-2 py-lg-6 subheader-solid"
                id="kt_subheader"
            >
                <div
                    class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap"
                >
                    <!--begin::Info-->
                    <div class="d-flex align-items-center flex-wrap mr-1">
                        <!--begin::Page Heading-->
                        <div class="d-flex align-items-baseline flex-wrap mr-5">
                            <!--begin::Page Title-->
                            <h5 class="text-dark font-weight-bold my-1 mr-5">
                                Jobs management system
                            </h5>
                            <!--end::Page Title-->
                            <!--begin::Breadcrumb-->
                            <ul
                                class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm"
                            >
                                <li class="breadcrumb-item">
                                    <router-link to="/" class="text-muted"
                                        >Dashboard</router-link
                                    >
                                </li>
                                <li class="breadcrumb-item">
                                    <router-link
                                        to="/categories"
                                        class="text-muted"
                                        >Category</router-link
                                    >
                                </li>
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page Heading-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Toolbar-->
                    <div class="d-flex align-items-center">
                        <!--begin::Actions-->
                        <div class="col mt-2">
                            <input
                                class="form-control"
                                placeholder="Search"
                                type="search"
                                id="example-search-input"
                            />
                        </div>

                        <!--end::Actions-->
                        <!--begin::Dropdown-->

                        <!--end::Dropdown-->
                    </div>
                    <!--end::Toolbar-->
                </div>
            </div>
            <!--end::Subheader-->
        </div>
        <!-- End Head Section -->
        <!--begin::Container-->
        <div class="container">
            <!--begin::Advance Table Widget 1-->
            <div class="card card-custom gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark"
                            >All Categories Listing</span
                        >
                        <span
                            class="text-muted mt-3 font-weight-bold font-size-sm"
                            >Jobs Categories</span
                        >
                    </h3>
                    <div class="card-toolbar">
                        <a
                            role="button"
                            class="btn btn-primary font-weight-bolder font-size-sm"
                            @click="open_modal"
                        >
                            <span class="svg-icon svg-icon-md svg-icon-white">
                                <!--end::Svg Icon--> </span
                            >New Category</a
                        >
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-0">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table
                            class="table table-head-custom table-vertical-center"
                            id="kt_advance_table_widget_1"
                        >
                            <thead>
                                <tr class="text-left">
                                    <th class="pl-0" style="width: 20px">
                                        <label
                                            class="checkbox checkbox-lg checkbox-inline"
                                        >
                                            <input type="checkbox" value="1" />
                                            <span></span>
                                        </label>
                                    </th>
                                    <th class="pr-0" style="width: 50px">
                                        authors
                                    </th>
                                    <th style="min-width: 200px"></th>
                                    <th style="min-width: 150px">company</th>
                                    <th style="min-width: 150px">progress</th>
                                    <th
                                        class="pr-0 text-right"
                                        style="min-width: 150px"
                                    >
                                        action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pl-0">
                                        <label
                                            class="checkbox checkbox-lg checkbox-inline"
                                        >
                                            <input type="checkbox" value="1" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="pr-0">
                                        <div
                                            class="symbol symbol-50 symbol-light mt-1"
                                        >
                                            <span class="symbol-label">
                                                <img
                                                    src="assets/media/svg/avatars/001-boy.svg"
                                                    class="h-75 align-self-end"
                                                    alt=""
                                                />
                                            </span>
                                        </div>
                                    </td>
                                    <td class="pl-0">
                                        <a
                                            href="#"
                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg"
                                            >Brad Simmons</a
                                        >
                                        <span
                                            class="text-muted font-weight-bold text-muted d-block"
                                            >HTML, JS, ReactJS</span
                                        >
                                    </td>
                                    <td>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg"
                                            >Intertico</span
                                        >
                                        <span
                                            class="text-muted font-weight-bold"
                                            >Web, UI/UX Design</span
                                        >
                                    </td>
                                    <td>
                                        <div
                                            class="d-flex flex-column w-100 mr-2"
                                        >
                                            <div
                                                class="d-flex align-items-center justify-content-between mb-2"
                                            >
                                                <span
                                                    class="text-muted mr-2 font-size-sm font-weight-bold"
                                                    >65%</span
                                                >
                                                <span
                                                    class="text-muted font-size-sm font-weight-bold"
                                                    >Progress</span
                                                >
                                            </div>
                                            <div
                                                class="progress progress-xs w-100"
                                            >
                                                <div
                                                    class="progress-bar bg-danger"
                                                    role="progressbar"
                                                    style="width: 65%"
                                                    aria-valuenow="50"
                                                    aria-valuemin="0"
                                                    aria-valuemax="100"
                                                ></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <a
                                            href="#"
                                            class="btn btn-icon btn-light btn-hover-primary btn-sm"
                                        >
                                            <span
                                                class="svg-icon svg-icon-md svg-icon-primary"
                                            >
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="24px"
                                                    height="24px"
                                                    viewBox="0 0 24 24"
                                                    version="1.1"
                                                >
                                                    <g
                                                        stroke="none"
                                                        stroke-width="1"
                                                        fill="none"
                                                        fill-rule="evenodd"
                                                    >
                                                        <rect
                                                            x="0"
                                                            y="0"
                                                            width="24"
                                                            height="24"
                                                        />
                                                        <path
                                                            d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                            fill="#000000"
                                                        />
                                                        <path
                                                            d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                            fill="#000000"
                                                            opacity="0.3"
                                                        />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                        <a
                                            href="#"
                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3"
                                        >
                                            <span
                                                class="svg-icon svg-icon-md svg-icon-primary"
                                            >
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="24px"
                                                    height="24px"
                                                    viewBox="0 0 24 24"
                                                    version="1.1"
                                                >
                                                    <g
                                                        stroke="none"
                                                        stroke-width="1"
                                                        fill="none"
                                                        fill-rule="evenodd"
                                                    >
                                                        <rect
                                                            x="0"
                                                            y="0"
                                                            width="24"
                                                            height="24"
                                                        />
                                                        <path
                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                            fill="#000000"
                                                            fill-rule="nonzero"
                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"
                                                        />
                                                        <path
                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                            fill="#000000"
                                                            fill-rule="nonzero"
                                                            opacity="0.3"
                                                        />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                        <a
                                            href="#"
                                            class="btn btn-icon btn-light btn-hover-primary btn-sm"
                                        >
                                            <span
                                                class="svg-icon svg-icon-md svg-icon-primary"
                                            >
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="24px"
                                                    height="24px"
                                                    viewBox="0 0 24 24"
                                                    version="1.1"
                                                >
                                                    <g
                                                        stroke="none"
                                                        stroke-width="1"
                                                        fill="none"
                                                        fill-rule="evenodd"
                                                    >
                                                        <rect
                                                            x="0"
                                                            y="0"
                                                            width="24"
                                                            height="24"
                                                        />
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000"
                                                            fill-rule="nonzero"
                                                        />
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000"
                                                            opacity="0.3"
                                                        />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">
                                        <label
                                            class="checkbox checkbox-lg checkbox-inline"
                                        >
                                            <input type="checkbox" value="1" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="pr-0">
                                        <div
                                            class="symbol symbol-50 symbol-light mt-1"
                                        >
                                            <span class="symbol-label">
                                                <img
                                                    src="assets/media/svg/avatars/018-girl-9.svg"
                                                    class="h-75 align-self-end"
                                                    alt=""
                                                />
                                            </span>
                                        </div>
                                    </td>
                                    <td class="pl-0">
                                        <a
                                            href="#"
                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg"
                                            >Jessie Clarcson</a
                                        >
                                        <span
                                            class="text-muted font-weight-bold text-muted d-block"
                                            >C#, ASP.NET, MS SQL</span
                                        >
                                    </td>
                                    <td>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg"
                                            >Agoda</span
                                        >
                                        <span
                                            class="text-muted font-weight-bold"
                                            >Houses &amp; Hotels</span
                                        >
                                    </td>
                                    <td>
                                        <div
                                            class="d-flex flex-column w-100 mr-2"
                                        >
                                            <div
                                                class="d-flex align-items-center justify-content-between mb-2"
                                            >
                                                <span
                                                    class="text-muted mr-2 font-size-sm font-weight-bold"
                                                    >83%</span
                                                >
                                                <span
                                                    class="text-muted font-size-sm font-weight-bold"
                                                    >Progress</span
                                                >
                                            </div>
                                            <div
                                                class="progress progress-xs w-100"
                                            >
                                                <div
                                                    class="progress-bar bg-success"
                                                    role="progressbar"
                                                    style="width: 83%"
                                                    aria-valuenow="50"
                                                    aria-valuemin="0"
                                                    aria-valuemax="100"
                                                ></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <a
                                            href="#"
                                            class="btn btn-icon btn-light btn-hover-primary btn-sm"
                                        >
                                            <span
                                                class="svg-icon svg-icon-md svg-icon-primary"
                                            >
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="24px"
                                                    height="24px"
                                                    viewBox="0 0 24 24"
                                                    version="1.1"
                                                >
                                                    <g
                                                        stroke="none"
                                                        stroke-width="1"
                                                        fill="none"
                                                        fill-rule="evenodd"
                                                    >
                                                        <rect
                                                            x="0"
                                                            y="0"
                                                            width="24"
                                                            height="24"
                                                        />
                                                        <path
                                                            d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                            fill="#000000"
                                                        />
                                                        <path
                                                            d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                            fill="#000000"
                                                            opacity="0.3"
                                                        />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                        <a
                                            href="#"
                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3"
                                        >
                                            <span
                                                class="svg-icon svg-icon-md svg-icon-primary"
                                            >
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="24px"
                                                    height="24px"
                                                    viewBox="0 0 24 24"
                                                    version="1.1"
                                                >
                                                    <g
                                                        stroke="none"
                                                        stroke-width="1"
                                                        fill="none"
                                                        fill-rule="evenodd"
                                                    >
                                                        <rect
                                                            x="0"
                                                            y="0"
                                                            width="24"
                                                            height="24"
                                                        />
                                                        <path
                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                            fill="#000000"
                                                            fill-rule="nonzero"
                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"
                                                        />
                                                        <path
                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                            fill="#000000"
                                                            fill-rule="nonzero"
                                                            opacity="0.3"
                                                        />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                        <a
                                            href="#"
                                            class="btn btn-icon btn-light btn-hover-primary btn-sm"
                                        >
                                            <span
                                                class="svg-icon svg-icon-md svg-icon-primary"
                                            >
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="24px"
                                                    height="24px"
                                                    viewBox="0 0 24 24"
                                                    version="1.1"
                                                >
                                                    <g
                                                        stroke="none"
                                                        stroke-width="1"
                                                        fill="none"
                                                        fill-rule="evenodd"
                                                    >
                                                        <rect
                                                            x="0"
                                                            y="0"
                                                            width="24"
                                                            height="24"
                                                        />
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000"
                                                            fill-rule="nonzero"
                                                        />
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000"
                                                            opacity="0.3"
                                                        />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">
                                        <label
                                            class="checkbox checkbox-lg checkbox-inline"
                                        >
                                            <input type="checkbox" value="1" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="pr-0">
                                        <div
                                            class="symbol symbol-50 symbol-lightv mt-1"
                                        >
                                            <span class="symbol-label">
                                                <img
                                                    src="assets/media/svg/avatars/047-girl-25.svg"
                                                    class="h-75 align-self-end"
                                                    alt=""
                                                />
                                            </span>
                                        </div>
                                    </td>
                                    <td class="pl-0">
                                        <a
                                            href="#"
                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg"
                                            >Lebron Wayde</a
                                        >
                                        <span
                                            class="text-muted font-weight-bold text-muted d-block"
                                            >PHP, Laravel, VueJS</span
                                        >
                                    </td>
                                    <td>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg"
                                            >RoadGee</span
                                        >
                                        <span
                                            class="text-muted font-weight-bold"
                                            >Transportation</span
                                        >
                                    </td>
                                    <td>
                                        <div
                                            class="d-flex flex-column w-100 mr-2"
                                        >
                                            <div
                                                class="d-flex align-items-center justify-content-between mb-2"
                                            >
                                                <span
                                                    class="text-muted mr-2 font-size-sm font-weight-bold"
                                                    >47%</span
                                                >
                                                <span
                                                    class="text-muted font-size-sm font-weight-bold"
                                                    >Progress</span
                                                >
                                            </div>
                                            <div
                                                class="progress progress-xs w-100"
                                            >
                                                <div
                                                    class="progress-bar bg-primary"
                                                    role="progressbar"
                                                    style="width: 83%"
                                                    aria-valuenow="50"
                                                    aria-valuemin="0"
                                                    aria-valuemax="100"
                                                ></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <a
                                            href="#"
                                            class="btn btn-icon btn-light btn-hover-primary btn-sm"
                                        >
                                            <span
                                                class="svg-icon svg-icon-md svg-icon-primary"
                                            >
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="24px"
                                                    height="24px"
                                                    viewBox="0 0 24 24"
                                                    version="1.1"
                                                >
                                                    <g
                                                        stroke="none"
                                                        stroke-width="1"
                                                        fill="none"
                                                        fill-rule="evenodd"
                                                    >
                                                        <rect
                                                            x="0"
                                                            y="0"
                                                            width="24"
                                                            height="24"
                                                        />
                                                        <path
                                                            d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                            fill="#000000"
                                                        />
                                                        <path
                                                            d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                            fill="#000000"
                                                            opacity="0.3"
                                                        />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                        <a
                                            href="#"
                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3"
                                        >
                                            <span
                                                class="svg-icon svg-icon-md svg-icon-primary"
                                            >
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="24px"
                                                    height="24px"
                                                    viewBox="0 0 24 24"
                                                    version="1.1"
                                                >
                                                    <g
                                                        stroke="none"
                                                        stroke-width="1"
                                                        fill="none"
                                                        fill-rule="evenodd"
                                                    >
                                                        <rect
                                                            x="0"
                                                            y="0"
                                                            width="24"
                                                            height="24"
                                                        />
                                                        <path
                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                            fill="#000000"
                                                            fill-rule="nonzero"
                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"
                                                        />
                                                        <path
                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                            fill="#000000"
                                                            fill-rule="nonzero"
                                                            opacity="0.3"
                                                        />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                        <a
                                            href="#"
                                            class="btn btn-icon btn-light btn-hover-primary btn-sm"
                                        >
                                            <span
                                                class="svg-icon svg-icon-md svg-icon-primary"
                                            >
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="24px"
                                                    height="24px"
                                                    viewBox="0 0 24 24"
                                                    version="1.1"
                                                >
                                                    <g
                                                        stroke="none"
                                                        stroke-width="1"
                                                        fill="none"
                                                        fill-rule="evenodd"
                                                    >
                                                        <rect
                                                            x="0"
                                                            y="0"
                                                            width="24"
                                                            height="24"
                                                        />
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000"
                                                            fill-rule="nonzero"
                                                        />
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000"
                                                            opacity="0.3"
                                                        />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0">
                                        <label
                                            class="checkbox checkbox-lg checkbox-inline"
                                        >
                                            <input type="checkbox" value="1" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="pr-0">
                                        <div
                                            class="symbol symbol-50 symbol-light mt-1"
                                        >
                                            <span class="symbol-label">
                                                <img
                                                    src="assets/media/svg/avatars/014-girl-7.svg"
                                                    class="h-75 align-self-end"
                                                    alt=""
                                                />
                                            </span>
                                        </div>
                                    </td>
                                    <td class="pl-0">
                                        <a
                                            href="#"
                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg"
                                            >Natali Trump</a
                                        >
                                        <span
                                            class="text-muted font-weight-bold text-muted d-block"
                                            >Python, PostgreSQL, ReactJS</span
                                        >
                                    </td>
                                    <td>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg"
                                            >The Hill</span
                                        >
                                        <span
                                            class="text-muted font-weight-bold"
                                            >Insurance</span
                                        >
                                    </td>
                                    <td>
                                        <div
                                            class="d-flex flex-column w-100 mr-2"
                                        >
                                            <div
                                                class="d-flex align-items-center justify-content-between mb-2"
                                            >
                                                <span
                                                    class="text-muted mr-2 font-size-sm font-weight-bold"
                                                    >71%</span
                                                >
                                                <span
                                                    class="text-muted font-size-sm font-weight-bold"
                                                    >Progress</span
                                                >
                                            </div>
                                            <div
                                                class="progress progress-xs w-100"
                                            >
                                                <div
                                                    class="progress-bar bg-danger"
                                                    role="progressbar"
                                                    style="width: 71%"
                                                    aria-valuenow="50"
                                                    aria-valuemin="0"
                                                    aria-valuemax="100"
                                                ></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pr-0 text-right">
                                        <a
                                            href="#"
                                            class="btn btn-icon btn-light btn-hover-primary btn-sm"
                                        >
                                            <span
                                                class="svg-icon svg-icon-md svg-icon-primary"
                                            >
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="24px"
                                                    height="24px"
                                                    viewBox="0 0 24 24"
                                                    version="1.1"
                                                >
                                                    <g
                                                        stroke="none"
                                                        stroke-width="1"
                                                        fill="none"
                                                        fill-rule="evenodd"
                                                    >
                                                        <rect
                                                            x="0"
                                                            y="0"
                                                            width="24"
                                                            height="24"
                                                        />
                                                        <path
                                                            d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                            fill="#000000"
                                                        />
                                                        <path
                                                            d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                            fill="#000000"
                                                            opacity="0.3"
                                                        />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                        <a
                                            href="#"
                                            class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3"
                                        >
                                            <span
                                                class="svg-icon svg-icon-md svg-icon-primary"
                                            >
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="24px"
                                                    height="24px"
                                                    viewBox="0 0 24 24"
                                                    version="1.1"
                                                >
                                                    <g
                                                        stroke="none"
                                                        stroke-width="1"
                                                        fill="none"
                                                        fill-rule="evenodd"
                                                    >
                                                        <rect
                                                            x="0"
                                                            y="0"
                                                            width="24"
                                                            height="24"
                                                        />
                                                        <path
                                                            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                            fill="#000000"
                                                            fill-rule="nonzero"
                                                            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"
                                                        />
                                                        <path
                                                            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                            fill="#000000"
                                                            fill-rule="nonzero"
                                                            opacity="0.3"
                                                        />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                        <a
                                            href="#"
                                            class="btn btn-icon btn-light btn-hover-primary btn-sm"
                                        >
                                            <span
                                                class="svg-icon svg-icon-md svg-icon-primary"
                                            >
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="24px"
                                                    height="24px"
                                                    viewBox="0 0 24 24"
                                                    version="1.1"
                                                >
                                                    <g
                                                        stroke="none"
                                                        stroke-width="1"
                                                        fill="none"
                                                        fill-rule="evenodd"
                                                    >
                                                        <rect
                                                            x="0"
                                                            y="0"
                                                            width="24"
                                                            height="24"
                                                        />
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000"
                                                            fill-rule="nonzero"
                                                        />
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000"
                                                            opacity="0.3"
                                                        />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>
        </div>

        <!-- Modal-->
        <div
            class="modal fade"
            id="modal_open"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5
                            class="modal-title"
                            id="exampleModalLabel"
                            v-if="!is_editmode"
                        >
                            Create New Category
                        </h5>
                        <h5 class="modal-title" id="exampleModalLabel" v-else>
                            Create Update Category
                        </h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <b-form @submit="onSubmit" v-if="show">
                        <div class="modal-body">
                            <b-form-group
                                id="input-group-1"
                                label="Category Name"
                                label-for="input-1"
                            >
                                <b-form-input
                                    id="input-1"
                                    v-model="form.name"
                                    type="text"
                                    required
                                    placeholder="Enter name"
                                ></b-form-input>
                            </b-form-group>
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-light-primary font-weight-bold"
                                data-dismiss="modal"
                            >
                                Close
                            </button>
                            <b-button type="submit" variant="primary"
                                >Save</b-button
                            >
                        </div>
                    </b-form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            is_editmode: false,
            form: {
                email: "",
                name: "",
                food: null,
                checked: []
            },
            show: true
        };
    },
    methods: {
        onSubmit(evt) {
            evt.preventDefault();
            alert(JSON.stringify(this.form));
        },
        open_modal() {
            $("#modal_open").modal("show");
        }
    },
    mounted() {
        this.$Progress.finish();
    }
};
</script>

<style></style>
