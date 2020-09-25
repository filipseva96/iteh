<header class="header">
    <div class="container">
      <div class="site-header clearfix">
        <div class="col-lg-3 col-md-3 col-sm-12 title-area">
          <div class="site-title" id="title">
            <a href="index.php" title="">
              <h4>E<span>APOTEKA</span></h4>
            </a>
          </div>
        </div>
        <!-- title area -->
        <div class="col-lg-9 col-md-12 col-sm-12">
          <div id="nav" class="right">
            <div class="container clearfix">
              <ul id="jetmenu" class="jetmenu blue">
                <li ><a href="index.php">Početna</a>
                </li>
                <li ><a href="onama.php">O nama</a>
                </li>
                <li><a href="kategorije.php">Vesti</a>
                </li>
                <?php
                    if(!empty($_SESSION['korisnik'])){ 
                      if($_SESSION['korisnik']['korisnickaUloga']=='korisnik'){
                        ?>
                          <li><a href="kupi.php">Kupi lek</a></li>
                      <?php
                    }
                      if($_SESSION['korisnik']['korisnickaUloga']=='admin'){
                          ?>
                            <li><a href="admin.php">Administrator</a></li>
                          <?php
                      }

                      ?>
                        <li><a href="logout.php">Logout</a></li>
                      <?php
                    }else{
                      ?>
                      <li class="active"><a  href="registracijaKorisnika.php">Registracija</a></li>
                      <li><a href="loginKorisnika.php">Login</a></li>
                      <?php
                    }
               ?>
              </ul>
            </div>
          </div>
          <!-- nav -->
        </div>
        <!-- title area -->
      </div>
      <!-- site header -->
    </div>
    <!-- end container -->
  </header>
  <!-- end header -->