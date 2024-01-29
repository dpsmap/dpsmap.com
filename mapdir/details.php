<?php
date_default_timezone_set('Asia/Yangon');
session_start();
require_once('../config/databaseConnection.php');
require_once('../config/urlConfig.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <title>DPS | Map Directory</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css" />
    <link rel="stylesheet" href="assets/css/animated.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />

    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css"
    />
    
    <link rel="shortcut icon" href="../assets/favicon/favicon-512x512.png" sizes="512x512" type="image/x-icon" />
    <link rel="manifest" href="../manifest.json">
    <link rel="stylesheet" href="../assets/css/common.css" />
    <link rel="stylesheet" href="../assets/css/responsive.css" />
    <link rel="stylesheet" href="../assets/css/division.css" />
    <link rel="stylesheet" href="../assets/css/yangon.css" />
    <link rel="stylesheet" href="../assets/css/home.css" />
    <link rel="stylesheet" href="../assets/libs/fontawesome/css/all.min.css" />


    <style>
      #item-details-container {
        text-align: center;
        padding-bottom: 15px;
      }

      iframe.map-iframe {
        width: 80%;
        height: 400px;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        margin: 0 auto;
        padding-bottom: 10px;
      }
      .item-container {
        margin-bottom: 20px;
      }

      .pagination-controls {
        margin-top: 10px;
      }

      .pagination-controls button {
        margin-right: 5px;
      }
      .pagination-controls {
        margin-top: 20px;
      }

      .pagination-controls {
        margin-top: 20px;
      }

      .pagination-controls button {
        background-color: #f5f5f5;
        color: #333;
        border: none;
        padding: 8px 16px;
        margin-right: 5px;
        cursor: pointer;
      }

      .page-numbers {
        display: inline-block;
      }

      .page-number {
        background-color: #f5f5f5;
        color: #333;
        border: none;
        padding: 8px 12px;
        margin-right: 5px;
        cursor: pointer;
      }

      .page-number.current-page {
        background-color: #333;
        color: #fff;
      }

      .page-number:hover {
        background-color: #ddd;
      }
      .pagination-controls {
        display: flex;
        justify-content: center;
        margin-top: 20px;
      }

      .page-numbers {
        display: flex;
        align-items: center;
      }

      .page-number,
      .current-page {
        padding: 5px 10px;
        margin: 0 5px;
        cursor: pointer;
      }

      .current-page {
        background-color: #333;
        color: #fff;
      }

      .prev-button,
      .next-button {
        padding: 5px 10px;
        margin: 0 5px;
        cursor: pointer;
      }
      /*autocomplete*/
      /* Add CSS for the autocomplete results container */
      #autocompleteResults {
        position: absolute;
        background-color: #fff;
        border: 1px solid #ccc;
        max-height: 150px;
        overflow-y: auto;
        z-index: 999;
        display: none;
        cursor: pointer;
      }

      #autocompleteResults div {
        padding: 5px;
      }

      #autocompleteResults div:hover {
        background-color: #054ca4;
      }
    </style>
  </head>
  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <h4>Please Wait ...</h4>
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
        <section id="header">
        <?php require_once('../widgets/pc-nav-bar.php') ?>
        <?php require_once('../widgets/mobile-nav-bar.php') ?>
    </section>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner" style="padding-bottom: 0px; padding-top: 100px">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="top-text header-text">
            </div>
          </div>
          <div class="col-lg-12">
            <form
              id="search-form"
              name="gs"
              method="submit"
              role="search"
              action="#"
              style="
                padding-top: 15px;
                padding-bottom: 20px;
                padding-right: 20px;
                padding-left: 20px;
              "
            >
              <div class="row">
                <div class="col-lg-4 align-self-center">
                  <input
                    type="text"
                    id="search-input"
                    class="form-control"
                    placeholder="ရှာဖွေလိုသော ဆိုင်နာမည် ထည့်ပါ"
                    autocomplete="off"
                    required
                  />
                  <div id="autocompleteResults"></div>
                </div>

                <div class="col-lg-4 align-self-center">
                  <select
                    name="township"
                    class="form-select"
                    aria-label="Default select example"
                    id="chooseCategory"
                    onchange="this.form.click()"
                  >
                    <option value="Alltownship" selected>All Township</option>
                    <option value="Thaketa">Thaketa (သာကေတ)</option>
                    <option value="Insein">Insein (အင်းစိန်)</option>
                    <option value="Bahan">Bahan (ဗဟန်း)</option>
                    <option value="Botahtaung">Botahtaung(ဗိုလ်တထောင်)</option>
                    <option value="Dagon Myothit East">
                      Dagon Myothit East (ဒဂုံမြို့သစ်အရှေ့ပိုင်း)
                    </option>
                    <option value="Dagon Myothit North">
                      Dagon Myothit North (ဒဂုံမြို့သစ်မြောက်ပိုင်း)
                    </option>
                    <option value="Kyauktada">Kyauktada (ကျောက်တံတား)</option>
                    <option value="Dawbon">Dawbon (ဒေါပုံ)</option>
                    <option value="Kamaryut">Kamaryut (ကမာရွတ်)</option>
                    <option value="Kyeemyindaing">
                      Kyeemyindaing (ကြည့်မြင်တိုင်)
                    </option>
                    <option value="Lanmadaw">Lanmadaw (လမ်းမတော်)</option>
                    <option value="Latha">Latha (လသာ)</option>
                    <option value="Mayangone">Mayangone (မရမ်းကုန်း)</option>
                    <option value="Mingaladon">Mingaladon (မင်္ဂလာဒုံ)</option>
                    <option value="Mingalar Taung Nyunt">
                      Mingalar Taung Nyunt (မင်္ဂလာတောင်ညွန့်)
                    </option>
                    <option value="North Okkalapa">
                      North Okkalapa (မြောက်ဥက္ကလာပ)
                    </option>
                    <option value="Pabedan">Pabedan (ပန်းဘဲတန်း)</option>
                    <option value="Pazundaung">Pazundaung (ပုဇွန်တောင်)</option>
                    <option value="Shwepyithar">
                      Shwepyithar (ရွှေပြည်သာ)
                    </option>
                    <option value="Seikgyikanaungto">
                      Seikgyikanaungto (ဆိပ်ကြီးခနောင်တို)
                    </option>
                    <option value="Sanchaung">Sanchaung (စမ်းချောင်း)</option>
                    <option value="Dagon Myothit Seikkan">
                      Dagon Myothit Seikkan (ဒဂုံမြို့သစ်ဆိပ်ကမ်း)
                    </option>
                    <option value="Dagon Myothit South">
                      Dagon Myothit South(ဒဂုံမြို့သစ်တောင်ပိုင်း)
                    </option>
                    <option value="Dagon">Dagon (ဒဂုံ)</option>
                    <option value="Dala">Dala(ဒလ)</option>
                    <option value="Hlaing Thar Yar">
                      Hlaing Thar Yar(လှိုင်သာယာ)
                    </option>
                    <option value="Hlaing">Hlaing ( လှိုင်)</option>
                    <option value="Thingangyun">
                      Thingangyun (သင်္ဃန်းကျွန်း)
                    </option>
                    <option value="Thongwa">Thongwa (သုံးခွ)</option>
                    <option value="Yankin">Yankin (ရန်ကင်း)</option>
                    <option value="Kawhum">Kawhmu (ကော့မှုး)</option>
                    <option value="Kayan">Kayan (ခရမ်း)</option>
                    <option value="Kungyangon">
                      Kungyangon (ကွမ်းခြံကုန်း)
                    </option>
                    <option value="Kyauktan">Kyauktan (ကျောက်တန်း)</option>
                    <option value="South Okkalapa">
                      South Okkalapa (တောင်ဥက္ကလာပ)
                    </option>
                    <option value="Tarmwe">Tarmwe (တာမွေ)</option>
                    <option value="Thanlyin">Thanlyin (သန်လျင်)</option>
                    <option value="Twantay">Twantay (တွံ့တေး)</option>
                  </select>
                </div>
                <div class="col-lg-4">
                  <fieldset>
                    <button
                      class="main-button"
                      style="
                        background-color: #054ca4;
                        height: 60px;
                        padding-top: 0px;
                        padding-bottom: 0px;
                      "
                    >
                      <i class="fa fa-search"></i> Search Now
                    </button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div id="loading-overlay" style="display: none">
      <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <p class="loading-text">Please wait...</p>
    </div>

    <div id="item-details-container" style="padding-top: 30px"></div>
    <div id="result-container"></div>
    <div id="error-message"></div>
    <div id="details-container"></div>

    <section id="footer">
        <?php require_once('../widgets/footer.php') ?>
    </section>

    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/details.js"></script>
    
    <!-- Fontawesome -->
    <script src="../assets/libs/fontawesome/js/all.min.js" type="text/javascript"></script>

    <!-- Custom js -->
    <script src="../assets/js/script.js" type="text/javascript"></script>
    <script src="../assets/js/jsResponsive.js" type="text/javascript"></script>
    
   <!-- App -->
  <script src="../assets/js/app.js" type="text/javascript"></script>

  <!-- Analytics -->
  <script src="../assets/js/analytics.js" type="text/javascript"></script>

    
    <script>
      $(document).ready(function () {
        var currentPage = 1;
        var itemsPerPage = 10;
        var maxVisiblePages = 9; // Maximum number of visible page numbers (excluding ellipsis)

        function fetchData(page, query) {
          // Generate HTML
          var resultContainer = $("#item-details-container");
          resultContainer.empty(); // Clear previous results

          // Show loading overlay
          $("#loading-overlay").fadeIn();

          // Perform API call using Ajax
          $.ajax({
            url: "https://poi.dpsmap.com/api/search/query=" + query,
            method: "GET",
            success: function (response) {
              // Hide loading overlay
              $("#loading-overlay").fadeOut();

              if (response.length === 0) {
                // Display error message if no data is found
                $("#error-message").html(
                  '<i class="bi bi-exclamation-triangle-fill"></i>ဝမ်းနည်းပါတယ်။ မိတ်ဆွေရှာဖွေနေသာ ဆိုင်ကို ရှာမတွေ့ပါ။ဆိုင်အမည်ကို မှန်ကန်စွာဖြည့်ပြီး ပြန်ကြိုးစားကြည့်ပါ'
                );
              } else {
                // Clear previous error message
                $("#error-message").empty();

                // Hide search guide
                $("#search-guide").hide();

                // Calculate pagination indexes
                var startIndex = (page - 1) * itemsPerPage;
                var endIndex = startIndex + itemsPerPage;
                var paginatedResults = response.slice(startIndex, endIndex);

                // Generate HTML for paginated results
                paginatedResults.forEach(function (item) {
                  var itemContainer = $("<div>").addClass("item-container");
                  var itemTitle = $("<h4>")
                    .addClass("mb-3")
                    .html(
                      '<a href="details.php?item=' +
                        encodeURIComponent(JSON.stringify(item)) +
                        '" class="item-link">' +
                        item.POI_N_Eng +
                        "</a>"
                    );
                  var itemSectitle = $("<p>")
                    .addClass("mb-2")
                    .html(
                      "အမျိုးအစာ - " + [item.Type, item.Sub_Type].join(", ")
                    );
                  var itemsWithCommas = $("<p>").html(
                    "လိပ်စာ - " +
                      [
                        item.St_N_Eng,
                        item.Ward_N_eng,
                        item.Tsp_N_Eng,
                        item.Dist_N_Eng,
                        item.S_R_N_Eng,
                      ].join(", ")
                  );
                  var itemCoordinates = $("<p>")
                    .addClass("item-coordinates")
                    .html(
                      '<a href="details.php?item=' +
                        encodeURIComponent(JSON.stringify(item)) +
                        '" class="item-link">မြေပုံတွင်ကြည့်ရန် နှိပ်ပါ</a>'
                    );

                  itemContainer.append(itemTitle);
                  itemContainer.append(itemSectitle);
                  itemContainer.append(itemsWithCommas);
                  itemContainer.append(itemCoordinates);
                  resultContainer.append(itemContainer);
                });

                // Calculate total number of pages
                var totalPages = Math.ceil(response.length / itemsPerPage);

                // Add pagination controls
                var paginationControls = $("<div>").addClass(
                  "pagination-controls"
                );
                var prevButton = $("<button>")
                  .text("Previous")
                  .click(function () {
                    if (currentPage > 1) {
                      currentPage--;
                      fetchData(currentPage, $("#search-input").val());
                    }
                  });
                var pageNumberContainer = $("<div>").addClass("page-numbers");

                // Calculate start and end page numbers
                var startPage = 1;
                var endPage = totalPages;

                if (totalPages > maxVisiblePages) {
                  var middlePages = maxVisiblePages - 2;
                  var sidePages = Math.floor(middlePages / 2);

                  if (currentPage <= sidePages + 1) {
                    endPage = maxVisiblePages - 1;
                  } else if (currentPage >= totalPages - sidePages) {
                    startPage = totalPages - maxVisiblePages + 2;
                  } else {
                    startPage = currentPage - sidePages;
                    endPage = currentPage + sidePages;
                  }
                }

                // Add page numbers with ellipsis
                if (startPage > 1) {
                  var firstPage = $("<span>").addClass("page-number").text("1");
                  firstPage.click(function () {
                    currentPage = 1;
                    fetchData(currentPage, $("#search-input").val());
                  });
                  pageNumberContainer.append(firstPage);
                  pageNumberContainer.append($("<span>").text("..."));
                }

                for (var i = startPage; i <= endPage; i++) {
                  var pageNumber = $("<span>").addClass("page-number").text(i);
                  if (i === currentPage) {
                    pageNumber.addClass("current-page");
                  } else {
                    pageNumber.click(function () {
                      var page = parseInt($(this).text());
                      currentPage = page;
                      fetchData(page, $("#search-input").val());
                    });
                  }
                  pageNumberContainer.append(pageNumber);
                }

                if (endPage < totalPages) {
                  pageNumberContainer.append($("<span>").text("..."));
                  var lastPage = $("<span>")
                    .addClass("page-number")
                    .text(totalPages);
                  lastPage.click(function () {
                    currentPage = totalPages;
                    fetchData(currentPage, $("#search-input").val());
                  });
                  pageNumberContainer.append(lastPage);
                }

                var nextButton = $("<button>")
                  .text("Next")
                  .click(function () {
                    if (currentPage < totalPages) {
                      currentPage++;
                      fetchData(currentPage, $("#search-input").val());
                    }
                  });

                paginationControls.append(prevButton);
                paginationControls.append(pageNumberContainer);
                paginationControls.append(nextButton);
                resultContainer.append(paginationControls);
              }
            },
            error: function (xhr, status, error) {
              // Hide loading overlay
              $("#loading-overlay").fadeOut();
              // Display error message
              $("#error-message").text("Error: " + error);
            },
          });
        }

        $("#search-form").submit(function (event) {
          event.preventDefault(); // Prevent form submission
          currentPage = 1; // Reset the current page to 1
          fetchData(currentPage, $("#search-input").val());
        });
      });
    </script>
  </body>
</html>
