<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Terra Sign Up </title>

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

  <script>
            window.hs_config = {"autopath":"@@autopath","deleteLine":"hs-builder:delete","deleteLine:build":"hs-builder:build-delete","deleteLine:dist":"hs-builder:dist-delete","previewMode":false,"startPath":"//","vars":{"themeFont":"https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap","version":"?v=1.0"},"layoutBuilder":{"extend":{"switcherSupport":true},"header":{"layoutMode":"default","containerMode":"container-fluid"},"sidebarLayout":"default"},"themeAppearance":{"layoutSkin":"default","sidebarSkin":"default","styles":{"colors":{"primary":"#377dff","transparent":"transparent","white":"#fff","dark":"132144","gray":{"100":"#f9fafc","900":"#1e2022"}},"font":"Inter"}},"languageDirection":{"lang":"en"},"skipFilesFromBundle":{"dist":["assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","assets/js/demo.js"],"build":["assets/css/theme.css","assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js","assets/js/demo.js","assets/css/theme-dark.css","assets/css/docs.css","assets/vendor/icon-set/style.css","assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js","assets/js/demo.js"]},"minifyCSSFiles":["assets/css/theme.css","assets/css/theme-dark.css"],"copyDependencies":{"dist":{"*assets/js/theme-custom.js":""},"build":{"*assets/js/theme-custom.js":"","node_modules/bootstrap-icons/font/*fonts/**":"assets/css"}},"buildFolder":"","replacePathsToCDN":{},"directoryNames":{"src":"./src","dist":"./dist","build":"./build"},"fileNames":{"dist":{"js":"theme.min.js","css":"theme.min.css"},"build":{"css":"theme.min.css","js":"theme.min.js","vendorCSS":"vendor.min.css","vendorJS":"vendor.min.js"}},"fileTypes":"jpg|png|svg|mp4|webm|ogv|json"}
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

