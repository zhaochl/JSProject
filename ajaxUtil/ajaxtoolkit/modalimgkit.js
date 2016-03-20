// Animated wait image variable
var waitImage;

function initModal() {
  // Preload the wait image
  waitImage = new Image();
  waitImage.src = "modalimgkit_wait.gif";

  // Convert all image links on the page to call showModal() function upon being clicked
  var links = document.getElementsByTagName("a");
  for(var i = 0; i < links.length; i++) {
    if (links[i].getAttribute("href") && /gif|jpe?g|png$/.test(links[i].getAttribute("href"))) {
      links[i].onclick = function() {
        showModal(this);
        return false;
      };
    }
  }

  // Create the modal window as a document fragment, including image content area
  var docFragment = document.createDocumentFragment();
  var elemModalWin = document.createElement("div");
  elemModalWin.setAttribute("id", "modalwin");
  elemModalWin.style.display = "none";
  docFragment.appendChild(elemModalWin);
  var elemModalContent = document.createElement("div");
  elemModalContent.setAttribute("id", "modalcontent");
  elemModalContent.onclick = function() {
    hideModal();
    return false;
  };
  elemModalContent.style.display = "none";
  var elemModalImg = document.createElement("img");
  elemModalImg.setAttribute("id", "modalimg");
  elemModalImg.setAttribute("alt", "Click to close.");
  elemModalContent.appendChild(elemModalImg);
  docFragment.insertBefore(elemModalContent, elemModalWin.nextSibling);

  // Add the modal document fragment to the body of the page
  var elemBody = document.getElementsByTagName("body")[0];
  elemBody.insertBefore(docFragment, elemBody.firstChild);

  // Bind the resize and scroll event handlers for the browser client window
  self.onresize = handleResize;
  self.onscroll = handleScroll;
}

function showModal(elemLink) {
  // Resize, reposition, and display the transparent gray background modal window
  var elemModalWin = document.getElementById("modalwin");
  elemModalWin.style.left = getClientLeft() + "px";
  elemModalWin.style.top = getClientTop() + "px";
  elemModalWin.style.width = getClientWidth() + "px";
  elemModalWin.style.height = getClientHeight() + "px";
  elemModalWin.style.display = "block";

  // Load the new image to be displayed
  var image = new Image();
  image.onload = function() {
    // Upon being loaded, display the new image
    showImage(image);
    document.onkeypress = handleKeyPress;
    return false;
  };
  image.src = elemLink.href;

  // If the new image hasn't finished loading, show the wait image
  if (!image.complete)
    showImage(waitImage);
}

function showImage(image) {
  // Reposition and display the modal content area containing the image
  document.getElementById("modalimg").src = image.src;
  var left = getClientLeft() + ((getClientWidth() - image.width) / 2);
  var top = getClientTop() + ((getClientHeight() - image.height) / 2);
  var elemModalContent = document.getElementById("modalcontent");
  elemModalContent.style.left = (left < 0 ? 0 : left) + "px";
  elemModalContent.style.top = (top < 0 ? 0 : top) + "px";
  elemModalContent.style.display = "block";
}

function hideModal() {
  // Hide the modal window
  document.getElementById("modalwin").style.display = "none";
  document.getElementById("modalcontent").style.display = "none";
  document.onkeypress = "";
}

function handleKeyPress(evt) {
  // Hide the modal window if the Return or Space key is pressed
  evt = evt ? evt : (event ? event : null);
  if (evt) {
    var key = evt.charCode ? evt.charCode : evt.keyCode;
    if (key == 13 || key == 32)
      hideModal();
  }
  return false;
}

function handleResize() {
  // Resize the modal window based upon the browser client window size
  document.getElementById("modalwin").style.width = getClientWidth() + "px";
  document.getElementById("modalwin").style.height = getClientHeight() + "px";
}

function handleScroll() {
  // Reposition the modal window based upon the browser client window position
  document.getElementById("modalwin").style.left = getClientLeft() + "px";
  document.getElementById("modalwin").style.top = getClientTop() + "px";
}
