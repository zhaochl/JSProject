/* Ajax Construction Kit  */
/* DOM Toolkit Functions  */

function replaceText(elem, text) {
  // Replace the inner text of the element
  if (elem != null) {
    while(elem.firstChild)
      elem.removeChild(elem.firstChild);
    elem.appendChild(document.createTextNode(text));
  }
}

function getText(elem) {
  // Get the inner text of the element
  var text = "";
  if (elem != null)
    if (elem.childNodes)
      for (var i = 0; i < elem.childNodes.length; i++) {
        var childNode = elem.childNodes[i];
        if (childNode.nodeValue != null)
          text = text + childNode.nodeValue;
      }
  return text;
}

function getClientWidth() {
  // Get the width of the browser client window
  return self.innerWidth ? self.innerWidth :
    document.documentElement && document.documentElement.clientWidth ? document.documentElement.clientWidth :
    document.body ? document.body.clientWidth :
    0;
}

function getClientHeight() {
  // Get the height of the browser client window
  return self.innerHeight ? self.innerHeight :
    document.documentElement && document.documentElement.clientHeight ? document.documentElement.clientHeight :
    document.body ? document.body.clientHeight :
    0;
}

function getClientLeft() {
  // Get the left position of the browser client window
  return typeof self.pageXOffset != "undefined" ? self.pageXOffset :
    document.documentElement && document.documentElement.scrollLeft ? document.documentElement.scrollLeft :
    document.body.scrollLeft ? document.body.scrollLeft :
    0;
}

function getClientTop() {
  // Get the top position of the browser client window
  return typeof self.pageYOffset != "undefined" ? self.pageYOffset :
    document.documentElement && document.documentElement.scrollTop ? document.documentElement.scrollTop :
    document.body.scrollTop ? document.body.scrollTop :
    0;
}

function getCookieData(cookieName) {
  var cookieData = document.cookie;
  var i = 0;
  var cEnd;
  while (i < cookieData.length) {
    var j = i + cookieName.length;
    if (cookieData.substring(i, j) == cookieName) {
      cEnd = cookieData.indexOf(";", j);
      if (cEnd == -1)
        cEnd = cookieData.length;
      return decodeURIComponent(cookieData.substring(j + 1, cEnd));
    }
    i++;
  }
  return "";
}
