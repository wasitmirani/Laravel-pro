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
                                User management system
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
                                    <router-link to="/users" class="text-muted"
                                        >Users</router-link
                                    >
                                </li>
                                <li class="breadcrumb-item">
                                    <router-link to="/roles" class="text-muted"
                                        >Roles</router-link
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
        <!--begin::Container-->
        <div class="container">
            <!--begin::Advance Table Widget 1-->
            <div class="card card-custom gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark"
                            >All Role Listing</span
                        >
                        <span
                            class="text-muted mt-3 font-weight-bold font-size-sm"
                            >Roles List</span
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
                            >New Role</a
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
                                        Select All
                                    </th>
                                    <th style="min-width: 200px"></th>
                                    <th style="min-width: 150px">Name</th>


                                    <th
                                        class="pr-0 text-right"
                                        style="min-width: 150px"
                                    >
                                        action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <b-overlay :show="is_dataload" no-wrap>
                                </b-overlay>

                                <tr v-for="item in users.data" :key="item.id">
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
                                                <p
                                                    v-if="
                                                        item.thumbnail ==
                                                            null ||
                                                            item.thumbnail == ''
                                                    "
                                                >
                                                    <vue-initials-img
                                                     style="width: 50px; "
                                                        :name="item.name"
                                                    />
                                                </p>
                                                <p v-else>
                                                    <img
                                                        :src="
                                                            '' +
                                                                $host_url +
                                                                '/images/Role/' +
                                                                item.thumbnail
                                                        "
                                                        style="width: 60px"
                                                        class="h-75 align-self-end"
                                                        alt=""
                                                    />
                                                </p>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="pl-0">
                                        <a
                                            href="#"
                                            class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg"
                                        ></a>
                                        <!-- <span
                                            class="text-muted font-weight-bold text-muted d-block"
                                            >HTML, JS, ReactJS</span
                                        > -->
                                    </td>
                                    <td>
                                        <div
                                            class="d-flex align-items-center justify-content-between mb-2"
                                        >
                                            <span
                                                class="text-dark-75 font-weight-bolder d-block font-size-lg"
                                                >{{ item.name }}</span
                                            >
                                        </div>
                                    </td>



                                    <td class="pr-0 text-right">
                                        <a
                                            role="button"
                                            @click="edit_mode(item)"
                                        >
                                            <i
                                                class="fas fa-edit text-primary"
                                            ></i
                                        ></a>
                                        |
                                        <a
                                            role="button"
                                            @click="delete_record(item)"
                                        >
                                            <i
                                                class="fas fa-trash text-danger"
                                            ></i
                                        ></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                    <hr />
                    <div class="row justify-content-between align-items-center">
                        <pagination
                            :data="users"
                            :limit="2"
                            @pagination-change-page="get_roles"
                        ></pagination>
                    </div>
                </div>
                <!--end::Body-->

                <!--begin::Pagination-->

                <!--end:: Pagination-->
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
                            Create New Role
                        </h5>
                        <h5 class="modal-title" id="exampleModalLabel" v-else>
                             Update Role
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
                    <div
                        class="row mt-4 d-flex justify-content-center text-center"
                        v-if="is_editmode"
                    >
                        <p v-if="img_show_url == null || img_show_url == ''">
                            <vue-initials-img :name="this.form.name" />
                        </p>
                        <p v-else>
                            <a
                                :href="
                                    $host_url + '/images/users/' + img_show_url
                                "
                            >
                                <img
                                    :src="
                                        '' +
                                            $host_url +
                                            '/images/users/' +
                                            img_show_url
                                    "
                                    style="width: 250px; height: 350"
                                    class="h-75 align-self-end"
                                    alt=""
                                />
                            </a>
                        </p>
                    </div>
                    <b-form @submit="onSubmit" v-if="show">
                        <div class="modal-body">
                            <b-form-group
                                id="input-group-1"
                                label="User Role"
                                label-for="input-1"
                            >
                                <b-form-input
                                    id="input-1"
                                    v-model="form.name"
                                    type="text"
                                    required
                                    placeholder="Enter name"
                                    aria-required="true"
                                ></b-form-input>
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
                            <b-button
                                type="submit"
                                variant="primary"
                                v-if="!is_editmode"
                                >Save</b-button
                            >
                            <b-button type="submit" variant="success" v-else
                                >Update</b-button
                            >
                        </div>
                    </b-form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
