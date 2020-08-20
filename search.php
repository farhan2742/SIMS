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
    <script type="text/javascript">
        //<![CDATA[
                jQuery(document).ready(function() 
                {
                  $("#naviSearch").addClass("selected");
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
            Search Data
          </h1>
           <div class="row">
              <div class="col-sm-9">
                <form class="form-horizontal" action="result.php" method="post">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">
                      Roll Number:
                    </label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" tabindex="1" name="rollNumber" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">
                      Student Name:
                    </label>
                    <div class="col-sm-9">
                      <input type="search" class="form-control" tabindex="2" name="name" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">
                      Session:
                    </label>
                    <div class="col-sm-9">
                      <input type="search" class="form-control" tabindex="3" name="session" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">
                      Technology:
                    </label>
                    <div class="col-sm-9">
                      <select class="form-control" tabindex="4" name="technology">
                        <option value="">
                          Select a Technology
                        </option>
                        <option value="CIT">
                          CIT
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">
                      Shift:
                    </label>
                    <div class="col-sm-9">
                      <select class="form-control" tabindex="7" name="shift">
                        <option value="">
                          Select a Shift
                        </option>
                        <option value="R1">
                          R1
                        </option>
                        <option value="R2">
                          R2
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">
                      Class:
                    </label>
                      <div class="col-sm-9">
                        <select class="form-control" tabindex="6" name="class">
                          <option value="">
                            Select a Class
                          </option>
                          <option value="FCIT">
                            FCIT
                          </option>
                          <option value="SCIT">
                            SCIT
                          </option>
                          <option value="DCIT">
                            DCIT
                          </option>
                        </select>
                      </div>
                    </div>
                    <button type="submit" class="pull-right btn btn-success" style="" name="search">
                      Submit
                    </button>
                    <button type="reset" class="pull-right btn btn-danger" style="margin-right: 20px">
                      Reset
                    </button>
                  </form>
              </div>
            </div>
          </div>
        </div>
    </section>
    <?php include("includes/footer.php"); ?>
  </body>
</html>