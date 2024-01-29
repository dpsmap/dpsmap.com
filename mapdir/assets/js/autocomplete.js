$(document).ready(function () {
  // When the user types in the search input
  $("#search-input").keyup(function () {
    var query = $(this).val();

    // Make an AJAX request to the PHP file to get autocomplete suggestions
    $.ajax({
      url: "autocomplete.php",
      method: "GET",
      data: { term: query },
      dataType: "json",
      success: function (data) {
        // Clear previous autocomplete results
        $("#autocompleteResults").empty();

        // Filter and sort the data to ensure uniqueness and show closest matches at the top
        var uniqueData = [];
        var filteredData = data.filter(function (item) {
          if (!uniqueData.includes(item)) {
            uniqueData.push(item);
            return true;
          }
          return false;
        });

        filteredData.sort(function (a, b) {
          var aDistance = levenshteinDistance(query, a);
          var bDistance = levenshteinDistance(query, b);
          return aDistance - bDistance;
        });

        // Display the autocomplete suggestions in the #autocompleteResults div
        for (var i = 0; i < filteredData.length; i++) {
          $("#autocompleteResults").append(
            "<div>" + filteredData[i] + "</div>"
          );
        }

        // Show the autocomplete results
        $("#autocompleteResults").show();

        // When the user clicks on a suggestion
        $("#autocompleteResults div").on("click", function () {
          var selectedValue = $(this).text();
          // Set the selected value in the search input
          $("#search-input").val(selectedValue);
          // Hide the autocomplete results
          $("#autocompleteResults").hide();
        });
      },
    });
  });

  // When the user clicks outside the autocomplete results, hide them
  $(document).on("click", function (event) {
    if (!$(event.target).closest("#autocompleteResults").length) {
      $("#autocompleteResults").hide();
    }
  });

  // Function to calculate Levenshtein distance between two strings
  function levenshteinDistance(a, b) {
    if (a.length === 0) return b.length;
    if (b.length === 0) return a.length;

    var matrix = [];

    for (var i = 0; i <= b.length; i++) {
      matrix[i] = [i];
    }

    for (var j = 0; j <= a.length; j++) {
      matrix[0][j] = j;
    }

    for (i = 1; i <= b.length; i++) {
      for (j = 1; j <= a.length; j++) {
        if (b.charAt(i - 1) === a.charAt(j - 1)) {
          matrix[i][j] = matrix[i - 1][j - 1];
        } else {
          matrix[i][j] = Math.min(
            matrix[i - 1][j - 1] + 1, // Substitution
            matrix[i][j - 1] + 1, // Insertion
            matrix[i - 1][j] + 1 // Deletion
          );
        }
      }
    }

    return matrix[b.length][a.length];
  }
});
