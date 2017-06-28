<!DOCTYPE html>
<html>
<head>
	<title>Passenger Application | Aguirre Star Worldwide Travel Corporation</title>
    <?php include "includes/header.php" ?>
</head>
<body>
	<!-- navbar -->
	<div class="navbar-fixed">	
	   	<?php include "includes/navbar.php" ?>
	</div>
	<!-- navbar -->

	<!-- Hero -->
    <section class="hero">
      <div class="container text-center">
        <div class="row">
        	<div class="col s10 l4 push-s1 push-l4">
        		
              <div class="card grey lighten-5">
                <form class="card-content black-text">

                    <!--Logo-->
                    <div class="center">
                       <a> Logo Here</a>
                    </div>  

                    <h3>Passenger Application</h3>  

                    <!--passport-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Passport Number</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="firstname" type="text">
                        <label for="firstname"></label>
                      </div>
                    </div>
                    <!--expiry-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Passport Expiry Date</p>
                      </div>
                      <div class="col s8 l5 push-l1 form-group">
                        <input type="date" name="birthdate" ng-model="account.birthdate" id="birthdate" class="datepicker" placeholder="Pick a date" required />
                        <label for="birthdate">Expiry Date</label>
                      </div> 
                    </div>

                    <p class="center teal-text">Plan</p>
                    <!--plan-->
                    <div class="row">
                      <div class="col s3 l4 push-l2">
                        <input class="form-group with-gap" name="plan" type="radio" value="oneway" id="oneway"/>
                        <label for="oneway">One Way</label>
                      </div>
                      <div class="col s3 l4 push-l2 push-s4">
                        <input class="form-group with-gap" name="plan" type="radio" id="roundtrip" value="roundtrip"/>
                        <label for="roundtrip">Round Trip</label>
                      </div>
                    </div>
                    <br>

                    <p class="center teal-text">Category</p>
                    <!--category-->
                    <div class="row">
                      <div class="col s3 l4 push-l2">
                        <input class="form-group with-gap" name="category" type="radio" value="Domestic" id="Domestic"/>
                        <label for="Domestic">Domestic</label>
                      </div>
                      <div class="col s3 l4 push-l2 push-s4">
                        <input class="form-group with-gap" name="category" type="radio" id="International" value="International"/>
                        <label for="International">International</label>
                      </div>
                    </div>
                    <br>

                    <p class="center teal-text">Category</p>
                    <!--classification-->
                    <div class="row">
                      <div class="col s3 l4 push-l2">
                        <input class="form-group with-gap" name="classification" type="radio" value="Economy" id="Economy"/>
                        <label for="Economy">Economy</label>
                      </div>
                      <div class="col s3 l4 push-l2 push-s4">
                        <input class="form-group with-gap" name="classification" type="radio" id="firstclass" value="firstclass"/>
                        <label for="firstclass">First Class</label>
                      </div>
                    </div>
                    <br>
                    <!--no of adult-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">No. of pax Adult</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="lastname" ng-model="account.lastName" type="text">
                        <label for="lastname"></label>
                      </div>
                    </div>

                    <!--no of Children-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">No. of pax Children</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="lastname" ng-model="account.lastName" type="text">
                        <label for="lastname"></label>
                      </div>
                    </div>

                    <!--no of Infant-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">No. of pax Infant</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="lastname" ng-model="account.lastName" type="text">
                        <label for="lastname"></label>
                      </div>
                    </div>

                    <!--origin-->
                    <div class="row">
                      <div class="col s4 l5 push-l1"><p class="teal-text darken-4">Place of Origin</p></div>
                      <div class="form-group input-field col s8 l5 push-l1"  >
                        <select ng-model="account.status">
                          <option value="" disabled>Choose your option</option>
                          <option value="Philippines" >Philippines</option>
                          <option value="USA" >USA</option>
                        </select>
                      </div>
                    </div>

                    <!--destination-->
                    <div class="row">
                      <div class="col s4 l5 push-l1"><p class="teal-text darken-4">Place of Destination</p></div>
                      <div class="form-group input-field col s8 l5 push-l1"  >
                        <select ng-model="account.status">
                          <option value="" disabled>Choose your option</option>
                          <option value="Philippines" >Philippines</option>
                          <option value="USA" >USA</option>
                        </select>
                      </div>
                    </div>
                    <!--departure-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Departure Date</p>
                      </div>
                      <div class="col s8 l5 push-l1 form-group">
                        <input type="date" name="birthdate" ng-model="account.birthdate" id="birthdate" class="datepicker" placeholder="Pick a date" required />
                      </div> 
                    </div>
                    <!--arrival-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Arrival Date</p>
                      </div>
                      <div class="col s8 l5 push-l1 form-group">
                        <input type="date" name="birthdate" ng-model="account.birthdate" id="birthdate" class="datepicker" placeholder="Pick a date" required />
                      </div> 
                    </div>

                    <!--Duration of Stay-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Duration of Stay</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="lastname" ng-model="account.lastName" type="text">
                        <label for="lastname"></label>
                      </div>
                    </div>

                    <!--Departure time-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Departure time of flight Chosen</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="lastname" ng-model="account.lastName" type="text">
                        <label for="lastname"></label>
                      </div>
                    </div>

                    <!--Flight Number-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Airline Flight Number</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="lastname" ng-model="account.lastName" type="text">
                        <label for="lastname"></label>
                      </div>
                    </div>

                    <!--Airline Company-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Airline Company</p>
                      </div>
                      <div class="form-group input-field col s8 l5 push-l1"  >
                        <select ng-model="account.status">
                          <option value="" disabled>Choose your option</option>
                          <option value="Philippines" >Cebu Pacific</option>
                          <option value="USA" >Philippine Airlines</option>
                        </select>
                      </div>
                    </div>

                    <!--Current Price of the Chosen Flight-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Current Price of the Chosen Flight</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="lastname" ng-model="account.lastName" type="text">
                        <label for="lastname"></label>
                      </div>
                    </div>

                    <!--payment-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Mode of Paymet</p>
                      </div>
                      <div class="form-group input-field col s8 l5 push-l1"  >
                        <select ng-model="account.status">
                          <!-- <option value="" disabled>Choose your option</option> -->
                          <option value="Philippines" >Visa</option>
                          <option value="USA" >Master Card</option>
                          <option value="USA" >PayPal</option>
                        </select>
                      </div>
                    </div>

                    <!--Card details-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Card details</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="lastname" ng-model="account.lastName" type="text">
                        <label for="lastname"></label>
                      </div>
                    </div>

                    <!--buttons-->
                    <div class="row center">

                      <!--register button-->
                      <div class="col s6 l5 push-l1">
                          <a  href="login.php" class="waves-effect waves-light btn">Back</a>
                      </div>
                      
                      <!--log in button-->
                      <div class="col s6 l5 push-l1">
                          <button class="waves-effect waves-light btn" type="submit">Submit</button>
                      </div>
                    </div>
                </form>
              </div>


        	</div>          
        </div>
      </div>
      
    </section>
    <!-- /Hero -->


	<?php include "includes/footer.php" ?>

</body>
</html>