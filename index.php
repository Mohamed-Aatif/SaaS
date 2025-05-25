<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Sample Page | Mantis Bootstrap 5 Admin Template</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description"
    content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
  <meta name="keywords"
    content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
  <meta name="author" content="CodedThemes">

  <!-- [Favicon] icon -->
  <link rel="icon" href="./assets/images/favicon.svg" type="image/x-icon"> <!-- [Google Font] Family -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap"
    id="main-font-link">
  <!-- [Tabler Icons] https://tablericons.com -->
  <link rel="stylesheet" href="./assets/fonts/tabler-icons.min.css">
  <!-- [Feather Icons] https://feathericons.com -->
  <link rel="stylesheet" href="./assets/fonts/feather.css">
  <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
  <link rel="stylesheet" href="./assets/fonts/fontawesome.css">
  <!-- [Material Icons] https://fonts.google.com/icons -->
  <link rel="stylesheet" href="./assets/fonts/material.css">
  <!-- [Template CSS Files] -->
  <link rel="stylesheet" href="./assets/css/style.css" id="main-style-link">
  <link rel="stylesheet" href="./assets/css/style-preset.css">

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->
  <!-- [ Sidebar Menu ] start -->
  <nav class="pc-sidebar pc-trigger pc-sidebar-hide">

    <div class="navbar-wrapper">
      <div class="m-header">
        <a href="dashboard.php" class="b-brand text-primary">
          <!-- ========   Change your logo from here   ============ -->
          <img src="./assets/images/logo-dark.svg" class="img-fluid logo-lg" alt="logo">
        </a>
      </div>
      <div class="navbar-content">

        <ul class="pc-navbar">

          <li class="pc-item">
            <a href="dashboard.php" class="pc-link">
              <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
              <span class="pc-mtext">Dashboard</span>
            </a>
          </li>

          <li class="pc-item pc-caption">
            <label>UI Components</label>
            <i class="ti ti-dashboard"></i>
          </li>

          <li class="pc-item">
            <a href="../elements/bc_typography.html" class="pc-link">
              <span class="pc-micon"><i class="ti ti-typography"></i></span>
              <span class="pc-mtext">Typography</span>
            </a>
          </li>

          <li class="pc-item pc-hasmenu">

            <a href="#!" class="pc-link">
              <span class="pc-micon"><i class="ti ti-menu"></i></span>
              <span class="pc-mtext">Menu levels</span>
              <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
            </a>

            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link">Level 2.2
                  <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                </a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                  <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                </ul>
              </li>
            </ul>

          </li>

        </ul>

      </div>
    </div>

  </nav>
  <!-- [ Sidebar Menu ] end -->
  <!-- [ Header Topbar ] start -->
  <header class="pc-header">
    <div class="header-wrapper">
      <!-- [Mobile Media Block] start -->
      <div class="me-auto pc-mob-drp">
        <ul class="list-unstyled">
          <!-- ======= Menu collapse Icon ===== -->
          <li class="pc-h-item pc-sidebar-collapse">
            <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>
          <li class="pc-h-item pc-sidebar-popup">
            <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>
          <li class="dropdown pc-h-item d-inline-flex d-md-none">
            <img src="./assets/images/logo-dark.svg" class="img-fluid logo-lg" alt="logo">
          </li>
          <li class="pc-h-item d-none d-md-inline-flex">
            <a href="dashboard.php" class="b-brand text-primary">
              <!-- ========   Change your logo from here   ============ -->
              <img src="./assets/images/logo-dark.svg" class="img-fluid logo-lg" alt="logo">
            </a>
          </li>
        </ul>
      </div>
      <!-- [Mobile Media Block end] -->
      <div class="ms-auto">
        <ul class="list-unstyled">
          <li class="dropdown pc-h-item">
            <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
              aria-haspopup="false" aria-expanded="false">
              <i class="ti ti-mail"></i>
            </a>
            <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
              <div class="dropdown-header d-flex align-items-center justify-content-between">
                <h5 class="m-0">Message</h5>
                <a href="#!" class="pc-head-link bg-transparent"><i class="ti ti-x text-danger"></i></a>
              </div>
              <div class="dropdown-divider"></div>
              <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative"
                style="max-height: calc(100vh - 215px)">
                <div class="list-group list-group-flush w-100">
                  <a class="list-group-item list-group-item-action">
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <img src="./assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar">
                      </div>
                      <div class="flex-grow-1 ms-1">
                        <span class="float-end text-muted">3:00 AM</span>
                        <p class="text-body mb-1">It's <b>Cristina danny's</b> birthday today.
                        </p>
                        <span class="text-muted">2 min ago</span>
                      </div>
                    </div>
                  </a>
                  <a class="list-group-item list-group-item-action">
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <img src="./assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar">
                      </div>
                      <div class="flex-grow-1 ms-1">
                        <span class="float-end text-muted">6:00 PM</span>
                        <p class="text-body mb-1"><b>Aida Burg</b> commented your post.</p>
                        <span class="text-muted">5 August</span>
                      </div>
                    </div>
                  </a>
                  <a class="list-group-item list-group-item-action">
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <img src="./assets/images/user/avatar-3.jpg" alt="user-image" class="user-avtar">
                      </div>
                      <div class="flex-grow-1 ms-1">
                        <span class="float-end text-muted">2:45 PM</span>
                        <p class="text-body mb-1"><b>There was a failure to your setup.</b></p>
                        <span class="text-muted">7 hours ago</span>
                      </div>
                    </div>
                  </a>
                  <a class="list-group-item list-group-item-action">
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <img src="./assets/images/user/avatar-4.jpg" alt="user-image" class="user-avtar">
                      </div>
                      <div class="flex-grow-1 ms-1">
                        <span class="float-end text-muted">9:10 PM</span>
                        <p class="text-body mb-1"><b>Cristina Danny </b> invited to join <b>
                            Meeting.</b></p>
                        <span class="text-muted">Daily scrum meeting time</span>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="dropdown-divider"></div>
              <div class="text-center py-2">
                <a href="#!" class="link-primary">View all</a>
              </div>
            </div>
          </li>
          <li class="dropdown pc-h-item header-user-profile">
            <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
              aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
              <img src="./assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar">
              <span>Stebin Ben</span>
            </a>
            <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
              <div class="dropdown-header">
                <div class="d-flex mb-1">
                  <div class="flex-shrink-0">
                    <img src="./assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar wid-35">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h6 class="mb-1">Stebin Ben</h6>
                    <span>UI/UX Designer</span>
                  </div>
                  <a href="#!" class="pc-head-link bg-transparent"><i class="ti ti-power text-danger"></i></a>
                </div>
              </div>
              <ul class="nav drp-tabs nav-fill nav-tabs" id="mydrpTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="drp-t1" data-bs-toggle="tab" data-bs-target="#drp-tab-1"
                    type="button" role="tab" aria-controls="drp-tab-1" aria-selected="true"><i class="ti ti-user"></i>
                    Profile</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="drp-t2" data-bs-toggle="tab" data-bs-target="#drp-tab-2" type="button"
                    role="tab" aria-controls="drp-tab-2" aria-selected="false"><i class="ti ti-settings"></i>
                    Setting</button>
                </li>
              </ul>
              <div class="tab-content" id="mysrpTabContent">
                <div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel" aria-labelledby="drp-t1"
                  tabindex="0">
                  <a href="#!" class="dropdown-item">
                    <i class="ti ti-edit-circle"></i>
                    <span>Edit Profile</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="ti ti-user"></i>
                    <span>View Profile</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="ti ti-clipboard-list"></i>
                    <span>Social Profile</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="ti ti-wallet"></i>
                    <span>Billing</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="ti ti-power"></i>
                    <span>Logout</span>
                  </a>
                </div>
                <div class="tab-pane fade" id="drp-tab-2" role="tabpanel" aria-labelledby="drp-t2" tabindex="0">
                  <a href="#!" class="dropdown-item">
                    <i class="ti ti-help"></i>
                    <span>Support</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="ti ti-user"></i>
                    <span>Account Settings</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="ti ti-lock"></i>
                    <span>Privacy Center</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="ti ti-messages"></i>
                    <span>Feedback</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="ti ti-list"></i>
                    <span>History</span>
                  </a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <!-- [ Header ] end -->



  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">

      <!-- [ breadcrumb ] start -->
      <div class="page-block">
        <div class="row align-items-center">
          <div class="col-md-12">
            <ol class="breadcrumb breadcrumb-default-icon">
              <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript: void(0)">Other</a></li>
              <li class="breadcrumb-item" aria-current="page">Sample Page</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->

      <div class="row">

        <div class="col-sm-12">

          <div class="card">

            <div class="card-header p-3">
              <h3 class="m-0">New Client</h3>
            </div>

            <div class="card-body">

              <form action="" method="post">

                <h5>Basic Company Information</h5>
                <hr>

                <div class="row">
                  <div class="col-md-12">

                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="legalName">Legal Name</label>
                        <input type="text" class="form-control" id="legalName" autocomplete="off" required autofocus>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="aliasName">Alias Name</label>
                        <input type="text" class="form-control" id="aliasName" autocomplete="off" required autofocus>
                      </div>
                    </div>

                    <div class="row">

                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="industryType">Industry Type:</label>
                        <select id="industryType" class="form-control" onchange="updateBusinessTypes()">
                          <option value="">Select Industry</option>
                        </select>
                      </div>

                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="businessType">Business Type:</label>
                        <select id="businessType" class="form-control">
                          <option value="">Select Business Type</option>
                        </select>
                      </div>

                    </div>
                  </div>
                </div>

                <h5 class="mt-3">Additional Business Details</h5>
                <hr>

                <div class="row">
                  <div class="col-md-12">

                    <div class="row">

                      <div class="col-md-4 mb-3">
                        <label class="form-label" for="validationCustom02">GSTIN</label>
                        <input type="text" class="form-control" id="validationCustom02" autocomplete="off" required
                          autofocus>
                      </div>

                      <div class="col-md-4 mb-3">
                        <label class="form-label" for="validationCustom02">CIN</label>
                        <input type="text" class="form-control" id="validationCustom02" autocomplete="off" required
                          autofocus>
                      </div>

                      <div class="col-md-4 mb-3">
                        <label class="form-label" for="validationCustom02">PAN</label>
                        <input type="text" class="form-control" id="validationCustom02" autocomplete="off" required
                          autofocus>
                      </div>

                      <div class="col-md-4 mb-3">
                        <label class="form-label" for="validationCustom02">TAN</label>
                        <input type="text" class="form-control" id="validationCustom02" autocomplete="off" required
                          autofocus>
                      </div>

                      <div class="col-md-4 mb-3">
                        <label class="form-label" for="validationCustom02">LEI</label>
                        <input type="text" class="form-control" id="validationCustom02" autocomplete="off" required
                          autofocus>
                      </div>

                    </div>

                  </div>
                </div>

                <h5>Contact & Communication</h5>
                <hr>

                <div class="row">
                  <div class="col-md-12">

                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="priContactName">Primary Contact Name</label>
                        <input type="text" class="form-control" id="priContactName" autocomplete="off" required
                          autofocus>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="designation">Designation</label>
                        <input type="text" class="form-control" id="designation" autocomplete="off" required autofocus>
                      </div>
                    </div>

                    <div class="row">

                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="email">Email Address</label>
                        <input type="text" class="form-control" id="email" autocomplete="off" required autofocus>
                      </div>

                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="phone" autocomplete="off" required autofocus>
                      </div>

                    </div>
                  </div>
                </div>

                <h5>Headquarter Address & Location</h5>
                <hr>

                <div class="row">
                  <div class="col-md-12">

                    <div class="row">
                      <div class="col-md-12 mb-3">
                        <label class="form-label" for="hqLocation">Headquarters Location</label>
                        <input type="text" class="form-control" id="hqLocation" autocomplete="off" required autofocus>
                      </div>
                    </div>

                    <div class="row">

                      <div class="col-md-3 mb-3">
                        <label class="form-label" for="countryDropdown">Country</label>
                        <select id="countryDropdown" class="form-control" onchange="updateBusinessTypes()" readonly>
                          <option value="">Select Country</option>
                        </select>
                      </div>

                      <div class="col-md-3 mb-3">
                        <label class="form-label" for="stateDropdown">State</label>
                        <select id="stateDropdown" class="form-control" onchange="updateBusinessTypes()" readonly>
                          <option value="">Select State</option>
                        </select>
                      </div>

                      <div class="col-md-3 mb-3">
                        <label class="form-label" for="cityDropdown">City</label>
                        <select id="cityDropdown" class="form-control" onchange="updateBusinessTypes()" readonly>
                          <option value="">Select City</option>
                        </select>
                      </div>

                      <div class="col-md-3 mb-3">
                        <label class="form-label" for="pincode">PIN Code / ZIP Code</label>
                        <input type="text" class="form-control" name="pincode" id="pincode" onkeyup="getLocationData()">
                      </div>

                    </div>

                  </div>
                </div>

                <h5 class="mt-3">Software Usage Information</h5>
                <hr>

                <div class="row">
                  <div class="col-md-12">

                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="validationCustom01">Subscription Plan</label>
                        <input type="text" class="form-control" id="validationCustom01" autocomplete="off" required
                          autofocus>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="validationCustom02">Active Modules / Features Used</label>
                        <input type="text" class="form-control" id="validationCustom02" autocomplete="off" required
                          autofocus>
                      </div>
                    </div>

                    <div class="row">

                      <div class="col-md-6 mb-3">
                        <label class="form-label" for="industry">Technical Preferences</label>
                        <select id="industry" class="form-control" onchange="updateBusinessTypes()">
                          <option value="">Select Industry</option>
                        </select>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="row align-items-center">
                  <div class="col-sm-12 text-sm-end mt-3 mt-sm-0">
                    <button type="reset" class="btn btn-success me-2">Submit</button>
                    <button type="reset" class="btn btn-light-danger">Cancel</button>
                  </div>
                </div>

              </form>

            </div>

          </div>

        </div>

      </div>

    </div>

    <!-- [ Main Content ] end -->

  </div>
  </div>

  <!-- [ Main Content ] end -->

  <!-- Required Js -->
  <script src="./assets/js/plugins/popper.min.js"></script>
  <script src="./assets/js/plugins/simplebar.min.js"></script>
  <script src="./assets/js/plugins/bootstrap.min.js"></script>
  <script src="./assets/js/fonts/custom-font.js"></script>
  <script src="./assets/js/pcoded.js"></script>
  <script src="./assets/js/plugins/feather.min.js"></script>

  <script>
    const industryData = {
      "Technology": ["Software Development", "IT Consulting", "Cybersecurity", "SaaS", "Web Hosting", "AI & ML Solutions"],
      "Finance & Banking": ["Investment Firms", "Insurance", "Accounting Services", "FinTech", "Payment Gateways", "Loan Providers"],
      "Healthcare": ["Hospitals", "Clinics", "Pharmaceuticals", "Telemedicine", "Medical Equipment Suppliers", "HealthTech Startups"],
      "Retail & E-commerce": ["Brick-and-Mortar Stores", "Online Marketplaces", "Dropshipping", "Fashion Boutiques", "Subscription Services"],
      "Manufacturing": ["Automobile", "Electronics", "Machinery", "Textiles", "Consumer Goods", "Industrial Equipment"],
      "Real Estate": ["Property Development", "Real Estate Agencies", "Construction Firms", "Rental Services", "Interior Design"],
      "Education": ["Schools", "Universities", "Online Learning Platforms", "EdTech", "Coaching Centers", "Research Institutes"],
      "Hospitality & Tourism": ["Hotels", "Travel Agencies", "Restaurants", "Event Planning", "Resorts", "Adventure Tourism"],
      "Media & Entertainment": ["Film Studios", "TV Networks", "Gaming", "Music Production", "OTT Platforms", "Publishing Houses"],
      "Energy & Utilities": ["Renewable Energy", "Oil & Gas", "Water Supply", "Electric Power", "Solar Energy Solutions"],
      "Agriculture": ["Farming", "Food Processing", "AgroTech", "Organic Produce", "Dairy Industry", "Irrigation Solutions"],
      "Legal & Professional Services": ["Law Firms", "HR & Recruitment", "Consulting", "Tax Advisory", "Auditing Services"],
      "Transportation & Logistics": ["Courier Services", "Freight Forwarding", "Shipping", "Automotive Rentals", "Warehousing"],
      "Telecommunications": ["Mobile Network Operators", "Internet Service Providers", "Satellite Communications", "VOIP Services"],
      "Consumer Goods": ["FMCG Products", "Packaged Food", "Household Essentials", "Beauty & Personal Care", "Sporting Goods"],
      "Non-Profit & NGOs": ["Charity Organizations", "Social Enterprises", "Human Rights Advocacy", "Environmental Protection"],
      "Government & Public Services": ["Regulatory Bodies", "Municipal Services", "Defense Contractors", "Public Health Initiatives"]
    };

    function populateIndustries() {
      const industrySelect = document.getElementById("industryType");
      Object.keys(industryData).forEach(industry => {
        const option = document.createElement("option");
        option.value = industry;
        option.textContent = industry;
        industrySelect.appendChild(option);
      });
    }

    function updateBusinessTypes() {
      const industrySelect = document.getElementById("industryType");
      const businessSelect = document.getElementById("businessType");
      const selectedIndustry = industrySelect.value;

      // Clear previous options
      businessSelect.innerHTML = '<option value="">Select Business Type</option>';

      // Populate new options based on selection
      if (selectedIndustry in industryData) {
        industryData[selectedIndustry].forEach(type => {
          const option = document.createElement("option");
          option.value = type;
          option.textContent = type;
          businessSelect.appendChild(option);
        });
      }
    }

    // Initialize dropdown on page load
    window.onload = populateIndustries;



    // This function is used to fetch and display in dropdown of country,state, city from internet
    async function getLocationData() {
      let pincode = document.getElementById('pincode').value;

      if (pincode.length === 6) { // Assuming Indian PIN codes
        let response = await fetch(`https://api.postalpincode.in/pincode/${pincode}`);
        let data = await response.json();

        if (data[0].Status === "Success") {
          document.getElementById('cityDropdown').innerHTML = `<option>${data[0].PostOffice[0].District}</option>`;
          document.getElementById('stateDropdown').innerHTML = `<option>${data[0].PostOffice[0].State}</option>`;
          document.getElementById('countryDropdown').innerHTML = `<option>${data[0].PostOffice[0].Country}</option>`;
        } else {
          alert("Invalid PIN Code or Data Not Found");
          resetDropdowns();
        }
      } else if (pincode.length === 0) {
        resetDropdowns();
      }
    }

    function resetDropdowns() {
      document.getElementById('cityDropdown').innerHTML = `<option>Select City</option>`;
      document.getElementById('stateDropdown').innerHTML = `<option>Select State</option>`;
      document.getElementById('countryDropdown').innerHTML = `<option>Select Country</option>`;
    }
  </script>
</body>
<!-- [Body] end -->

</html>