window._ = require("lodash");

export default {
    plugins: ["~/plugins/vue-formulate"],
    data() {
        return {
            is_editmode: false,
            is_dataload: false,
            query: "",
            img_show_url: "",
            edit_id: "",
            auth_user: {},
            users: {},
            form: {
                name: "",
                des: "",
                thumbnail: null
            },
            show: true
        };
    },
    methods: {
        //asyncdata
        searchAfterDebounce: _.debounce(
            function() {
                this.is_dataload = true;
                this.search();
            },
            500 // 500 milliseconds
        ),

        //search data
        search() {
            if (this.query.length > 2) {
                axios
                    .get(
                        this.$host_apiurl +
                            "/users/filter?query=" +
                            this.query +
                            "&&token=" +
                            this.auth_user.api_token
                    )
                    .then(response => {
                        this.is_dataload = false;
                        this.users = response.data;
                    });
            } else {
                this.get_roles();
            }
        },
        get_roles() {
            this.is_dataload = true;
            axios
                .get(
                    this.$host_apiurl +
                        "/user/filter?query" +
                        this.query +
                        "&&token=" +
                        this.auth_user.api_token
                )
                .then(res => {
                    this.users = res.data;
                    this.is_dataload = false;
                });
        },
        get_roles(page = 1) {
            this.is_dataload = true;
            axios
                .get(
                    this.$host_apiurl +
                        "/role/all?page=" +
                        page +
                        "&token=" +
                        this.auth_user.api_token
                )
                .then(res => {
                    this.users = res.data;
                    this.is_dataload = false;
                });
        },
        delete_record(item) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then(result => {
                if (result.isConfirmed) {
                    axios
                        .get(
                            this.$host_apiurl +
                                "/role/delete/" +
                                item.id +
                                "?token=" +
                                this.auth_user.api_token
                        )
                        .then(res => {
                            Swal.fire(
                                "Deleted!",
                                "Your file has been deleted.",
                                "success"
                            );
                            this.get_roles();
                        });
                }
            });
        },
        edit_mode(item) {
            this.img_show_url = "";
            (this.is_editmode = true), $("#modal_open").modal("show");
            this.edit_id = item.id;
            this.form.name = item.name;
            this.form.des = item.des;
            this.img_show_url = item.thumbnail;
        },
        onSubmit(evt) {
            evt.preventDefault();
            let frmdata = new FormData();
            frmdata.append("name", this.form.name);
            frmdata.append("id", this.edit_id);


            if (!this.is_editmode) {
                axios
                    .post(
                        this.$host_apiurl +
                            "/role/store?token=" +
                            this.auth_user.api_token,
                        frmdata
                    )
                    .then(res => {
                        $("#modal_open").modal("hide");
                        this.get_roles();
                        Swal.fire({
                            position: "top-center",
                            icon: "success",
                            title: "Role name has been saved",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    })
                    .catch(er => {
                        if (er.response.status == 422) {
                            $("#modal_open").modal("hide");
                            Swal.fire({
                                title: "Duplicate",
                                text: "This Role has already been taken.",
                                icon: "warning"
                            });
                        }
                    });
            } else {
                axios
                    .post(
                        this.$host_apiurl +
                            "/role/update?token=" +
                            this.auth_user.api_token,
                        frmdata
                    )
                    .then(res => {
                        $("#modal_open").modal("hide");
                        this.get_roles();
                        Swal.fire({
                            position: "top-center",
                            icon: "success",
                            title: "Role name has been update",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    })
                    .catch(er => {
                        if (er.response.status == 422) {
                            $("#modal_open").modal("hide");
                            Swal.fire({
                                title: "Duplicate",
                                text: "This Role has already been taken.",
                                icon: "warning"
                            });
                        }
                    });
            }
        },
        open_modal() {
            this.is_editmode = false;
            this.form = {};
            $("#modal_open").modal("show");
        }
    },
    mounted() {
        this.auth_user = this.$attrs["authuser"];
        this.get_roles();
        this.$Progress.finish();
    }
};
</script>
