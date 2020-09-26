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
                                    <td class="pr-0 text-right"></td>
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
                            <b-form-group
                                id="input-group-1"
                                label="Category Thumbnail"
                                label-for="input-1"
                            >
                                <b-form-file
                                    v-model="form.thumbnail"
                                    :state="Boolean(form.thumbnail)"
                                    placeholder="Choose a file or drop it here..."
                                    drop-placeholder="Drop file here..."
                                ></b-form-file>
                            </b-form-group>
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-light-danger font-weight-bold"
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
                thumbnail: null
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