<body>

  <script src="assets/js/hs.theme-appearance.js"></script>

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="main">
    <div class="position-fixed top-0 end-0 start-0 bg-img-start" style="height: 32rem; background-image: url(assets/svg/components/card-6.svg);">
      <!-- Shape -->
      <div class="shape shape-bottom zi-1">
        <svg preserveaspectratio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewbox="0 0 1921 273">
          <polygon fill="#fff" points="0,273 1921,273 1921,0 "></polygon>
        </svg>
      </div>
      <!-- End Shape -->
    </div>

    <!-- Content -->
    <div class="container py-5 py-sm-7">
      <a class="d-flex justify-content-center mb-5 " href="/">
        <img class="zi-2 bg-light p-2" src="assets/svg/logos/logo.png" alt="Image Description" style="width: 8rem;">
      </a>

      <div class="mx-auto" style="max-width: 45rem;">
        <!-- Card -->
        <div class="card card-lg mb-5">
          <div class="card-body">
            <!-- Form -->
            <form class="js-validate needs-validation" novalidate="">
              <div class="text-center">
                <div class="mb-5">
                  <h1 class="display-5">Create your account</h1>
                  <p>Already have an account? <a class="link" href="/">Sign in here</a></p>
                </div>

                <div class="d-grid mb-1">
                  <!-- <a class="btn btn-white btn-lg" href="#">
                    <span class="d-flex justify-content-center align-items-center">
                      <img class="avatar avatar-xss me-2" src="assets/svg/brands/google-icon.svg" alt="Image Description">
                      Sign up with Google
                    </span>
                  </a> -->
                </div>

                <span class="divider-end text-muted mb-4"></span>
              </div>
              <div class="col-sm-12 my-3">
                  
                <label class="col-sm-12 col-form-label form-label">
                  <strong>Want to be Agent, Merchant or
                    Aggregator?</strong></label>
                  <div class="input-group input-group-sm-vertical">
                    <!-- Radio Check -->
                    <label class="form-control" for="userAccountTypeRadio1">
                      <span class="form-check">
                        <input type="radio" class="form-check-input" name="userAccountTypeRadio" id="userAccountTypeRadio1">
                        <span class="form-check-label">Agent</span>
                      </span>
                    </label>
                    <!-- End Radio Check -->

                    <!-- Radio Check -->
                    <label class="form-control" for="userAccountTypeRadio2">
                      <span class="form-check">
                        <input type="radio" class="form-check-input" name="userAccountTypeRadio" id="userAccountTypeRadio2">
                        <span class="form-check-label">Merchant
                        </span>
                      </span>
                    </label>
                    <label class="form-control" for="userAccountTypeRadio3">
                      <span class="form-check">
                        <input type="radio" class="form-check-input" name="userAccountTypeRadio" id="userAccountTypeRadio3">
                        <span class="form-check-label">Aggregator</span>
                      </span>
                    </label>
                    <!-- End Radio Check -->
                  </div>
                </div>

              <div class="row mb-4">
                <div class="col-lg-6">
                  <div class="">
                    <label for="firstNameLabel" class="form-label">First Name
                    </label>

                    <input type="text" class="form-control" name="firstName" id="firstNameLabel"
                      placeholder="James" aria-label="James" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="">
                    <label for="middleNameLabel" class="form-label">Middle Name
                    </label>

                    <input type="text" class="form-control" name="middleName" id="middleNameLabel"
                      placeholder="Clarice" aria-label="Clarice" />
                  </div>
                </div>
                <div class="col-lg-6 mt-3">
                  <div class="">
                    <label for="lastNameLabel" class="form-label">Last Name
                    </label>

                    <input type="text" class="form-control" name="lastName" id="lastNameLabel"
                      placeholder="Donald" aria-label="Donald" />
                  </div>
                </div>

                <div class="col-lg-6 mt-3">
                  <label for="emailLabel" class="form-label">Email
                  </label>

                  <input type="email" class="form-control" name="email" id="emailLabel"
                    placeholder="clarice@site.com" aria-label="clarice@site.com" />
                </div>
                <div class="col-sm-6 mt-3">
                  <label for="emailLabel" class="form-label">Gender
                  </label>

                  <select id="inputGroupLightGenderSelect" class="form-select">
                    <option>Select</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>

                <div class="col-sm-6 mt-3">
                  <label for="numberLabel" class="form-label">Phone Number
                  </label>

                  <input type="text" class="form-control" name="phoneNumber" id="phoneLabel"
                    placeholder="09083747247" minlength="11" maxlength="11" />
                </div>
              </div>

       
             

              <!-- Form -->
             
              <!-- End Form -->
              <div class="row mb-3">
                <div class="col-lg-6">
                  <label class="form-label" for="signupSrPassword">Password</label>
  
                  <div class="input-group input-group-merge" data-hs-validation-validate-class="">
                    <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required="" minlength="8" data-hs-toggle-password-options='{
                             "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                             "defaultClass": "bi-eye-slash",
                             "showClass": "bi-eye",
                             "classChangeTarget": ".js-toggle-password-show-icon-1"
                           }'>
                    <a class="js-toggle-password-target-1 input-group-append input-group-text" href="javascript:;">
                      <i class="js-toggle-password-show-icon-1 bi-eye"></i>
                    </a>
                  </div>
  
                  <span class="invalid-feedback">Your password is invalid. Please try again.</span>
                </div>
                <!-- End Form -->
  
                <!-- Form -->
                <div class="col-lg-6">
                  <label class="form-label" for="signupSrConfirmPassword">Confirm password</label>
  
                  <div class="input-group input-group-merge" data-hs-validation-validate-class="">
                    <input type="password" class="js-toggle-password form-control form-control-lg" name="confirmPassword" id="signupSrConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required="" minlength="8" data-hs-toggle-password-options='{
                             "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                             "defaultClass": "bi-eye-slash",
                             "showClass": "bi-eye",
                             "classChangeTarget": ".js-toggle-password-show-icon-2"
                           }'>
                    <a class="js-toggle-password-target-2 input-group-append input-group-text" href="javascript:;">
                      <i class="js-toggle-password-show-icon-2 bi-eye"></i>
                    </a>
                  </div>
  
                  <span class="invalid-feedback">Password does not match the confirm password.</span>
                </div>


                
              </div>

              <!-- Form Check -->
              <!-- <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" value="" id="termsCheckbox" required="">
                <label class="form-check-label" for="termsCheckbox">
                  I accept the <a href="#">Terms and Conditions</a>
                </label>
                <span class="invalid-feedback">Please accept our Terms and Conditions.</span>
              </div> -->
              <!-- End Form Check -->

              <div class="col-sm-12 my-3">
                  
                <label class="col-sm-12 col-form-label form-label">
                  <strong>What type of business do you own?</strong></label>
                  <div class="input-group input-group-sm-vertical">
                    <!-- Radio Check -->
                    <label class="form-control" for="userAccountTypeRadio4">
                      <span class="form-check">
                        <input type="radio" class="form-check-input" name="userAccountTypeRadio" id="userAccountTypeRadio4">
                        <span class="form-check-label">Unregistered Business</span>
                      </span>
                    </label>
                    <!-- End Radio Check -->

                    <!-- Radio Check -->
                    <label class="form-control" for="userAccountTypeRadio5">
                      <span class="form-check">
                        <input type="radio" class="form-check-input" name="userAccountTypeRadio" id="userAccountTypeRadio5">
                        <span class="form-check-label">Sole Proprietorship / Enterprise
                        </span>
                      </span>
                    </label>
                    <label class="form-control" for="userAccountTypeRadio6">
                      <span class="form-check">
                        <input type="radio" class="form-check-input" name="userAccountTypeRadio" id="userAccountTypeRadio6">
                        <span class="form-check-label">Corporate</span>
                      </span>
                    </label>
                    <!-- End Radio Check -->
                  </div>
                </div>
                <div class="d-grid gap-2 mt-3">
                  <a id="submitButton" href="#" class="btn btn-primary btn-lg">Create an account</a>
              </div>

              <!-- <div class="d-grid gap-2 mt-3">
                <button type="submit" class="btn btn-primary btn-lg">Create an account</button>
              </div> -->
            </form>
            <!-- End Form -->
          </div>
        </div>
        <!-- End Card -->

       
      </div>
    </div>
    <!-- End Content -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- JS Implementing Plugins -->
  <script src="assets/js/vendor.min.js"></script>

  <!-- JS Front -->
  <script src="assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function () {
        // INITIALIZATION OF BOOTSTRAP VALIDATION
        // =======================================================
        HSBsValidation.init('.js-validate', {
          onSubmit: data => {
            data.event.preventDefault()
            alert('Submited')
          }
        })


        // INITIALIZATION OF TOGGLE PASSWORD
        // =======================================================
        new HSTogglePassword('.js-toggle-password')
      }
    })()
  </script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
      // Get radio buttons
      var radioButtons = document.querySelectorAll('input[name="userAccountTypeRadio"]');

      // Function to update href value based on user selection
      function updateHrefValue() {
          var hrefValue;
          if (document.getElementById('userAccountTypeRadio4').checked) {
              hrefValue = 'individual.html'; // Unregistered Business
          } else if (document.getElementById('userAccountTypeRadio5').checked) {
              hrefValue = 'sole-proprietor.html'; // Sole Proprietorship / Enterprise
          } else if (document.getElementById('userAccountTypeRadio6').checked) {
              hrefValue = 'corporate.html'; // Corporate
          }
          document.getElementById('submitButton').href = hrefValue;
      }

      // Add event listener to each radio button
      radioButtons.forEach(function(button) {
          button.addEventListener('change', updateHrefValue);
      });

      // Initial call to set the default href value
      updateHrefValue();
  });
</script>
</body>
</html>