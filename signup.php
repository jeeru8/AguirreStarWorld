<!DOCTYPE html>
<html>
<head>
	<title>Sign Up | Aguirre Star Worldwide Travel Corporation</title>
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

                    <h3>Personal Information</h3>  

                    <!--firstname-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">First Name</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="firstname" ng-model="account.firstName" type="text">
                        <label for="firstname"></label>
                      </div>
                    </div>
                    <!--middlename-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Middle Name</p>
                      </div>
                      <div class="form-group form-group input-field inline col s8 l5 push-l1">
                        <input id="middlename" ng-model="account.middleName" type="text">
                        <label for="middlename"></label>
                      </div>
                    </div>
                    <!--lastname-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Last Name</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="lastname" ng-model="account.lastName" type="text">
                        <label for="lastname"></label>
                      </div>
                    </div>
                    <!--gender-->
                    <div class="row">
                      <div class="col s1 push-l3">
                        <input class="form-group with-gap" ng-model="account.gender" name="gender" type="radio" id="male" value="Male"/>
                        <label for="male">Male</label>
                      </div>
                      <div class="col s1 push-l5 push-l1 push-s4">
                        <input class="form-group with-gap" ng-model="account.gender" name="gender" type="radio" value="Female" id="female"/>
                        <label for="female">Female</label>
                      </div>
                    </div>
                    <!--birthdate-->
                    <div class="row ">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Birth date</p>
                      </div>
                      <div class="col s8 l5 push-l1 form-group">
                        <input type="date" name="birthdate" ng-model="account.birthdate" id="birthdate" class="datepicker" placeholder="Pick a date" required />
                        <label for="birthdate">Birth date</label>
                      </div> 
                    </div>
                    <!--status-->
                    <div class="row">
                      <div class="col s4 l5 push-l1"><p class="teal-text darken-4">Status</p></div>
                      <div class="form-group input-field col s8 l5 push-l1"  >
                        <select ng-model="account.status">
                          <option value="" disabled>Choose your option</option>
                          <option value="Single" >Single</option>
                          <option value="Married" >Married</option>
                          <option value="In a relationship" >In a relationship</option>
                          <option value="Engaged" >Engaged</option>
                          <option value="Widowed" >Widowed</option>
                        </select>
                      </div>
                    </div>
                    <!--address-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Address Line 1</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="address" ng-model="account.address" type="text" class="validate">
                        <label for="address"></label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Address Line 2</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="address" ng-model="account.address" type="text" class="validate">
                        <label for="address"></label>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Address Line 3</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="address" ng-model="account.address" type="text" class="validate">
                        <label for="address"></label>
                      </div>
                    </div>

                    <!-- Town -->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Town</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="address" ng-model="account.address" type="text" class="validate">
                        <label for="address"></label>
                      </div>
                    </div>

                    <!-- State -->                    
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">City/State</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="address" ng-model="account.address" type="text" class="validate">
                        <label for="address"></label>
                      </div>
                    </div>

                    <!-- Zip Code -->                    
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Zip Code</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="address" ng-model="account.address" type="text" class="validate">
                        <label for="address"></label>
                      </div>
                    </div>

                    <!--country-->
                    <div class="row">
                      <div class="col s4 l5 push-l1"><p class="teal-text darken-4">Country</p></div>
                      <div class="form-group input-field col s8 l5 push-l1"  >
                        <select ng-model="account.status">
                          <option value="" disabled>Choose your option</option>
                          <option value="Philippines" >Philippines</option>
                          <option value="USA" >USA</option>
                        </select>
                      </div>
                    </div>

                    <!--email-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Email Address</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="email" type="email">
                        <label for="email"></label>
                      </div>
                    </div>
                    <!--phone number-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Phone Number</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="phonenumber" type="text">
                        <label for="phonenumber"></label>
                      </div>
                    </div>
                    <!--username-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Username</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="email" type="email">
                        <label for="email"></label>
                      </div>
                    </div>
                    <!--password-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Password</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="phonenumber"" type="password">
                        <label for="phonenumber"></label>
                      </div>
                    </div>

                    <!-- confirm password-->
                    <div class="row">
                      <div class="col s4 l5 push-l1">
                        <p class="teal-text darken-4">Confirm Password</p>
                      </div>
                      <div class="form-group input-field inline col s8 l5 push-l1">
                        <input id="phonenumber"" type="password">
                        <label for="phonenumber"></label>
                      </div>
                    </div>

                    <p class="center teal-text">Sign Up As:</p>
                    <!--gender-->
                    <div class="row">
                      <div class="col s1 push-l3">
                        <input class="form-group with-gap" name="account" type="radio" value="Driver" id="Driver"/>
                        <label for="Driver">Driver</label>
                      </div>
                      <div class="col s1 push-l5 push-s4">
                        <input class="form-group with-gap" name="account" type="radio" id="Passenger" value="Passenger"/>
                        <label for="Passenger">Passenger</label>
                      </div>
                    </div>
                    <br>
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