function initRatings() {
  // Send the Ajax GET request to get the ratings
  ajaxSendRequest("GET", "ratingkit.php", handleinitRatingsRequest);
}

function handleinitRatingsRequest() {
  if (request.readyState == 4) {
    if (request.status == 200) {
      // Store the XML rating response data
      var ratings = request.responseXML.getElementsByTagName("rating");

      // Set the info for each rating on the page
      for (var i = 0; i < ratings.length; i++) {
        var id = getText(ratings[i].getElementsByTagName("id")[0]);

        // Only show the vote results if the rating cookie has already been set
        if (getCookieData(id + "-rating") == "voted" &&
          document.getElementById(id + "-info") != null) {
          var avg = getText(ratings[i].getElementsByTagName("avg")[0]);
          var votes = getText(ratings[i].getElementsByTagName("votes")[0]);

          // Display the number of votes
          if (votes == "1")
            replaceText(document.getElementById(id + "-info"), "(" + votes + " vote)");
          else
            replaceText(document.getElementById(id + "-info"), "(" + votes + " votes)");

          // Display the average rating
          document.getElementById(id + "-rating").style.width = Math.round(avg * 20) + "%";
        }
      }
    }
  }
  ajaxUpdateState();
}

function setRating(id, rating) {
  // Only set the rating if the rating cookie has NOT already been set
  if (getCookieData(id + "-rating") != "voted") {
    // Display a wait message
    replaceText(document.getElementById(id + "-info"), "(Casting vote...)");

    // Send the Ajax POST request to set the rating
    ajaxSendRequest("POST", "ratingkit.php",
      function() { handleSetRatingRequest(id); },
      "application/x-www-form-urlencoded; charset=UTF-8",
      "id=" + id + "&rating=" + rating);
  }
}

function handleSetRatingRequest(id) {
  if (request.readyState == 4) {
    if (request.status == 200) {
      // Store the rating response data (from the format AvgRating:Votes)
      var rating = request.responseText.split(":");

      // Display the number of votes
      if (rating[1] == "1")
        replaceText(document.getElementById(id + "-info"), "(" + rating[1] + " vote)");
      else
        replaceText(document.getElementById(id + "-info"), "(" + rating[1] + " votes)");

      // Display the average rating
      document.getElementById(id + "-rating").style.width = Math.round(parseFloat(rating[0]) * 20) + "%";

      // Set the rating cookie to prevent re-votes
      document.cookie = id + "-rating=voted";
    }
  }
  ajaxUpdateState();
}
