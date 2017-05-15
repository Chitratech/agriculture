<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>InfoFarmBiz- Dashboard</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->






</head>

<style type="text/css">
  


#myCarousel .carousel-caption {
    left:0;
    right:0;
  bottom:0;
  text-align:left;
  padding:10px;
  background:rgba(0,0,0,0.6);
  text-shadow:none;
}

#myCarousel .list-group {
  position:absolute;
  top:0;
  right:0;
}
#myCarousel .list-group-item {
  border-radius:0px;
  cursor:pointer;
}
#myCarousel .list-group .active {
  background-color:#eee;  
}

@media (min-width: 992px) { 
  #myCarousel {padding-right:33.3333%;}
  #myCarousel .carousel-controls {display:none;}  
}
@media (max-width: 991px) { 
  .carousel-caption p,
  #myCarousel .list-group {display:none;} 
}
</style>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><span>Info</span>FarmBiz</a>
         <li> <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
         </li>

        <ul class="user-menu">


          <li class="dropdown pull-right">


            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
              <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
              <li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
              
    </div><!-- /.container-fluid -->
  </nav>
    
  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
    </form>
    <ul class="nav menu">
      <li ><a href="dashboard.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
      <li class="active"><a href="info.php"><i class="fa fa-info-circle" aria-hidden="true"></i> Info</a></li>

      <li><a href="price.php"><i class="fa fa-credit-card" aria-hidden="true"></i> Price estimate</a></li>
      <li><a href="sellbuy/index.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Sell/Buy</a></li>
      
      <!-- <li class="parent ">
        <a href="#">
          <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Dropdown 
        </a>
        <ul class="children collapse" id="sub-item-1">
          <li>
            <a class="" href="#">
              <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
            </a>
          </li>
          <li>
            <a class="" href="#">
              <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
            </a>
          </li>
          <li>
            <a class="" href="#">
              <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
            </a>
          </li>
        </ul>
      </li> -->
      
    </ul>
    
  </div><!--/.sidebar-->


   <!-- sliding offers-->


    
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"> 



<br/><br/><br/>

<h1>Select the soil </h1>

    <div class="container-fluid">
  <div class="row">

    <!-- column -->
        <a href="sandysoil.php">
    <div class="col-xs-4 col-sm-5cols" ">
      <div class="thumbnail">
      
        <img src="https://www.stevejones.com.au/image/cache/data/soil/td4-500x500.jpg" class="image-responsive">
        
        <h4><center>sandy soil </center> </h4>
            
      
      </div>
    </div>
    </a>

<!-- column -->    
    <div class="col-xs-4 col-sm-5cols">
      <div class="thumbnail">
        <img src="https://static.wixstatic.com/media/5ad732_0f8bae87846346278a42f55d185d9fc2~mv2.jpg/v1/fill/w_500,h_500,al_c,q_90/file.jpg">
         <h4><center>Clay Soil</center></h4>
      </div>
    </div>

    <!-- column -->    
    <div class="col-xs-4 col-sm-5cols">
      <div class="thumbnail">
        <img src="http://khaitansugar.com/images/soil.jpg">
        <h4><center>Silty Soil</center></h4>
      </div>
    </div>


    <!-- column -->    
    <div class="col-xs-4 col-sm-5cols">
      <div class="thumbnail">
        <img src="http://images.locanto.net/1795612509/POTTING-SOIL-ORGANIC-FERTILIZER-COCO-PEAT-SOIL-200-gm_3.jpg">
         <h4><center>Peaty Soil</center></h4>
      </div>
    </div>


    <!-- column -->    
    <div class="col-xs-4 col-sm-5cols">
      <div class="thumbnail">
        <img src="http://www.stevenswater.com/cms-data/gallery/blog/blog/the-stevens-hydraprobe-inorganic-soil-calibrations/clay-soil-background-sq.jpg">
         <h4><center>Saline Soil</center></h4>
      </div>
    </div>


    <!-- column -->    
    <div class="col-xs-4 col-sm-5cols">
      <div class="thumbnail">
        <img src="http://khaitansugar.com/images/soil.jpg">
        <h4><center>Loam soil </center></h4>
      </div>
    </div>


   


  </div>
</div>













  </div>



















   <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script>
    $('#calendar').datepicker({
    });

    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
            $(this).find('em:first').toggleClass("glyphicon-minus");      
        }); 
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })




    $(document).ready(function(){
    var clickEvent = false;
  $('#myCarousel').carousel({
    interval:   4000  
  }).on('click', '.list-group li', function() {
      clickEvent = true;
      $('.list-group li').removeClass('active');
      $(this).addClass('active');   
  }).on('slid.bs.carousel', function(e) {
    if(!clickEvent) {
      var count = $('.list-group').children().length -1;
      var current = $('.list-group li.active');
      current.removeClass('active').next().addClass('active');
      var id = parseInt(current.data('slide-to'));
      if(count == id) {
        $('.list-group li').first().addClass('active'); 
      }
    }
    clickEvent = false;
  });
});
$(window).load(function() {
    var boxheight = $('#myCarousel .carousel-inner').innerHeight();
    var itemlength = $('#myCarousel .item').length;
  var triggerheight = Math.round(boxheight/itemlength+1);
  $('#myCarousel .list-group-item').outerHeight(triggerheight);
});
  </script> 
</body>

</html>
