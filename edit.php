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
  if (isset($_GET["rollno"]))
  {
    $error="";
    $rollNumber = $studentName = $registerationNumber = $session = $technology = $class = $shift = $bloodGroup = $studentEmail = $cellNumber = $permanentAddress = $permanentNumber = $postalAddress = $postalNumber = $residentalAddress = $residentalNumber = $fatherName = $fatherNumber = $fatherOccupation = $officeAddressOne = $officeNumberOne = $officeAddressTwo = $officeNumberTwo = $meritMarks = $FYMOne = $FYFOne = $FYMTwo = $FYFTwo = $SYMOne = $SYFOne = $SYMTwo = $SYFTwo = $TYMOne = $TYFOne = $TYMTwo = $TYFTwo = $OSep = $ONov = $ODec = $OJan = $OFeb = $OMar = $OApr = $OMay = $SSep = $SNov = $SDec = $SJan = $SFeb = $SMar = $SApr = $SMay = $TSep = $TNov = $TDec = $TJan = $TFeb = $TMar = $TApr = $TMay = $leaveAvailed = $sportOne = $prizeOne = $sportTwo = $prizeTwo = $other = $prizeOther = $meetingOne = $meetingTwo = $meetingThree = $meetingFour = $struckFirst = $struckSecond = $struckThirld = $expel = $remarksFirst = $remarksSecond = $remarksThirld = $distinction = $tutor = $rollno = "";

    $rollno = $_GET['rollno'];
  	$query1 = "SELECT * FROM students WHERE RollNo='$rollno'";
  	$query2 = "SELECT * FROM parents WHERE RollNo='$rollno'";
  	$query3 = "SELECT * FROM examination WHERE RollNo='$rollno'";
  	$query4 = "SELECT * FROM attendance WHERE RollNo='$rollno'";
  	$query5 = "SELECT * FROM cocurricular WHERE RollNo='$rollno'";
  	$query6 = "SELECT * FROM punishment WHERE RollNo='$rollno'";
  	$query7 = "SELECT * FROM remarks WHERE RollNo='$rollno'";
    $result1 = mysqli_query($connection, $query1);
    $result2 = mysqli_query($connection, $query2);
    $result3 = mysqli_query($connection, $query3);
    $result4 = mysqli_query($connection, $query4);
    $result5 = mysqli_query($connection, $query5);
    $result6 = mysqli_query($connection, $query6);
    $result7 = mysqli_query($connection, $query7);
    if (mysqli_num_rows($result1) > 0)
    {
    	while ($row = mysqli_fetch_assoc($result1))
    	{
    		$rollNumber = $row['RollNo'];
    		$studentName = $row['StudentName'];
    		$registerationNumber = $row['RegistationNo'];
    		$session = $row['Session'];
    		$technology = $row['Technology'];
    		$class = $row['Class'];
    		$shift = $row['Shift'];
    		$bloodGroup = $row['BloodGroup'];
    		$studentEmail = $row['StudentEmail'];
    		$cellNumber = $row['StudentCell'];
    		$permanentAddress = $row['PermanentAddress'];
    		$permanentNumber = $row['PermanentCell'];
    		$postalAddress = $row['PostalAddress'];
    		$postalNumber = $row['PostalCell'];
    		$residentalAddress = $row['ResidentalAddress'];
    		$residentalNumber = $row['ResidentalCell'];
    	}
    }
    if (mysqli_num_rows($result2) > 0)
    {
    	while ($row = mysqli_fetch_assoc($result2))
    	{
    		$fatherName = $row['FatherName'];
    		$fatherNumber = $row['FatherCell'];
    		$fatherOccupation = $row['FatherOccupation'];
    		$officeAddressOne = $row['FatherOffice1'];
    		$officeNumberOne = $row['FatherOfficeCell1'];
    		$officeAddressTwo = $row['FatherOffice2'];
    		$officeNumberTwo = $row['FatherOfficeCell2'];
    	}
    }
    if (mysqli_num_rows($result3) > 0)
    {
    	while ($row = mysqli_fetch_assoc($result3))
    	{
    		$meritMarks = $row['MeritMarks'];
    		$FYMOne = $row['1YM1'];
    		$FYFOne = $row['1YF1'];
    		$FYMTwo = $row['1YM2'];
    		$FYFTwo = $row['1YF2'];
    		$SYMOne = $row['2YM1'];
    		$SYFOne = $row['2YF1'];
    		$SYMTwo = $row['2YM2'];
    		$SYFTwo = $row['2YF2'];
    		$TYMOne = $row['3YM1'];
    		$TYFOne = $row['3YF1'];
    		$TYMTwo = $row['3YM2'];
    		$TYFTwo = $row['3YF2'];
    	}
    }
    if (mysqli_num_rows($result4) > 0)
    {
    	while ($row = mysqli_fetch_assoc($result4))
    	{
    		$OSep = $row['1Sep'];
    		$OOct = $row['1Oct'];
    		$ONov = $row['1Nov'];
    		$ODec = $row['1Dec'];
    		$OJan = $row['1Jan'];
    		$OFeb = $row['1Feb'];
    		$OMar = $row['1Mar'];
    		$OApr = $row['1Apr'];
    		$OMay = $row['1May'];
    		$SSep = $row['2Sep'];
    		$SOct = $row['2Oct'];
    		$SNov = $row['2Nov'];
    		$SDec = $row['2Dec'];
    		$SJan = $row['2Jan'];
    		$SFeb = $row['2Feb'];
    		$SMar = $row['2Mar'];
    		$SApr = $row['2Apr'];
    		$TMay = $row['2May'];
    		$TSep = $row['3Sep'];
    		$TOct = $row['3Oct'];
    		$TNov = $row['3Nov'];
    		$TDec = $row['3Dec'];
    		$TJan = $row['3Jan'];
    		$TFeb = $row['3Feb'];
    		$TMar = $row['3Mar'];
    		$TApr = $row['3Apr'];
    		$TMay = $row['3May'];
    		$leaveAvailed = $row['LeaveAvailed'];
    	}
    }
    if (mysqli_num_rows($result5) > 0)
    {
    	while ($row = mysqli_fetch_assoc($result5))
    	{
    		$sportOne = $row['Sports1'];
    		$prizeOne = $row['1Prize'];
    		$sportTwo = $row['Sports2'];
    		$prizeTwo = $row['2Prize'];
    		$other = $row['Others'];
    		$prizeOther = $row['OtherPrize'];
    		$meetingOne = $row['1Meeting'];
    		$meetingTwo = $row['2Meeting'];
    		$meetingThree = $row['3Meeting'];
    		$meetingFour = $row['4Meeting'];
    	}
    }
    if (mysqli_num_rows($result6) > 0)
    {
    	while ($row = mysqli_fetch_assoc($result6))
    	{
    		$struckFirst = $row['1SO'];
    		$struckSecond = $row['2SO'];
    		$struckThirld = $row['3SO'];
    		$expel = $row['Counseling'];
    	}
    }
    if (mysqli_num_rows($result7) > 0)
    {
    	while ($row = mysqli_fetch_assoc($result7))
    	{
    		$remarksFirst = $row['1YR'];
    		$remarksSecond = $row['2YR'];
    		$remarksThirld = $row['3YR'];
    		$distinction = $row['Distinction'];
    		$tutor = $row['Tutor'];
    	}
    }
    if (isset($_POST['update'])) 
    {
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

	    $queryupdate1 = "UPDATE students SET
	    StudentName = '$studentName',
	    RegistationNo = '$registerationNumber',
	    Session = '$session',
	    Technology = '$technology',
	    Class = '$class',
	    Shift = '$shift',
	    BloodGroup = '$bloodGroup',
	    StudentEmail = '$studentEmail',
	    StudentCell = '$cellNumber',
	    PermanentAddress = '$permanentAddress',
	    PermanentCell = '$permanentNumber',
	    PostalAddress = '$postalAddress',
	    PostalCell = '$postalNumber',
	    ResidentalAddress = '$residentalAddress',
	    ResidentalCell = '$residentalNumber'
	    WHERE RollNo = '$rollNumber'
	  	";
	    $queryupdate2 = "UPDATE parents SET
	    FatherName = '$fatherName',
	    FatherCell = '$fatherNumber',
	    FatherOccupation = '$fatherOccupation',
	    FatherOffice1 = '$officeAddressOne',
	    FatherOfficeCell1 = '$officeNumberOne',
	    FatherOffice2 = '$officeAddressTwo',
	    FatherOfficeCell2 = '$officeNumberTwo'
	    WHERE RollNo = '$rollNumber'
	  	";
	    $queryupdate3 = "UPDATE examination SET
	    MeritMarks = '$meritMarks',
	    1YM1 = '$FYMOne',
	    1YF1 = '$FYFOne',
	    1YM2 = '$FYMTwo',
	    1YF2 = '$FYFTwo',
	    2YM1 = '$SYMOne',
	    2YF1 = '$SYFOne',
	    2YM2 = '$SYMTwo',
	    2YF2 = '$SYFTwo',
	    3YM1 = '$TYMOne',
	    3YF1 = '$TYFOne',
	    3YM2 = '$TYMTwo',
	    3YF2 = '$TYFTwo'
	    WHERE RollNo = '$rollNumber'
	  	";
	    $queryupdate4 = "UPDATE attendance SET
	    1Sep = '$OSep',
	    1Oct = '$OOct',
	    1Nov = '$ONov',
	    1Dec = '$ODec',
	    1Jan = '$OJan',
	    1Feb = '$OFeb',
	    1Mar = '$OMar',
	    1Apr = '$OApr',
	    1May = '$OMay',
	    2Sep = '$SSep',
	    2Oct = '$SOct',
	    2Nov = '$SNov',
	    2Dec = '$SDec',
	    2Jan = '$SJan',
	    2Feb = '$SFeb',
	    2Mar = '$SMar',
	    2Apr = '$SApr',
	    2May = '$SMay',
	    3Sep = '$TSep',
	    3Oct = '$TOct',
	    3Nov = '$TNov',
	    3Dec = '$TDec',
	    3Jan = '$TJan',
	    3Feb = '$TFeb',
	    3Mar = '$TMar',
	    3Apr = '$TApr',
	    3May = '$TMay',
	    LeaveAvailed = '$leaveAvailed'
	    WHERE RollNo = '$rollNumber'
	  	";
	    $queryupdate5 = "UPDATE cocurricular SET
	    Sports1 = '$sportOne',
	    1Prize = '$prizeOne',
	    Sports2 = '$sportTwo',
	    2Prize = '$prizeTwo',
	    Others = '$other',
	    OtherPrize = '$prizeOther',
	    1Meeting = '$meetingOne',
	    2Meeting = '$meetingTwo',
	    3Meeting = '$meetingThree',
	    4Meeting = '$meetingFour'
	    WHERE RollNo = '$rollNumber'
	  	";
	    $queryupdate6 = "UPDATE punishment SET
	    1SO = '$struckFirst',
	    2SO = '$struckSecond',
	    3SO = '$struckThirld',
	    Counseling = '$expel'
	    WHERE RollNo = '$rollNumber'
	  	";
	    $queryupdate7 = "UPDATE remarks SET
	    1YR = '$remarksFirst',
	    2YR = '$remarksSecond',
	    3YR = '$remarksThirld',
	    Distinction = '$distinction',
	    Tutor = '$tutor'
	    WHERE RollNo = '$rollNumber'
	  	";
	    $resultupdate1 = mysqli_query($connection, $queryupdate1);
	    $resultupdate2 = mysqli_query($connection, $queryupdate2);
	    $resultupdate3 = mysqli_query($connection, $queryupdate3);
	    $resultupdate4 = mysqli_query($connection, $queryupdate4);
	    $resultupdate5 = mysqli_query($connection, $queryupdate5);
	    $resultupdate6 = mysqli_query($connection, $queryupdate6);
	    $resultupdate7 = mysqli_query($connection, $queryupdate7);
	    if (!$resultupdate1)
		  {
	        echo "Error: " .$queryupedate1 . "<br>" . mysqli_error($connection);
	      }
	      if (!$resultupdate2) {
	        echo "Error: " .$queryupedate2 . "<br>" . mysqli_error($connection);
	      }
	      if (!$resultupdate3) {
	        echo "Error: " .$queryupedate3 . "<br>" . mysqli_error($connection);
	      }
	      if (!$resultupdate4) {
	        echo "Error: " .$queryupedate4 . "<br>" . mysqli_error($connection);
	      }
	      if (!$resultupdate5) {
	        echo "Error: " .$queryupedate5 . "<br>" . mysqli_error($connection);
	      }
	      if (!$resultupdate6) {
	        echo "Error: " .$queryupedate6 . "<br>" . mysqli_error($connection);
	      }
	      if (!$resultupdate7) {
	        echo "Error: " .$queryupedate7 . "<br>" . mysqli_error($connection);
	      }
	      if ($resultupdate1 && $resultupdate2 && $resultupdate3 && $resultupdate4 && $resultupdate5 && $resultupdate6 && $resultupdate7) {
	        header("Location: view.php?alert=updatesuccess");
	      }
    }
  mysqli_close($connection);
}
else
    {
    	header("Location: view.php");
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
                  $("#naviView").addClass("selected");
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
            Edit Data
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
              <form class="tab-content form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?rollno=<?php echo "$rollNumber"; ?>" method="post">
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
                        <input value="<?php echo $rollNumber ?>" type="number" class="form-control" tabindex="1" name="rollNumber" disabled required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Student Name:*
                      </label>
                      <div class="col-sm-9">
                        <input value="<?php echo $studentName ?>" type="text" class="form-control" tabindex="2" name="studentName" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Registeration Number:*
                      </label>
                      <div class="col-sm-9">
                        <input value="<?php echo $registerationNumber ?>" type="text" class="form-control" tabindex="3" name="registerationNumber" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Session:*
                      </label>
                      <div class="col-sm-9">
                        <input value="<?php echo $session ?>" type="text" class="form-control" tabindex="4" name="session"required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Technology:*
                      </label>
                      <div class="col-sm-9">
                        <select class="form-control" tabindex="5" name="technology" required>
                          <option value="CIT" <?php if ($technology == 'CIT'): ?>
                          	selected
                          <?php endif ?>>
                            Computer Information Technology
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
                          <option value="FCIT" <?php if ($class == 'FCIT'): ?>
                          	selected
                          <?php endif ?>>
                            FCIT
                          </option>
                          <option value="SCIT" <?php if ($class == 'SCIT'): ?>
                          	selected
                          <?php endif ?>>
                            SCIT
                          </option>
                          <option value="DCIT" <?php if ($class == 'DCIT'): ?>
                          	selected
                          <?php endif ?>>
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
                          <option value="R1" <?php if ($shift == 'R1'): ?>
                          	selected
                          <?php endif ?>>
                            R1
                          </option>
                          <option value="R2" <?php if ($shift == 'R2'): ?>
                          	selected
                          <?php endif ?>>
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
                          <option value="O-" <?php if ($bloodGroup == 'O-'): ?>
                          	selected
                          <?php endif ?>>
                            O-
                          </option>
                          <option value="O+" <?php if ($bloodGroup == 'O+'): ?>
                          	selected
                          <?php endif ?>>
                            O+
                          </option>
                          <option value="A-" <?php if ($bloodGroup == 'A-'): ?>
                          	selected
                          <?php endif ?>>
                            A-
                          </option>
                          <option value="A+" <?php if ($bloodGroup == 'A+'): ?>
                          	selected
                          <?php endif ?>>
                            A+
                          </option>
                          <option value="B-" <?php if ($bloodGroup == 'B-'): ?>
                          	selected
                          <?php endif ?>>
                            B-
                          </option>
                          <option value="B+" <?php if ($bloodGroup == 'B+'): ?>
                          	selected
                          <?php endif ?>>
                            B+
                          </option>
                          <option value="AB-" <?php if ($bloodGroup == 'AB-'): ?>
                          	selected
                          <?php endif ?>>
                            AB-
                          </option>
                          <option value="AB+" <?php if ($bloodGroup == 'AB+'): ?>
                          	selected
                          <?php endif ?>>
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
                        <input value="<?php echo "$studentEmail"; ?>" type="email" class="form-control" tabindex="9" name="studentEmail" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Student Cell Number:
                      </label>
                      <div class="col-sm-9">
                        <input value="<?php echo "$cellNumber"; ?>" type="number" class="form-control" tabindex="10" name="cellNumber" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Student Permanent Address:
                      </label>
                      <div class="col-sm-9">
                        <textarea class="form-control" tabindex="11" name="permanentAddress" rows="4"><?php echo "$permanentAddress"; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Permanent Cell Number:
                      </label>
                      <div class="col-sm-9">
                        <input value="<?php echo "$permanentNumber"; ?>" type="number" class="form-control" tabindex="12" name="permanentNumber" />
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Student Postal Address:
                      </label>
                      <div class="col-sm-9">
                        <textarea class="form-control" tabindex="13" name="postalAddress" rows="4"><?php echo "$postalAddress"; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Postal Cell Number:
                      </label>
                      <div class="col-sm-9">
                        <input value="<?php echo "$postalNumber"; ?>" type="number" class="form-control" tabindex="14" name="postalNumber" />
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Student Residental Address:*
                      </label>
                      <div class="col-sm-9">
                        <textarea class="form-control" tabindex="15" name="residentalAddress" rows="4" required><?php echo "$residentalAddress"; ?> </textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Residental Cell Number:
                      </label>
                      <div class="col-sm-9">
                        <input value="<?php echo "$residentalNumber"; ?>" type="number" class="form-control" tabindex="16" name="residentalNumber" />
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
                        <input value="<?php echo "$fatherName"; ?>" type="text" class="form-control" tabindex="17" name="fatherName" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Father Cell Number:*
                      </label>
                      <div class="col-sm-9">
                        <input value="<?php echo "$fatherNumber"; ?>" type="number" class="form-control" tabindex="18" name="fatherNumber" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Father Occupation:
                      </label>
                      <div class="col-sm-9">
                        <input value="<?php echo "$fatherOccupation"; ?>" type="text" class="form-control" tabindex="19" name="fatherOccupation" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Father Office Address 1:
                      </label>
                      <div class="col-sm-9">
                        <textarea class="form-control" tabindex="20" name="officeAddressOne" rows="4"><?php echo "$officeAddressOne"; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Office Cell Number 1:
                      </label>
                      <div class="col-sm-9">
                        <input value="<?php echo "$officeNumberOne"; ?>" type="number" class="form-control" tabindex="21" name="officeNumberOne" />
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Father Office Address 2:
                      </label>
                      <div class="col-sm-9">
                        <textarea class="form-control" tabindex="22" name="officeAddressTwo" rows="4"><?php echo "$officeAddressTwo"; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">
                        Office Cell Number 2:
                      </label>
                      <div class="col-sm-9">
                        <input value="<?php echo "$officeNumberTwo"; ?>" type="number" class="form-control" tabindex="23" name="officeNumberTwo" />
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
                          <input value="<?php echo "$meritMarks"; ?>" type="number" class="form-control" tabindex="24" name="meritMarks" />
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
                          <input value="<?php echo "$FYMOne"; ?>" type="number" class="form-control" tabindex="25" name="FYMOne" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Failed In Subjects:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$FYFOne"; ?>" type="text" class="form-control" tabindex="26" name="FYFOne" />
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
                          <input value="<?php echo "$FYMTwo"; ?>" type="number" class="form-control" tabindex="27" name="FYMTwo" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Failed In Subjects:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$FYFTwo"; ?>" type="text" class="form-control" tabindex="28" name="FYFTwo" />
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
                          <input value="<?php echo "$SYMOne"; ?>" type="number" class="form-control" tabindex="29" name="SYMOne" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Failed In Subjects:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$SYFOne"; ?>" type="text" class="form-control" tabindex="30" name="SYFOne" />
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
                          <input value="<?php echo "$SYMTwo"; ?>" type="number" class="form-control" tabindex="31" name="SYMTwo" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Failed In Subjects:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$SYFTwo"; ?>" type="text" class="form-control" tabindex="32" name="SYFTwo" />
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
                          <input value="<?php echo "$TYMOne"; ?>" type="number" class="form-control" tabindex="33" name="TYMOne" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Failed In Subjects:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$TYFOne"; ?>" type="text" class="form-control" tabindex="34" name="TYFOne" />
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
                          <input value="<?php echo "$TYMTwo"; ?>" type="number" class="form-control" tabindex="35" name="TYMTwo" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Failed In Subjects:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$TYFTwo"; ?>" type="text" class="form-control" tabindex="36" name="TYFTwo" />
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
                          <input value="<?php echo "$OSep"; ?>" type="number" class="form-control" tabindex="37" name="OSep" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          October:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$OOct"; ?>" type="number" class="form-control" tabindex="38" name="OOct" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          November:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$ONov"; ?>" type="number" class="form-control" tabindex="39" name="ONov" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          December:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$ODec"; ?>" type="number" class="form-control" tabindex="40" name="ODec" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          January:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$OJan"; ?>" type="number" class="form-control" tabindex="41" name="OJan" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          February:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$OFeb"; ?>" type="number" class="form-control" tabindex="42" name="OFeb" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          March:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$OMar"; ?>" type="number" class="form-control" tabindex="43" name="OMar" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          April:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$OApr"; ?>" type="number" class="form-control" tabindex="44" name="OApr" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          May:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$OMay"; ?>" type="number" class="form-control" tabindex="45" name="OMay" />
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
                          <input value="<?php echo "$SSep"; ?>" type="number" class="form-control" tabindex="46" name="SSep" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          October:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$SOct"; ?>" type="number" class="form-control" tabindex="47" name="SOct" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          November:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$SNov"; ?>" type="number" class="form-control" tabindex="48" name="SNov" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          December:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$SDec"; ?>" type="number" class="form-control" tabindex="49" name="SDec" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          January:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$SJan"; ?>" type="number" class="form-control" tabindex="50" name="SJan" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          February:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$SFeb"; ?>" type="number" class="form-control" tabindex="51" name="SFeb" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          March:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$SMar"; ?>" type="number" class="form-control" tabindex="52" name="SMar" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          April:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$SApr"; ?>" type="number" class="form-control" tabindex="53" name="SApr" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          May:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$SMay"; ?>" type="number" class="form-control" tabindex="54" name="SMay" />
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
                          <input value="<?php echo "$TSep"; ?>" type="number" class="form-control" tabindex="55" name="TSep" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          October:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$TOct"; ?>" type="number" class="form-control" tabindex="56" name="TOct" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          November:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$TNov"; ?>" type="number" class="form-control" tabindex="57" name="TNov" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          December:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$TDec"; ?>" type="number" class="form-control" tabindex="58" name="TDec" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          January:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$TJan"; ?>" type="number" class="form-control" tabindex="59" name="TJan" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          February:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$TFeb"; ?>" type="number" class="form-control" tabindex="60" name="TFeb" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          March:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$TMar"; ?>" type="number" class="form-control" tabindex="61" name="TMar" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          April:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$TApr"; ?>" type="number" class="form-control" tabindex="62" name="TApr" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          May:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$TMay"; ?>" type="number" class="form-control" tabindex="63" name="TMay" />
                        </div>
                      </div>
                      <h5>
                        <strong>Details of Leaves Availed</strong>
                      </h5>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <textarea class="form-control" tabindex="64" name="leaveAvailed" rows="4"><?php echo "$leaveAvailed"; ?></textarea>
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
                          <input value="<?php echo "$sportOne"; ?>" type="text" class="form-control" tabindex="65" name="sportOne" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Prize 1:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$prizeOne"; ?>" type="text" class="form-control" tabindex="66" name="prizeOne" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Sports 2:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$sportTwo"; ?>" type="text" class="form-control" tabindex="67" name="sportTwo" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Prize 2:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$prizeTwo"; ?>" type="text" class="form-control" tabindex="68" name="prizeTwo" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Other:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$other"; ?>" type="text" class="form-control" tabindex="69" name="other" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Prize Other:
                        </label>
                        <div class="col-sm-9">
                          <input value="<?php echo "$prizeOther"; ?>" type="text" class="form-control" tabindex="70" name="prizeOther" />
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
                          <textarea class="form-control" tabindex="71" name="meetingOne" rows="4"><?php echo "$meetingOne"; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Meeting 2:
                        </label>
                        <div class="col-sm-9">
                          <textarea class="form-control" tabindex="72" name="meetingTwo" rows="4"><?php echo "$meetingTwo"; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Meeting 3:
                        </label>
                        <div class="col-sm-9">
                          <textarea class="form-control" tabindex="73" name="meetingThree" rows="4"><?php echo "$meetingThree"; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Meeting 4:
                        </label>
                        <div class="col-sm-9">
                          <textarea class="form-control" tabindex="74" name="meetingFour" rows="4"><?php echo "$meetingFour"; ?></textarea>
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
                          <textarea class="form-control" tabindex="75" name="struckFirst" rows="4"><?php echo "$struckFirst"; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Second Year:
                        </label>
                        <div class="col-sm-9">
                          <textarea class="form-control" tabindex="76" name="struckSecond" rows="4"><?php echo "$struckSecond"; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Thirld Year:
                        </label>
                        <div class="col-sm-9">
                          <textarea class="form-control" tabindex="77" name="struckThirld" rows="4"><?php echo "$struckThirld"; ?></textarea>
                        </div>
                      </div>
                      <h5>
                        <strong>Counseling / Fine / Suspension / Expulsion etc</strong>
                      </h5>
                      <div class="col-sm-12">
                        <textarea class="form-control" tabindex="78" name="expel" rows="4" style="margin-bottom: 10px"><?php echo "$expel"; ?></textarea>
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
                          <textarea class="form-control" tabindex="79" name="remarksFirst" rows="4"><?php echo "$remarksFirst"; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Second Year:
                        </label>
                        <div class="col-sm-9">
                          <textarea class="form-control" tabindex="80" name="remarksSecond" rows="4"><?php echo "$remarksSecond"; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">
                          Thirld Year:
                        </label>
                        <div class="col-sm-9">
                          <textarea class="form-control" tabindex="81" name="remarksThirld" rows="4"><?php echo "$remarksThirld"; ?></textarea>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>
                        Any Distinction / Special Achievement
                      </legend>
                      <div class="col-sm-12">
                        <textarea class="form-control" tabindex="82" name="distinction" rows="4" style="margin-bottom: 10px"><?php echo "$distinction"; ?></textarea>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>
                        Tutor Name And Designation
                      </legend>
                      <div class="col-sm-12">
                        <textarea class="form-control" tabindex="82" name="tutor" rows="4" style="margin-bottom: 10px"><?php echo "$tutor"; ?></textarea>
                      </div>
                    </fieldset>
                    <!--
                    <button type="button" class="pull-right btn btn-info" style="margin-bottom: 10px" id="FinancialToggleBottom">
                      Next
                    </button>
                    -->
                    <button type="submit" class="pull-right btn btn-success" style="" name="update">
                      Update
                    </button>
                    <a href="view.php" class="pull-right btn btn-danger" style="margin-right: 20px">
                      Cancel
                    </a>
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
    <?php include("includes/footer.php"); ?><?php include("includes/footer.php"); ?>
  </body>
</html>