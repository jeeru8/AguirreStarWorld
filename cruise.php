<!DOCTYPE html>
<html ng-app="myApp">
<head>
  <title>Cruise | Aguirre Star Worldwide Travel Corporation</title>
  <?php include "includes/header.php" ?>
</head>
<body ng-controller="tourController" ng-init="init()">
  <!-- navbar -->
  <div class="navbar-fixed">  
      <?php include "includes/navbar.php" ?>
  </div>
  <!-- navbar -->

  <!-- parallax -->
  <div class="parallax-container">
    <div class="parallax"><img src="img/banner/13925172.jpg"></div>
  </div>
  <!-- parallax -->

  <!-- gallery -->
    <h2 class="titleForm center">
      Cruise
    </h2>
  <div class="container">

    <div class="row">
      <div class="col s12">
        <ul class="tabs tabs-logo">
          <li class="tab"><a href="#starcruise"><img src="img/icons/starcruise.jpg"></a></li>
          <li class="tab"><a href="#dreamcruise"><img src="img/icons/dreamcruise.jpg"></a></li>
          <li class="tab"><a href="#princesscruise"><img src="img/icons/princesscruise.jpg"></a></li>
        </ul>
        <div id="starcruise" class="row">
          <div class="col s12">
            <div class="card">
              <div class="card-image">
                <img src="img/packages/starcruise1.jpg" width="100%">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Dec 20, 27
                    </p>
                    <br>
                    <span>
                      • Bangkok Thailand<br>
                      • Sihanoukville Cambodia  
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 251</span>
                    <br>
                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 11px; padding-top: 19px; padding-right: 2px;">(Rate per person)</span>

                  </div> 
                    
                </div>
                <div class="card-action right-align">
                  <a type="btn" href="tour_details.php">see more details <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col s12">
            <div class="card">
              <div class="card-image">
                <img src="img/packages/starcruise2.jpg" width="100%">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Dec 22, 29
                    </p>
                    <br>
                    <span>
                      • Bangkok Thailand<br>
                      • Ko Samui Thailand
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 279</span>
                    <br>
                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 11px; padding-top: 19px; padding-right: 2px;">(Rate per person)</span>

                  </div> 
                    
                </div>
                <div class="card-action right-align">
                  <a type="btn" href="tour_details.php">see more details <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="dreamcruise" class="row">
          <div class="col s12">
            <div class="card">
              <div class="card-image">
                <img src="img/packages/dreamcruise1.jpg" width="100%">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Dec 08, 15, 22, 29
                    </p>
                    <br>
                    <span>
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 260</span>
                    <br>
                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 11px; padding-top: 19px; padding-right: 2px;">(Rate per person)</span>

                  </div> 
                    
                </div>
                <div class="card-action right-align">
                  <a type="btn" href="tour_details.php">see more details <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col s12">
            <div class="card">
              <div class="card-image">
                <img src="img/packages/dreamcruise2.jpg" width="100%">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Jul 07, 14, 21, 28 | Aug 04, 11, 18, 25 | Sep 01, 08, 15, 22, 29 | Oct 06, 13
                    </p>
                    <br>
                    <span>
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 290</span>
                    <br>
                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 11px; padding-top: 19px; padding-right: 2px;">(Rate per person)</span>

                  </div> 
                    
                </div>
                <div class="card-action right-align">
                  <a type="btn" href="tour_details.php">see more details <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="princesscruise" class="row">
          <div class="col s12">
          </div>
        </div>
      </div>  
    </div>  

  </div> 
  <br>   
    <!-- gallery -->

  <?php include "includes/footer.php" ?>

</body>
</html>