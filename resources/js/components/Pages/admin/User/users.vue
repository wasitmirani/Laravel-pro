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
                User management system
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
                  <router-link to="/users" class="text-muted"
                    >Users</router-link
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
    
  </div>
</template>

<script>
export default {
  mounted() {
    this.$Progress.finish();
  },
};
</script>

<style>
</style>
