<!DOCTYPE html>
<html ng-app="myApp">
<head>
	<title>International Tours | Aguirre Star Worldwide Travel Corporation</title>
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
    	<div class="parallax"><img src="img/banner/1UokUhnzPn_1477228503r.jpg"></div>
  </div>
  <!-- parallax -->

  <!-- gallery -->
  <h2 class="titleForm center">
  	International Tours
  </h2>
	<div class="container">
    <div class="row center-align">
      <button class="btn" ng-click="showAsia()" active>Asia</button>
      <button class="btn" ng-click="showEurope()">Europe</button>
      <button class="btn" ng-click="showOME()">Oceania & Middle East</button>
      <button class="btn" ng-click="showAmerica()">America</button>
      <button class="btn" ng-click="showUD()">Unique Destination</button>
    </div>
    <br>

		<div class="row" id="selectAsia" ng-show="selectAsia">
	      <div class="col s12">
	        <ul class="tabs">
            <li class="tab"><a href="#korea"><img src="img/icons/korea.jpg"></a></li>
            <li class="tab"><a href="#japan"><img src="img/icons/japan.jpg"></a></li>
            <li class="tab"><a href="#china"><img src="img/icons/china.jpg"></a></li>
            <li class="tab"><a href="#cam-viet"><img src="img/icons/cam-viet.jpg"></a></li>
            <li class="tab"><a href="#india"><img src="img/icons/india.jpg"></a></li>
            <li class="tab"><a href="#hkg-macau-taiwan"><img src="img/icons/hkg-macau-taiwan.jpg"></a></li>
            <li class="tab"><a href="#singapore"><img src="img/icons/singapore.jpg"></a></li>
            <li class="tab"><a href="#thailand"><img src="img/icons/thailand.jpg"></a></li>
	          <li class="tab"><a href="#malaysia-indonesia-brunei"><img src="img/icons/malaysia-indonesia-brunei.jpg"></a></li>
	        </ul>

	        <div id="korea" class="row">
	          <div class="col s12">
	            <div class="card">
	              <div class="card-image">
	                <img src="img/packages/korea1.jpg" width="100%">
	              </div>
	              <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    JUN 10 - SEP 30 
                    </p>
                    <br>
                    <span>
                      • Seoul City - the capital of South Korea. It is a sprawling metropolis where hyper-modern skyscrapers - high-tech subways and pop culture meet Buddhist temples - palaces and street markets.
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 499</span>
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
	                <img src="img/packages/korea2.jpg" width="100%">
	              </div>
	              <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    AUG 02, 17, 24
                    </p>
                    <br>
                    <span>
                      • Nami Island<br>
                      • Bukchon Hanok Village<br>
                      • Cheonggyecheon Stream<br>
                      • Everland Theme Park<br>
                      • Gyeongbok Palace<br>
                      • National Folklore Museum<br>
                      • Pass by The Presidential Blue House<br>
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 699</span>
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
	        <div id="japan" class="col s12">
	          <div class="col s12">
	            <div class="card">
	              <div class="card-image">
	                <img src="img/packages/japan1.jpg" width="100%">
	              </div>
	              <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    JUN 01 - DEC 20 
                    </p>
                    <br>
                    <span>
                      Tokyo Morning Tour: Tokyo Tower<br>
                      • Meiji Shrine<br>
                      • Imperial Palace and Ginza District
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 858</span>
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
	                <img src="img/packages/japan2.jpg" width="100%">
	              </div>
	              <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    JUN 01 - DEC 20 
                    </p>
                    <br>
                    <span>
                      • Fushimi Inari Shrine<br>
                      • Kiyomizu Temple<br>
                      • Kinkakuji Temple
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 898</span>
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
	        <div id="china" class="col s12">
	          <div class="col s12">
	            <div class="card">
	              <div class="card-image">
	                <img src="img/packages/china1.jpg" width="100%">
	              </div>
	              <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Jul 27 | Aug 24 | Sep 21 | Oct 26 | Nov 01 | Dec 23, 29
                    </p>
                    <br>
                    <span>
                      • Flower City Square<br>
                      • Safari Park<br>
                      • International Circus Show<br>
                      • Chimelong Paradise<br>
                      • Haixinsha Island<br>
                      • Canton Fair<br>
                      • Beijing Road<br>
                      • Yuexiu Park<br>
                      • Five-Ram Statue<br>
                      • Chen Clan Academy<br>
                      • Wanning Square
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 722</span>
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
	                <img src="img/packages/china2.jpg" width="100%">
	              </div>
	              <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Jul 27 | Aug 24 | Sep 21 | Oct 26 | Nov 02 | Dec 23, 30 
                    </p>
                    <br>
                    <span>
                      • Hulishan Fortress<br>
                      • Zhongzhan Road<br>
                      • Night cruise at Xiamen Port<br>
                      • Gulangyu Islet<br>
                      • Shuzhuang Garden<br>
                      • Piano Museum<br>
                      • Jewelry Tea Shop<br>
                      • Hakka Earth Building Tour<br>
                      • International Acrobatic Show
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 755</span>
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
	        <div id="cam-viet" class="col s12">
	          <div class="col s12">
	            <div class="card">
	              <div class="card-image">
	                <img src="img/packages/cam-viet.jpg" width="100%">
	              </div>
	              <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Jul 12 | Aug 17 | Sep 21 | Oct 31 | Dec 26
                    </p>
                    <br>
                    <span>
                      • Tonle Sap Lake<br>
                      • Floating Village<br>
                      • Wat Damnak Buddhist Monastery<br>
                      • Angkor Thom<br>
                      • Angkor Wat Temple<br>
                      • Thien Hau Temple<br>
                      • Phnom Bakheng Temple<br>
                      • Artisans D’ Angkor<br>
                      • Cu Chi Tunnel<br>
                      • War Museum
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 998</span>
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
	        <div id="india" class="col s12">
	          <div class="col s12">
	            <div class="card ">
	              <div class="card-image">
	                <img src="img/packages/india.jpg" width="100%">
	              </div>
	              <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Sep 23 | Oct 28 | Nov 25 | Dec 26
                    </p>
                    <br>
                    <span>
                      • India Gate<br>
                      • Rashtrapati Bhavan<br>
                      • Parliament House<br>
                      • Qutab Minar<br>
                      • Taj Mahal<br>
                      • Agra Fort<br>
                      • Mohabatey Taj Show<br>
                      • Fatehpur Sikri<br>
                      • Johri Bazaar<br>
                      • Amber Fort with Jeepney and Elephant Ride
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 1,388</span>
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
          <div id="hkg-macau-taiwan" class="col s12">
            <div class="col s12">
              <div class="card">
                <div class="card-image">
                  <img src="img/packages/hmt1.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Jan 01 - Dec 31
                    </p>
                    <br>
                    <span>
                      • Taipei<br>
                      • the capital of Taiwan<br>
                      • is a modern metropolis with Japanese colonial lanes<br>
                      • busy shopping streets and contemporary buildings
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 488</span>
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
                  <img src="img/packages/hmt2.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Jul 27 | Aug 18 | Sep 21 | Oct 26, 28, 29, 30 | Nov 23 | Dec 21, 23, 26, 27, 28, 29
                    </p>
                    <br>
                    <span>
                      • Sun Moon Lake<br>
                      • Wen Wu Temple<br>
                      • Ita Thao Indigeous Village<br>
                      • Holy Monk Shrine<br>
                      • Taipei 101<br>
                      • Wu Fen Pu Cloth Market<br>
                      • Rao Ho Night Market<br>
                      • National Palace Museum<br>
                      • Experience making Pineapple Cake
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 677</span>
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
          <div id="singapore" class="col s12">
          </div>
          <div id="thailand" class="col s12">
          </div>
          <div id="malaysia-indonesia-brunei" class="col s12">
            <div class="col s12">
              <div class="card">
                <div class="card-image">
                  <img src="img/packages/mib1.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Jul 01 - Nov 30
                    </p>
                    <br>
                    <span>
                      Half Day Brunei City Tour<br>
                      • Ubud Palace<br>
                      • Monkey Forest<br>
                      • Tegalalang Rice Terraces <br>
                      • Ubud Art Market
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 365</span>
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
                  <img src="img/packages/mib2.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Jul 01 - Nov 30
                    </p>
                    <br>
                    <span>
                      Half Day Brunei City Tour<br>
                      • Ubud Palace<br>
                      • Monkey Forest<br>
                      • Tegalalang Rice Terraces <br>
                      • Ubud Art Market
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 365</span>
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
	      </div>  
	    </div> 
    <div class="row" id="selectEurope" ng-show="selectEurope">
        <div class="col s12">
          <ul class="tabs">
            <li class="tab"><a href="#SingleCountry"><img src="img/icons/SingleCountry.jpg"></a></li>
            <li class="tab"><a href="#MultipleCountries"><img src="img/icons/MultipleCountries.jpg"></a></li>
            <li class="tab"><a href="#ScandinaviaIcelandRussia"><img src="img/icons/Scandinavia,Iceland&Russia.jpg"></a></li>
            <li class="tab"><a href="#GreatBritainIreland"><img src="img/icons/GreatBritain&Ireland.jpg"></a></li>
            <li class="tab"><a href="#SpainPortugalMorocco"><img src="img/icons/Spain,Portugal&Morocco.jpg"></a></li>
            <li class="tab"><a href="#EasternMediterranean"><img src="img/icons/EasternMediterranean.jpg"></a></li>
          </ul>

          <div id="SingleCountry" class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-image">
                  <img src="img/packages/single1.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Jul 21 | Aug 18 | Sep 15 | Oct 20
                    </p>
                    <br>
                    <span>
                      • Bosphorus Cruise Trip<br>
                      • Blue Mosque<br>
                      • Hippodrome of Constantinople<br>
                      • St. Sophia Church<br>
                      • Topkapi Palace<br>
                      • Ruins City of Troy Wooden Trojan Horse and Museum<br>
                      • Ruins of Asklepion<br>
                      • Ephesus
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 1,588</span>
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
                  <img src="img/packages/single2.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Apr 01 - Dec 31
                    </p>
                    <br>
                    <span>
                      • Champs Elysees<br>
                      • Arc de Triumph<br>
                      • Concorde Square<br>
                      • Invalides<br>
                      • Eiffel Tower<br>
                      • Trocadero<br>
                      • Opera<br>
                      • Notre Dame Cathedral<br>
                      • Louvre Museum<br>
                      • Orsay Museum<br>
                      • Madeleine Church<br>
                      • Versailles Palace
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 1,822</span>
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
          <div id="MultipleCountries" class="col s12">
            <div class="col s12">
              <div class="card">
                <div class="card-image">
                  <img src="img/packages/multiple1.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Aug 17 | Sep 19 | Oct 23 | Nov 17 | Dec 21 | Jan 24 | Feb 21 | Mar 28 | Apr 18 | May 23 | Jun 20
                    </p>
                    <br>
                    <span>
                      ITALY (ROME): Vatican Museum & Sistine Chapel<br>
                      • Colosseum<br>
                      • Trevi Fountain<br>
                      • St. Peter's Basilica<br>
                      ITALY (PISA): Leaning Tower of Pisa<br>
                      ITALY (VENICE): Venice Island
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 3,588</span>
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
                  <img src="img/packages/multiple2.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Sep 20 | Oct 25 | Dec 20
                    </p>
                    <br>
                    <span>
                      LITHUANIA:<br>
                      Gediminas Tower<br>
                      • Vilnius University Museum<br>
                      • Trakai Island Castle<br>
                      • Kaunas Castle<br>
                      • Klaipeda Old Town<br>
                      Curonian Spit<br>
                      LATVIA: <br>
                      Hill of Crosses<br>
                      • Rundale Palace
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 2,688</span>
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
          <div id="ScandinaviaIcelandRussia" class="col s12">

            <div class="col s12">
              <div class="card">
                <div class="card-image">
                  <img src="img/packages/sir1.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Sep 20 | Oct 25 | Dec 20
                    </p>
                    <br>
                    <span>
                      LITHUANIA:<br>
                      Gediminas Tower<br>
                      • Vilnius University Museum<br>
                      • Trakai Island Castle<br>
                      • Kaunas Castle<br>
                      • Klaipeda Old Town<br>
                      Curonian Spit<br>
                      LATVIA: <br>
                      Hill of Crosses<br>
                      • Rundale Palace
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 2,688</span>
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
                  <img src="img/packages/sir2.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Aug 25 | Sep 22 | Oct 27
                    </p>
                    <br>
                    <span>
                      MOSCOW: Kremlin Cathedrals<br>
                      • Red Square<br>
                      • Christ Cathedral the Savior<br>
                      • Gorky Park<br>
                      • Novodevichiy Convent<br>
                      • Sparrow Hills<br>
                      • Moscow State University<br>
                      • White House<br>
                      • Kolomenskoe
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 3,255</span>
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
          <div id="GreatBritainIreland" class="col s12">
            <div class="col s12">
              <div class="card">
                <div class="card-image">
                  <img src="img/packages/greatbritain.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Jun 11 - Dec 31
                    </p>
                    <br>
                    <span>
                      • Parliament Square<br>
                      • Westminster Abbey<br>
                      • Buckingham Palace<br>
                      • St Paul's Cathedral<br>
                      • The Whispering Gallery<br>
                      • Tower of London<br>
                      • Windsor Castle<br>
                      • Stonehenge<br>
                      • Roman Baths
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 2,255</span>
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
          <div id="SpainPortugalMorocco" class="col s12">
            <div class="col s12">
              <div class="card">
                <div class="card-image">
                  <img src="img/packages/spain1.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Sep 21 | Oct 26 | Dec 21
                    </p>
                    <br>
                    <span>
                      • Puerta De Alcala<br>
                      • Cibeles Puerta Del Sol<br>
                      • Plaza dela Villa<br>
                      • Plaza Mayor<br>
                      • Carrera De San Jeronimo<br>
                      • Calle Atocha<br>
                      • Reina Sofia Museum<br>
                      • Atocha Main Railway Station<br>
                      • Ministry of Agriculture<br>
                      • Prado Museum
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 2,988</span>
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
                  <img src="img/packages/spain2.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Sep 23 | Oct 21 | Dec 23
                    </p>
                    <br>
                    <span>
                      PORTUGAL (FATIMA): The Chapel of the Apparitions<br>
                      • The Church of the Holy Trinity<br>
                      • Aljustrel<br>
                      • Stations of the Cross and the Calvary<br>
                      Our Lady of Ortiga  SPAIN PORTUGAL (FATIMA): The Chapel of the Apparitions<br>
                      • The Church of the Holy Trinity<br>
                      • Aljustrel<br>
                      • Stations of the Cross and the Calvary<br>
                      Our Lady of Ortiga  SPAIN 
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 3,444</span>
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
          <div id="EasternMediterranean" class="col s12">
            <div class="col s12">
              <div class="card">
                <div class="card-image">
                  <img src="img/packages/mediterranean1.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Jul 21 | Aug 18 | Sep 15 | Oct 20
                    </p>
                    <br>
                    <span>
                      • Bosphorus Cruise Trip<br>
                      • Blue Mosque<br>
                      • Hippodrome of Constantinople<br>
                      • St. Sophia Church<br>
                      • Topkapi Palace<br>
                      • Ruins City of Troy Wooden Trojan Horse and Museum<br>
                      • Ruins of Asklepion<br>
                      • Ephesus
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 1,588</span>
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
                  <img src="img/packages/mediterranean2.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Nov 22 | Dec 20
                    </p>
                    <br>
                    <span>
                      • Blue Mosque<br>
                      • Hippodrome of Constantinople<br>
                      • St. Sophia Church<br>
                      • Topkapi Palace<br>
                      Ruins City of Troy Wooden Trojan Horse and Museum<br>
                      • Ruins of Asklepion<br>
                      • Ephesus<br>
                      • House of Virgin Mary
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 1,688</span>
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
        </div>  
    </div>  
    <div class="row" id="selectOME" ng-show="selectOME">
        <div class="col s12">
          <ul class="tabs">
            <li class="tab"><a href="#australia"><img src="img/icons/australia-newzealand.jpg"></a></li>
            <li class="tab"><a href="#dubai"><img src="img/icons/dubai.jpg"></a></li>
            <li class="tab"><a href="#holyland"><img src="img/icons/holyland.jpg"></a></li>
          </ul>

          <div id="australia" class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-image">
                  <img src="img/packages/australia1.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Sep 18 | Oct 16 | Nov 13 | Dec 18
                    </p>
                    <br>
                    <span>
                      Brisbane: Cathedral Square<br>
                      • The Wheel of Brisbane<br>
                      River Cruise Goldcoast: Dreamworld<br>
                      • Seaworld<br>
                      • Warner Bros. Movieworld
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 1,888</span>
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
                  <img src="img/packages/australia2.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Sep 13 | Oct 18 | Nov 15 | Dec 27
                    </p>
                    <br>
                    <span>
                      Sydney: Bondi Beach<br>
                      • The Gap<br>
                      • Double and Rose Bay<br>
                      • Kings Cross<br>
                      • Sydney Opera House <br>
                      • Sydney Tower Eye
                      • Sydney SeaLife<br>
                      • Power House Museum <br>
                      • Blue Mountains
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 2,188</span>
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
          <div id="dubai" class="col s12">
            <div class="col s12">
              <div class="card">
                <div class="card-image">
                  <img src="img/packages/dubai.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Oct 28 | Nov 27 | Dec 25
                    </p>
                    <br>
                    <span>
                      • Sheikh Mohammed Bin Rashid Al Maktoum Palace<br>
                      • Dubai Museum<br>
                      • Spice Souq<br>
                      • Gold Souq<br>
                      • Dubai Monorail Ride Palm Jumeirah Island<br>
                      • Sheikh Zayed Grand Mosque<br>
                      • Heritage Village<br>
                      • Abu Dhabi Skyline
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 1,888</span>
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
          <div id="holyland" class="col s12">

            <div class="col s12">
              <div class="card">
                <div class="card-image">
                  <img src="img/packages/holyland1.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Sep 22 | Oct 20 | Nov 03 | Dec 14
                    </p>
                    <br>
                    <span>
                    • Caesarea<br>
                    • Muchraka<br>
                    • Haifa<br>
                    • Nazareth<br>
                    • Church of Annunciation<br>
                    • Cana<br>
                    • Sea of Galilee<br>
                    • Capernaum<br>
                    • Tabgha<br>
                    • Church of Multiplication<br>
                    • Mt. Tabot
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 2,188</span>
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
                  <img src="img/packages/holyland2.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Sep 19 | Nov 20 | Dec 18
                    </p>
                    <br>
                    <span>
                      • Mt<br>
                      • Nebo<br>
                      • Madaba<br>
                      • Petra<br>
                      • Al Maghtas<br>
                      • Rose City<br>
                      • Nazareth<br>
                      • Church of Agony<br>
                      • Mt. of Beatitudes<br>
                      • St. Peter’s Primacy<br>
                      • Capernaum
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 2,688</span>
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
        </div>  
    </div>  
    <div class="row" id="selectAmerica" ng-show="selectAmerica">
        <div class="col s12">
          <ul id="domesticTour" class="tabs">
            <li class="tab"><a href="#usaCanada"><img src="img/icons/usa-canada.jpg"></a></li>
            <li class="tab"><a href="#hawaiiGuam"><img src="img/icons/hawaii-guam.jpg"></a></li>
          </ul>

          <div id="usaCanada" class="row">
            <div class="col s12">
            </div>
          </div>
          <div id="hawaiiGuam" class="col s12">
            <div class="col s12">
            </div>
          </div>
        </div>  
    </div>  
    <div class="row" id="selectUD" ng-show="selectUD">
        <div class="col s12">
          <ul id="domesticTour" class="tabs">
            <li class="tab active"><a href="#africa"><img src="img/icons/south-africa.jpg"></a></li>
            <li class="tab"><a href="#himalayas"><img src="img/icons/himalayas.jpg"></a></li>
            <li class="tab"><a href="#maldives"><img src="img/icons/maldives.jpg"></a></li>
            <li class="tab"><a href="#laosMyanmar"><img src="img/icons/laos-myanmar.jpg"></a></li>
          </ul>

          <div id="africa" class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-image">
                  <img src="img/packages/africa1.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Jun 01 - Nov 30
                    </p>
                    <br>
                    <span>
                    • Lisbon Falls<br>
                    • God’s Window<br>
                    • Moholoholo Wildlife Rehabilitation Centre<br>
                    • Safari 4x4 Game Drive<br>
                    • Karongwe Game Reserve<br>
                    • Blyde River Canyon and Three Rondavels (Panoramic Route)<br>
                    • Diamond Supply Wholesaler
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 1,899</span>
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
                  <img src="img/packages/africa2.jpg" width="100%">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                  <div class="left-align">
                    <p>
                    Jun 01 - Aug 31
                    </p>
                    <br>
                    <span>
                      • Table Mountain<br>
                      • Malay Quarter<br>
                      • Houses of Parliament<br>
                      • City Hall<br>
                      • Castle of Good Hope<br>
                      • Cape Peninsula (Sea Point<br>
                      • Clifton<br>
                      • Camps Bay<br>
                      • Hout Bay)<br>
                      • Mineral World
                    </span>
                  </div>
                  <div class="right-align">

                    <span style="color: #ff9800; font-weight: 600; font-family: Verannda; font-size: 30px;">$ 3,088</span>
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
          <div id="himalayas" class="col s12">
            <div class="col s12">
            </div>
          </div>
          <div id="maldives" class="col s12">
            <div class="col s12">
            </div>
          </div>
          <div id="laosMyanmar" class="col s12">
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