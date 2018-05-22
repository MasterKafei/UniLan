document.getElementById("defaultOpen").click();

function openPage(evt, pageName) {
  // Declare all variables
  var i, pagecontent, pagelink;

  // Get all elements with class="tabcontent" and hide them
  pagecontent = document.getElementsByClassName("unilan-base");
  for (i = 0; i < pagecontent.length; i++) {
    pagecontent[i].style.display = "none";
  }

  // Get all elements with class="unilan-link" and remove the class "active"
  pagelink = document.getElementsByClassName("unilan-link");
  for (i = 0; i < pagelink.length; i++) {
    pagelink[i].className = pagelink[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(pageName).style.display = "block";
  evt.currentTarget.className += " active";
} 