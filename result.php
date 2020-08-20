<?php
  $title = 'SIMS';
  $alertMessage = "";
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
  if (isset($_POST['search']))
  {
    $name = $_POST['name'];
    $rollNumber = $_POST['rollNumber'];
    $session = $_POST['session'];
    $technology = $_POST['technology'];
    $shift = $_POST['shift'];
    $class = $_POST['class'];
    $squery = $name . " " . $rollNumber . " " . $session . " " . $technology . " " . $shift . " " . $class;
    $query = "SELECT RollNo,StudentName,Session,Technology,Class,Shift FROM students WHERE RollNo LIKE '%$rollNumber%' AND StudentName LIKE '%$name%' AND Session LIKE '%$session%' AND Technology LIKE '%$technology%' AND Shift LIKE '%$shift%' AND Class LIKE '%$class%'";
    $result = mysqli_query($connection,$query);
       if (isset($_POST['confirmDelete']))
       {
         $rollno = $_POST['confirmDelete'];
         $query1 = "DELETE FROM students WHERE RollNo=$rollno";
         $query2 = "DELETE FROM parents WHERE RollNo=$rollno";
         $query3 = "DELETE FROM examination WHERE RollNo=$rollno";
         $query4 = "DELETE FROM attendance WHERE RollNo=$rollno";
         $query5 = "DELETE FROM cocurricular WHERE RollNo=$rollno";
         $query6 = "DELETE FROM punishment WHERE RollNo=$rollno";
         $query7 = "DELETE FROM remarks WHERE RollNo=$rollno" ;
         $result1 = mysqli_query($connection, $query1);
         $result2 = mysqli_query($connection, $query2);
         $result3 = mysqli_query($connection, $query3);
         $result4 = mysqli_query($connection, $query4);
         $result5 = mysqli_query($connection, $query5);
         $result6 = mysqli_query($connection, $query6);
         $result7 = mysqli_query($connection, $query7);
         if (!$result1)
         {
            echo "Error: " .$query1 . "<br>" . mysqli_error($connection);
         }
         if (!$result2) {
            echo "Error: " .$query2 . "<br>" . mysqli_error($connection);
          }
          if (!$result3) {
            echo "Error: " .$query3 . "<br>" . mysqli_error($connection);
          }
          if (!$result4) {
            echo "Error: " .$query4 . "<br>" . mysqli_error($connection);
          }
          if (!$result5) {
            echo "Error: " .$query5 . "<br>" . mysqli_error($connection);
          }
          if (!$result6) {
            echo "Error: " .$query6 . "<br>" . mysqli_error($connection);
          }
          if (!$result7) {
            echo "Error: " .$query7 . "<br>" . mysqli_error($connection);
          }
          if ($result1 && $result2 && $result3 && $result4 && $result5 && $result6 && $result7) {
            header("Location: view.php?alert=deletesuccess");
          }
        }
  }
  else
  {
    header("Location: search.php");
  }
  if (isset($_GET['alert']))
  {
    if ($_GET['alert'] == 'updatesuccess')
    {
      $alertMessage = "<div class='alert alert-success'>Record Updated! <a class='close' data-dismiss='alert'>&times;</a></div>";
    }
    elseif ($_GET['alert'] == 'deletesuccess') 
    {
      $alertMessage = "<div class='alert alert-success'>Record Deleted! <a class='close' data-dismiss='alert'>&times;</a></div>";
    }
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
          <h1><?php echo "$alertMessage"; ?></h1>
          <h1>
            Search Results
          </h1>
          <div class="row">
            <div class="col-sm-12">
              <table class="table table-striped table-bordered table-responsive">
                <thead>
                  <tr>
                    <th>
                      Roll No
                    </th>
                    <th>
                      Name
                    </th>
                    <th class="hidden-xs">
                      Session
                    </th>
                    <th class="hidden-xs">
                      Technology
                    </th>
                    <th>
                      Class
                    </th>
                    <th class="hidden-xs">
                      Shift
                    </th>
                    <th>
                      View
                    </th>
                    <th>
                      Edit
                    </th>
                    <th>
                      Delete
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    if (mysqli_num_rows($result) > 0)
                    {
                      while ($row = mysqli_fetch_assoc($result))
                      {
                        echo "<tr>";
                        echo "<td>" . $row['RollNo'] . "</td>" . "<td>" . $row['StudentName'] . "</td>" . "<td class=\"hidden-xs\">" . $row['Session'] . "</td  class=\"hidden-xs\">" . "<td>" . $row['Technology'] . "</td>" . "<td>" . $row['Class'] . "</td>" . "<td class=\"hidden-xs\">" . $row['Shift'] . "</td>" . "<td>
                    <form action=\"record.php?rollno=" . $row['RollNo'] . "\" method=\"post\">
                      <button class=\"btn btn-sm btn-success\" value=\"". $row['RollNo']."\" name=\"viewData\">
                        <span class='glyphicon glyphicon-eye-open'></span>
                      </button>
                    </form>
                  </td>" . "<td>
                    <form action=\"edit.php?rollno=" . $row['RollNo'] . "\" method=\"post\">
                      <button class=\"btn btn-sm btn-info\" value=\"". $row['RollNo']."\" name=\"editData\">
                        <span class='glyphicon glyphicon-edit'></span>
                      </button>
                    </form>
                  </td>" . "<td>
                   
                      <button type='button' data-toggle='modal' data-target='#".$row['RollNo']."' class=\"btn btn-sm btn-danger\" value=\"". $row['RollNo']."\" name=\"delete\">
                           <span class='glyphicon glyphicon-erase'></span>
                      </button>

                      <div class=\"modal fade\" id=\"" .$row['RollNo']."\" tabindex=\"-1\" role=\"dialog\" aria-laballedby=\"myModelLabel\">
                        <div class=\"modal-dialog\" role=\"document\">
                          <div class=\"modal-content\">
                            <div class=\"modal-header\">
                              <div class=\"alert alert-danger\">
                                <p class=\"lead\">
                                  Are you sure you want to delete this Record. This will not be recoverable.
                                </p>
                              </div>
                            </div>
                            <div class=\"modal-body\" style=\"min-height: 60px\">
                            <form action=\"". htmlspecialchars($_SERVER['PHP_SELF'])."\" method=\"post\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm pull-right\" name=\"confirmDelete\" value=\"" . $row['RollNo'] . "\">
                                  Delete
                                </button>
                                <a type=\"button\" class=\"btn btn-default btn-sm pull-right\" style=\"margin-right: 20px\" data-dismiss='modal'>
                                  Cancel
                                </a>
                              </form>
                            </div>
                            <div class=\"modal-footer\">
                              <div id=\"\" class=\"\">
                                <div class=\"pull-left\">
                                   &copy; Copyright  by <a href=\"http://www.klabs.tk\" target=\"_blank\">K-Labs Web Development</a> | Powered by <a href=\\\"https://www.facebook.com/klabwebdevelopment\" target=\"_blank\" />K Labs</a><div class=\"hidden\">| Powered by <a href=\"https://www.facebook.com/klabwebdevelopment\" target=\"_blank\" />K Labs Facebook</a><a href=\"https://www.klabs.tk\" target=\"_blank\" />K Labs Website</a><a href=\"https://twitter.com/klabwebdevelop1\" target=\"_blank\" />K Labs Twitter</a><a href=\"https://www.linkedin.com/company/k-labs-web-development\" target=\"_blank\" />K Labs LinkedIn</a><a href=\"https://plus.google.com/+KlabsTkWD\" target=\"_blank\" />K Labs Google Plus</a></div>
                                  <p class=\"pull-right marginLeft\">
                                    <a href=\"https://www.facebook.com/klabwebdevelopment/\"><i class=\"fa fa-facebook\"></i></a>
                                    | <a href=\"https://www.linkedin.com/company/k-labs-web-development\"><i class=\"fa fa-linkedin\"></i></a>
                                    | <a href=\"https://plus.google.com/+KlabsTkWD\"><i class=\"fa fa-google-plus\"></i></a>
                                    | <a href=\"https://twitter.com/klabwebdevelop1\"><i class=\"fa fa-twitter\"></i></a>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </td>";
                        echo "</tr>";
                      }
                    }
                    else
                    {
                      echo "<div class='alert alert-danger'>No data found!</div>";
                    }
                    mysqli_close($connection);
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include("includes/footer.php"); ?>
  </body>
</html>
