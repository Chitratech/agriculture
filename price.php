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





#wrap{
  width:400px;
  margin:0 auto;
  text-align:left;
  margin-top:8px;
  padding:5px;
  background:#fff;
    font-family:AvenirLTStd, Arial, Helvetica, sans-serif;
  font-size:13px;    
    line-height:16px;
}
#wrap .cont_details fieldset,.cont_order fieldset{
  margin:10px;
  padding:20px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    -khtml-border-radius: 10px;
    border-radius: 10px;
}
#wrap legend{
  font-size:16px;
  font-family:Georgia, "Times New Roman", Times, serif;
  color:#000;
  font-weight:bold;
  font-style:italic;
    padding-bottom:10px;
}
#wrap .cont_details input{
  margin-bottom:10px;
  color:#000;
}
#wrap .input1:hover,.input1:active{
  
}
#wrap label{
  display:block;
  font-size:12px;
  color:#000;
    font-weight:bold;
}
#wrap label.inlinelabel
{
    display:inline;
}
#wrap .cont_order input{
  margin-bottom:5px;
}
#wrap .cont_order p{
  padding-top:5px;
}

#wrap input[type="radio"]
{
margin-top:8px;
margin-bottom:8px;
}

#wrap input[type="text"]:hover,
#wrap input[type="text"]:active {
background-color: #FAF398;
}

#wrap input#submit
{
margin:10px;
padding-left:20px;
padding-right:20px;
padding-top:10px;
padding-bottom:10px;
}

#wrap div#totalPrice
{
    padding:10px;
    font-weight:bold;
    background-color:#ff0;
}

#wrap label.radiolabel
{
font-weight:normal;
 display:inline;
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
      <li ><a href="info.php"><i class="fa fa-info-circle" aria-hidden="true"></i> Info</a></li>

      <li class="active"><a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i> Price estimate</a></li>
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









 <div id="wrap">
        <form action="" id="cakeform" onsubmit="return false;">
        <div>
            <div class="cont_order">
               <fieldset>
                <legend>Price estimation for investment</legend>
                <label >Size of land </label>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round6" onclick="calculateTotal()" /> 1 acer </label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round8" onclick="calculateTotal()" />2 acer </label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round10" onclick="calculateTotal()" />4 acerserves </label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round12" onclick="calculateTotal()" />10 acer </label><br/>
                <br/>
                <label >Type of crops</label>
         
                <select id="filling" name='filling' onchange="calculateTotal()">
                <option value="None">Select you'r farming</option>
                <option value="Lemon">Lemon</option>
                <option value="Custard">coconut</option>
                <option value="Fudge">ragi</option>
                <option value="Mocha">Mocha</option>
                <option value="Raspberry">Raspberry</option>
                <option value="Pineapple">Pineapple</option>
                <option value="Dobash">vegitable</option>
                <option value="Mint">spices</option>
                <option value="Cherry">Cherry</option>
                <option value="Apricot">Apricot</option>
                <option value="Buttercream">Wheat</option>
                <option value="Chocolate Mousse">Chocolate </option>
               </select>
                <br/>
                <p>
                <label for='includecandles' class="inlinelabel">Include fertilizer</label>
               <input type="checkbox" id="includecandles" name='includecandles' onclick="calculateTotal()" />
               </p>
               
                <p>
                <label class="inlinelabel" for='includeinscription'>Include external cost</label>
                <input type="checkbox" id="includeinscription" name="includeinscription" onclick="calculateTotal()" />
                <input type="text"  id="theinscription" name="theinscription" placeholder="Enter Amout"  />
                </p>
                <div id="totalPrice"></div>
                
                </fieldset>
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




/*
This source is shared under the terms of LGPL 3
www.gnu.org/licenses/lgpl.html

You are free to use the code in Commercial or non-commercial projects
*/

 //Set up an associative array
 //The keys represent the size of the cake
 //The values represent the cost of the cake i.e A 10" cake cost's $35
 var cake_prices = new Array();
 cake_prices["Round6"]=2000;
 cake_prices["Round8"]=2005;
 cake_prices["Round10"]=3105;
 cake_prices["Round12"]=7755;
 
 //Set up an associative array 
 //The keys represent the filling type
 //The value represents the cost of the filling i.e. Lemon filling is $5,Dobash filling is $9
 //We use this this array when the user selects a filling from the form
 var filling_prices= new Array();
 filling_prices["None"]=0;
 filling_prices["Lemon"]=455;
 filling_prices["Custard"]=3005;
 filling_prices["Fudge"]=7086;
 filling_prices["Mocha"]=8324;
 filling_prices["Raspberry"]=1090;
 filling_prices["Pineapple"]=235;
 filling_prices["Dobash"]=998;
 filling_prices["Mint"]=508;
 filling_prices["Cherry"]=576;
 filling_prices["Apricot"]=8564;
 filling_prices["Buttercream"]=7213;
 filling_prices["Chocolate Mousse"]=1200;
 
   
   
// getCakeSizePrice() finds the price based on the size of the cake.
// Here, we need to take user's the selection from radio button selection
function getCakeSizePrice()
{  
    var cakeSizePrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the cake the user Chooses name=selectedCake":
    var selectedCake = theForm.elements["selectedcake"];
    //Here since there are 4 radio buttons selectedCake.length = 4
    //We loop through each radio buttons
    for(var i = 0; i < selectedCake.length; i++)
    {
        //if the radio button is checked
        if(selectedCake[i].checked)
        {
            //we set cakeSizePrice to the value of the selected radio button
            //i.e. if the user choose the 8" cake we set it to 25
            //by using the cake_prices array
            //We get the selected Items value
            //For example cake_prices["Round8".value]"
            cakeSizePrice = cake_prices[selectedCake[i].value];
            //If we get a match then we break out of this loop
            //No reason to continue if we get a match
            break;
        }
    }
    //We return the cakeSizePrice
    return cakeSizePrice;
}

//This function finds the filling price based on the 
//drop down selection
function getFillingPrice()
{
    var cakeFillingPrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
     var selectedFilling = theForm.elements["filling"];
     
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
    cakeFillingPrice = filling_prices[selectedFilling.value];

    //finally we return cakeFillingPrice
    return cakeFillingPrice;
}

//candlesPrice() finds the candles price based on a check box selection
function candlesPrice()
{
    var candlePrice=0;
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the checkbox id="includecandles"
    var includeCandles = theForm.elements["includecandles"];

    //If they checked the box set candlePrice to 5
    if(includeCandles.checked==true)
    {
        candlePrice=5;
    }
    //finally we return the candlePrice
    return candlePrice;
}

function insciptionPrice()
{
    //This local variable will be used to decide whether or not to charge for the inscription
    //If the user checked the box this value will be 20
    //otherwise it will remain at 0
    var inscriptionPrice=0;
    //Get a refernce to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the checkbox id="includeinscription"
    var includeInscription = theForm.elements["includeinscription"];
    //If they checked the box set inscriptionPrice to 20
    if(includeInscription.checked==true){
        inscriptionPrice=20000;
    }
    //finally we return the inscriptionPrice
    return inscriptionPrice;
}
        
function calculateTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
    var cakePrice = getCakeSizePrice() + getFillingPrice() + candlesPrice() + insciptionPrice();
    
    //display the result
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Price to invest is Rupees ="+cakePrice;

}

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
}
  </script> 
</body>

</html>
