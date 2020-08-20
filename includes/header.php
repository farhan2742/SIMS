<header>
      <div id="header" class="container">
        <div class="navbar navbar-fixed-top navbar-default">
          <div class="navbar-header">
            <a href="dashboard.php">
              <h1 class="navbar-brand largeText">
                <img src="images/logo.png" id="logo" class="logoImage" />
                <div class="logoText">
                  SIMS
                </div>
              </h1>
            </a>
            <button type="button" class="navbar-toggle navbar-left" data-toggle="offcanvas" data-target=".sidebar-nav">
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
          <div class="collapse navbar-collapse">
            <nav>
              <form class="navbar-form navbar-right navbarMarginRight" method="post"
              action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="logoutForm">
                <div class="form-group">
                  <label id="welcomeMessage"  style="color: black">
                    Welcome <?php echo $_SESSION['logedInUser']; ?>
                  </label>
                  <button class="btn btn-success" type="submit" name="logoutButton" id="logoutButton">
                    Log out
                  </button>
                </div>
              </form>
            </nav>
          </div>
        </div>
      </div>
    </header>