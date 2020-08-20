          <div class="col-xs-12 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <ul class="nav nav-sidebar list-group">
              <li>
                <nav>
                  <form class="navbar-form navbar-right navbarMarginRight visible-xs-* hidden-sm hidden-md hidden-lg"
                  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="logoutForm">
                    <div class="form-group">
                      <label id="welcomeMessage">
                        Welcome <?php echo $_SESSION['logedInUser']; ?> 
                      </label>
                      <button class="btn btn-success" type="submit" name="logoutButton" id="logoutButton">
                        Log out
                      </button>
                    </div>
                  </form>
                </nav>
              </li>
              <li style="" id="userThumbnail">
                <div class="thumbnail">
                  <span class="glyphicon glyphicon-user" id="userimage"></span>
                </div>
              </li>
              <li>
                <h2 id="time" class="navbarMarginLeftClock">
                  <time id="clock">&nbsp;</time>
                </h2>
              </li>
              <li class="list-group-item">
                <a href="dashboard.php" id="naviDashboard">
                  DashBoard
                </a>
              </li>
              <li class="list-group-item" id="naviView">
                <a href="view.php">
                  View All
                </a>
              </li>
              <li class="list-group-item" id="naviSearch">
                <a href="search.php">
                  Search Data
                </a>
              </li>
              <li class="list-group-item" id="naviEnter">
                <a href="enter.php">
                  Enter Data
                </a>
              </li>
            </ul>
        </div>