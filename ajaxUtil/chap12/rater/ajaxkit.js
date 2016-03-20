/* Ajax Construction Kit  */
/* Ajax Toolkit Functions */

var request;

// Create an XMLHttpRequest object
function ajaxCreateRequest() {
  // Try the XMLHttpRequest object first
  if (window.XMLHttpRequest) {
    try {
      request = new XMLHttpRequest();
    } catch(e) {
      request = null;
    }
  // Now try the ActiveX (IE) version
  } else if (window.ActiveXObject) {
    try {
      request = new ActiveXObject("Msxml2.XMLHTTP");
    // Try the older ActiveX object for older versions of IE
    } catch(e) {
      try {
        request = new ActiveXObject("Microsoft.XMLHTTP");
      } catch(e) {
        request = null;
      }
    }
  }
  // If all else fails, just null out the object
  else {
    request = null;
  }
}

function ajaxSendRequest(type, url, handler, postDataType, postData) {
  if (request == null)
    // Create a new request
    ajaxCreateRequest();
  else
    // Kill the previous request
    request.abort();

  if (request == null) {
    alert("Ajax error creating request object.\n" + "Details: " + e);
  }
  else {
    try {
      request.onreadystatechange = handler;
      request.open(type, url, true); // always asynchronous (true)
      if (type.toLowerCase() == "get") {
        // Send a GET request; no data involved
        request.send(null);
      } else {
        // Send a POST request; the last argument is data
        request.setRequestHeader("Content-Type", postDataType);
        request.send(postData);
      }
    } catch(e) {
      alert("Ajax error communicating with the server.\n" + "Details: " + e);
    }
  }
}

function ajaxUpdateState() {
  var stateElem = document.getElementById("ajaxState");
  if (stateElem) {
    // Dress up the state element a little
    stateElem.style.fontSize = "small";
    stateElem.style.border = "1px solid";
    stateElem.style.textAlign = "center";

    switch (request.readyState) {
    // UNITIALIZED - Request has not yet been opened
    case 0:
      stateElem.style.backgroundColor = "#FFFFFF"; // white
      stateElem.innerHTML = "Request uninitialized.";
      break;
    // LOADING - Request has not yet been sent
    case 1:
      stateElem.style.backgroundColor = "#999999"; // gray
      stateElem.innerHTML = "Request initialized.";
      break;
    // LOADED - Request has been sent
    case 2:
      stateElem.style.backgroundColor = "#FF0000"; // red
      stateElem.innerHTML = "Waiting for response...";
      break;
    // INTERACTIVE - Response data is being downloaded
    case 3:
      stateElem.style.backgroundColor = "#FFFF00"; // yellow
      stateElem.innerHTML = "Downloading response...";
      break;
    // COMPLETE - Request/response is complete
    case 4:
      if (request.status == 200) {
        // Everything is OK
        stateElem.style.backgroundColor = "#00FF00"; // green
        stateElem.innerHTML = "Request complete!";
      } else {
        // There was a problem
        stateElem.style.backgroundColor = "#FF8800"; // orange
        stateElem.innerHTML = "Request failed!";
      }
      break;
    }
  }
}
