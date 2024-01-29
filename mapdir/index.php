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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <META NAME="keywords" content="Map Directory, DPS Map dir, map dir">
    <META NAME="description" content="Map Directory, DPS Dir, Map dir">
    <meta name="google-site-verification" content="fLa8xgJoz3j8ameNlxUbDmu13GE2d0MSwVV3aD-rnwo" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"/>

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


    <!-- Custom CSS -->
    <style>
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
      <h4>Welcome</h4>
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
            <!--
              <h6 style="padding-bottom: 20px">
                Database ထဲတွင် Data ပေါင်း၅သောင်းခန့် ရှိပါသည်။
              </h6>
              -->
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
                padding-left: 20px;">
              <div class="row">
                <div class="col-lg-4 align-self-center">
                  <input
                    type="text"
                    id="search-input"
                    class="form-control"
                    placeholder="ရှာဖွေလိုသော ဆိုင်နာမည် ထည့်ပါ"
                    autocomplete="off"
                    required/>
                  <div id="autocompleteResults"></div>
                </div>

                <div class="col-lg-4 align-self-center">
                  <select
                    name="township"
                    class="form-select"
                    aria-label="Default select example"
                    id="chooseCategory"
                    onchange="this.form.click()">
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
                        padding-bottom: 0px;">
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

    <div id="search-guide" class="box-container">
      <div class="col-lg-12">
        <div class="general-info">
          <div class="row">
            <div class="col-lg-12">
              <div class="content-wrapper">
                <h5>
                  ယခုစာမျက်နှာသည် မိမိသိလိုသော ဆိုင်ကို ရှာဖွေနိုင်သော
                  စာမျက်နှာဖြစ်သည်။
                </h5>
                <p></p>
                <span class="list-item">*ပထမဦးစွာ မိမိရှာချင်သော ဆိုင်အမည်ကို Search Box တွင်
                  ရိုက်ထည့်ပါ။ <br />(ဥပမာ-City Express) <br />** ထိုအခါ
                  ထိုအချက်အလက်နှင့်ပက်သက်သော Data အသေးစိတ်ကိုပြပေးပါမည်။
                  <br />*** ထို Data အသေးစိတ်ကို
                  မြေပုံတွင်လဲတိုက်ရိုက်ကြည့်ရှုနိုင်ပါတယ်ခင်ဗျာ။</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
    <script src="assets/js/script.js"></script>
    <script src="../mapdir/assets/js/autocomplete.js"></script>
    
    <!-- Fontawesome -->
    <script src="../assets/libs/fontawesome/js/all.min.js" type="text/javascript"></script>

    <!-- Custom js -->
    <script src="../assets/js/script.js" type="text/javascript"></script>
    <script src="../assets/js/jsResponsive.js" type="text/javascript"></script>
    
      <!-- App -->
  <script src="../assets/js/app.js" type="text/javascript"></script>

  <!-- Analytics -->
  <script src="../assets/js/analytics.js" type="text/javascript"></script>

    
  </body>
</html>
