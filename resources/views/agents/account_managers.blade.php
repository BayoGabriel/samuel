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
  <title>Managers | Front - Admin &amp; Dashboard</title>

  <!-- Favicon -->
  <!-- <link rel="shortcut icon"  href="assets/svg/logos/icon.png"> -->

  <link rel="shortcut icon" href="./assets/svg/logos/icon.png" type="image/x-icon">

  <!-- Font -->
  <link href="../../css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets/css/vendor.min.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets/css/theme.min.css?v=1.0">

  <link rel="preload" href="assets/css/theme.min-1.css" data-hs-appearance="default" as="style">
  <link rel="preload" href="assets/css/theme-dark.min.css" data-hs-appearance="dark" as="style">

  <style data-hs-appearance-onload-styles="">
    *
    {
      transition: unset !important;
    }

    body
    {
      opacity: 0;
    }
  </style>

  <!-- ONLY DEV -->

  <style>
    body
    {
      opacity: 0;
    }
  </style>

  <!-- END ONLY DEV -->

  <script>
            window.hs_config = {"autopath":"@@autopath","deleteLine":"hs-builder:delete","deleteLine:build":"hs-builder:build-delete","deleteLine:dist":"hs-builder:dist-delete","previewMode":false,"startPath":"/dashboard.html","vars":{"themeFont":"https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap","version":"?v=1.0"},"layoutBuilder":{"extend":{"switcherSupport":true},"header":{"layoutMode":"default","containerMode":"container-fluid"},"sidebarLayout":"default"},"themeAppearance":{"layoutSkin":"default","sidebarSkin":"default","styles":{"colors":{"primary":"#377dff","transparent":"transparent","white":"#fff","dark":"132144","gray":{"100":"#f9fafc","900":"#1e2022"}},"font":"Inter"}},"languageDirection":{"lang":"en"},"skipFilesFromBundle":{"dist":["assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","assets/js/demo.js"],"build":["assets/css/theme.css","assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js","assets/js/demo.js","assets/css/theme-dark.css","assets/css/docs.css","assets/vendor/icon-set/style.css","assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js","assets/js/demo.js"]},"minifyCSSFiles":["assets/css/theme.css","assets/css/theme-dark.css"],"copyDependencies":{"dist":{"*assets/js/theme-custom.js":""},"build":{"*assets/js/theme-custom.js":"","node_modules/bootstrap-icons/font/*fonts/**":"assets/css"}},"buildFolder":"","replacePathsToCDN":{},"directoryNames":{"src":"./src","dist":"./dist","build":"./build"},"fileNames":{"dist":{"js":"theme.min.js","css":"theme.min.css"},"build":{"css":"theme.min.css","js":"theme.min.js","vendorCSS":"vendor.min.css","vendorJS":"vendor.min.js"}},"fileTypes":"jpg|png|svg|mp4|webm|ogv|json"}
            window.hs_config.gulpRGBA = (p1) => {
  const options = p1.split(',')
  const hex = options[0].toString()
  const transparent = options[1].toString()

  var c;
  if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
    c= hex.substring(1).split('');
    if(c.length== 3){
      c= [c[0], c[0], c[1], c[1], c[2], c[2]];
    }
    c= '0x'+c.join('');
    return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',' + transparent + ')';
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

  <!-- ========== HEADER ========== -->

  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-end">
          <div class="col-sm mb-2 mb-sm-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item">
                    <a class="breadcrumb-link" href="javascript:;">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a class="breadcrumb-link" href="javascript:;">Managers</a>
                  </li>
                  <!-- <li class="breadcrumb-item active" aria-current="page">Overview</li> -->
                </ol>
              </nav>

            <h1 class="page-header-title">Account Managers</h1>
          </div>
          <!-- End Col -->

          <div class="col-sm-auto">
            <a class="btn btn-primary" href="#">
              <i class="bi-person-plus-fill me-1"></i> Add Manager
            </a>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Page Header -->

      <!-- Stats -->
      <div class="row">
        <div class="col-sm-6 col-lg-4    mb-3 mb-lg-5">
          <!-- Card -->
          <div class="card h-100">
            <div class="card-body">
              <h6 class="card-subtitle mb-2">Total Managers</h6>

              <div class="row align-items-center gx-2">
                <div class="col">
                  <span class="js-counter display-4 text-dark">24</span>
                  <span class="text-body fs-5 ms-1">from 22</span>
                </div>
                <!-- End Col -->

                <div class="col-auto">
                  <span class="badge bg-soft-success text-success p-1">
                    <i class="bi-graph-up"></i> 5.0%
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
              <h6 class="card-subtitle mb-2">Active Managers</h6>

              <div class="row align-items-center gx-2">
                <div class="col">
                  <span class="js-counter display-4 text-dark">12</span>
                  <span class="text-body fs-5 ms-1">from 11</span>
                </div>

                <div class="col-auto">
                  <span class="badge bg-soft-success text-success p-1">
                    <i class="bi-graph-up"></i> 1.2%
                  </span>
                </div>
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
              <h6 class="card-subtitle mb-2">Pending Managers</h6>

              <div class="row align-items-center gx-2">
                <div class="col">
                  <span class="js-counter display-4 text-dark">56</span>
                  <span class="display-4 text-dark">%</span>
                  <span class="text-body fs-5 ms-1">from 48.7</span>
                </div>

                <div class="col-auto">
                  <span class="badge bg-soft-danger text-danger p-1">
                    <i class="bi-graph-down"></i> 2.8%
                  </span>
                </div>
              </div>
              <!-- End Row -->
            </div>
          </div>
          <!-- End Card -->
        </div>

     
      </div>
      <!-- End Stats -->

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
                <input id="datatableSearch" type="search" class="form-control" placeholder="Search Managers" aria-label="Search users">
              </div>
              <!-- End Search -->
            </form>
          </div>

          <div class="d-grid d-sm-flex justify-content-md-end align-items-sm-center gap-2">
            <!-- Datatable Info -->
            <div id="datatableCounterInfo" style="display: none;">
              <div class="d-flex align-items-center">
                <span class="fs-5 me-3">
                  <span id="datatableCounter">0</span>
                  Selected
                </span>
                <a class="btn btn-outline-danger btn-sm" href="javascript:;">
                  <i class="bi-trash"></i> Delete
                </a>
              </div>
            </div>
            <!-- End Datatable Info -->

            <!-- Dropdown -->
            <div class="dropdown">
              <button type="button" class="btn btn-white btn-sm dropdown-toggle w-100" id="usersExportDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi-download me-2"></i> Export
              </button>

              <div class="dropdown-menu dropdown-menu-sm-end" aria-labelledby="usersExportDropdown">
                <span class="dropdown-header">Options</span>
                <a id="export-copy" class="dropdown-item" href="javascript:;">
                  <img class="avatar avatar-xss avatar-4x3 me-2" src="assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                  Copy
                </a>
                <a id="export-print" class="dropdown-item" href="javascript:;">
                  <img class="avatar avatar-xss avatar-4x3 me-2" src="assets/svg/illustrations/print-icon.svg" alt="Image Description">
                  Print
                </a>
                <div class="dropdown-divider"></div>
                <span class="dropdown-header">Download options</span>
                <a id="export-excel" class="dropdown-item" href="javascript:;">
                  <img class="avatar avatar-xss avatar-4x3 me-2" src="assets/svg/brands/excel-icon.svg" alt="Image Description">
                  Excel
                </a>
                <a id="export-csv" class="dropdown-item" href="javascript:;">
                  <img class="avatar avatar-xss avatar-4x3 me-2" src="assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                  .CSV
                </a>
                <a id="export-pdf" class="dropdown-item" href="javascript:;">
                  <img class="avatar avatar-xss avatar-4x3 me-2" src="assets/svg/brands/pdf-icon.svg" alt="Image Description">
                  PDF
                </a>
              </div>
            </div>
            <!-- End Dropdown -->

            <!-- Dropdown -->
            <div class="dropdown">
              <button type="button" class="btn btn-white btn-sm w-100" id="usersFilterDropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                <i class="bi-filter me-1"></i> Filter <span class="badge bg-soft-dark text-dark rounded-circle ms-1">2</span>
              </button>

              <div class="dropdown-menu dropdown-menu-sm-end dropdown-card card-dropdown-filter-centered" aria-labelledby="usersFilterDropdown" style="min-width: 22rem;">
                <!-- Card -->
                <div class="card">
                  <div class="card-header card-header-content-between">
                    <h5 class="card-header-title">Filter Manager</h5>

                    <!-- Toggle Button -->
                    <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm ms-2">
                      <i class="bi-x-lg"></i>
                    </button>
                    <!-- End Toggle Button -->
                  </div>

                  <div class="card-body">
                    <form>
                      <div class="mb-4">
                        <small class="text-cap text-body">Role</small>

                        <div class="row">
                          <div class="col">
                            <!-- Check -->
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="usersFilterCheckAll" checked="">
                              <label class="form-check-label" for="usersFilterCheckAll">
                                All
                              </label>
                            </div>
                            <!-- End Check -->
                          </div>
                          <!-- End Col -->

                          
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>

                      <div class="row">
                        <div class="col-sm mb-4">
                          <small class="text-cap text-body">Position</small>

                          <!-- Select -->
                          <div class="tom-select-custom">
                            <select class="js-select js-datatable-filter form-select form-select-sm" data-target-column-index="2" data-hs-tom-select-options='{
                                      "placeholder": "Any",
                                      "searchInDropdown": false,
                                      "hideSearch": true,
                                      "dropdownWidth": "10rem"
                                    }'>
                              <option value="">Any</option>
                              <option value="Accountant">Manager Accountant</option>
                              <!-- <option value="Co-founder">Co-founder</option>
                              <option value="Designer">Designer</option>
                              <option value="Developer">Developer</option>
                              <option value="Director">Director</option> -->
                            </select>
                            <!-- End Select -->
                          </div>
                        </div>
                        <!-- End Col -->

                        <div class="col-sm mb-4">
                          <small class="text-cap text-body">Status</small>

                          <!-- Select -->
                          <div class="tom-select-custom">
                            <select class="js-select js-datatable-filter form-select form-select-sm" data-target-column-index="4" data-hs-tom-select-options='{
                                      "placeholder": "Any status",
                                      "searchInDropdown": false,
                                      "hideSearch": true,
                                      "dropdownWidth": "10rem"
                                    }'>
                              <option value="">Any status</option>
                              <option value="Active" data-option-template='<span class="d-flex align-items-center"><span class="legend-indicator bg-success"></span>Active</span>'>Active</option>
                              <option value="Pending" data-option-template='<span class="d-flex align-items-center"><span class="legend-indicator bg-warning"></span>Pending</span>'>Pending</option>
                              <option value="Blocked" data-option-template='<span class="d-flex align-items-center"><span class="legend-indicator bg-danger"></span>Blocked</span>'>Blocked</option>
                            </select>
                          </div>
                          <!-- End Select -->
                        </div>
                        <!-- End Col -->

                        <div class="col-12 mb-4">
                          <span class="text-cap text-body">Location</span>

                          <!-- Select -->
                          <div class="tom-select-custom">
                            <select class="js-select form-select">
                              <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="AkwaIbom">AkwaIbom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross River">
                                  Cross River
                                </option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                                <option value="FCT">FCT</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="Zamfara">Zamafara</option>
                            </select>
                          </div>
                          <!-- End Select -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->

                      <div class="d-grid">
                        <a class="btn btn-primary" href="javascript:;">Apply</a>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Card -->
              </div>
            </div>
            <!-- End Dropdown -->
          </div>
        </div>
        <!-- End Header -->

        <!-- Table -->
        <div class="table-responsive datatable-custom position-relative">
          <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                   "columnDefs": [{
                      "targets": [0, 7],
                      "orderable": false
                    }],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries",
                   "pageLength": 15,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination"
                 }'>
            <thead class="thead-light">
              <tr>
                <th class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                    <label class="form-check-label" for="datatableCheckAll"></label>
                  </div>
                </th>
                <th>Manager Code</th>
                <th class="table-column-ps-0">Business Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Status</th>
                <th>Activation Code</th>
                <th>Account Manager</th>
                <th>State</th>
                <th>LGA</th>
                <th>Aggregator</th>
                <th>Date Created</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll1">
                    <label class="form-check-label" for="datatableCheckAll1"></label>
                  </div>
                </td>
                <td>
                    <span class="d-block fs-5">TYDJJHD/76767685-846687</span>
                  </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="#">
                    <!-- <div class="avatar avatar-circle">
                      <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                    </div> -->
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Amanda Harvey </span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">09047767476</span>
                    </td>
                <td>
                    <span class="d-block fs-5 text-body">amanda@site.com</span>

                </td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>
                  9778G38H78
                </td>
                <td>Mr Yemi</td>
                <td>Lagos</td>
                <td>Eti Osa</td>
                <td>Business Name</td>
                <td>20/01/2024</td>
                <td>
                      <!-- Dropdown -->
                  <div class="dropdown nav-scroller-dropdown">
                    <button type="button" class="btn btn-white btn-icon btn-sm" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi-list-ul"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="bi-eye dropdown-item-icon"></i> View Agent
                          </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-slash-circle dropdown-item-icon"></i> DeActivate Agent
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-list-ul dropdown-item-icon"></i> Wallet History
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-check-circle dropdown-item-icon"></i> Assign Acct. Mgrss
                      </a>

                      <a class="dropdown-item" href="#">
                        <i class="bi-list dropdown-item-icon"></i>Transaction History
                      </a>

                      <a class="dropdown-item" href="#">
                        <i class="bi-wallet dropdown-item-icon"></i>Credit Agent Wallet
                      </a>

                      <a class="dropdown-item" href="#">
                        <i class="bi-bar-chart dropdown-item-icon"></i>Transaction Rate
                      </a>

                      <a class="dropdown-item" href="#">
                        <i class="bi-pencil-square dropdown-item-icon"></i>Edit Agent Details
                      </a>

                      <a class="dropdown-item" href="#">
                        <i class="bi-arrow-counterclockwise dropdown-item-icon"></i>Reset Password
                      </a>

                      <a class="text-danger dropdown-item" href="#">
                        <i class=" bi-slash-circle dropdown-item-icon"></i>Block Agent
                      </a>
                      
                    </div>
                  </div>
                
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll1">
                    <label class="form-check-label" for="datatableCheckAll1"></label>
                  </div>
                </td>
                <td>
                    <span class="d-block fs-5">TYDJJHD/76767685-846687</span>
                  </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="#">
                    <!-- <div class="avatar avatar-circle">
                      <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                    </div> -->
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Dave Julius </span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">92047767476</span>
                    </td>
                <td>
                    <span class="d-block fs-5 text-body">julius@site.com</span>

                </td>
                <td>
                  <span class="legend-indicator bg-warning"></span>Pending
                </td>
                <td>
                  0938
                </td>
                <td>074 87367647</td>
                <td>Osun</td>
                <td>LGA</td>
                <td>Business Name</td>
                <td>20/12/2023</td>
                <td>
                      <!-- Dropdown -->
                  <div class="dropdown nav-scroller-dropdown">
                    <button type="button" class="btn btn-white btn-icon btn-sm" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi-list-ul"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="profileDropdown">

                      <a class="dropdown-item" href="#">
                        <i class="bi-slash-circle dropdown-item-icon"></i> DeActivate Agent
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-list-ul dropdown-item-icon"></i> Wallet History
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-check-circle dropdown-item-icon"></i> Assign Acct. Mgrss
                      </a>

                      <a class="dropdown-item" href="#">
                        <i class="bi-list dropdown-item-icon"></i>Transaction History
                      </a>

                      <a class="dropdown-item" href="#">
                        <i class="bi-wallet dropdown-item-icon"></i>Credit Agent Wallet
                      </a>

                      <a class="dropdown-item" href="#">
                        <i class="bi-bar-chart dropdown-item-icon"></i>Transaction Rate
                      </a>

                      <a class="dropdown-item" href="#">
                        <i class="bi-pencil-square dropdown-item-icon"></i>Edit Agent Details
                      </a>

                      <a class="dropdown-item" href="#">
                        <i class="bi-arrow-counterclockwise dropdown-item-icon"></i>Reset Password
                      </a>

                      <a class="text-danger dropdown-item" href="#">
                        <i class=" bi-slash-circle dropdown-item-icon"></i>Block Agent
                      </a>
                      
                    </div>
                  </div>
                
                </td>
              </tr>

              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll1">
                    <label class="form-check-label" for="datatableCheckAll1"></label>
                  </div>
                </td>
                <td>
                    <span class="d-block fs-5">TYDJJHD/76767685-846687</span>
                  </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="#">
                    <!-- <div class="avatar avatar-circle">
                      <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                    </div> -->
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Jame Doe </span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">035047767476</span>
                    </td>
                <td>
                    <span class="d-block fs-5 text-body">doe@site.com</span>

                </td>
                <td>
                  <span class="legend-indicator bg-success"></span>Active
                </td>
                <td>
                  7878YD8DGHG
                </td>
                <td>Miss Olaiwola</td>
                <td>Ekiti</td>
                <td>LGA</td>
                <td>Enterprise Name</td>
                <td>30/12/2023</td>
                <td>
                      <!-- Dropdown -->
                  <div class="dropdown nav-scroller-dropdown">
                    <button type="button" class="btn btn-white btn-icon btn-sm" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi-list-ul"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="profileDropdown">

                      <a class="dropdown-item" href="#">
                        <i class="bi-slash-circle dropdown-item-icon"></i> DeActivate Agent
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-list-ul dropdown-item-icon"></i> Wallet History
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-check-circle dropdown-item-icon"></i> Assign Acct. Mgrss
                      </a>

                      <a class="dropdown-item" href="#">
                        <i class="bi-list dropdown-item-icon"></i>Transaction History
                      </a>

                      <a class="dropdown-item" href="#">
                        <i class="bi-wallet dropdown-item-icon"></i>Credit Agent Wallet
                      </a>

                      <a class="dropdown-item" href="#">
                        <i class="bi-bar-chart dropdown-item-icon"></i>Transaction Rate
                      </a>

                      <a class="dropdown-item" href="#">
                        <i class="bi-pencil-square dropdown-item-icon"></i>Edit Agent Details
                      </a>

                      <a class="dropdown-item" href="#">
                        <i class="bi-arrow-counterclockwise dropdown-item-icon"></i>Reset Password
                      </a>

                      <a class="text-danger dropdown-item" href="#">
                        <i class=" bi-slash-circle dropdown-item-icon"></i>Block Agent
                      </a>
                      
                    </div>
                  </div>
                
                </td>
              </tr>

          
              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll1">
                    <label class="form-check-label" for="datatableCheckAll1"></label>
                  </div>
                </td>
                <td>
                    <span class="d-block fs-5">TYDJJHD/76767685-846687</span>
                  </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="#">
                    <!-- <div class="avatar avatar-circle">
                      <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                    </div> -->
                    <div class="ms-3">
                      <span class="d-block h5 text-inherit mb-0">Lancelot Athur </span>
                    </div>
                  </a>
                </td>
                <td>
                  <span class="d-block h5 mb-0">0147727476</span>
                    </td>
                <td>
                    <span class="d-block fs-5 text-body">athur@site.com</span>

                </td>
                <td>
                  <span class="legend-indicator bg-danger"></span>Blocked
                </td>
                <td>
                  34747638H78
                </td>
                <td>Miss Peace</td>
                <td>Lagos</td>
                <td>Eti Osa</td>
                <td>Business Name</td>
                <td>20/01/2024</td>
                <td>
                      <!-- Dropdown -->
                  <div class="dropdown nav-scroller-dropdown">
                    <button type="button" class="btn btn-white btn-icon btn-sm" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi-list-ul"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="profileDropdown">

                      <a class="dropdown-item" href="#">
                        <i class="bi-eye dropdown-item-icon"></i> View Agent
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-slash-circle dropdown-item-icon"></i> DeActivate Agent
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-list-ul dropdown-item-icon"></i> Wallet History
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="bi-check-circle dropdown-item-icon"></i> Assign Acct. Mgrss
                      </a>

                      <a class="dropdown-item" href="#">
                        <i class="bi-list dropdown-item-icon"></i>Transaction History
                      </a>

                      <a class="dropdown-item" href="#">
                        <i class="bi-wallet dropdown-item-icon"></i>Credit Agent Wallet
                      </a>

                      <a class="dropdown-item" href="#">
                        <i class="bi-bar-chart dropdown-item-icon"></i>Transaction Rate
                      </a>

                      <a class="dropdown-item" href="#">
                        <i class="bi-pencil-square dropdown-item-icon"></i>Edit Agent Details
                      </a>

                      <a class="dropdown-item" href="#">
                        <i class="bi-arrow-counterclockwise dropdown-item-icon"></i>Reset Password
                      </a>

                      <a class="text-danger dropdown-item" href="#">
                        <i class=" bi-slash-circle dropdown-item-icon"></i>Block Agent
                      </a>
                      
                    </div>
                  </div>
                
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
                  <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-hs-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true
                          }'>
                    <option value="10">10</option>
                    <option value="15" selected="">15</option>
                    <option value="20">20</option>
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
              <img class="navbar-brand-logo" src="assets/svg/logos/logo.svg" alt="Logo" data-hs-theme-appearance="default">
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
                    <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="navbarNotificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation="">
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContainerNavDropdown" aria-controls="navbarContainerNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                      <div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
                        <div class="input-group-prepend input-group-text">
                          <i class="bi-search"></i>
                        </div>

                        <input type="search" class="js-form-search form-control" placeholder="Search in front" aria-label="Search in front" data-hs-form-search-options='{
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

                    <button class="js-form-search js-form-search-mobile-toggle btn btn-ghost-secondary btn-icon rounded-circle d-lg-none" type="button" data-hs-form-search-options='{
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
                    <div id="searchDropdownMenu" class="hs-form-search-menu-content dropdown-menu dropdown-menu-form-search navbar-dropdown-menu-borderless">
                      <div class="card">
                        <!-- Body -->
                        <div class="card-body-height">
                          <div class="d-lg-none">
                            <div class="input-group input-group-merge navbar-input-group mb-5">
                              <div class="input-group-prepend input-group-text">
                                <i class="bi-search"></i>
                              </div>

                              <input type="search" class="form-control" placeholder="Search in front" aria-label="Search in front">
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

                          <a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                <img class="avatar avatar-xs avatar-circle" src="assets/img/160x160/img10.jpg" alt="Image Description">
                              </div>
                              <div class="flex-grow-1 text-truncate ms-2">
                                <span>Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                              </div>
                            </div>
                          </a>

                          <a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                <img class="avatar avatar-xs avatar-circle" src="assets/img/160x160/img3.jpg" alt="Image Description">
                              </div>
                              <div class="flex-grow-1 text-truncate ms-2">
                                <span>David Harrison</span>
                              </div>
                            </div>
                          </a>

                          <a class="dropdown-item" href="#">
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
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDoubleLineContainerNavDropdown" aria-controls="navbarDoubleLineContainerNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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

  <!-- JS Implementing Plugins -->
  <script src="assets/js/vendor.min.js"></script>

  <!-- JS Front -->
  <script src="assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATATABLES
      // =======================================================
      HSCore.components.HSDatatables.init($('#datatable'), {
        dom: 'Bfrtip',
        buttons: [
          {
            extend: 'copy',
            className: 'd-none'
          },
          {
            extend: 'excel',
            className: 'd-none'
          },
          {
            extend: 'csv',
            className: 'd-none'
          },
          {
            extend: 'pdf',
            className: 'd-none'
          },
          {
            extend: 'print',
            className: 'd-none'
          },
        ],
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
      })

      const datatable = HSCore.components.HSDatatables.getItem(0)

      $('#export-copy').click(function() {
        datatable.button('.buttons-copy').trigger()
      });

      $('#export-excel').click(function() {
        datatable.button('.buttons-excel').trigger()
      });

      $('#export-csv').click(function() {
        datatable.button('.buttons-csv').trigger()
      });

      $('#export-pdf').click(function() {
        datatable.button('.buttons-pdf').trigger()
      });

      $('#export-print').click(function() {
        datatable.button('.buttons-print').trigger()
      });

      $('.js-datatable-filter').on('change', function() {
        var $this = $(this),
          elVal = $this.val(),
          targetColumnIndex = $this.data('target-column-index');

        if (elVal === 'null') elVal = ''

        datatable.column(targetColumnIndex).search(elVal).draw();
      });
    });
  </script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
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


        // INITIALIZATION OF INPUT MASK
        // =======================================================
        HSCore.components.HSMask.init('.js-input-mask')


        // INITIALIZATION OF NAV SCROLLER
        // =======================================================
        new HsNavScroller('.js-nav-scroller')


        // INITIALIZATION OF COUNTER
        // =======================================================
        new HSCounter('.js-counter')


        // INITIALIZATION OF TOGGLE PASSWORD
        // =======================================================
        new HSTogglePassword('.js-toggle-password')


        // INITIALIZATION OF FILE ATTACHMENT
        // =======================================================
        new HSFileAttach('.js-file-attach')
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