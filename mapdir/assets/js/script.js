$(document).ready(function () {
  var currentPage = 1;
  var itemsPerPage = 10;
  var maxVisiblePages = 9; // Maximum number of visible page numbers (excluding ellipsis)

  function fetchData(page, query) {
    // Generate HTML
    var resultContainer = $("#result-container");
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
              .html("အမျိုးအစာ - " + [item.Type, item.Sub_Type].join(", "));
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
            //  var itemCoordinates = $('<p>').addClass('item-coordinates').html('<a href="https://www.google.com/maps/search/?api=1&query=' + item.Latitude + ',' + item.Longitude + '" target="_blank">မြေပုံတွင်ကြည့်ရန် နှိပ်ပါ</a>');

            itemContainer.append(itemTitle);
            itemContainer.append(itemSectitle);
            itemContainer.append(itemsWithCommas);
            itemContainer.append(itemCoordinates);
            resultContainer.append(itemContainer);
          });

          // Calculate total number of pages
          var totalPages = Math.ceil(response.length / itemsPerPage);

          // Add pagination controls
          var paginationControls = $("<div>").addClass("pagination-controls");
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
            var lastPage = $("<span>").addClass("page-number").text(totalPages);
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
