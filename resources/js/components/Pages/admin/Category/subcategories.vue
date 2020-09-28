<template>
  <div>
    {{ this.$Progress.start() }}
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
      <!--begin::Subheader-->
      <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
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
                  <router-link to="/" class="text-muted">Dashboard</router-link>
                </li>
                <li class="breadcrumb-item">
                  <router-link to="/subcategories" class="text-muted"
                    >Sub Category</router-link
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
                v-on:keyup="searchAfterDebounce"
                v-model="query"
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
              >All subcategories Listing</span
            >
            <span class="text-muted mt-3 font-weight-bold font-size-sm"
              >Jobs subcategories</span
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
              >New Sub Category</a
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
                    <label class="checkbox checkbox-lg checkbox-inline">
                      <input type="checkbox" value="1" />
                      <span></span>
                    </label>
                  </th>
                  <th class="pr-0" style="width: 50px">Select All</th>
                  <th style="min-width: 200px"></th>
                  <th style="min-width: 150px">Name</th>
                  <th style="min-width: 150px">Status</th>
                  <th style="min-width: 150px">Descripation</th>
                  <th class="pr-0 text-right" style="min-width: 150px">
                    action
                  </th>
                </tr>
              </thead>
              <tbody>
                <b-overlay :show="is_dataload" no-wrap> </b-overlay>

                <tr v-for="item in subcategories.data" :key="item.id">
                  <td class="pl-0">
                    <label class="checkbox checkbox-lg checkbox-inline">
                      <input type="checkbox" value="1" />
                      <span></span>
                    </label>
                  </td>
                  <td class="pr-0">
                    <div class="symbol symbol-50 symbol-light mt-1">
                      <span class="symbol-label">
                        <p
                          v-if="item.thumbnail == null || item.thumbnail == ''"
                        >
                          <vue-initials-img :name="item.name" />
                        </p>
                        <p v-else>
                          <img
                            :src="
                              '' +
                              $host_url +
                              '/images/category/' +
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

                  <td>
                    <div class="d-flex flex-column w-100 mr-2">
                      <div
                        class="d-flex align-items-center justify-content-between mb-2"
                      >
                        <b-badge pill variant="success" v-if="item.status == 1"
                          >Active</b-badge
                        >
                        <b-badge pill variant="danger" v-if="item.status == 0"
                          >Unactivated</b-badge
                        >
                      </div>
                    </div>
                  </td>
                  <td>
                    <span
                      class="text-dark-75 font-weight-bolder d-block font-size-lg"
                      >{{ item.des.substring(0, 10) }}....</span
                    >
                  </td>
                  <td class="pr-0 text-right">
                    <a role="button" @click="edit_mode(item)">
                      <i class="fas fa-edit text-primary"></i
                    ></a>
                    |
                    <a role="button" @click="delete_record(item)">
                      <i class="fas fa-trash text-danger"></i
                    ></a>
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
            <h5 class="modal-title" id="exampleModalLabel" v-if="!is_editmode">
              Create New Sub Category
            </h5>
            <h5 class="modal-title" id="exampleModalLabel" v-else>
              Create Update Sub Category
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
              <a :href="$host_url + '/images/category/' + img_show_url">
                <img
                  :src="'' + $host_url + '/images/category/' + img_show_url"
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
                <b-form-select v-model="form.category" class="mb-3">
                  <div v-for="item in categories" :key="item.id">
                    <b-form-select-option :value="item.id">{{
                      item.name
                    }}</b-form-select-option>
                  </div>
                </b-form-select>
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
              <b-form-group
                id="input-group-1"
                label="Category Descripation"
                label-for="input-1"
              >
                <b-form-textarea
                  id="textarea"
                  v-model="form.des"
                  placeholder="Enter something..."
                  rows="3"
                  max-rows="6"
                ></b-form-textarea>
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
              <b-button type="submit" variant="primary" v-if="!is_editmode"
                >Save</b-button
              >
              <b-button type="submit" variant="success" v-else>Update</b-button>
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
  data() {
    return {
      is_editmode: false,
      is_dataload: false,
      query: "",
      img_show_url: "",
      edit_id: "",
      auth_user: {},
      subcategories: {},
      categories: {},
      form: {
        name: "",
        des: "",
        category: "",
        thumbnail: null,
      },
      show: true,
    };
  },
  methods: {
    //asyncdata
    searchAfterDebounce: _.debounce(
      function () {
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
              "/subcategories/filter?query=" +
              this.query +
              "&&token=" +
              this.auth_user.api_token
          )
          .then((response) => {
            this.is_dataload = false;
            this.subcategories = response.data;
          });
      } else {
        this.get_subcategories();
      }
    },
    get_subcategories() {
      this.is_dataload = true;
      axios
        .get(
          this.$host_apiurl +
            "/subcategories/filter?query" +
            this.query +
            "&&token=" +
            this.auth_user.api_token
        )
        .then((res) => {
          this.subcategories = res.data;
          this.is_dataload = false;
        });
    },
    get_subcategories() {
      this.is_dataload = true;
      axios
        .get(
          this.$host_apiurl +
            "/subcategories/show?token=" +
            this.auth_user.api_token
        )
        .then((res) => {
          this.subcategories = res.data;
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
        confirmButtonText: "Yes, delete it!",
      }).then((result) => {
        if (result.isConfirmed) {
          axios
            .get(
              this.$host_apiurl +
                "/subcategories/delete/" +
                item.id +
                "?token=" +
                this.auth_user.api_token
            )
            .then((res) => {
              Swal.fire("Deleted!", "Your file has been deleted.", "success");
              this.get_subcategories();
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
      frmdata.append("des", this.form.des);
      frmdata.append("thumbnail", this.form.thumbnail);
      if (!this.is_editmode) {
        axios
          .post(
            this.$host_apiurl +
              "/subcategories/store?token=" +
              this.auth_user.api_token,
            frmdata
          )
          .then((res) => {
            $("#modal_open").modal("hide");
            this.get_subcategories();
            Swal.fire({
              position: "top-center",
              icon: "success",
              title: "Category name has been saved",
              showConfirmButton: false,
              timer: 1500,
            });
          })
          .catch((er) => {
            if (er.response.status == 422) {
              $("#modal_open").modal("hide");
              Swal.fire({
                title: "Duplicate",
                text: "This Category has already been taken.",
                icon: "warning",
              });
            }
          });
      } else {
        axios
          .post(
            this.$host_apiurl +
              "/subcategories/update?token=" +
              this.auth_user.api_token,
            frmdata
          )
          .then((res) => {
            $("#modal_open").modal("hide");
            this.get_subcategories();
            Swal.fire({
              position: "top-center",
              icon: "success",
              title: "Sub Category name has been update",
              showConfirmButton: false,
              timer: 1500,
            });
          })
          .catch((er) => {
            if (er.response.status == 422) {
              $("#modal_open").modal("hide");
              Swal.fire({
                title: "Duplicate",
                text: "This Sub Category has already been taken.",
                icon: "warning",
              });
            }
          });
      }
    },
    open_modal() {
      this.is_editmode = false;
      this.form = {};
      $("#modal_open").modal("show");
    },
    get_categories() {
      axios
        .get(
          this.$host_apiurl +
            "/subcategories/get/categories?token=" +
            this.auth_user.api_token
        )
        .then((res) => {
          this.categories = res.data;
        });
    },
  },
  mounted() {
    $("#kt_select2_1").select2({
      placeholder: "Select a state Select a state",
    });

    this.auth_user = this.$attrs["authuser"];
    this.get_subcategories();

    this.$Progress.finish();
    this.get_categories();
  },
};
</script>

<style></style>
