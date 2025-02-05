@extends('layouts.main')

@section('title','Terra || Home')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title> Admin Transaction - Dashboard</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Font -->
  <link href="../../css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets/css/vendor.min.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets/css/theme.min.css?v=1.0">

  <link rel="preload" href="assets/css/theme.min-1.css" data-hs-appearance="default" as="style">
  <link rel="preload" href="assets/css/theme-dark.min.css" data-hs-appearance="dark" as="style">

  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

  <style data-hs-appearance-onload-styles="">
    * {
      transition: unset !important;
    }

    body {
      opacity: 0;
    }
  </style>

  <!-- ONLY DEV -->

  <style>
    body {
      opacity: 0;
    }
  </style>

  <!-- END ONLY DEV -->

  <script>
    window.hs_config = { "autopath": "@@autopath", "deleteLine": "hs-builder:delete", "deleteLine:build": "hs-builder:build-delete", "deleteLine:dist": "hs-builder:dist-delete", "previewMode": false, "startPath": "/index.html", "vars": { "themeFont": "https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap", "version": "?v=1.0" }, "layoutBuilder": { "extend": { "switcherSupport": true }, "header": { "layoutMode": "default", "containerMode": "container-fluid" }, "sidebarLayout": "default" }, "themeAppearance": { "layoutSkin": "default", "sidebarSkin": "default", "styles": { "colors": { "primary": "#377dff", "transparent": "transparent", "white": "#fff", "dark": "132144", "gray": { "100": "#f9fafc", "900": "#1e2022" } }, "font": "Inter" } }, "languageDirection": { "lang": "en" }, "skipFilesFromBundle": { "dist": ["assets/js/hs.theme-appearance.js", "assets/js/hs.theme-appearance-charts.js", "assets/js/demo.js"], "build": ["assets/css/theme.css", "assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js", "assets/js/demo.js", "assets/css/theme-dark.css", "assets/css/docs.css", "assets/vendor/icon-set/style.css", "assets/js/hs.theme-appearance.js", "assets/js/hs.theme-appearance-charts.js", "node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js", "assets/js/demo.js"] }, "minifyCSSFiles": ["assets/css/theme.css", "assets/css/theme-dark.css"], "copyDependencies": { "dist": { "*assets/js/theme-custom.js": "" }, "build": { "*assets/js/theme-custom.js": "", "node_modules/bootstrap-icons/font/*fonts/**": "assets/css" } }, "buildFolder": "", "replacePathsToCDN": {}, "directoryNames": { "src": "./src", "dist": "./dist", "build": "./build" }, "fileNames": { "dist": { "js": "theme.min.js", "css": "theme.min.css" }, "build": { "css": "theme.min.css", "js": "theme.min.js", "vendorCSS": "vendor.min.css", "vendorJS": "vendor.min.js" } }, "fileTypes": "jpg|png|svg|mp4|webm|ogv|json" }
    window.hs_config.gulpRGBA = (p1) => {
      const options = p1.split(',')
      const hex = options[0].toString()
      const transparent = options[1].toString()

      var c;
      if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {
        c = hex.substring(1).split('');
        if (c.length == 3) {
          c = [c[0], c[0], c[1], c[1], c[2], c[2]];
        }
        c = '0x' + c.join('');
        return 'rgba(' + [(c >> 16) & 255, (c >> 8) & 255, c & 255].join(',') + ',' + transparent + ')';
      }
      throw new Error('Bad Hex');
    }
    window.hs_config.gulpDarken = (p1) => {
      const options = p1.split(',')

      let col = options[0].toString()
      let amt = -parseInt(options[1])
      var usePound = false

      if (col[0] == "#") {
        col = col.slice(1)
        usePound = true
      }
      var num = parseInt(col, 16)
      var r = (num >> 16) + amt
      if (r > 255) {
        r = 255
      } else if (r < 0) {
        r = 0
      }
      var b = ((num >> 8) & 0x00FF) + amt
      if (b > 255) {
        b = 255
      } else if (b < 0) {
        b = 0
      }
      var g = (num & 0x0000FF) + amt
      if (g > 255) {
        g = 255
      } else if (g < 0) {
        g = 0
      }
      return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
    }
    window.hs_config.gulpLighten = (p1) => {
      const options = p1.split(',')

      let col = options[0].toString()
      let amt = parseInt(options[1])
      var usePound = false

      if (col[0] == "#") {
        col = col.slice(1)
        usePound = true
      }
      var num = parseInt(col, 16)
      var r = (num >> 16) + amt
      if (r > 255) {
        r = 255
      } else if (r < 0) {
        r = 0
      }
      var b = ((num >> 8) & 0x00FF) + amt
      if (b > 255) {
        b = 255
      } else if (b < 0) {
        b = 0
      }
      var g = (num & 0x0000FF) + amt
      if (g > 255) {
        g = 255
      } else if (g < 0) {
        g = 0
      }
      return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
    }
  </script>
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">

  <script src="assets/js/hs.theme-appearance.js"></script>

  <script src="assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js"></script>



  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid bg-light">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center mb-3">
          <div class="col-sm mb-2 mb-sm-0">
            <h1 class="page-header-title">Transactions </h1>

            <!-- <div class="mt-2">
              <a class="text-body me-3" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exportProductsModal">
                <i class="bi-download me-1"></i> Export
              </a>
              <a class="text-body" href="javascript:;" data-bs-toggle="modal" data-bs-target="#importProductsModal">
                <i class="bi-upload me-1"></i> Import
              </a>
            </div> -->
          </div>
          <!-- End Col -->

          <div class="col-sm-auto">

            <form class="d-flex ">
              <div class="tom-select-custom">
                <select class="js-select form-select" autocomplete="off" data-hs-tom-select-options='{
                            "placeholder": "<div><i class=\"bi-person me-2\"></i> Select member</div>",
                            "hideSearch": true,
                            "width": "10rem"
                          }'>
                  <option value="all">All</option>
                  <option value="Agent">Agent</option>
                  <option value="Merchant">Merchant</option>
                  <option value="Agent and Merchant">Agent and Merchant</option>
                  <option value="Aggregator">Aggregator</option>
                  <option value="Banker">Banker</option>
                </select>
              </div>
              <div>
                <div>
                  <!-- <label for="locationLabel" class="col-form-label form-label"></label> -->

                  <input type="text" class="js-daterangepicker-clear form-control daterangepicker-custom-input"
                    placeholder="Select dates" data-hs-daterangepicker-options='{ "autoUpdateInput": false,
                      "locale": {
                            "cancelLabel": "Clear"
                          }
                        }'>

                </div>
              </div>
              
            </form>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->


        <!-- End Nav Scroller -->
      </div>
      <!-- End Page Header -->

      <div class="card mb-4">
        <div class="card-body">
          <div class="col-lg-12">
            <div class="col-sm my-sm-2">
              <h4 class=" ">Transaction Overview</h4>
            </div>
          </div>
          <!-- Stats -->
          <div class="row">
            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
              <!-- Card -->
              <div class="card h-100">
                <div class="card-body">
                  <div class="my-3">
                    <i class="bi bg-soft-info rounded-circle bi-arrows-move p-2"></i>
                  </div>
                  <h6 class="card-subtitle mb-2">Total Transactions</h6>

                  <div class="row align-items-center gx-2">
                    <div class="col">
                      <span class="js-counter display-5 text-dark">
                        ₦24,950,000</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <span class="badge bg-info display-5 text text-white">
                        4,009
                      </span>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
              <!-- Card -->
              <div class="card h-100">
                <div class="card-body">
                  <div class="my-3">
                    <i class="bi bg-soft-success rounded-circle bi-check-circle p-2"></i>
                  </div>
                  <h6 class="card-subtitle mb-2">Successful Transaction</h6>

                  <div class="row align-items-center gx-2">
                    <div class="col">
                      <span class="js-counter display-5 text-dark">
                        ₦16,950,000</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <span class="badge bg-success display-5 text-white">
                        3,009
                      </span>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
              <!-- Card -->
              <div class="card h-100">
                <div class="card-body">
                  <div class="my-3">
                    <i class="bi bg-soft-danger rounded-circle bi-check-circle p-2"></i>
                  </div>
                  <h6 class="card-subtitle mb-2">Failed Transaction</h6>

                  <div class="row align-items-center gx-2">
                    <div class="col">
                      <span class="js-counter display-5 text-dark">
                        ₦16,950,000</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <span class="badge bg-danger display-5 text-white">
                        3,009
                      </span>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
              <!-- Card -->
              <div class="card h-100">
                <div class="card-body">
                  <div class="mb-3">
                    <i class="bi bg-soft-warning rounded-circle bi-check-circle p-2"></i>
                  </div>
                  <h6 class="card-subtitle mb-2">Pending Transaction</h6>

                  <div class="row align-items-center gx-2">
                    <div class="col">
                      <span class="js-counter display-5 text-dark">
                        ₦16,950,000</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <span class="badge bg-warning display-5 text-dark">
                        39
                      </span>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
              <!-- Card -->
              <div class="card h-100">
                <div class="card-body">
                  <div class="mb-3">
                    <i class="bi bg-soft-secondary rounded-circle bi-check-circle p-2"></i>
                  </div>
                  <h6 class="card-subtitle mb-2">Refunded Transaction</h6>

                  <div class="row align-items-center gx-2">
                    <div class="col">
                      <span class="js-counter display-5 text-dark">
                        ₦12,570,000</span>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <span class="badge bg-secondary display-5 text-white">
                        3,009
                      </span>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->
            </div>
          </div>
          <!-- End Stats -->
        </div>
      </div>

      <div class="row justify-content-end mb-3">
        <div class="col-lg">
          <!-- Datatable Info -->
          <div id="datatableCounterInfo" style="display: none;">
            <div class="d-sm-flex justify-content-lg-end align-items-sm-center">
              <span class="d-block d-sm-inline-block fs-5 me-3 mb-2 mb-sm-0">
                <span id="datatableCounter">0</span>
                Selected
              </span>
              <a class="btn btn-outline-danger btn-sm mb-2 mb-sm-0 me-2" href="javascript:;">
                <i class="bi-trash"></i> Delete
              </a>
              <a class="btn btn-white btn-sm mb-2 mb-sm-0 me-2" href="javascript:;">
                <i class="bi-archive"></i> Archive
              </a>
              <a class="btn btn-white btn-sm mb-2 mb-sm-0 me-2" href="javascript:;">
                <i class="bi-upload"></i> Publish
              </a>
              <a class="btn btn-white btn-sm mb-2 mb-sm-0" href="javascript:;">
                <i class="bi-x-lg"></i> Unpublish
              </a>
            </div>
          </div>
          <!-- End Datatable Info -->
        </div>
      </div>
      <!-- End Row -->

      <!-- Card -->
      <div class="card">
        <!-- Header -->
        <div class="card-header card-header-content-md-between">
          <div class="mb-2 mb-md-0">
            <form>
              <!-- Search -->
              <div class="input-group input-group-merge input-group-flush">
                <div class="input-group-prepend input-group-text">
                  <i class="bi-search"></i>
                </div>
                <input id="datatableSearch" type="search" class="form-control" placeholder="Search Transaction"
                  aria-label="Search users">
              </div>
              <!-- End Search -->
            </form>
          </div>

          <div class="d-grid d-sm-flex gap-2">
            <a href="all-transactions.html" class="btn btn-white" type="button">
              <i class="bi-eye me-1"></i> View All
            </a>

            <!-- Dropdown -->
            <div class="dropdown">
              <button type="button" class="btn btn-white w-100" id="showHideDropdown" data-bs-toggle="dropdown"
                aria-expanded="false" data-bs-auto-close="outside">
                <i class="bi-table me-1"></i> Columns <span
                  class="badge bg-soft-dark text-dark rounded-circle ms-1">6</span>
              </button>

              <div class="dropdown-menu dropdown-menu-end dropdown-card" aria-labelledby="showHideDropdown"
                style="width: 15rem;">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="d-grid gap-3">
                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_id">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">User</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_id" checked="">
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_users">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Refrence</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_users" checked="">
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_type">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Amount</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_type" checked="">
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_vendor">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Type</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_vendor">
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_stocks">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Description</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_stocks" checked="">
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_sku">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Amount</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_sku" checked="">
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->
                      <label class="row form-check form-switch" for="toggleColumn_price">
                        <span class="col-8 col-sm-9 ms-0">
                          <span class="me-2">Fee</span>
                        </span>
                        <span class="col-4 col-sm-3 text-end">
                          <input type="checkbox" class="form-check-input" id="toggleColumn_price" checked="">
                        </span>
                      </label>
                      <!-- End Form Switch -->

                      <!-- Form Switch -->

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Dropdown -->
          </div>
        </div>
        <!-- End Header -->

        <!-- Table -->
        <div class="table-responsive datatable-custom">
          <table id="datatable"
            class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
            data-hs-datatables-options='{
                   "columnDefs": [{
                      "targets": [0, 4, 7],
                      "width": "5%",
                      "orderable": false
                    }],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries",
                   "pageLength": 50,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination"
                 }'>
            <thead class="thead-light">
              <th>
                ID
              </th>
              <th>Users</th>
              <th>Refrence</th>
              <th>Customer Type</th>

              <th>Description</th>
              <th>Amount</th>
              <th>Service Fee</th>
              <th>Type</th>
              <th>Biller ID</th>
              <th>Status</th>
              <th>Time</th>
              </tr>
            </thead>


            <tbody>


              <tr>
                <td class="table-column-pe-0">
                  1
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="#">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-lg" src="assets/img/400x400/img26.jpg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Agent Name</h5>
                      <span>09038847848</span>
                    </div>
                  </a>
                </td>
                <td>093874</td>
                <td>Aggregator</td>
                <td>
                  Aggregator Customer Fee
                </td>
                <td>₦80000</td>
                <td>45</td>
                <td>2</td>
                <td>3</td>
                <td><span class="legend-indicator bg-danger"></span>Blocked</td>
                <td>
                  12:00 AM
                </td>
              </tr>


              <tr>
                <td class="table-column-pe-0">
                  2
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="#">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-lg" src="assets/img/160x160/img6.jpg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Business Name</h5>
                      <span>09038847848</span>
                    </div>
                  </a>
                </td>
                <td>43874</td>
                <td>Aggregator</td>
                <td>
                  Banker Service Commision Fee
                </td>
                <td>₦90000</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td><span class="legend-indicator bg-success"></span> Active</td>
                <td>
                  09:40 PM
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  1
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="#">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-lg" src="assets/img/400x400/img26.jpg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">John Doe</h5>
                      <span>123-456-7890</span>
                    </div>
                  </a>
                </td>
                <td>ABC123</td>
                <td>Consultant</td>
                <td>
                  Consultant Service Fee
                </td>
                <td>₦75000</td>
                <td>40</td>
                <td>4</td>
                <td>2</td>
                <td><span class="legend-indicator bg-success"></span>Active</td>
                <td>
                  10:30 AM
                </td>
              </tr>
              <tr>
                <td class="table-column-pe-0">
                  2
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="#">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-lg" src="assets/img/400x400/img26.jpg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Jane Smith</h5>
                      <span>555-123-4567</span>
                    </div>
                  </a>
                </td>
                <td>XYZ789</td>
                <td>Analyst</td>
                <td>
                  Data Analysis Fee
                </td>
                <td>₦60000</td>
                <td>35</td>
                <td>3</td>
                <td>1</td>
                <td><span class="legend-indicator bg-success"></span>Active</td>
                <td>
                  2:45 PM
                </td>
              </tr>
              <tr>
                <td class="table-column-pe-0">
                  3
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="#">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-lg" src="assets/img/400x400/img26.jpg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Sarah Johnson</h5>
                      <span>999-888-7777</span>
                    </div>
                  </a>
                </td>
                <td>PQR456</td>
                <td>Developer</td>
                <td>
                  Software Development Fee
                </td>
                <td>₦90000</td>
                <td>50</td>
                <td>5</td>
                <td>2</td>
                <td><span class="legend-indicator bg-danger"></span>Blocked</td>
                <td>
                  4:15 PM
                </td>
              </tr>
              <tr>
                <td class="table-column-pe-0">
                  4
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="#">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-lg" src="assets/img/400x400/img26.jpg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Michael Brown</h5>
                      <span>333-222-1111</span>
                    </div>
                  </a>
                </td>
                <td>MNO012</td>
                <td>Manager</td>
                <td>
                  Project Management Fee
                </td>
                <td>₦120000</td>
                <td>60</td>
                <td>6</td>
                <td>3</td>
                <td><span class="legend-indicator bg-success"></span>Active</td>
                <td>
                  11:00 AM
                </td>
              </tr>
              <tr>
                <td class="table-column-pe-0">
                  5
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="#">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-lg" src="assets/img/400x400/img26.jpg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Emily Davis</h5>
                      <span>777-666-5555</span>
                    </div>
                  </a>
                </td>
                <td>GHI345</td>
                <td>Designer</td>
                <td>
                  Graphic Design Fee
                </td>
                <td>₦85000</td>
                <td>55</td>
                <td>4</td>
                <td>2</td>
                <td><span class="legend-indicator bg-success"></span>Active</td>
                <td>
                  3:30 PM
                </td>
              </tr>
              <tr>
                <td class="table-column-pe-0">
                  6
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="#">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-lg" src="assets/img/400x400/img26.jpg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Robert Wilson</h5>
                      <span>222-333-4444</span>
                    </div>
                  </a>
                </td>
                <td>JKL678</td>
                <td>Consultant</td>
                <td>
                  Consulting Fee
                </td>
                <td>₦70000</td>
                <td>45</td>
                <td>3</td>
                <td>2</td>
                <td><span class="legend-indicator bg-success"></span>Active</td>
                <td>
                  9:45 AM
                </td>
              </tr>

            </tbody>
          </table>
        </div>
        <!-- End Table -->

        <!-- Footer -->
        <div class="card-footer">
          <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
            <div class="col-sm mb-2 mb-sm-0">
              <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                <span class="me-2">Showing:</span>

                <!-- Select -->
                <div class="tom-select-custom">
                  <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto"
                    autocomplete="off" data-hs-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true
                          }'>
                    <option value="12">12</option>
                    <option value="14" selected="">14</option>
                    <option value="16">16</option>
                    <option value="18">18</option>
                  </select>
                </div>
                <!-- End Select -->

                <span class="text-secondary me-2">of</span>

                <!-- Pagination Quantity -->
                <span id="datatableWithPaginationInfoTotalQty"></span>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm-auto">
              <div class="d-flex justify-content-center justify-content-sm-end">
                <!-- Pagination -->
                <nav id="datatablePagination" aria-label="Activity pagination"></nav>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Footer -->
      </div>
      <!-- End Card -->
    </div>
    <!-- End Content -->

    <!-- Footer -->

    <div class="footer">
      <div class="row justify-content-between align-items-center">
        <div class="col">
          <p class="fs-6 mb-0">&copy; <span class="d-none d-sm-inline-block">2024 Terra Portals.</span></p>
        </div>
        <!-- End Col -->

      </div>
      <!-- End Row -->
    </div>
    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ONLY DEV -->

  <!-- Builder -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasBuilder" aria-labelledby="offcanvasBuilderLabel">


    <div class="offcanvas-body">


      <div class="row gx-3">

      </div>
      <!-- End Row -->

      <hr>

      <h4 class="mb-1">Sidebar Nav</h4>
      <p>Check out all <a href="./documentation/layout.html">Layout Options here</a></p>

      <div class="row gx-3">

      </div>
      <!-- End Row -->

      <hr>

      <!-- Form Switch -->
      <label class="row form-check form-switch mb-3" for="builderFluidSwitch">
        <span class="col-10 ms-0">
          <span class="d-block h4 mb-1">Header Layout Options</span>
          <span class="d-block fs-5">Toggle to container-fluid layout</span>
        </span>
        <span class="col-2 text-end">
          <input type="checkbox" class="form-check-input" id="builderFluidSwitch">
        </span>
      </label>
      <!-- End Form Switch -->

      <div class="row gx-3">
        <!-- Check -->

        <!-- End Check -->


      </div>
      <!-- End Row -->
    </div>

    <!-- Footer -->
    <div class="offcanvas-footer">
      <div class="row gx-3">
        <div class="col">
          <div class="d-grid">
            <button type="button" id="js-builder-reset" class="btn btn-white btn-lg">
              <i class="bi-arrow-counterclockwise"></i> Reset
            </button>
          </div>
        </div>
        <!-- End Col -->

        <div class="col">
          <div class="d-grid">
            <button type="button" id="js-builder-preview" class="btn btn-primary btn-lg">
              <i class="eye-visible"></i> Preview
            </button>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Footer -->
  </div>

  <!-- End Builder -->

  <!-- Builder Toggle -->

  <!-- End Builder Toggle -->

  <div class="d-none js-build-layouts">
    <div class="js-build-layout-header-default">
      <!-- Single Header -->
      <header id="header" class="navbar navbar-expand-lg navbar-bordered bg-white  ">
        <div class="container">
          <nav class="js-mega-menu navbar-nav-wrap">
            <!-- Logo -->

            <a class="navbar-brand" href="dashboard.html" aria-label="Front">
              <img class="navbar-brand-logo" src="assets/svg/logos/logo.svg" alt="Logo"
                data-hs-theme-appearance="default">
              <img class="navbar-brand-logo" src="assets/svg/logos/logo.png" alt="Logo" data-hs-theme-appearance="dark">
            </a>

            <!-- End Logo -->

            <!-- Secondary Content -->
            <div class="navbar-nav-wrap-secondary-content">
              <!-- Navbar -->
              <ul class="navbar-nav">
                <li class="nav-item d-none d-md-inline-block">
                  <!-- Notification -->
                  <div class="dropdown">
                    <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
                      id="navbarNotificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                      data-bs-auto-close="outside" data-bs-dropdown-animation="">
                      <i class="bi-bell"></i>
                      <span class="btn-status btn-sm-status btn-status-danger"></span>
                    </button>


                  </div>
                  <!-- End Notification -->
                </li>


              </ul>
              <!-- End Navbar -->
            </div>
            <!-- End Secondary Content -->

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarContainerNavDropdown" aria-controls="navbarContainerNavDropdown"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-default">
                <i class="bi-list"></i>
              </span>
              <span class="navbar-toggler-toggled">
                <i class="bi-x"></i>
              </span>
            </button>
            <!-- End Toggler -->


          </nav>
        </div>
      </header>

      <!-- End Single Header -->
    </div>
    <div class="js-build-layout-header-double">
      <!-- Double Header -->
      <header id="header" class="navbar navbar-expand-lg navbar-bordered navbar-spacer-y-0 flex-lg-column">
        <div class="navbar-dark w-100 bg-dark py-2">
          <div class="container">
            <div class="navbar-nav-wrap">
              <!-- Logo -->
              <a class="navbar-brand" href="dashboard.html" aria-label="Front">
                <img class="navbar-brand-logo" src="assets/svg/logos/logo-white.svg" alt="Logo">
              </a>
              <!-- End Logo -->

              <!-- Content Start -->
              <div class="navbar-nav-wrap-content-start">
                <!-- Search Form -->
                <div class="d-none d-lg-block">
                  <div class="dropdown ms-2">
                    <!-- Input Group -->
                    <div class="d-none d-lg-block">
                      <div
                        class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
                        <div class="input-group-prepend input-group-text">
                          <i class="bi-search"></i>
                        </div>

                        <input type="search" class="js-form-search form-control" placeholder="Search in front"
                          aria-label="Search in front" data-hs-form-search-options='{
                                 "clearIcon": "#clearSearchResultsIcon",
                                 "dropMenuElement": "#searchDropdownMenu",
                                 "dropMenuOffset": 20,
                                 "toggleIconOnFocus": true,
                                 "activeClass": "focus"
                               }'>
                        <a class="input-group-append input-group-text" href="javascript:;">
                          <i id="clearSearchResultsIcon" class="bi-x-lg" style="display: none;"></i>
                        </a>
                      </div>
                    </div>

                    <button
                      class="js-form-search js-form-search-mobile-toggle btn btn-ghost-secondary btn-icon rounded-circle d-lg-none"
                      type="button" data-hs-form-search-options='{
                                 "clearIcon": "#clearSearchResultsIcon",
                                 "dropMenuElement": "#searchDropdownMenu",
                                 "dropMenuOffset": 20,
                                 "toggleIconOnFocus": true,
                                 "activeClass": "focus"
                               }'>
                      <i class="bi-search"></i>
                    </button>
                    <!-- End Input Group -->

                    <!-- Card Search Content -->
                    <div id="searchDropdownMenu"
                      class="hs-form-search-menu-content dropdown-menu dropdown-menu-form-search navbar-dropdown-menu-borderless">
                      <div class="card">
                        <!-- Body -->
                        <div class="card-body-height">
                          <div class="d-lg-none">
                            <div class="input-group input-group-merge navbar-input-group mb-5">
                              <div class="input-group-prepend input-group-text">
                                <i class="bi-search"></i>
                              </div>

                              <input type="search" class="form-control" placeholder="Search in front"
                                aria-label="Search in front">
                              <a class="input-group-append input-group-text" href="javascript:;">
                                <i class="bi-x-lg"></i>
                              </a>
                            </div>
                          </div>

                          <span class="dropdown-header">Recent searches</span>

                          <div class="dropdown-item bg-transparent text-wrap">
                            <a class="btn btn-soft-dark btn-xs rounded-pill" href="dashboard.html">
                              Gulp <i class="bi-search ms-1"></i>
                            </a>
                            <a class="btn btn-soft-dark btn-xs rounded-pill" href="dashboard.html">
                              Notification panel <i class="bi-search ms-1"></i>
                            </a>
                          </div>

                          <div class="dropdown-divider"></div>

                          <span class="dropdown-header">Tutorials</span>

                          <a class="dropdown-item" href="dashboard.html">
                            <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                <span class="icon icon-soft-dark icon-xs icon-circle">
                                  <i class="bi-sliders"></i>
                                </span>
                              </div>

                              <div class="flex-grow-1 text-truncate ms-2">
                                <span>How to set up Gulp?</span>
                              </div>
                            </div>
                          </a>

                          <a class="dropdown-item" href="dashboard.html">
                            <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                <span class="icon icon-soft-dark icon-xs icon-circle">
                                  <i class="bi-paint-bucket"></i>
                                </span>
                              </div>

                              <div class="flex-grow-1 text-truncate ms-2">
                                <span>How to change theme color?</span>
                              </div>
                            </div>
                          </a>

                          <div class="dropdown-divider"></div>

                          <span class="dropdown-header">Members</span>

                          <a class="dropdown-item" href="dashboard.html">
                            <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                <img class="avatar avatar-xs avatar-circle" src="assets/img/160x160/img10.jpg"
                                  alt="Image Description">
                              </div>
                              <div class="flex-grow-1 text-truncate ms-2">
                                <span>Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip"
                                    data-placement="top" title="Top endorsed"></i></span>
                              </div>
                            </div>
                          </a>

                          <a class="dropdown-item" href="dashboard.html">
                            <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                <img class="avatar avatar-xs avatar-circle" src="assets/img/160x160/img3.jpg"
                                  alt="Image Description">
                              </div>
                              <div class="flex-grow-1 text-truncate ms-2">
                                <span>David Harrison</span>
                              </div>
                            </div>
                          </a>

                          <a class="dropdown-item" href="dashboard.html">
                            <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                <div class="avatar avatar-xs avatar-soft-info avatar-circle">
                                  <span class="avatar-initials">A</span>
                                </div>
                              </div>
                              <div class="flex-grow-1 text-truncate ms-2">
                                <span>Anne Richard</span>
                              </div>
                            </div>
                          </a>
                        </div>
                        <!-- End Body -->

                        <!-- Footer -->
                        <a class="card-footer text-center" href="dashboard.html">
                          See all results <i class="bi-chevron-right small"></i>
                        </a>
                        <!-- End Footer -->
                      </div>
                    </div>
                    <!-- End Card Search Content -->

                  </div>

                </div>
                <!-- End Search Form -->
              </div>
              <!-- End Content Start -->

              <!-- Content End -->
              <div class="navbar-nav-wrap-content-end">
                <!-- Navbar -->
                <ul class="navbar-nav">





                  <li class="nav-item">
                    <!-- Toggler -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                      data-bs-target="#navbarDoubleLineContainerNavDropdown"
                      aria-controls="navbarDoubleLineContainerNavDropdown" aria-expanded="false"
                      aria-label="Toggle navigation">
                      <span class="navbar-toggler-default">
                        <i class="bi-list"></i>
                      </span>
                      <span class="navbar-toggler-toggled">
                        <i class="bi-x"></i>
                      </span>
                    </button>
                    <!-- End Toggler  -->
                  </li>
                </ul>
                <!-- End Navbar -->
              </div>
              <!-- End Content End -->
            </div>
          </div>
        </div>


      </header>
      <!-- End Double Header -->
    </div>
  </div>

  <script src="assets/js/demo.js"></script>

  <!-- END ONLY DEV -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Keyboard Shortcuts -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasKeyboardShortcuts"
    aria-labelledby="offcanvasKeyboardShortcutsLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasKeyboardShortcutsLabel" class="mb-0">Keyboard shortcuts</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Formatting</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="fw-semibold">Bold</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">b</kbd>
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <em>italic</em>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">i</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <u>Underline</u>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">u</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <s>Strikethrough</s>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">s</kbd>
              <!-- End Col -->
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="small">Small text</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <mark>Highlight</mark>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">e</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Insert</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Mention person <a href="#">(@Brian)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">@</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Link to doc <a href="#">(+Meeting notes)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">+</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <a href="#">#hashtag</a>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">#hashtag</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Date</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/date</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Time</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/time</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Note box</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/note</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Editing</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find and replace</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">r</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find next</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find previous</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Un-indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line up</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1"><i class="bi-arrow-up-short"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line down</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1"><i class="bi-arrow-down-short fs-5"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Add a comment</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">m</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Undo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">z</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Redo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">y</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
        <div class="list-group-item">
          <h5 class="mb-1">Application</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Create new doc</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Present</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Share</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Search docs</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">o</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Keyboard shortcuts</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd
                class="d-inline-block mb-1">/</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>
    </div>
  </div>
  <!-- End Keyboard Shortcuts -->

  <!-- Activity -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivityStream"
    aria-labelledby="offcanvasActivityStreamLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasActivityStreamLabel" class="mb-0">Activity stream</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <!-- Step -->
      <ul class="step step-icon-sm step-avatar-sm">
        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar" src="assets/img/160x160/img9.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Iana Robinson</h5>

              <p class="fs-5 mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i
                    class="bi-journal-bookmark-fill"></i> Fd-7</a></p>

              <ul class="list-group list-group-sm">
                <!-- List Item -->
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="assets/svg/brands/excel-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate"
                            title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">12kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->

                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="assets/svg/brands/word-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate"
                            title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">4kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </li>
                <!-- End List Item -->
              </ul>

              <span class="small text-muted text-uppercase">Now</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-dark">B</span>

            <div class="step-content">
              <h5 class="mb-1">Bob Dean</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i>
                  Fr-6</a> as <span class="badge bg-soft-success text-success rounded-pill"><span
                    class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Today</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="assets/img/160x160/img3.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="h5 mb-1">Crane</h5>

              <p class="fs-5 mb-1">Added 5 card to <a href="#">Payments</a></p>

              <ul class="list-group list-group-sm">
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col">
                      <img class="img-fluid rounded" src="assets/svg/components/card-1.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="assets/svg/components/card-2.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="assets/svg/components/card-3.svg" alt="Image Description">
                    </div>
                    <div class="col-auto align-self-center">
                      <div class="text-center">
                        <a href="#">+2</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>

              <span class="small text-muted text-uppercase">May 12</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-info">D</span>

            <div class="step-content">
              <h5 class="mb-1">David Lidell</h5>

              <p class="fs-5 mb-1">Added a new member to Front Dashboard</p>

              <span class="small text-muted text-uppercase">May 15</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="assets/img/160x160/img7.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Rachel King</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i>
                  Fr-3</a> as <span class="badge bg-soft-success text-success rounded-pill"><span
                    class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Apr 29</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="assets/img/160x160/img5.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Finch Hoot</h5>

              <p class="fs-5 mb-1">Earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i> badge</p>

              <span class="small text-muted text-uppercase">Apr 06</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">
              <i class="bi-person-fill"></i>
            </span>

            <div class="step-content">
              <h5 class="mb-1">Project status updated</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i>
                  Fr-3</a> as <span class="badge bg-soft-primary text-primary rounded-pill"><span
                    class="legend-indicator bg-primary"></span>"In progress"</span></p>

              <span class="small text-muted text-uppercase">Feb 10</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->
      </ul>
      <!-- End Step -->

      <div class="d-grid">
        <a class="btn btn-white" href="javascript:;">View all <i class="bi-chevron-right"></i></a>
      </div>
    </div>
  </div>
  <!-- End Activity -->

  <!-- Welcome Message Modal -->
  <div class="modal fade" id="welcomeMessageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm" data-bs-dismiss="modal"
            aria-label="Close">
            <i class="bi-x-lg"></i>
          </button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body p-sm-5">
          <div class="text-center">
            <div class="w-75 w-sm-50 mx-auto mb-4">
              <img class="img-fluid" src="assets/svg/illustrations/oc-collaboration.svg" alt="Image Description"
                data-hs-theme-appearance="default">
              <img class="img-fluid" src="assets/svg/illustrations-light/oc-collaboration.svg" alt="Image Description"
                data-hs-theme-appearance="dark">
            </div>

            <h4 class="h1">Welcome to Front</h4>

            <p>We're happy to see you in our community.</p>
          </div>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap text-muted">Trusted by the world's best teams</small>

          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid" src="assets/svg/brands/gitlab-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="assets/svg/brands/fitbit-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="assets/svg/brands/layar-gray.svg" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

  <!-- End Welcome Message Modal -->

  <!-- Export Products Modal -->
  <div class="modal fade" id="exportProductsModal" tabindex="-1" aria-labelledby="exportProductsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="exportProductsModalLabel">Export products</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body">
          <p>This CSV file can update all product information. To update just inventory quantites use the <a
              class="link" href="#">CSV file for inventory.</a></p>

          <div class="mb-4">
            <label class="form-label">Export</label>

            <div class="d-grid gap-2">
              <!-- Form Check -->
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exportProductsRadio" id="exportProductsRadio1"
                  checked="">
                <label class="form-check-label" for="exportProductsRadio1">
                  Current page
                </label>
              </div>
              <!-- End Form Check -->

              <!-- Form Check -->
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exportProductsRadio" id="exportProductsRadio2">
                <label class="form-check-label" for="exportProductsRadio2">
                  All products
                </label>
              </div>
              <!-- End Form Check -->

              <!-- Form Check -->
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exportProductsRadio" id="exportProductsRadio3">
                <label class="form-check-label" for="exportProductsRadio3">
                  Selected: 20 products
                </label>
              </div>
              <!-- End Form Check -->
            </div>
          </div>

          <label class="form-label">Export as</label>

          <!-- Form Check -->
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exportProductsAsRadio" id="exportProductsAsRadio1"
              checked="">
            <label class="form-check-label" for="exportProductsAsRadio1">
              CSV for Excel, Numbers, or other spreadsheet programs
            </label>
          </div>
          <!-- End Form Check -->

          <!-- Form Check -->
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exportProductsAsRadio" id="exportProductsAsRadio2">
            <label class="form-check-label" for="exportProductsAsRadio2">
              Plain CSV file
            </label>
          </div>
          <!-- End Form Check -->
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer gap-3">
          <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          <button type="button" class="btn btn-primary">Export products</button>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>
  <!-- End Export Products Modal -->

  <!-- Import Products Modal -->
  <div class="modal fade" id="importProductsModal" tabindex="-1" aria-labelledby="importProductsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="importProductsModalLabel">Import products by CSV</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body">
          <p><a class="link" href="#">Download a sample CSV template</a> to see an example of the format required.</p>

          <!-- Dropzone -->
          <div id="attachFilesNewProjectLabel" class="js-dropzone dz-dropzone dz-dropzone-card mb-4">
            <div class="dz-message">
              <img class="avatar avatar-xl avatar-4x3 mb-3" src="assets/svg/illustrations/oc-browse.svg"
                alt="Image Description" data-hs-theme-appearance="default">
              <img class="avatar avatar-xl avatar-4x3 mb-3" src="assets/svg/illustrations-light/oc-browse.svg"
                alt="Image Description" data-hs-theme-appearance="dark">

              <h5>Drag and drop your file here</h5>

              <p class="mb-2">or</p>

              <span class="btn btn-white btn-sm">Browse files</span>
            </div>
          </div>
          <!-- End Dropzone -->

          <!-- Form Check -->
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="overwriteCurrentProductsCheckbox">
            <label class="form-check-label" for="overwriteCurrentProductsCheckbox">
              Overwrite any current products that have the same handle. Existing values will be used for any missing
              columns. <a href="#">Learn more</a>
            </label>
          </div>
          <!-- End Form Check -->
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          <button type="button" class="btn btn-primary">Upload and continue</button>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

  <!-- Button trigger modal -->

  <!-- End Button trigger modal -->



  <!-- JS Implementing Plugins -->
  <script src="assets/js/vendor.min.js"></script>

  <!-- JS Front -->
  <script src="assets/js/theme.min.js"></script>

  <script>
    $(document).on('ready', function () {
      HSCore.components.HSDaterangepicker.init('.js-daterangepicker-clear')

      $('.js-daterangepicker-clear').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
      })

      $('.js-daterangepicker-clear').on('cancel.daterangepicker', function (ev, picker) {
        $(this).val('')
      })
    });
  </script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATATABLES
      // =======================================================
      HSCore.components.HSDatatables.init($('#datatable'), {
        select: {
          style: 'multi',
          selector: 'td:first-child input[type="checkbox"]',
          classMap: {
            checkAll: '#datatableCheckAll',
            counter: '#datatableCounter',
            counterInfo: '#datatableCounterInfo'
          }
        },
        language: {
          zeroRecords: `<div class="text-center p-4">
              <img class="mb-3" src="./assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="./assets/svg/illustrations-light/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">No data to show</p>
            </div>`
        }
      });

      const datatable = HSCore.components.HSDatatables.getItem('datatable')

      $('.js-datatable-filter').on('change', function () {
        var $this = $(this),
          elVal = $this.val(),
          targetColumnIndex = $this.data('target-column-index');

        datatable.column(targetColumnIndex).search(elVal).draw();
      });

      $('#datatableSearch').on('mouseup', function (e) {
        var $input = $(this),
          oldValue = $input.val();

        if (oldValue == "") return;

        setTimeout(function () {
          var newValue = $input.val();

          if (newValue == "") {
            // Gotcha
            datatable.search('').draw();
          }
        }, 1);
      });

      $('#toggleColumn_id').change(function (e) {
        datatable.columns(1).visible(e.target.checked)
      })

      $('#toggleColumn_users').change(function (e) {
        datatable.columns(2).visible(e.target.checked)
      })

      $('#toggleColumn_type').change(function (e) {
        datatable.columns(3).visible(e.target.checked)
      })

      $('#toggleColumn_vendor').change(function (e) {
        datatable.columns(3).visible(e.target.checked)
      })

      $('#toggleColumn_stocks').change(function (e) {
        datatable.columns(4).visible(e.target.checked)
      })

      $('#toggleColumn_sku').change(function (e) {
        datatable.columns(5).visible(e.target.checked)
      })

      $('#toggleColumn_price').change(function (e) {
        datatable.columns(6).visible(e.target.checked)
      })

      // datatable.columns(7).visible(false)

      $('#toggleColumn_quantity').change(function (e) {
        datatable.columns(7).visible(e.target.checked)
      })

      $('#toggleColumn_variants').change(function (e) {
        datatable.columns(8).visible(e.target.checked)
      })
    });
  </script>

  <!-- JS Plugins Init. -->
  <script>
    (function () {
      window.onload = function () {


        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        new HSFormSearch('.js-form-search')


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        new HsNavScroller('.js-nav-scroller')


        // INITIALIZATION OF DROPZONE
        // =======================================================
        HSCore.components.HSDropzone.init('.js-dropzone')
      }
    })()
  </script>

  <!-- Style Switcher JS -->

  <script>
      (function () {
        // STYLE SWITCHER
        // =======================================================
        const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
        const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

        // Function to set active style in the dorpdown menu and set icon for dropdown trigger
        const setActiveStyle = function () {
          $variants.forEach($item => {
            if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
              $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
              return $item.classList.add('active')
            }

            $item.classList.remove('active')
          })
        }

        // Add a click event to all items of the dropdown to set the style
        $variants.forEach(function ($item) {
          $item.addEventListener('click', function () {
            HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
          })
        })

        // Call the setActiveStyle on load page
        setActiveStyle()

        // Add event listener on change style to call the setActiveStyle function
        window.addEventListener('on-hs-appearance-change', function () {
          setActiveStyle()
        })
      })()
  </script>

  <!-- End Style Switcher JS -->
</body>

</html>
@endsection