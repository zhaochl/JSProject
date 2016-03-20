// Animated wait image variable
var waitImage;

function initInfoWindow(width, height) {
  // Preload the wait image
  waitImage = new Image();
  waitImage.src = "infowinkit_wait.gif";

  // Create the info window as a document fragment
  var docFragment = document.createDocumentFragment();
  var elemInfoWin = document.createElement("div");
  elemInfoWin.setAttribute("id", "infowin");
  elemInfoWin.style.width = width;
  elemInfoWin.style.height = height;
  elemInfoWin.onclick = function() {
    // Hide the info window if it is clicked
    hideInfoWindow();
    return false;
  };
  elemInfoWin.style.display = "none";
  docFragment.appendChild(elemInfoWin);

  // Add the info window document fragment to the body of the page
  var elemBody = document.getElementsByTagName("body")[0];
  elemBody.insertBefore(docFragment, elemBody.firstChild);
}

function showInfoWindow(infoURL, evt) {
  // Get the mouse click position
  if (!evt)
    evt = window.event;
  var xPos = 0, yPos = 0;
  if (evt.pageX || evt.pageY) {
    xPos = evt.pageX;
    yPos = evt.pageY;
  }
  else if (evt.clientX || evt.clientY) {
    xPos = evt.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
    yPos = evt.clientY + document.body.scrollTop + document.documentElement.scrollTop;
  }

  // Reposition and display the info window, including the wait image
  var elemInfoWin = document.getElementById("infowin");
  elemInfoWin.innerHTML = "<img src='infowinkit_wait.gif' alt='Loading...' />";
  elemInfoWin.style.display = "block";

  // Make sure the window position doesn't end up off the screen
  xPos = Math.min(Math.max(0, xPos), getClientWidth() - elemInfoWin.offsetWidth - 5);
  yPos = Math.min(Math.max(0, yPos), getClientHeight() - elemInfoWin.offsetHeight - 5);
  elemInfoWin.style.left = xPos + "px";
  elemInfoWin.style.top = yPos + "px";

  // Send the Ajax request to load the new content
  ajaxSendRequest("GET", infoURL, handleContentRequest);

  return false;
}

function handleContentRequest() {
  if (request.readyState == 4) {
    if (request.status == 200) {
      // Display the response data in the info window
      showInfoContent(request.responseText);
      document.onkeypress = handleKeyPress;
    }
    else
      // The request failed, so display an error message
      showInfoContent("The requested information could not be found.");
  }
  ajaxUpdateState();
}

function showInfoContent(infoHTML) {
  // Display the content in the info window
  document.getElementById("infowin").innerHTML = infoHTML;
}

function hideInfoWindow() {
  // Hide the info window and disable keypress detection
  document.getElementById("infowin").style.display = "none";
  document.onkeypress = "";

  return false;
}

function handleKeyPress(evt) {
  // Hide the info window if the Return or Space key is pressed
  evt = evt ? evt : (event ? event : null);
  if (evt) {
    var key = evt.charCode ? evt.charCode : evt.keyCode;
    if (key == 13 || key == 32)
      hideInfoWindow();
  }

  return false;
}
