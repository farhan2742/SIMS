<?php
  $formUserName = "";
  $formPassword = "";
  $formPassword = "";
  $user = "";
  $loginError = "";
  $queryLogin = "";
  $resultQuery = "";
  $loginFormData = "";
  $authorization = "";
  $hashedPass = "";
  $title = 'SIMS';
  $result = '';
  $error = '';
  include("includes/functions.php");
  if (isset($_POST["submitContactUs"]))
  {
    if (!$_POST["nameContactUs"])
    {
      $error .= '<br/> Please enter a name in the "Name" field';
    }
    if (!$_POST["emailContactUs"])
    {
      $error .= '<br/> Please enter a eMail in the "eMail" field';
    }
    if (!$_POST["messageContactUs"])
    {
      $error .= '<br/> Please enter a message in the "Message" field';
    }
    if ($_POST["emailContactUs"] AND !filter_var($_POST["emailContactUs"], FILTER_VALIDATE_EMAIL))
    {
      $error .= '<br/> Please enter a valid eMail in the "eMail" field';
    }
    if ($error != '')
    {
      $result = '<div class="alert alert-danger marginTop"><h2>Sorry but the eMail was not sent because of following errors <br/></h2>'. $error.'<a class="close" data-dismiss="alert">&times;</a></div>';
    }
    else
    {
      if(mail
      (
        'sims_gct@outlook.com',
        'A eMail from SIMS',
        'Name: ' . $_POST["nameContactUs"] . '
        Email ' . $_POST["messageContactUs"] . '
        Subject: A eMail from SIMS' . '
        Message: ' . $_POST["messageContactUs"],
        'From: farhan2742@gmail.com'
      ))
      {
        $result = '<div class="alert alert-success marginTop"><h2>Thanks your eMail has been sent successfully.</h2>
        <a class="close" data-dismiss="alert">&times;</a></div>';
      }
      else
      {
        $result = '<div class="alert alert-danger marginTop"><h2>Sorry your eMail could not be sent successfully. Please try again latter.</h2>
        <a class="close" data-dismiss="alert">&times;</a></div>';
      }
    }
  };
  if (isset($_POST['loginButton']))
  {
    $formUserName = validateFormData($_POST['username']);
    $formPassword = validateFormData($_POST['password']);
    include("includes/connection.php");
    $queryLogin = "SELECT username, password, authorization FROM useraccounts WHERE username = '$formUserName'";
    $resultQuery = mysqli_query($connection, $queryLogin);
    if (mysqli_num_rows($resultQuery) > 0)
    {
      while ($row = mysqli_fetch_assoc($resultQuery))
      {
        $user = $row['username'];
        $hashedPass = $row['password'];
        $authorization = $row['authorization'];
      }
      if (password_verify($formPassword, $hashedPass))
      {
        session_start();
        $_SESSION['logedInUser'] = $user;
        $_SESSION['logedInAuthorization'] = $authorization;
        header("Location: dashboard.php");
      }
      else
      {
        $loginError = '<div class = "alert alert-danger"><h4>Wrong User Name or Password! Please Varify and try again.</h4>
        <a class="close" data-dismiss="alert">&times;</a></div>';
      }
    }
    else
    {
      $loginError = '<div class = "alert alert-danger"><h4>No Such USER in the Data-Base! Please Varify and try again.</h4>
      <a class="close" data-dismiss="alert">&times;</a></div>';
    }
    mysqli_close($connection);
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
                  
                });
            //]]>
    </script>
  </head>
  <body data-spy="scroll" data-target=".navbar-collapse">
    <header>
      <div id="header" class="container">
        <div class="navbar navbar-default navbar-fixed-top">
          <div class="navbar-header">
            <a href="dashboard.php">
              <h1 class="navbar-brand largeText">
                <img src="images/logo.png" id="logo" class="logoImage" />
                <div class="logoText">
                  SIMS
                </div>
              </h1>
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">
                Toggle Buttons
              </span>
              <span class="icon-bar">
              </span>
              <span class="icon-bar">
              </span>
              <span class="icon-bar">
              </span>
            </button>
          </div>
          <div class="collapse navbar-collapse navbarMarginLeft">
            <nav>
              <ul class="nav navbar-nav" id="navbarList">
                <li class="active">
                  <a href="#login">
                    Login
                  </a>
                </li>
                <li>
                  <a href="#howToUse">
                    How to Use
                  </a>
                </li>
                <li>
                  <a href="#features">
                    Features
                  </a>
                </li>
                <li>
                  <a href="#developers">
                    Developers
                  </a>
                </li>
                <li>
                  <a href="#contactUs">
                    Contact US
                  </a>
                </li>
              </ul>
            </nav>
            <h2 id="time" class="navbar-right navbarMarginRight">
              <time id="clock">&nbsp;</time>
            </h2>
          </div>
        </div>
      </div>
    </header>
    <section id="login">
      <div class="container contentSection cloudyText marginTopIndex">
        <div class="row">
          <div class="col-md-6 center col-md-offset-3" id="topRow">
            <h1 class="marginTop">
              Login
            </h1>
            <?php echo $loginError; ?>
            <P class="lead">
              Fill the FORM below and press Login to begin
            </P>
            <form class="marginTop form-horizontal" name="login"  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
              <div class="input-group">
                <span class="input-group-addon glyphiconForm">
                  <span class="glyphicon glyphicon-user"></span>
                </span>
                <label for="usernameInput" class="sr-only">
                  User Name:
                </label>
                <input class="form-control loginFormInput" type="text" placeholder="Please enter your username here"
                id="usernameInput" name="username" tabindex="1" required
                value="<?php if (isset($_POST["username"])) {echo $_POST["username"];} ?>"/>
              </div>
              <div class="input-group marginTopForm">
                <span class="input-group-addon glyphiconForm">
                  <span class="glyphicon glyphicon-asterisk"></span>
                </span>
                <label for="passwordInput" class="sr-only">
                  Password:
                </label>
                <input class="form-control loginFormInput" type="password" placeholder="Please enter your Password here" id="passwordInput" 
                name="password" tabindex="2" required />
              </div>
              <div class="input-group marginTopForm col-md-12">
                <button type="submit" class="btn btn-success pull-right" name="loginButton">
                  Login
                </button>
                <button type="reset" class="btn btn-danger pull-right" name="loginreset" id="formReset">
                  Reset
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="marginTop container">
      <div class="row" id="howToUse">
        <div class="col-md-6 center col-md-offset-3 marginTop">
          <h1 class="marginTop">
            How to use SIMS
          </h1>
          <P class="lead marginTop">
            Below is a video which shows you the basic of using SIMS.
          </P>
        </div>
        <div class="col-md-8 center col-md-offset-2 marginTop">
          <div class="embed-responsive embed-responsive-16by9">
              <video class="embed-responsive-item" src="videos/#">
                
              </video>
            </div>
        </div>
      </div>
    </section>
    <section class="marginTop container">
      <div class="contentSection" id="features">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 marginTop">
            <h1 class="center marginTop">
              Why is SIMS better then traditional working.
            </h1>
            <p class="center lead marginTop">
              SIMS has so many advantages then traditional working that if we started telling you about each then it
              would be total waste of your precious time. So we have explained three most significant features of SIMS
              that make it better then traditional working.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 marginTopForm">
            <div class="thumbnail">
                  <span class="glyphicon glyphicon-globe thumbnailFavicon"></span>
              </div>
            <h2>
              Online Based
            </h2>
            <p>
              
            </p>
            <form action="#login">
              <button class="btn btn-success" type="submit">
                Login
              </button>
            </form>
          </div>
          <div class="col-sm-4 marginTopForm">
            <div class="thumbnail">
                  <span class="glyphicon glyphicon-phone thumbnailFavicon"></span>
              </div>
            <h2>
              Mobile Friendly
            </h2>
            <p>
              
            </p>
            <form action="#login">
              <button class="btn btn-success" type="submit">
                Login
              </button>
            </form>
          </div>
          <div class="col-sm-4 marginTopForm">
            <div class="thumbnail">
                  <span class="glyphicon glyphicon-search thumbnailFavicon"></span>
              </div>
            <h2>
              Easily Searchable
            </h2>
            <p>
              
            </p>
            <form action="#login">
              <button class="btn btn-success" type="submit">
                Login
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="marginTop container">
      <div class="contentSection" id="developers">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 marginTop">
            <h1 class="center marginTop">
              The people that made SIMS
            </h1>
            <p class="center lead marginTop">
              Below is the team that made SIMS. Their roles in the development of SIMS as well as details about their character is
              given below
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 marginTop">
            <div class="thumbnail">
                  <img src="images/farhan1.jpg" alt="Image of Farhan Kiyani"/>
              </div>
            <h2>
              Farhn Kiyani
            </h2>
            <h3>
              Team Lead/Main Developer
            </h3>
            <p>
              
            </p>
            <form action="#contactUs">
              <button type="submit" class="btn btn-success">
                Contact Us
              </button>
            </form>
          </div>
          <div class="col-sm-6 marginTop">
            <div class="thumbnail">
                  <img src="images/kashif.jpg" alt="Image of Kashif Naseer"/>
              </div>
            <h2>
              Kashif Naseer
            </h2>
            <h3>
              Assistant Developer
            </h3>
            <p>
              
            </p>
            <form action="#contactUs">
              <button type="submit" class="btn btn-success">
                Contact Us
              </button>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 marginTop">
            <div class="thumbnail">
                  <img src="images/usama.jpg" alt="Image of Usama Tahir"/>
              </div>
            <h2>
              Usama Tahir
            </h2>
            <h3>
              Data Entry
            </h3>
            <p>
              
            </p>
            <form action="#contactUs">
              <button type="submit" class="btn btn-success">
                Contact Us
              </button>
            </form>
          </div>
          <div class="col-sm-4 marginTop">
            <div class="thumbnail">
                  <img src="images/adnan.jpg" alt="Image of Adnan Warris"/>
              </div>
            <h2>
              Adnan Warris
            </h2>
            <h3>
              Data Entry
            </h3>
            <p>
              
            </p>
            <form action="#contactUs">
              <button type="submit" class="btn btn-success">
                Contact Us
              </button>
            </form>
          </div>
          <div class="col-sm-4 marginTop">
            <div class="thumbnail">
                  <img src="images/shabir.jpg" alt="Image of Shabir Ali"/>
              </div>
            <h2>
              Shabir Ali
            </h2>
            <h3>
              Data Entry
            </h3>
            <p>
              
            </p>
            <form action="#contactUs">
              <button type="submit" class="btn btn-success">
                Contact Us
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="marginTop container">
      <div class="row" id="contactUs">
        <div class="marginTop">
        </div>
        <div class="col-md-6 col-md-offset-3 marginTop">
          <h1 class="center">
            Contact US
          </h1>
          <?php echo $result; ?>
          <p class="center lead marginTop">
            If you have any issues/suggestions about SIMS or you want to contact the development team behind SIMS all you need to do is
            fill the form below and press send button.
          </p>
        </div>
      </div>
      <div class="contentSection" >
        <form id="contact" method="post" class="marginTop form-horizontal" name="contact"
        action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="input-group marginTopForm">
              <span class="input-group-addon glyphiconForm">
                <span class="glyphicon glyphicon-user"></span>
              </span>
              <label for="nameContactUs" class="sr-only">
                Name:
              </label>
              <input placeholder="Please Enter Your Name In This Field." id="nameContactUs" name="nameContactUs" type="text"
              class="form-control loginFormInput" tabindex="3" required
              value="<?php if (isset($_POST["nameContactUs"])){echo $_POST["nameContactUs"];} ?>" />
            </div>
            <div class="input-group marginTopForm">
              <span class="input-group-addon glyphiconForm">
                <span class="glyphicon glyphicon-envelope"></span>
              </span>
              <label for="emailContactUs" class="sr-only">
                Email
              </label>
              <input placeholder="Please Enter Your Email In This Field." id="emailContactUs" type="email" name="emailContactUs"
              class="form-control loginFormInput" tabindex="4" required
              value="<?php if (isset($_POST["emailContactUs"])) {echo $_POST["emailContactUs"];} ?>"/>
            </div>
            <div class="input-group marginTopForm">
              <span class="input-group-addon glyphiconForm">
                <span class="glyphicon glyphicon-comment"></span>
              </span>
              <label for="messageContactUs" class="sr-only">
                Message
              </label>
              <textarea placeholder="Please Enter Your Message In This Field." name="messageContactUs" id="messageContactUs"
              class="form-control loginFormInput" tabindex="5" required
              value="<?php if (isset($_POST["messageContactUs"])) {echo $_POST["messageContactUs"];} ?>"></textarea>
            </div>
            <div class="input-group marginTopForm col-sm-12">
            <button type="submit" name="submitContactUs" id="submitContactUs" value="submitContactUs" class="btn btn-success pull-right">
              Send
            </button>
            <button type="reset" name="resetContactUs" class="btn btn-danger pull-right" id="contactFormReset">
              Reset
            </button>
          </div>
        </form>
      </div>
    </section>
    <?php include("includes/footer.php"); ?>
  </body>
</html>