<?php
  $title = 'SIMS';
  session_start();
  if (isset($_POST["logoutButton"]))
  {
    if (isset($_COOKIE[session_name()])) 
    {
      setcookie(session_name(),'',time()-86400,'/');
    }
    session_unset();
    session_destroy();
    mysqli_close($connection);
    header("Location: index.php");
  }
  if (isset($_SESSION['logedInUser']))
  {
    include("includes/connection.php");
  }
  else
  {
    header("Location: index.php");
  }
?>
<!doctype html>
<html lang= "en-US">
  <head>
    <title>
      <?php echo $title; ?>
    </title>
    <?php include("includes/links.php"); ?>
    <style type="text/css">
      
    </style>
    <?php include("includes/links.php"); ?>
    <script type="text/javascript">
        //<![CDATA[
                jQuery(document).ready(function() 
                {
                  $("#naviDashboard").addClass("selected");
                });
            //]]>
    </script>
  </head>
  <body data-spy="scroll" data-target=".navbar-collapse">
<?php include("includes/header.php"); ?>
    <section class="container contentSection">
      <div class="row row-offcanvas row-offcanvas-left">
        <?php include("includes/navi.php"); ?>
        <div class="col-xs-12 col-sm-9" id="mainSection">
          <h1>
            Recent Data
          </h1>
        </div>
      </div>
    </section>
    <?php include("includes/footer.php"); ?>
  </body>
</html>