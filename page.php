 
<?php 
  
  $page = isset($_GET['p']) ? $_GET['p'] : "";

  if ($page == 'formpesan') {
      include_once "formpesan.php";
  } else if ($page=="") {
      include_once "home.php";
  } else if ($page=="services") {
    include_once "services.php";
  } else if ($page=="portfolio") {
    include_once "portfolio.php";
  } else if ($page=="client") {
    include_once "client.php";
  } else if ($page=="about") {
    include_once "about.php";
  } else if ($page=="team") {
    include_once "team.php";
  } else if ($page=="contact") {
    include_once "contact.php";
  }     

?> 

