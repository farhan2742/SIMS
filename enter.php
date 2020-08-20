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
    include("includes/functions.php");
  }
  else
  {
    header("Location: index.php");
  }
  if (isset($_POST["add"]))
  {
    $error="";
    $rollNumber = $studentName = $registerationNumber = $session = $technology = $class = $shift = $bloodGroup = $studentEmail = $cellNumber = $permanentAddress = $permanentNumber = $postalAddress = $postalNumber = $residentalAddress = $residentalNumber = $fatherName = $fatherNumber = $fatherOccupation = $officeAddressOne = $officeNumberOne = $officeAddressTwo = $officeNumberTwo = $meritMarks = $FYMOne = $FYFOne = $FYMTwo = $FYFTwo = $SYMOne = $SYFOne = $SYMTwo = $SYFTwo = $TYMOne = $TYFOne = $TYMTwo = $TYFTwo = $OSep = $ONov = $ODec = $OJan = $OFeb = $OMar = $OApr = $OMay = $SSep = $SNov = $SDec = $SJan = $SFeb = $SMar = $SApr = $SMay = $TSep = $TNov = $TDec = $TJan = $TFeb = $TMar = $TApr = $TMay = $leaveAvailed = $sportOne = $prizeOne = $sportTwo = $prizeTwo = $other = $prizeOther = $meetingOne = $meetingTwo = $meetingThree = $meetingFour = $struckFirst = $struckSecond = $struckThirld = $expel = $remarksFirst = $remarksSecond = $remarksThirld = $distinction = $tutor = "";
    if (!$_POST["rollNumber"]) {
      $error.= "Please enter a Roll Number <br>";
    }
    else{
      $rollNumber = validateFormData($_POST["rollNumber"]);
    }
    if (!$_POST["studentName"]) {
      $error.= "Please enter a Student Name <br>";
    }
    else{
      $studentName = validateFormData($_POST["studentName"]);
    }
    if (!$_POST["registerationNumber"]) {
      $error.= "Please enter a Registeration Number <br>";
    }
    else{
      $registerationNumber = validateFormData($_POST["registerationNumber"]);
    }
    if (!$_POST["session"]) {
      $error.= "Please specify Session <br>";
    }
    else{
      $session = validateFormData($_POST["session"]);
    }
    if (!$_POST["class"]) {
      $error.= "Please specify a class <br>";
    }
    else{
      $class = validateFormData($_POST["class"]);
    }
    if (!$_POST["shift"]) {
      $error.= "Please select a shift <br>";
    }
    else{
      $shift = validateFormData($_POST["shift"]);
    }
    if (!$_POST["technology"]) {
      $error.= "Please select a technology <br>";
    }
    else{
      $technology = validateFormData($_POST["technology"]);
    }
    if (!$_POST["fatherName"]) {
      $error.= "Please enter a Father Name <br>";
    }
    else{
      $fatherName = validateFormData($_POST["fatherName"]);
    }
    if (!$_POST["residentalAddress"]) {
      $error.= "Please enter a Residental Address <br>";
    }
    else{
      $residentalAddress = validateFormData($_POST["residentalAddress"]);
    }
    $fatherNumber = validateFormData($_POST["fatherNumber"]);
    $bloodGroup = validateFormData($_POST["bloodGroup"]);
    $studentEmail = validateFormData($_POST["studentEmail"]);
    $cellNumber = validateFormData($_POST["cellNumber"]);
    $permanentAddress = validateFormData($_POST["permanentAddress"]);
    $permanentNumber = validateFormData($_POST["permanentNumber"]);
    $postalAddress = validateFormData($_POST["postalAddress"]);
    $postalNumber = validateFormData($_POST["postalNumber"]);
    $residentalNumber = validateFormData($_POST["residentalNumber"]);
    $fatherNumber = validateFormData($_POST["fatherNumber"]);
    $fatherOccupation = validateFormData($_POST["fatherOccupation"]);
    $officeAddressOne = validateFormData($_POST["officeAddressOne"]);
    $officeNumberOne = validateFormData($_POST["officeNumberOne"]);
    $officeAddressTwo = validateFormData($_POST["officeAddressTwo"]);
    $officeNumberTwo = validateFormData($_POST["officeNumberTwo"]);
    $meritMarks = validateFormData($_POST["meritMarks"]);
    $FYMOne = validateFormData($_POST["FYMOne"]);
    $FYFOne = validateFormData($_POST["FYFOne"]);
    $FYMTwo = validateFormData($_POST["FYMTwo"]);
    $FYFTwo = validateFormData($_POST["FYFTwo"]);
    $SYMOne = validateFormData($_POST["SYMOne"]);
    $SYFOne = validateFormData($_POST["SYFOne"]);
    $SYMTwo = validateFormData($_POST["SYMTwo"]);
    $SYFTwo = validateFormData($_POST["SYFTwo"]);
    $TYMOne = validateFormData($_POST["TYMOne"]);
    $TYFOne = validateFormData($_POST["TYFOne"]);
    $TYMTwo = validateFormData($_POST["TYMTwo"]);
    $TYFTwo = validateFormData($_POST["TYFTwo"]);
    $OSep = validateFormData($_POST["OSep"]);
    $OOct = validateFormData($_POST["OOct"]);
    $ONov = validateFormData($_POST["ONov"]);
    $ODec = validateFormData($_POST["ODec"]);
    $OJan = validateFormData($_POST["OJan"]);
    $OFeb = validateFormData($_POST["OFeb"]);
    $OMar = validateFormData($_POST["OMar"]);
    $OApr = validateFormData($_POST["OApr"]);
    $OMay = validateFormData($_POST["OMay"]);
    $SSep = validateFormData($_POST["SSep"]);
    $SOct = validateFormData($_POST["SOct"]);
    $SNov = validateFormData($_POST["SNov"]);
    $SDec = validateFormData($_POST["SDec"]);
    $SJan = validateFormData($_POST["SJan"]);
    $SFeb = validateFormData($_POST["SFeb"]);
    $SMar = validateFormData($_POST["SMar"]);
    $SApr = validateFormData($_POST["SApr"]);
    $SMay = validateFormData($_POST["SMay"]);
    $TSep = validateFormData($_POST["TSep"]);
    $TOct = validateFormData($_POST["TOct"]);
    $TNov = validateFormData($_POST["TNov"]);
    $TDec = validateFormData($_POST["TDec"]);
    $TJan = validateFormData($_POST["TJan"]);
    $TFeb = validateFormData($_POST["TFeb"]);
    $TMar = validateFormData($_POST["TMar"]);
    $TApr = validateFormData($_POST["TApr"]);
    $TMay = validateFormData($_POST["TMay"]);
    $leaveAvailed = validateFormData($_POST["leaveAvailed"]);
    $sportOne = validateFormData($_POST["sportOne"]);
    $prizeOne = validateFormData($_POST["prizeOne"]);
    $sportTwo = validateFormData($_POST["sportTwo"]);
    $prizeTwo = validateFormData($_POST["prizeTwo"]);
    $other = validateFormData($_POST["other"]);
    $prizeOther = validateFormData($_POST["prizeOther"]);
    $meetingOne = validateFormData($_POST["meetingOne"]);
    $meetingTwo = validateFormData($_POST["meetingTwo"]);
    $meetingThree = validateFormData($_POST["meetingThree"]);
    $meetingFour = validateFormData($_POST["meetingFour"]);
    $struckFirst = validateFormData($_POST["struckFirst"]);
    $struckSecond = validateFormData($_POST["struckSecond"]);
    $struckThirld = validateFormData($_POST["struckThirld"]);
    $expel = validateFormData($_POST["expel"]);
    $remarksFirst = validateFormData($_POST["remarksFirst"]);
    $remarksSecond = validateFormData($_POST["remarksSecond"]);
    $remarksThirld = validateFormData($_POST["remarksThirld"]);
    $distinction = validateFormData($_POST["distinction"]);
    $tutor = validateFormData($_POST["tutor"]);
    if ($rollNumber && $studentName && $registerationNumber && $session && $technology && $class && $shift && $residentalAddress && $fatherName) {
      $query1 = "INSERT INTO students(id,RollNo,StudentName,RegistationNo,Session,Technology,Class,Shift,StudentCell,BloodGroup,StudentEmail,PermanentAddress,PermanentCell,PostalAddress,PostalCell,ResidentalAddress,ResidentalCell) VALUES(NULL,'$rollNumber','$studentName','$registerationNumber','$session','$technology','$class','$shift','$cellNumber','$bloodGroup','$studentEmail','$permanentAddress','$permanentNumber','$postalAddress','$postalNumber','$residentalAddress','$residentalNumber')";
      $query2 = "INSERT INTO parents(id,RollNo,FatherName,FatherCell,FatherOccupation,FatherOffice1,FatherOffice2,FatherOfficeCell1,FatherOfficeCell2) VALUES(NULL,'$rollNumber','$fatherName','$fatherNumber','$fatherOccupation','$officeAddressOne','$officeAddressTwo','$officeNumberOne','$officeNumberTwo')";
      $query3 = "INSERT INTO examination(id,RollNo,MeritMarks,1YM1,1YM2,2YM1,2YM2,3YM1,3YM2,1YF1,1YF2,2YF1,2YF2,3YF1,3YF2) VALUES(NULL,'$rollNumber','$meritMarks','$FYMOne','$FYMTwo','$SYMOne','$SYMTwo','$TYMOne','$TYMTwo','$FYFOne','$FYFTwo','$SYFOne','$SYFTwo','$TYFOne','$TYMTwo')";
      $query4 = "INSERT INTO attendance(id,RollNo,1Sep,1Oct,1Nov,1Dec,1Jan,1Feb,1Mar,1Apr,1May,2Sep,2Oct,2Nov,2Dec,2Jan,2Feb,2Mar,2Apr,2May,3Sep,3Oct,3Nov,3Dec,3Jan,3Feb,3Mar,3Apr,3May,LeaveAvailed) VALUES(NULL,'$rollNumber','$OSep','$OOct','$ONov','$ODec','$OJan','$OFeb','$OMar','$OApr','$OMay','$SSep','$SOct','$SNov','$SDec','$SJan','$SFeb','$SMar','$SApr','$SMay','$TSep','$TOct','$TNov','$TDec','$TJan','$TFeb','$TMar','$SApr','$TMay','$leaveAvailed')";
      $query5 = "INSERT INTO cocurricular(id,RollNo,Sports1,Sports2,Others,1Prize,2Prize,OtherPrize,1Meeting,2Meeting,3Meeting,4Meeting) VALUES(NULL,'$rollNumber','$sportOne','$sportTwo','$other','$prizeOne','$prizeTwo','$prizeOther','$meetingOne','$meetingTwo','$meetingThree','$meetingFour')";
      $query6 = "INSERT INTO punishment(id,RollNo,1SO,2SO,3SO,Counseling) VALUES(NULL,'$rollNumber','$struckFirst','$struckSecond','$struckThirld','$expel')";
      $query7 = "INSERT INTO remarks(id,RollNo,1YR,2YR,3YR,Distinction,Tutor) VALUES(NULL,'$rollNumber','$remarksFirst','$remarksSecond','$remarksThirld','$distinction','$tutor')";
      $result1 = mysqli_query($connection,$query1);
      $result2 = mysqli_query($connection,$query2);
      $result3 = mysqli_query($connection,$query3);
      $result4 = mysqli_query($connection,$query4);
      $result5 = mysqli_query($connection,$query5);
      $result6 = mysqli_query($connection,$query6);
      $result7 = mysqli_query($connection,$query7);
      if (!$result1) {
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
        header("Location: enter.php?alert=success");
      }
    }
  }
  mysqli_close($connection);
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
                  $("#naviEnter").addClass("selected");
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
            Enter Data
          </h1>
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <nav>
                <ul class="nav nav-tabs" role="tablist" id="myTabs">
                  <li class="active">
                    <a href="#Personal" role="tab" data-toggle="tab">
                      Personal
                    </a>
                  </li>
                  <li>
                    <a href="#Academic" role="tab" data-toggle="tab">
                      Academic
                    </a>
                  </li>
                  <!--
                  <li>
                    <a href="#Financial" role="tab" data-toggle="tab">
                      Financial
                    </a>
                  </li>
                  -->
                </ul>
              </nav>
              <form class="tab-content form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="tab-pane fade marginTopForm in active" id="Personal" role="tabpanel">
                  <fieldset>
                    <legend>
                      Student Info
                    </legend>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Roll Number:*
                      </label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" tabindex="1" name="rollNumber" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Student Name:*
                      </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" tabindex="2" name="studentName" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Registeration Number:*
                      </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" tabindex="3" name="registerationNumber" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Session:*
                      </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" tabindex="4" name="session"required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Technology:*
                      </label>
                      <div class="col-sm-9">
                        <select class="form-control" tabindex="5" name="technology" required>
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
                        Class:*
                      </label>
                      <div class="col-sm-9">
                        <select class="form-control" tabindex="6" name="class" required>
                          <option value="">
	                        Select a Technology
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
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Shift:*
                      </label>
                      <div class="col-sm-9">
                        <select class="form-control" tabindex="7" name="shift" required>
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
                        Blood Group:
                      </label>
                      <div class="col-sm-9">
                        <select class="form-control" tabindex="8" name="bloodGroup">
                          <option value="">
                            Select a Blood Group
                          </option>
                          <option value="O-">
                            O-
                          </option>
                          <option value="O+">
                            O+
                          </option>
                          <option value="A-">
                            A-
                          </option>
                          <option value="A+">
                            A+
                          </option>
                          <option value="B-">
                            B-
                          </option>
                          <option value="B+">
                            B+
                          </option>
                          <option value="AB-">
                            AB-
                          </option>
                          <option value="AB+">
                            AB+
                          </option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Student eMail Address:
                      </label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" tabindex="9" name="studentEmail" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Student Cell Number:
                      </label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" tabindex="10" name="cellNumber" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Student Permanent Address:
                      </label>
                      <div class="col-sm-9">
                        <textarea type="number" class="form-control" tabindex="11" name="permanentAddress" rows="4"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Permanent Cell Number:
                      </label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" tabindex="12" name="permanentNumber" />
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Student Postal Address:
                      </label>
                      <div class="col-sm-9">
                        <textarea type="number" class="form-control" tabindex="13" name="postalAddress" rows="4"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Postal Cell Number:
                      </label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" tabindex="14" name="postalNumber" />
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Student Residental Address:*
                      </label>
                      <div class="col-sm-9">
                        <textarea type="number" class="form-control" tabindex="15" name="residentalAddress" rows="4" required></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Residental Cell Number:
                      </label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" tabindex="16" name="residentalNumber" />
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <legend>
                      Parent Info
                    </legend>
                     <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Father Name:*
                      </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" tabindex="17" name="fatherName" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Father Cell Number:*
                      </label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" tabindex="18" name="fatherNumber" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Father Occupation:
                      </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" tabindex="19" name="fatherOccupation" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Father Office Address 1:
                      </label>
                      <div class="col-sm-9">
                        <textarea type="number" class="form-control" tabindex="20" name="officeAddressOne" rows="4"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Office Cell Number 1:
                      </label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" tabindex="21" name="officeNumberOne" />
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Father Office Address 2:
                      </label>
                      <div class="col-sm-9">
                        <textarea type="number" class="form-control" tabindex="22" name="officeAddressTwo" rows="4"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Office Cell Number 2:
                      </label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" tabindex="23" name="officeNumberTwo" />
                      </div>
                    </div>
                  </fieldset>
                  <button type="button" class="pull-right btn btn-info" style="margin-bottom: 10px" id="academicToggleBottom">
                    Next
                  </button>
                </div>
                <div class="tab-pane fade marginTopForm" id="Academic" role="tabpanel">
                    <fieldset>
                      <legend>
                        Examination Record
                      </legend>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Merit Marks:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="24" name="meritMarks" />
                        </div>
                      </div>
                      <h5>
                        <strong>First Year First Annual Examination</strong>
                      </h5>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Marks Optained:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="25" name="FYMOne" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Failed In Subjects:
                        </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" tabindex="26" name="FYFOne" />
                        </div>
                      </div>
                      <h5>
                        <strong>First Year Second Annual Examination</strong>
                      </h5>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Marks Optained:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="27" name="FYMTwo" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Failed In Subjects:
                        </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" tabindex="28" name="FYFTwo" />
                        </div>
                      </div>
                      <h5>
                        <strong>Second Year First Annual Examination</strong>
                      </h5>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Marks Optained:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="29" name="SYMOne" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Failed In Subjects:
                        </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" tabindex="30" name="SYFOne" />
                        </div>
                      </div>
                      <h5>
                        <strong>Second Year Second Annual Examination</strong>
                      </h5>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Marks Optained:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="31" name="SYMTwo" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Failed In Subjects:
                        </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" tabindex="32" name="SYFTwo" />
                        </div>
                      </div>
                      <h5>
                        <strong>Thirld Year First Annual Examination</strong>
                      </h5>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Marks Optained:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="33" name="TYMOne" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Failed In Subjects:
                        </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" tabindex="34" name="TYFOne" />
                        </div>
                      </div>
                      <h5>
                        <strong>Thirld Year Second Annual Examination</strong>
                      </h5>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Marks Optained:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="35" name="TYMTwo" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Failed In Subjects:
                        </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" tabindex="36" name="TYFTwo" />
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>
                        Attendance Record
                      </legend>
                      <h5>
                        <strong>First Year Attendance Record</strong>
                      </h5>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          September:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="37" name="OSep" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          October:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="38" name="OOct" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          November:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="39" name="ONov" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          December:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="40" name="ODec" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          January:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="41" name="OJan" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          February:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="42" name="OFeb" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          March:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="43" name="OMar" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          April:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="44" name="OApr" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          May:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="45" name="OMay" />
                        </div>
                      </div>
                      <h5>
                        <strong>Second Year Attendance Record</strong>
                      </h5>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          September:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="46" name="SSep" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          October:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="47" name="SOct" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          November:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="48" name="SNov" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          December:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="49" name="SDec" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          January:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="50" name="SJan" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          February:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="51" name="SFeb" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          March:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="52" name="SMar" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          April:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="53" name="SApr" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          May:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="54" name="SMay" />
                        </div>
                      </div>
                      <h5>
                        <strong>Thirld Year Attendance Record</strong>
                      </h5>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          September:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="55" name="TSep" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          October:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="56" name="TOct" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          November:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="57" name="TNov" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          December:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="58" name="TDec" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          January:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="59" name="TJan" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          February:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="60" name="TFeb" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          March:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="61" name="TMar" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          April:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="62" name="TApr" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          May:
                        </label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" tabindex="63" name="TMay" />
                        </div>
                      </div>
                      <h5>
                        <strong>Details of Leaves Availed</strong>
                      </h5>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <textarea class="form-control" tabindex="64" name="leaveAvailed" rows="4"></textarea>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>
                        Co-Curricular Activities
                      </legend>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Sports 1:
                        </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" tabindex="65" name="sportOne" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Prize 1:
                        </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" tabindex="66" name="prizeOne" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Sports 2:
                        </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" tabindex="67" name="sportTwo" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Prize 2:
                        </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" tabindex="68" name="prizeTwo" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Other:
                        </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" tabindex="69" name="other" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Prize Other:
                        </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" tabindex="70" name="prizeOther" />
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>
                        Meetings with Parents
                      </legend>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Meeting 1:
                        </label>
                        <div class="col-sm-9">
                          <textarea class="form-control" tabindex="71" name="meetingOne" rows="4"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Meeting 2:
                        </label>
                        <div class="col-sm-9">
                          <textarea class="form-control" tabindex="72" name="meetingTwo" rows="4"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Meeting 3:
                        </label>
                        <div class="col-sm-9">
                          <textarea class="form-control" tabindex="73" name="meetingThree" rows="4"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Meeting 4:
                        </label>
                        <div class="col-sm-9">
                          <textarea class="form-control" tabindex="74" name="meetingFour" rows="4"></textarea>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>
                        Punishment
                      </legend>
                      <h5>
                        <strong>Struck off / Re-admission (Reason and Date)</strong>
                      </h5>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          First Year:
                        </label>
                        <div class="col-sm-9">
                          <textarea class="form-control" tabindex="75" name="struckFirst" rows="4"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Second Year:
                        </label>
                        <div class="col-sm-9">
                          <textarea class="form-control" tabindex="76" name="struckSecond" rows="4"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Thirld Year:
                        </label>
                        <div class="col-sm-9">
                          <textarea class="form-control" tabindex="77" name="struckThirld" rows="4"></textarea>
                        </div>
                      </div>
                      <h5>
                        <strong>Counseling / Fine / Suspension / Expulsion etc</strong>
                      </h5>
                      <div class="col-sm-12">
                        <textarea class="form-control" tabindex="78" name="expel" rows="4" style="margin-bottom: 10px"></textarea>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>
                        Tutor Remarks
                      </legend>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          First Year:
                        </label>
                        <div class="col-sm-9">
                          <textarea class="form-control" tabindex="79" name="remarksFirst" rows="4"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Second Year:
                        </label>
                        <div class="col-sm-9">
                          <textarea class="form-control" tabindex="80" name="remarksSecond" rows="4"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Thirld Year:
                        </label>
                        <div class="col-sm-9">
                          <textarea class="form-control" tabindex="81" name="remarksThirld" rows="4"></textarea>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>
                        Any Distinction / Special Achievement
                      </legend>
                      <div class="col-sm-12">
                        <textarea class="form-control" tabindex="82" name="distinction" rows="4" style="margin-bottom: 10px"></textarea>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>
                        Tutor Name And Designation
                      </legend>
                      <div class="col-sm-12">
                        <textarea class="form-control" tabindex="82" name="tutor" rows="4" style="margin-bottom: 10px"></textarea>
                      </div>
                    </fieldset>
                    <!--
                    <button type="button" class="pull-right btn btn-info" style="margin-bottom: 10px" id="FinancialToggleBottom">
                      Next
                    </button>
                    -->
                    <button type="submit" class="pull-right btn btn-success" style="" name="add">
                      Submit
                    </button>
                    <button type="reset" class="pull-right btn btn-danger" style="margin-right: 20px">
                      Reset
                    </button> 
                </div>
                <!--
                <div class="tab-pane fade marginTopForm" id="Financial" role="tabpanel">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">
                      
                    </label>
                  </div>
                </div>
                -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include("includes/footer.php"); ?>
  </body>
</html>