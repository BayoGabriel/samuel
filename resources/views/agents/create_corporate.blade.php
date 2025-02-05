@extends('layouts.main')

@section('title','Terra || Home')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Title -->
  <title>Add Agent | Front - Admin &amp; Dashboard</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico" />

  <!-- Font -->
  <link href="../../css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets/css/vendor.min.css" />

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets/css/theme.min.css?v=1.0" />

  <link rel="preload" href="assets/css/theme.min-1.css" data-hs-appearance="default" as="style" />
  <link rel="preload" href="assets/css/theme-dark.min.css" data-hs-appearance="dark" as="style" />

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
    window.hs_config = {
      autopath: "@@autopath",
      deleteLine: "hs-builder:delete",
      "deleteLine:build": "hs-builder:build-delete",
      "deleteLine:dist": "hs-builder:dist-delete",
      previewMode: false,
      startPath: "/dashboard.html",
      vars: {
        themeFont:
          "https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap",
        version: "?v=1.0",
      },
      layoutBuilder: {
        extend: { switcherSupport: true },
        header: { layoutMode: "default", containerMode: "container-fluid" },
        sidebarLayout: "default",
      },
      themeAppearance: {
        layoutSkin: "default",
        sidebarSkin: "default",
        styles: {
          colors: {
            primary: "#377dff",
            transparent: "transparent",
            white: "#fff",
            dark: "132144",
            gray: { 100: "#f9fafc", 900: "#1e2022" },
          },
          font: "Inter",
        },
      },
      languageDirection: { lang: "en" },
      skipFilesFromBundle: {
        dist: [
          "assets/js/hs.theme-appearance.js",
          "assets/js/hs.theme-appearance-charts.js",
          "assets/js/demo.js",
        ],
        build: [
          "assets/css/theme.css",
          "assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js",
          "assets/js/demo.js",
          "assets/css/theme-dark.css",
          "assets/css/docs.css",
          "assets/vendor/icon-set/style.css",
          "assets/js/hs.theme-appearance.js",
          "assets/js/hs.theme-appearance-charts.js",
          "node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js",
          "assets/js/demo.js",
        ],
      },
      minifyCSSFiles: ["assets/css/theme.css", "assets/css/theme-dark.css"],
      copyDependencies: {
        dist: { "*assets/js/theme-custom.js": "" },
        build: {
          "*assets/js/theme-custom.js": "",
          "node_modules/bootstrap-icons/font/*fonts/**": "assets/css",
        },
      },
      buildFolder: "",
      replacePathsToCDN: {},
      directoryNames: { src: "./src", dist: "./dist", build: "./build" },
      fileNames: {
        dist: { js: "theme.min.js", css: "theme.min.css" },
        build: {
          css: "theme.min.css",
          js: "theme.min.js",
          vendorCSS: "vendor.min.css",
          vendorJS: "vendor.min.js",
        },
      },
      fileTypes: "jpg|png|svg|mp4|webm|ogv|json",
    };
    window.hs_config.gulpRGBA = (p1) => {
      const options = p1.split(",");
      const hex = options[0].toString();
      const transparent = options[1].toString();

      var c;
      if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {
        c = hex.substring(1).split("");
        if (c.length == 3) {
          c = [c[0], c[0], c[1], c[1], c[2], c[2]];
        }
        c = "0x" + c.join("");
        return (
          "rgba(" +
          [(c >> 16) & 255, (c >> 8) & 255, c & 255].join(",") +
          "," +
          transparent +
          ")"
        );
      }
      throw new Error("Bad Hex");
    };
    window.hs_config.gulpDarken = (p1) => {
      const options = p1.split(",");

      let col = options[0].toString();
      let amt = -parseInt(options[1]);
      var usePound = false;

      if (col[0] == "#") {
        col = col.slice(1);
        usePound = true;
      }
      var num = parseInt(col, 16);
      var r = (num >> 16) + amt;
      if (r > 255) {
        r = 255;
      } else if (r < 0) {
        r = 0;
      }
      var b = ((num >> 8) & 0x00ff) + amt;
      if (b > 255) {
        b = 255;
      } else if (b < 0) {
        b = 0;
      }
      var g = (num & 0x0000ff) + amt;
      if (g > 255) {
        g = 255;
      } else if (g < 0) {
        g = 0;
      }
      return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16);
    };
    window.hs_config.gulpLighten = (p1) => {
      const options = p1.split(",");

      let col = options[0].toString();
      let amt = parseInt(options[1]);
      var usePound = false;

      if (col[0] == "#") {
        col = col.slice(1);
        usePound = true;
      }
      var num = parseInt(col, 16);
      var r = (num >> 16) + amt;
      if (r > 255) {
        r = 255;
      } else if (r < 0) {
        r = 0;
      }
      var b = ((num >> 8) & 0x00ff) + amt;
      if (b > 255) {
        b = 255;
      } else if (b < 0) {
        b = 0;
      }
      var g = (num & 0x0000ff) + amt;
      if (g > 255) {
        g = 255;
      } else if (g < 0) {
        g = 0;
      }
      return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16);
    };
  </script>
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl footer-offset">
  <script src="assets/js/hs.theme-appearance.js"></script>

  <script src="assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js"></script>

  <!-- ========== HEADER ========== -->



  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Step Form -->
      <form class="js-step-form py-md-5" data-hs-step-form-options='{
              "progressSelector": "#addUserStepFormProgress",
              "stepsSelector": "#addUserStepFormContent",
              "endSelector": "#addUserFinishBtn",
              "isValidate": false
            }'>
        <div class="row justify-content-lg-center">
          <div class="col-lg-12">
            <!-- Step -->
            <ul id="addUserStepFormProgress"
                      class="js-step-progress step step-sm step-icon-sm step step-inline step-item-between mb-3 mb-md-5">
                      <li class="step-item">
                        <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                              "targetSelector": "#addUserStepProfile"
                            }'>
                          <span class="step-icon step-icon-soft-dark">1</span>
                          <div class="step-content">
                            <span class="step-title">Business Details</span>
                          </div>
                        </a>
                      </li>


                      <li class="step-item" style="display: none;">
                        <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                              "targetSelector": "#uploadPersonalDoc"
                            }'>
                          <span class="step-icon step-icon-soft-dark">2</span>
                          <div class="step-content">
                            <span class="step-title">Director 1
                            </span>
                          </div>
                        </a>
                      </li>

                      <li class="step-item">
                        <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                              "targetSelector": "#directorOne"
                            }'>
                          <span class="step-icon step-icon-soft-dark">2</span>
                          <div class="step-content">
                            <span class="step-title">Director 1
                            </span>
                          </div>
                        </a>
                      </li>


                      <li class="step-item">
                        <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                              "targetSelector": "#directorTwo"
                            }'>
                          <span class="step-icon step-icon-soft-dark">3</span>
                          <div class="step-content">
                            <span class="step-title">Director 2 </span>
                          </div>
                        </a>
                      </li>

                      <li class="step-item">
                        <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                              "targetSelector": "#directorThree "
                            }'>
                          <span class="step-icon step-icon-soft-dark">4
                          </span>
                          <div class="step-content">
                            <span class="step-title">Director 3 </span>
                          </div>
                        </a>
                      </li>
                    </ul>
                    <!-- End Step -->

                    <!-- Content Step Form -->
                    <div id="addUserStepFormContent">
                      <div id="addUserStepProfile" class="card card-lg active">
                          <!-- Body -->
                          <div class="card-body">

                            <!-- Form -->
                            <div class="row">
                              <div class="col-lg-6">
                                <label for="locationLabel" class="col-form-label form-label">Business Name</label>
                                <div class="">
                                  <input type="text" class="form-control" name="businessName" id="businessName"
                                    placeholder="Comunal place" aria-label="City" />
                                </div>
                              </div>

                              <div class="col-lg-6">
                                <label for="locationLabel" class="col-form-label form-label">Business Incorporation
                                  Number</label>
                                <input type="text" class="form-control" name="businessNum" id="businessNum"
                                  placeholder="0485767823" aria-label="State" />
                              </div>

                              <div class="col-lg-6 mt-3">
                                <label for="locationLabel" class="col-form-label form-label">Business Address
                                </label>
                                <input type="text" class="form-control" name="businessAddress " id="businessAddress"
                                  placeholder="Business Address" aria-label="State" />
                              </div>

                              <div class="col-lg-6 mt-3">
                                <div class="">
                                  <label class="col-form-label form-label" for="exampleFormControlTextarea1">City</label>
                                  <input type="text" class="form-control" name="city" placeholder="Lagos"
                                    aria-label="Your address" />
                                </div>
                              </div>

                              <div class="col-lg-6 mt-3">
                                <label for="state" class="col-form-label form-label">State</label>

                                <select class="input-location-dependant form-control d-block"
                                  onchange="toggleLGA(this, 'select-lga1');" name="state" id="state"
                                  style="display: block !important">
                                  <!-- <option value="" selected="selected" disabled>
                                      - Select -
                                    </option> -->
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

                              <div class="col-lg-6 mt-3">
                                <label for="city" class="col-form-label form-label">LGA</label>
                                <select name="lga" id="lga" class="form-control select-lga1" required></select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                              </div>

                              <div class="col-lg-6 mt-3">
                                <label for="phoneLabel" class="col-form-label form-label">Phone <span
                                    class="text-danger">*</span>
                                </label>

                                <div class="input-group input-group-sm-vertical">
                                  <input type="text" class="js-input-mask form-control" name="phone" id="phoneLabel"
                                    required="" minlength="11" maxlength="11" placeholder="09057576367"
                                    aria-label="+x(xxx)xxx-xx-xx" />

                                  <!-- Select -->

                                  <!-- End Select -->
                                </div>

                                <!-- Container For Input Field -->
                              </div>

                              <div class="col-lg-6 mt-3">
                                <label for="email" class="col-form-label form-label">Business Email
                                </label>
                                <input type="email" class="form-control" name="busEmail" id="busEmail"
                                  placeholder="business@mail.com" aria-label="busEmail" />
                              </div>

                              <div class="col-lg-6">
                                <label for="locationLabel" class="col-form-label form-label">Bank Name
                                  <i class="bi-info-circle text-body ms-1" data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    aria-label="This is the bank account from which you will always fund your virtual wallet."
                                    data-bs-original-title="This is the bank account from which you will always fund your virtual wallet."></i>
                                </label>

                                <select name="bankName" class="form-control">
                                  <option value="" selected disabled>
                                    Select a bank
                                  </option>
                                  <option value="1">Access Bank Plc</option>
                                  <option value="2">Citibank Nigeria Limited</option>
                                  <option value="3">Ecobank Nigeria Plc</option>
                                  <option value="4">Fidelity Bank Plc</option>
                                  <option value="5">First Bank Nigeria Limited</option>
                                  <option value="6">
                                    First City Monument Bank Plc
                                  </option>
                                  <option value="7">Globus Bank Limited</option>
                                  <option value="8">Guaranty Trust Bank Plc</option>
                                  <option value="9">
                                    Heritage Banking Company Ltd.
                                  </option>
                                  <option value="10">Keystone Bank Limited</option>
                                  <option value="11">Parallex Bank Ltd</option>
                                  <option value="12">Polaris Bank Plc</option>
                                  <option value="13">Premium Trust Bank</option>
                                  <option value="14">Providus Bank</option>
                                  <option value="15">Stanbic IBTC Bank Plc</option>
                                  <option value="16">
                                    Standard Chartered Bank Nigeria Ltd.
                                  </option>
                                  <option value="17">Sterling Bank Plc</option>
                                  <option value="18">
                                    SunTrust Bank Nigeria Limited
                                  </option>
                                  <option value="19">Titan Trust Bank Ltd</option>
                                  <option value="20">Union Bank of Nigeria Plc</option>
                                  <option value="21">United Bank For Africa Plc</option>
                                  <option value="22">Unity Bank Plc</option>
                                  <option value="23">Wema Bank Plc</option>
                                  <option value="24">Zenith Bank Plc</option>
                                  <option value="25">
                                    Consolidated Microfinance Bank
                                  </option>
                                  <option value="26">
                                    First City Monument Bank Microfinance Bank
                                  </option>
                                  <option value="27">Ecobank Microfinance Bank</option>
                                  <option value="28">United Microfinance Bank</option>
                                  <option value="29">Skye Microfinance Bank</option>
                                  <option value="30">Wema Microfinance Bank</option>
                                  <option value="31">Jaiz Microfinance Bank</option>
                                  <option value="32">Access Microfinance Bank</option>
                                  <option value="33">
                                    Guaranty Trust Microfinance Bank
                                  </option>
                                  <option value="34">
                                    Diamond Bank Microfinance Bank
                                  </option>
                                  <option value="35">PiggyVest</option>
                                  <option value="36">Kuda Bank</option>
                                  <option value="37">Carbon</option>
                                  <option value="38">Mono</option>
                                  <option value="39">Flutterwave</option>
                                  <option value="40">Wyre</option>
                                  <option value="41">Paystack</option>
                                  <option value="42">Opay</option>
                                  <option value="43">Palmpay</option>
                                  <option value="44">Remitly</option>
                                </select>
                              </div>
                              
                              <div class="col-lg-6">
                                <label for="locationLabel" class="col-form-label form-label">Account Number</label>
                                <div class="mb-">
                                  <input type="number" minlength="10" maxlength="10" class="form-control" name="acountName"
                                    id="BVN" placeholder="0083847488" aria-label="Account Number" />
                                </div>
                              </div>

                              <div class="col-lg-6 mt-3">
                                <label for="email" class="col-form-label form-label">Tax ID Number
                                </label>
                                <input type="text" class="form-control" name="TIN" id="TIN" placeholder="Tax ID Number"
                                  aria-label="Tax ID Number" />
                              </div>

                            </div>
                          </div>
                          <div class="card-footer d-flex justify-content-between align-items-center">
                            <button type="button" class="btn btn-primary" data-hs-step-form-next-options='{
                                        "targetSelector": "#uploadPersonalDoc"
                                      }'>
                              Next <i class="bi-chevron-right"></i>
                            </button>
                          </div>

                        </div>

                        <div id="uploadPersonalDoc" class="card card-lg" style="display: none">
                          <!-- Body -->
                          <div class="card-body">
                            <!-- Form -->
                            <div class="row">
                              <div class="col-lg-12">

                                <div class="y-3">
                                  <h2 class="display-5">Upload business documents</h2>
                                </div>
                                <!-- <hr> -->
                              </div>

                              <div class="col-lg-6 mt-4">
                                <div class="">
                                  <label for="lastNameLabel" class="form-label">Certificate of Incorporation
                                  </label>

                                  <input type="file" class="form-control" name="lastName" id="lastNameLabel"
                                    placeholder="Donald" aria-label="Donald" />
                                </div>
                              </div>

                              <div class="col-lg-6 mt-4">
                                <label for="emailLabel" class="form-label">Memorandum and Articles
                                </label>

                                <input type="file" class="form-control" name="email" id="emailLabel"
                                  placeholder="clarice@site.com" aria-label="clarice@site.com" />
                              </div>
                              <div class="col-lg-6 mt-4">
                                <div class="">
                                  <label for="lastNameLabel" class="form-label">CO2 Allotment of shares
                                  </label>

                                  <input type="file" class="form-control" name="statementReturn" id="statementReturn"
                                    placeholder="Donald" aria-label="Donald" />
                                </div>
                              </div>

                              <div class="col-lg-6 mt-4">
                                <label for="emailLabel" class="form-label">CO7 Particulars of Directors
                                </label>

                                <input type="file" class="form-control" name="co7Part" id="co7Part" />
                              </div>

                              <div class="col-lg-6 mt-4">
                                <div class="">
                                  <label for="lastNameLabel" class="form-label">Copy of Operating license
                                    <sub>(Where applibale)</sub>
                                  </label>

                                  <input type="file" class="form-control" name="cool" id="lastNameLabel"
                                    placeholder="Donald" aria-label="Donald" />
                                </div>
                              </div>

                              <div class="col-lg-6 mt-4">
                                <label for="emailLabel" class="form-label">Utility Bill
                                </label>

                                <input type="file" class="form-control" name="utilityBill" id="utilityBill " />
                              </div>
                              <div class="col-lg-12 mt-3">
                                <label for="emailLabel" class="form-label">Bord Resolution
                                </label>

                                <input type="file" class="form-control" name="bordResolution " id="bordResolution "
                                  placeholder="778436344" aria-label="clarice@site.com" />
                              </div>

                              <div class="my-2">
                                <hr>
                              </div>

                              <div class="col-lg-12">

                                <div class="y-3">
                                  <strong>
                                    <p class="text-dark">Any other document</p>
                                  </strong>
                                </div>
                              </div>

                              <div class="col-lg-12 mt-3">
                                <label for="emailLabel" class="form-label">Upload Document
                                </label>

                                <input type="file" class="form-control" name="uploadOtherDoc " id="uploadOtherDoc " />
                              </div>
                            </div>

                            <!-- End Form -->
                          </div>
                          <!-- End Body -->
                          <div class="card-footer d-sm-flex align-items-sm-center">
                            <button type="button" class="btn btn-ghost-secondary mb-2 mb-sm-0"
                              data-hs-step-form-prev-options='{
      "targetSelector": "#addUserStepProfile"
    }'>
                              <i class="bi-chevron-left"></i> Previous step
                            </button>

                            <div class="ms-auto">

                              <button type="button" class="btn btn-primary" data-hs-step-form-next-options='{
                                  "targetSelector": "#directorOne"
                                }'>
                                Next <i class="bi-chevron-right"></i>
                              </button>
                            </div>

                            <!-- End Footer -->
                          </div>
                        </div>

                        <div id="directorOne" class="card card-lg" style="display: none">
                          <!-- Body -->
                          <div class="card-body">
                            <!-- Form -->
                            <div class="row">
                              <div class="col-sm-12">
                                <!-- Select -->
                                <div class="row">
                                  <div class="col-lg-6">
                                    <label for="locationLabel" class="col-form-label form-label">Fist Name</label>
                                    <div class="mb-">
                                      <input type="text" class="form-control" name="dirFirstName" id="dirFirstName"
                                        placeholder="John" aria-label="John" />
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <label for="locationLabel" class="col-form-label form-label">Last Name</label>
                                    <input type="text" class="form-control" name="dirLastName" id="dirLastName"
                                      placeholder="Doe" aria-label="Doe" />
                                  </div>
                                  <div class="col-lg-12 mb-2">
                                    <label for="locationLabel" class="col-form-label form-label">Middle Name</label>
                                    <input type="text" class="form-control" name="dirMidName" id="dirMidName"
                                      placeholder="Lia" aria-label="Lia" />
                                  </div>
                                </div>
                              </div>
    
                              <div class="col-sm-6">
                                <label for="Gender" class="form-label">Gender
                                </label>
    
                                <select class="form-select" name="gender">
                                  <option>select</option>
                                  <option>Male</option>
                                  <option>Female</option>
                                  <option>Other</option>
                                </select>
                              </div>
    
                              <div class="col-sm-6">
                                <label for="emailLabel" class="form-label">Date of birth
                                </label>
    
                                <input type="date" class="form-control" name="dob" id="DOBLabel" placeholder="12/31/1900" />
                              </div>
    
    
                              <div class="col-sm-6">
                                <label for="phoneLabel" class="form-label">Phone <span class="text-danger">*</span>
                                </label>
    
                                <div class="input-group input-group-sm-vertical">
                                  <input type="text" class="js-input-mask form-control" name="dirphone" id="phoneLabel"
                                    required minlength="11" maxlength="11" placeholder="09057576367"
                                    aria-label="+x(xxx)xxx-xx-xx" />
    
                                  <!-- Select -->
    
                                  <!-- End Select -->
                                </div>
    
                                <!-- Container For Input Field -->
                              </div>
    
                              <div class="col-6 -4">
                                <div class="">
                                  <label class="form-label" for="exampleFormControlTextarea1">Residential Address</label>
                                  <input type="text" class="form-control" name="diraddressLine" placeholder="Your address"
                                    aria-label="Your address" />
                                </div>
                              </div>
    
                              <div class="col-lg-6">
                                <div class="">
                                  <label class="col-form-label form-label" for="exampleFormControlTextarea1">City</label>
                                  <input type="text" class="form-control" name="dirCity" placeholder="Lagos"
                                    aria-label="Your address" />
                                </div>
                              </div>
    
                              <div class="col-lg-6">
                                <label for="state" class="col-form-label form-label">State</label>
    
                                <select class="input-location-dependant form-control d-block d-none"
                                  onchange="toggleLGA(this, 'select-lga1');" name="dirstate" id="state"
                                  style="display: block !important">
                                  <!-- <option value="" selected="selected" disabled>
                                            - Select -
                                          </option> -->
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
                              <div class="col-lg-6">
                                <label for="city" class="col-form-label form-label">LGA</label>
                                <select name="dirLga" id="lga" class="form-control select-lga1" required=""></select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                              </div>
    
    
                              <div class="col-lg-6">
                                <label for="locationLabel" class="col-form-label form-label">BVN</label>
                                <div class="mb-">
                                  <input type="number" minlength="11" maxlength="11" class="form-control" name="dirBVN"
                                    id="BVN" placeholder="09503478450" aria-label="BVN" />
                                </div>
                              </div>
    
    
                              <div class="col-lg-6">
                                <label for="locationLabel" class="col-form-label form-label">NIN</label>
                                <input type="number" minlength="11" maxlength="11" class="form-control" name="dirNIN"
                                  id="busLabel" placeholder="04085767823" aria-label="busLabel" />
                              </div>
    
                              <div class="col-sm-6">
                                <label for="Gender" class="col-form-label form-label">Means of ID Type
                                </label>
                                <!-- If doc type is NIN, document number should only take numbers, else it should take number characters -->
                                <select class="form-select" name="dirGender">
                                  <option>select</option>
                                  <option>National ID</option>
                                  <option>Voter's Card</option>
                                  <option>International Passport</option>
                                  <option>Driver's&nbsp;license</option>
                                </select>
                              </div>
    
                              <div class="col-lg-6">
                                <label for="locationLabel" class="col-form-label form-label">Means of ID Number</label>
                                <!-- If doc type is NIN, document number should only take numbers, else it should take number characters -->
    
                                <input type="text" minlength="11" maxlength="11" class="form-control" name="dirDocNum"
                                  id="dirDocNum" placeholder="04085767823" aria-label="busLabel" />
                              </div>
    
                              <div class="col-lg-6">
                                <label for="locationLabel" class="col-form-label form-label">Issue Date</label>
                                <div class="">
                                  <input type="date" class="form-control" name="dirIssueDate" id="issueDate" />
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <label for="locationLabel" class="col-form-label form-label">Expiry Date</label>
                                <div class="">
                                  <input type="date" class="form-control" name="dirExpireDate" id="expireDate" />
                                </div>
                              </div>
    
                              <div class="col-lg-6">
                                <label for="addressLine1Label" class="col-form-label form-label">Upload Means of ID
                                </label>
    
                                <div class="">
                                  <input type="file" class="form-control" name="dirProfImg" id="profImg" />
                                </div>
                              </div>
    
                              <div class="col-lg-6">
                                <label for="addressLine1Label" class="col-form-label form-label">
                                  Upload Passport size Photograph
                                </label>
    
                                <div class="">
                                  <input type="file" class="form-control" name="dirPersonalPhoto" id="dirPersonalPhoto" />
                                </div>
                              </div>
    
                              <div class="col-lg-6">
                                <label for="addressLine1Label" class="col-form-label form-label">Upload Utility Bill
                                </label>
    
                                <div class="">
                                  <input type="file" class="form-control" name="utilityBill" id="utilityBill" />
                                </div>
                              </div>
                              <!-- End Form -->
                            </div>
                            <!-- End Form -->

                          </div>
                          <!-- End Body -->
                          <div class="card-footer d-sm-flex align-items-sm-center">
                            <button type="button" class="btn btn-ghost-secondary mb-2 mb-sm-0"
                              data-hs-step-form-prev-options='{
        "targetSelector": "#uploadPersonalDoc"
      }'>
                              <i class="bi-chevron-left"></i> Previous step
                            </button>
    
                            <div class="ms-auto">
    
                              <button type="button" class="btn btn-primary" data-hs-step-form-next-options='{
                                    "targetSelector": "#directorTwo"
                                  }'>
                                Next <i class="bi-chevron-right"></i>
                              </button>
                            </div>
    
                            <!-- End Footer -->
                          </div>
                        </div>

                        
                        <div id="directorTwo" class="card card-lg" style="display: none">
                          <!-- Body -->
                          <div class="card-body">
                            <!-- Form -->
                            <div class="row">
                              <div class="col-sm-12">
                                <!-- Select -->
                                <div class="row">
                                  <div class="col-lg-6">
                                    <label for="locationLabel" class="col-form-label form-label">Fist Name</label>
                                    <div class="">
                                      <input type="text" class="form-control" name="dirOnefirstName" id="dirOnefirstName"
                                        placeholder="John" aria-label="John" />
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <label for="locationLabel" class="col-form-label form-label">Last Name</label>
                                    <input type="text" class="form-control" name="dirOnelastName" id="dirOnelastName"
                                      placeholder="Doe" aria-label="Doe" />
                                  </div>
                                  <div class="col-lg-12 mb-3">
                                    <label for="locationLabel" class="col-form-label form-label">Middle Name</label>
                                    <input type="text" class="form-control" name="dirOneMidName" id="dirOneMidName"
                                      placeholder="Lia" aria-label="Lia" />
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-6">
                                <label for="Gender" class="form-label">Gender
                                </label>

                                <select class="form-select" name="dirOneGender">
                                  <option>select</option>
                                  <option>Male</option>
                                  <option>Female</option>
                                  <option>Other</option>
                                </select>
                              </div>

                              <div class="col-sm-6">
                                <label for="emailLabel" class="form-label">Date of birth
                                </label>

                                <input type="date" class="form-control" name="dirOneDob" id="DOBLabel"
                                  placeholder="12/31/1900" />
                              </div>


                              <div class="col-sm-6">
                                <label for="phoneLabel" class="form-label">Phone <span class="text-danger">*</span>
                                </label>

                                <div class="input-group input-group-sm-vertical">
                                  <input type="text" class="js-input-mask form-control" name="dirOnePhone" id="phoneLabel"
                                    required minlength="11" maxlength="11" placeholder="09057576367"
                                    aria-label="+x(xxx)xxx-xx-xx" />

                                  <!-- Select -->

                                  <!-- End Select -->
                                </div>

                                <!-- Container For Input Field -->
                              </div>

                              <div class="col-6 -4">
                                <div class="">
                                  <label class="form-label" for="exampleFormControlTextarea1">Residential Address</label>
                                  <input type="text" class="form-control" name="dirOneAddressLine"
                                    placeholder="Your address" aria-label="Your address" />
                                </div>
                              </div>

                              <div class="col-lg-6">
                                <div class="">
                                  <label class="col-form-label form-label" for="exampleFormControlTextarea1">City</label>
                                  <input type="text" class="form-control" name="dirOneCity" placeholder="Lagos"
                                    aria-label="Your address" />
                                </div>
                              </div>

                              <div class="col-lg-6">
                                <label for="state" class="col-form-label form-label">State</label>

                                <select class="input-location-dependant form-control d-block d-none"
                                  onchange="toggleLGA(this, 'select-lga1');" name="dirOneState" id="state"
                                  style="display: block !important">
                                  <!-- <option value="" selected="selected" disabled>
                                          - Select -
                                        </option> -->
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
                              <div class="col-lg-6">
                                <label for="city" class="col-form-label form-label">LGA</label>
                                <select name="dirOneLga" id="lga" class="form-control select-lga1" required=""></select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                              </div>


                              <div class="col-lg-6">
                                <label for="locationLabel" class="col-form-label form-label">BVN</label>
                                <div class="mb-">
                                  <input type="text" minlength="11" maxlength="11" class="form-control" name="dirOneBVN"
                                    id="dirOneBVN" placeholder="09503478450" aria-label="BVN" />
                                </div>
                              </div>

                              <div class="col-lg-6">
                                <label for="locationLabel" class="col-form-label form-label">NIN</label>
                                <input type="text" minlength="11" maxlength="11" class="form-control" name="dirOneNIN"
                                  id="dirOnebusLabel" placeholder="04085767823" aria-label="busLabel" />
                              </div>

                              <div class="col-sm-6">
                                <label for="Gender" class="col-form-label form-label">Means of ID Type
                                </label>
                                <select class="form-select" name="dirOneDocType">
                                  <option>select</option>
                                  <option>National ID</option>
                                  <option>Voter's Card</option>
                                  <option>International Passport</option>
                                  <option>Driver's&nbsp;license</option>
                                </select>
                              </div>

                              <div class="col-lg-6">
                                <label for="locationLabel" class="col-form-label form-label">Means of ID Number</label>
                                <input type="text" minlength="11" maxlength="11" class="form-control" name="dirOneNum"
                                  id="dirOneNum" placeholder="04085767823" aria-label="busLabel" />
                              </div>

                              <div class="col-lg-6">
                                <label for="locationLabel" class="col-form-label form-label">Issue Date</label>
                                <div class="">
                                  <input type="date" class="form-control" name="dirOneIssueDate" id="dirOneIssueDate" />
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <label for="locationLabel" class="col-form-label form-label">Expiry Date</label>
                                <div class="">
                                  <input type="date" class="form-control" name="dirOneExpireDate" id="dirOneExpireDate" />
                                </div>
                              </div>

                              <div class="col-lg-6">
                                <label for="addressLine1Label" class="col-form-label form-label">Upload Means of ID
                                </label>

                                <div class="">
                                  <input type="file" class="form-control" name="dirOneprofImg" id="dirOneprofImg" />
                                </div>
                              </div>

                              <div class="col-lg-6">
                                <label for="addressLine1Label" class="col-form-label form-label">
                                  Upload Passport size Photograph
                                </label>

                                <div class="">
                                  <input type="file" class="form-control" name="dirOnepersonalPhoto"
                                    id="dirOnepersonalPhoto" />
                                </div>
                              </div>

                              <div class="col-lg-6">
                                <label for="addressLine1Label" class="col-form-label form-label">Upload Utility Bill
                                </label>

                                <div class="">
                                  <input type="file" class="form-control" name="dirOneUtility" id="dirOneUtility" />
                                </div>
                              </div>
                            </div>
                            <!-- End Form -->
                            <!-- End Form -->

                            <!-- Form -->

                            <!-- End Form -->
                          </div>
                          <!-- End Body -->
                          <div class="card-footer d-sm-flex align-items-sm-center">
                            <button type="button" class="btn btn-ghost-secondary mb-2 mb-sm-0"
                              data-hs-step-form-prev-options='{"targetSelector": "#directorOne"  }'>
                              <i class="bi-chevron-left"></i> Previous step
                            </button>

                            <div class="ms-auto">
                              <button type="button" class="btn btn-primary" data-hs-step-form-next-options='{
                                    "targetSelector": "#directorThree"
                                  }'>
                                Next <i class="bi-chevron-right"></i>
                              </button>
                            </div>

                            <!-- End Footer -->
                          </div>
                        </div>

                        <div id="directorThree" class="card card-lg" style="display: none">
                          <!-- Body -->
                          <div class="card-body">
                            <!-- Form -->
                            <div class="row">
                              <div class="col-sm-12">
                                <!-- Select -->
                                <div class="row">
                                  <div class="col-lg-6">
                                    <label for="locationLabel" class="col-form-label form-label">Fist Name</label>
                                    <div class=" ">
                                      <input type="text" class="form-control" name="dirTwofirstName" id="dirTwofirstName"
                                        placeholder="John" aria-label="John" />
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <label for="locationLabel" class="col-form-label form-label">Last Name</label>
                                    <input type="text" class="form-control" name="dirTwolastName" id="dirTwolastName"
                                      placeholder="Doe" aria-label="Doe" />
                                  </div>
                                  <div class="col-12 mb-3">
                                    <label for="locationLabel" class="col-form-label form-label">Middle Name</label>
                                    <input type="text" class="form-control" name="dirTwoMidName" id="dirTwoMidName"
                                      placeholder="Lia" aria-label="Lia" />
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-6">
                                <label for="Gender" class="form-label">Gender
                                </label>

                                <select class="form-select" name="dirTwoGender">
                                  <option>select</option>
                                  <option>Male</option>
                                  <option>Female</option>
                                  <option>Other</option>
                                </select>
                              </div>

                              <div class="col-sm-6">
                                <label for="emailLabel" class="form-label">Date of birth
                                </label>

                                <input type="date" class="form-control" name="dirTwodob" id="DOBLabel"
                                  placeholder="12/31/1900" />
                              </div>

                              <!-- Form -->

                              <div class="col-sm-6">
                                <label for="phoneLabel" class="form-label">Phone <span class="text-danger">*</span>
                                </label>

                                <div class="input-group input-group-sm-vertical">
                                  <input type="text" class="js-input-mask form-control" name="phone" id="phoneLabel"
                                    name="dirTwoPhone" required minlength="11" maxlength="11" placeholder="09057576367"
                                    aria-label="+x(xxx)xxx-xx-xx" />

                                  <!-- Select -->

                                  <!-- End Select -->
                                </div>

                                <!-- Container For Input Field -->
                              </div>

                              <div class="col-6 -4">
                                <div class="">
                                  <label class="form-label" for="exampleFormControlTextarea1">Residential Address</label>
                                  <input type="text" class="form-control" name="dirTwoaddressLine"
                                    placeholder="Your address" aria-label="Your address" />
                                </div>
                              </div>

                              <div class="col-lg-6">
                                <div class="">
                                  <label class="col-form-label form-label" for="exampleFormControlTextarea1">City</label>
                                  <input type="text" class="form-control" name="DirTwoCity" placeholder="Lagos"
                                    aria-label="Your address" />
                                </div>
                              </div>

                              <div class="col-lg-6">
                                <label for="state" class="col-form-label form-label">State</label>

                                <select class="input-location-dependant form-control d-block d-none"
                                  onchange="toggleLGA(this, 'select-lga1');" name="dirTwostate" id="dirTwostate"
                                  style="display: block !important">
                                  <!-- <option value="" selected="selected" disabled>
                                        - Select -
                                      </option> -->
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
                              <div class="col-lg-6">
                                <label for="city" class="col-form-label form-label">LGA</label>
                                <select name="dirTwolga" id="dirTwolga" class="form-control select-lga1"
                                  required=""></select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                              </div>

                              <div class="col-lg-6">
                                <label for="locationLabel" class="col-form-label form-label">BVN</label>
                                <div class="mb-">
                                  <input type="text" minlength="11" maxlength="11" class="form-control" name="dirTwoBVN"
                                    id="dirTwoBVN" placeholder="09503478450" aria-label="BVN" />
                                </div>
                              </div>

                              <div class="col-lg-6">
                                <label for="locationLabel" class="col-form-label form-label">NIN</label>
                                <input type="text" minlength="11" maxlength="11" class="form-control" name="dirTwoNIN"
                                  id="dirTwobusNIN" placeholder="04085767823" aria-label="busLabel" />
                              </div>

                              <div class="col-sm-6">
                                <label for="Gender" class="col-form-label form-label">Means of ID Type
                                </label>
                                <select class="form-select" name="dirTwoDocType">
                                  <option>select</option>
                                  <option>National ID</option>
                                  <option>Voter's Card</option>
                                  <option>International Passport</option>
                                  <option>Driver's&nbsp;license</option>
                                </select>
                              </div>

                              <div class="col-lg-6">
                                <label for="locationLabel" class="col-form-label form-label">Means of ID Number</label>
                                <input type="text" minlength="11" maxlength="11" class="form-control" name="dirTwoNum"
                                  id="dirTwoNum" placeholder="04085767823" aria-label="busLabel" />
                              </div>

                              <div class="col-lg-6">
                                <label for="locationLabel" class="col-form-label form-label">Issue Date</label>
                                <div class="">
                                  <input type="date" class="form-control" name="dirTwoIssueDate" id="dirTwoIssueDate" />
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <label for="locationLabel" class="col-form-label form-label">Expiry Date</label>
                                <div class="">
                                  <input type="date" class="form-control" name="dirTwoExpireDate" id="dirTwoExpireDate" />
                                </div>
                              </div>

                              <div class="col-lg-6">
                                <label for="addressLine1Label" class="col-form-label form-label">Upload Means of ID
                                </label>

                                <div class="">
                                  <input type="file" class="form-control" name="profImgTwo" id="profImgTwo" />
                                </div>
                              </div>

                              <div class="col-lg-6">
                                <label for="addressLine1Label" class="col-form-label form-label">
                                  Upload Passport size Photograph
                                </label>

                                <div class="">
                                  <input type="file" class="form-control" name="dirTwo" id="dirTwo" />
                                </div>
                              </div>

                              <div class="col-lg-6">
                                <label for="addressLine1Label" class="col-form-label form-label">Upload Utility Bill
                                </label>

                                <div class="">
                                  <input type="file" class="form-control" name="utiliyBill2" id="utiliyBill2" />
                                </div>
                              </div>
                            </div>
                            <!-- End Form -->
                            <!-- End Form -->

                            <!-- Form -->

                            <!-- End Form -->
                          </div>
                          <!-- End Body -->
                          <div class="card-footer d-sm-flex align-items-sm-center">
                            <button type="button" class="btn btn-ghost-secondary mb-2 mb-sm-0"
                              data-hs-step-form-prev-options='{
    "targetSelector": "#directorTwo"
    }'>
                              <i class="bi-chevron-left"></i> Previous step
                            </button>

                            <div class="ms-auto">
                              <button type="submit" class="btn btn-primary">
                                Sign up
                              </button>
                            </div>

                            <!-- End Footer -->
                          </div>
                        </div>

                        
                    </div>
            <!-- End Content Step Form -->

            <!-- Message Body -->
            <div id="successMessageContent" style="display: none">
              <div class="text-center">
                <img class="img-fluid mb-3" src="assets/svg/illustrations/oc-hi-five.svg" alt="Image Description"
                  data-hs-theme-appearance="default" style="max-width: 15rem" />
                <img class="img-fluid mb-3" src="assets/svg/illustrations-light/oc-hi-five.svg" alt="Image Description"
                  data-hs-theme-appearance="dark" style="max-width: 15rem" />

                <div class="mb-4">
                  <h2>Successful!</h2>
                  <p>
                    New
                    <span class="fw-semibold text-dark">Ella Lauda</span> user
                    has been successfully created.
                  </p>
                </div>

                <div class="d-flex justify-content-center">
                  <a class="btn btn-white me-3" href="users.html">
                    <i class="bi-chevron-left ms-1"></i> Back to users
                  </a>
                  <a class="btn btn-primary" href="users-add-user.html">
                    <i class="bi-person-plus-fill me-1"></i> Add new user
                  </a>
                </div>
              </div>
            </div>
            <!-- End Message Body -->
          </div>
        </div>
        <!-- End Row -->
      </form>
      <!-- End Step Form -->
    </div>
    <!-- End Content -->

    <!-- Footer -->

    <div class="footer">
      <div class="row justify-content-between align-items-center">
        <div class="col">
          <p class="fs-6 mb-0">
            &copy;<span class="d-none d-sm-inline-block">2024 Terra Portals.</span>
          </p>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>

    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ONLY DEV -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasBuilder" aria-labelledby="offcanvasBuilderLabel">
    <div class="offcanvas-body">
      <div class="row gx-3"></div>
      <!-- End Row -->

      <hr />

      <h4 class="mb-1">Sidebar Nav</h4>
      <p>
        Check out all
        <a href="./documentation/layout.html">Layout Options here</a>
      </p>

      <div class="row gx-3"></div>
      <!-- End Row -->

      <hr />

      <!-- Form Switch -->
      <label class="row form-check form-switch mb-3" for="builderFluidSwitch">
        <span class="col-10 ms-0">
          <span class="d-block h4 mb-1">Header Layout Options</span>
          <span class="d-block fs-5">Toggle to container-fluid layout</span>
        </span>
        <span class="col-2 text-end">
          <input type="checkbox" class="form-check-input" id="builderFluidSwitch" />
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
      <header id="header" class="navbar navbar-expand-lg navbar-bordered bg-white">
        <div class="container">
          <nav class="js-mega-menu navbar-nav-wrap">
            <!-- Logo -->

            <a class="navbar-brand" href="dashboard.html" aria-label="Front">
              <img class="navbar-brand-logo" src="assets/svg/logos/logo.svg" alt="Logo"
                data-hs-theme-appearance="default" />
              <img class="navbar-brand-logo" src="assets/svg/logos/logo.png" alt="Logo"
                data-hs-theme-appearance="dark" />
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
                <img class="navbar-brand-logo" src="assets/svg/logos/logo-white.svg" alt="Logo" />
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
                                 }' />
                        <a class="input-group-append input-group-text" href="javascript:;">
                          <i id="clearSearchResultsIcon" class="bi-x-lg" style="display: none"></i>
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
                                aria-label="Search in front" />
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
                              Notification panel
                              <i class="bi-search ms-1"></i>
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
                                  alt="Image Description" />
                              </div>
                              <div class="flex-grow-1 text-truncate ms-2">
                                <span>Amanda Harvey
                                  <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top"
                                    title="Top endorsed"></i></span>
                              </div>
                            </div>
                          </a>

                          <a class="dropdown-item" href="dashboard.html">
                            <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                <img class="avatar avatar-xs avatar-circle" src="assets/img/160x160/img3.jpg"
                                  alt="Image Description" />
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
                          See all results
                          <i class="bi-chevron-right small"></i>
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

  <script src="assets/js/lga.min.js"></script>

  <!-- End Welcome Message Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Implementing Plugins -->
  <script src="assets/js/vendor.min.js"></script>

  <!-- JS Front -->
  <script src="assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function () {
      window.onload = function () {
        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav(".js-navbar-vertical-aside").init();

        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        new HSFormSearch(".js-form-search");

        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init();

        // INITIALIZATION OF FILE ATTACH
        // =======================================================
        new HSFileAttach(".js-file-attach");

        // INITIALIZATION OF STEP FORM
        // =======================================================
        new HSStepForm(".js-step-form", {
          finish: () => {
            document.getElementById("addUserStepFormProgress").style.display =
              "none";
            document.getElementById("addUserStepProfile").style.display =
              "none";
            document.getElementById(
              "addUserStepBillingAddress"
            ).style.display = "none";
            document.getElementById("addUserStepConfirmation").style.display =
              "none";
            document.getElementById("successMessageContent").style.display =
              "block";
            scrollToTop("#header");
            const formContainer = document.getElementById("formContainer");
          },
          onNextStep: function () {
            scrollToTop();
          },
          onPrevStep: function () {
            scrollToTop();
          },
        });

        function scrollToTop(el = ".js-step-form") {
          el = document.querySelector(el);
          window.scrollTo({
            top: el.getBoundingClientRect().top + window.scrollY - 30,
            left: 0,
            behavior: "smooth",
          });
        }

        // INITIALIZATION OF ADD FIELD
        // =======================================================
        new HSAddField(".js-add-field", {
          addedField: (field) => {
            HSCore.components.HSTomSelect.init(
              field.querySelector(".js-select-dynamic")
            );
            HSCore.components.HSMask.init(
              field.querySelector(".js-input-mask")
            );
          },
        });

        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init(".js-select", {
          render: {
            option: function (data, escape) {
              return data.optionTemplate || `<div>${data.text}</div>>`;
            },
            item: function (data, escape) {
              return data.optionTemplate || `<div>${data.text}</div>>`;
            },
          },
        });

        // INITIALIZATION OF INPUT MASK
        // =======================================================
        HSCore.components.HSMask.init(".js-input-mask");
      };
    })();
  </script>

  <!-- Style Switcher JS -->

  <script>
    (function () {
      // STYLE SWITCHER
      // =======================================================
      const $dropdownBtn = document.getElementById("selectThemeDropdown"); // Dropdowon trigger
      const $variants = document.querySelectorAll(
        `[aria-labelledby="selectThemeDropdown"] [data-icon]`
      ); // All items of the dropdown

      // Function to set active style in the dorpdown menu and set icon for dropdown trigger
      const setActiveStyle = function () {
        $variants.forEach(($item) => {
          if (
            $item.getAttribute("data-value") ===
            HSThemeAppearance.getOriginalAppearance()
          ) {
            $dropdownBtn.innerHTML = `<i class="${$item.getAttribute(
              "data-icon"
            )}" />`;
            return $item.classList.add("active");
          }

          $item.classList.remove("active");
        });
      };

      // Add a click event to all items of the dropdown to set the style
      $variants.forEach(function ($item) {
        $item.addEventListener("click", function () {
          HSThemeAppearance.setAppearance($item.getAttribute("data-value"));
        });
      });

      // Call the setActiveStyle on load page
      setActiveStyle();

      // Add event listener on change style to call the setActiveStyle function
      window.addEventListener("on-hs-appearance-change", function () {
        setActiveStyle();
      });
    })();
  </script>

  <!-- End Style Switcher JS -->
</body>

</html>
@endsection