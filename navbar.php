

<nav class="navbar navbar-expand-lg" id="navBar">
  <div class="container-fluid">
  <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto mb-auto mb-lg-0">
        <li class="nav-item dropdown">
        <?php $sql = "SELECT * FROM podms_reports WHERE status='1' ORDER BY id DESC";
        $res = mysqli_query($conn, $sql);
        ?>
          <a class="nav-text nav-text nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
            <i class="fa fa-bell"><span class="count"><?php echo mysqli_num_rows($res); ?></span></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-xl-end">
            <h1 class="h1-notif">Notifications</h1>
            <li><hr class="dropdown-divider"></li>
          <?php
          if (mysqli_num_rows($res) > 0) {
            foreach ($res as $item) {
          ?>
              <li><?php echo "From: " . $item["from"]. "<br>" .$item["description"]; ?><li><hr class="dropdown-divider"></li></li>
          <?php }
          }else {

            echo "<li><h6>No new notification</h6></li>";
            
          } ?>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-text nav-text nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
            <?= strtoupper($_SESSION['name']); ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg-end">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="php/logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
