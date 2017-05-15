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


.clear {
  clear:both;
}
.cardc {
  width:25em;
  min-height:22.5em;
  background: #fff;
  margin:2em auto;
  border-radius: .2em;
  padding-top:1em;
  padding-left: 1em;
  padding-right:1em;
}
.city {
  font-family: Roboto;
  font-weight: 300;
  font-size: 1.8em;
  color:#5b5b5b;
}
.menuc {
  float: right;
  font-family: Roboto;
  font-size:.5em;
  color:#5b5b5b;
  margin-top:-.09em;
  margin-right:-2em;
  list-style:square;
}
.sun {
  width:4em;
  height:4em;
  border-radius: 2.5em;
  background: #FBD80A;
  margin-top: 1em;
}
.temp {
  float:right;
  font-family:Roboto;
  font-weight: 300;
  font-size: 8.5em;
  margin-top:-.75em;
  color:#5b5b5b;
}
.variations {
  font-family:Roboto;
  font-wight:300;
  color:#8c8c8c;
  list-style:none;
  margin-left:-2em;
}
.mph {
   font-size:.8em;
}
.speed:before {
  content:url('http://i.imgur.com/luN0Jmq.png');
}
.forecast {
  width:100%;
  margin:0 auto;
}
.day {
  display:block;
  width: 21.5%;
  height:9em;
  float:left;
  margin: 0 .375em .5em;
  text-align:center;
  font-family:Roboto;
  color: #5b5b5b;
  border-right:.1em solid #d9d9d9;
  line-height: 2;
}
.fri {
  border-right:none;
}
.highTemp {
  font-weight:bold;
}
.lowTemp {
  color: #8c8c8c;
}
.cloudy {
  content: url('http://i.imgur.com/0PIYfV8.png');
}
.sunny {
  content: url('http://i.imgur.com/RdBr2SD.png');
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
      <li class="active"><a href="dashboard.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
      <li><a href="info.php"><i class="fa fa-info-circle" aria-hidden="true"></i> Info</a></li>

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






   
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
      </div>
    </div><!--/.row-->
    
     <div class="row">
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-blue panel-widget ">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large"><i class="fa fa-inr" aria-hidden="true"></i>1200</div>
              <div class="text-muted">bought</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-orange panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <img src="images/sold.png"/ class="img-responsive">
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large"><i class="fa fa-inr" aria-hidden="true"></i>100052</div>
              <div class="text-muted">Sold</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
             <img src="images/growth.png"/ class="img-responsive">
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large"><i class="fa fa-inr" aria-hidden="true"></i>50000</div>
              <div class="text-muted">offline investment</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-red panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <img src="images/get-money.png"/ class="img-responsive">
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large"><i class="fa fa-inr" aria-hidden="true"></i>48852</div>
              <div class="text-muted">Profit</div>
            </div>
          </div>
        </div>
      </div>
    </div><!--/.row-->
    








    <!--<div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Site Traffic Overview</div>
          <div class="panel-body">
            <div class="canvas-wrapper">
              <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div><!--/.row-->
    
   <!-- <div class="row">
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>New Orders</h4>
            <div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">92%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>Comments</h4>
            <div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent">65%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>New Users</h4>
            <div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>Visitors</h4>
            <div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span>
            </div>
          </div>
        </div>
      </div>
    </div><!--/.row--> 
                
    <div class="row">

   
      <div class="col-md-12">
   <div class="container">
    <h2>News </h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
   
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      
        <div class="item active">
          <img src="https://thumbor.unica.ro/unsafe/760x400/smart/filters:contrast(1):quality(80)/https://www.auto-bild.ro/wp-content/uploads/2017/04/tractor8-1024x683.jpg">
           <div class="carousel-caption">
            <h4><a href="#">What’s in Your Shed? visits a Suffolk father-and-son team</a></h4>
            <p>In the latest instalment of our monthly What’s In Your Shed? series, we head to Suffolk to meet father-and-son team Mike and James Porter. They ran Ford tractors until 1968, but since then John Deeres have taken over. “All the technology needs to talk to each other these days too and we are using John Deere’s Greenstar GPS system, so it keeps it simple if the machines are the same brand. This is why we went for a John Deere sprayer this</p>
          </div>
        </div><!-- End Item -->
 
         <div class="item">
          <img src="http://static-files.asianetnews.tv/media/image_library/a86429d6-48df-4d2f-b5b9-b646ea6f6b1c/drought_hit_farmer_760x400.jpg">
           <div class="carousel-caption">
            <h4><a href="#">Farmer Focus: Dry conditions take their toll on yield prospects</a></h4>
            <p>I have started taking an unhealthy interest in the rain meter on my weather station. Recent rainfall is probably too little, too late and we are already adjusting remaining inputs to match an anticipated lower yield. With milling wheat premiums in single figures, we are also cherry-picking stronger crops for milling grade and downgrading the remainder for feed markets. It costs us £7/t to achieve higher proteins. Oilseed rape crops have flowered uniformly and looked strong. Spring barley looks thirsty […]</p>
          </div>
        </div><!-- End Item -->
        
        <div class="item">
          <img src="http://sventerprises-india.com/images/Banner1.jpg">
           <div class="carousel-caption">
            <h4><a href="#">7 steps to assessing and managing your soil</a></h4>
            <p>Livestock farmers should be assessing their soil structure this spring to identify areas for improvement and to increase productivity from grass. It has been estimated soil compaction costs up to £250/ha/year. However, more than half of grassland fields involved in a Defra-funded survey were found to have poor soil structure, indicating work needs to be done. Soil compaction occurs when soil particles are compressed, which reduces the spaces (pores) between them. These spaces carry vital air and water through the […]</p>
          </div>
        </div><!-- End Item -->
        
        <div class="item">
          <img src="http://www.elperuano.pe/fotografia/thumbnail/2017/01/27/000029419M.jpg">
           <div class="carousel-caption">
            <h4><a href="#">Are you making the most of your farm finances?</a></h4>
            <p>This year take a fresh approach to your farm finances… Sally Ashwell from Farmplan explains why taking a few moments to get organised could save you a lot of time and hassle.

Many of you will be approaching year end, a time when your accountant will request information from you about last year’s trading as well as evidence of payments or receipts. So, now’s the time to make sure your farms accounts are up to date and organised.</p>
          </div>
        </div><!-- End Item -->

        <div class="item">
          <img src="https://carbery.com/wp-content/uploads/760x400-Sustainability-Cows.jpg">
           <div class="carousel-caption">
            <h4><a href="#">How Harper Adams aims to maximise dairy beef growth rates</a></h4>
            <p>In a trial that is a first of its kind, Harper Adams University is investigating whether they can finish dairy-bred beef from forage-based diets by 20-21 months. It is hoped the project, which is being funded by AHDB Beef and Lamb and supported by the Hereford Cattle Society and Dunbia, will create a blueprint for a low-cost beef finishing system for summer- and autumn-born calves.   Over the next 12 months Farmers Weekly will be following their progress. See also: Beef producers urged […]</p>
          </div>
        </div><!-- End Item -->
                
      </div><!-- End Carousel Inner -->


    <ul class="list-group col-sm-4">
      <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active"><h4>What’s in Your Shed? visits a Suffolk father-and-son team</h4></li>
      <li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><h4>Farmer Focus: Dry conditions take their toll on yield prospects</h4></li>
      <li data-target="#myCarousel" data-slide-to="2" class="list-group-item"><h4>7 steps to assessing and managing your soil</h4></li>
      <li data-target="#myCarousel" data-slide-to="3" class="list-group-item"><h4>Are you making the most of your farm finances?</h4></li>
      <li data-target="#myCarousel" data-slide-to="4" class="list-group-item"><h4>How Harper Adams aims to maximise dairy beef growth rates</h4></li>
    </ul>

      <!-- Controls -->
      <div class="carousel-controls">
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>

    </div><!-- End Carousel -->
</div>
        
      </div><!--/.col-->
      
      
    </div><!--/.row-->

    <br/><br/>

<div class="row">

 <div class="col-md-4">
      
        <div class="panel panel-blue">
          <div class="panel-heading dark-overlay"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Latest Market Price Details</div>
          <div class="panel-body">
            <ul class="todo-list">
            <li class="todo-list-item">
              
                 <img src="images/rice.png" alt=" " class="img-responsive" align="left" />
          <label for="checkbox">Rice </label>
             <div class="pull-right action-buttons">
          <i class="fa fa-inr" aria-hidden="true">1200/tons</i>
              </div>
                
              </li>
              <li class="todo-list-item">
                <img src="images/flour.png" alt=" " class="img-responsive" align="left" />
                  <label for="checkbox">Wheat </label>
                       <div class="pull-right action-buttons">
                  <i class="fa fa-inr" aria-hidden="true">3400/tons</i>
               </div>
                
              </li>
              <li class="todo-list-item">
               <img src="images/cotton.png" alt=" " class="img-responsive" align="left" />
                  <label for="checkbox">Cotton</label>
              
                <div class="pull-right action-buttons">
                  <i class="fa fa-inr" aria-hidden="true">340/kg</i>
                </div>
              </li>
              <li class="todo-list-item">
                
                 <img src="images/sugarcane.png" alt=" " class="img-responsive" align="left" />
                  <label for="checkbox">Sugarcane</label>
               
                <div class="pull-right action-buttons">
                  <i class="fa fa-inr" aria-hidden="true">654/kg</i>
                </div>
              </li>
              <li class="todo-list-item">
                
                  <img src="images/tea.png" alt=" " class="img-responsive" align="left" />
                  <label for="checkbox">Tea</label>
              
                <div class="pull-right action-buttons">
                    <i class="fa fa-inr" aria-hidden="true">500/kg</i>
                </div>
              </li>
              <li class="todo-list-item">
                 <img src="images/jute.png" alt=" " class="img-responsive" align="left" />
                  <label for="checkbox">jute</label>
            
                <div class="pull-right action-buttons">
                   <i class="fa fa-inr" aria-hidden="true">1500/kg</i>
                </div>
              </li>


            </ul>
          </div>
          
        </div>
                
      </div><!--/.col-->


      <div class="col-md-7">

                <div class="cardc">
  <span class="city">Banglore</span>
    <ul class="menuc">
      <li></li>
      <li></li>
      <li></li>
    </ul>
    <br>
  <div class="sun"></div>
  <span class="temp">26&#176;</span>
  <span>
    <ul class="variations">
      <li>CLEAR</li>
      <li><span class="speed">9<span class="mph">mph</span></span></li>
    </ul>
  </span>
  <div class="forecast clear">
    <div class="day tue">TUE 
      <br> <span class="cloudy"></span> <br> <span class="highTemp">29&#176;</span> <br> <span class="lowTemp">57&#176;</span>
    </div>
    <div class="day wed">WED
       <br> <span class="sunny"></span> <br> <span class="highTemp">19&#176;</span> <br> <span class="lowTemp">57&#176;</span>
    </div>
    <div class="day thu">THU 
      <br> <span class="sunny"></span> <br> <span class="highTemp">39&#176;</span> <br> <span class="lowTemp">57&#176;</span>
    </div>
    <div class="day fri">FRI
      <br> <span class="cloudy"></span> <br> <span class="highTemp">24&#176;</span> <br> <span class="lowTemp">57&#176;</span>
    </div>
  </div>
</div>
      </div>

</div>


  </div>  <!--/.main-->

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
