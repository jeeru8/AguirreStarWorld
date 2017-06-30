<footer class="site-footer">
  <div class="bottom">
    <div class="container">
      <div class="row">

        <div class="col l6 s12 left">
          <p class="copyright-text">
            © Aguirre Star World
          </p>
          <div class="credits">
              
            Powered by: <a>CWSSTSI</a>
          </div>
        </div>
        
       
        
      </div>
    </div>
  </div>
</footer>

<a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a> 

<!-- JQuery lib -->
<script src="lib/jquery/jquery.min.js"></script>
<!-- Materialize Js -->
<script src="lib/materialize/js/materialize.min.js"></script>
<!-- angular -->
<script type="text/javascript" src="lib/angular/angular.js"></script>
<!-- angular application -->
<script type="text/javascript" src="js/app.js"></script>
<!-- contorller -->
<script type="text/javascript" src="js/tour_controller.js"></script>
<!-- custom Js -->
<script type="text/javascript">
	$( document ).ready(function(){
		$(".dropdown-button").dropdown();
		$('.parallax').parallax();    
    $('ul.tabs').tabs();
    $('ul.tabs').tabs('select_tab', 'tab_id');
    $('.carousel').carousel();
    $('.carousel.carousel-slider').carousel({fullWidth: true});
    $('.modal').modal();
    $('.datepicker').pickadate({
        selectMonths: true, 
        selectYears: 100,
        close: 'Done'
    });
    $('select').material_select();

	});
</script>