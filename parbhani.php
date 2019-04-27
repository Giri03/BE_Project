<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Drought Prediction</title>

<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/5FFB92A6-BD08-E442-B6B8-3E93AE91426D/main.js" charset="UTF-8"></script><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/maphilight/1.4.0/jquery.maphilight.min.js"></script>
<!--
<script type="text/javascript" src="../../zepto/src/zepto.js"></script>
<script type="text/javascript" src="../../zepto/src/event.js"></script>
<script type="text/javascript" src="../../zepto/src/fx.js"></script>
<script type="text/javascript" src="../src/zepto.js"></script>
-->

<!--
<script type="text/javascript" src="../dist/jquery.imagemapster.js"></script>
-->

<STYLE TYPE="text/css">
#map_demo {
  background-color: lightgrey;
  width: 100%;


  margin-right: 100px;
   border: 2px solid gray;
  
  }
img{
	display : block;
	
}
</STYLE>

<?php  session_start();
$color = $_SESSION['color'];
if(empty($color))
{
	print '<script>alert("cannot load page ");</script>';//prompts the user
	print '<script>window.location.assign("index.html");</script>';
}

?>
<script type="text/javascript">
$(function() {
        $('.map').maphilight();
        
    });
</script>
</head>


<body>
<div class="nav navbar-default navbar-inverse navbar-fixed-top">
  <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" >Drought Prediction</a>
   
        </div>
  
  <div class="collapse navbar-collapse" id="navbar-ex-collapse">
  <ul class="nav navbar-nav pull-right">
  
    <li><a class="navbar-brand" data-toggle="tab" href="#about">About</a></li>
    <li  class="active"><a data-toggle="tab" href="#home"> <span class="sr-only">Drought Prediction</span>Drought Prediction</a></li>
    <li><a data-toggle="tab" href="#river">River Network</a></li>
	<li><a data-toggle="tab" href="#manual">Help</a></li>

  </ul>
  </div>
  </div>
</div>
<br />
  <div class="tab-content">
    <div id="about" class="tab-pane fade">
      
      
    </div>
    <div id="home" class="tab-pane fade">
      
     
    </div>
    <div id="river" class="tab-pane fade">
      
    </div>
   <div id="manual" class="tab-pane fade">
   </div>
  </div>

      <script>
  
  $(document).ready(function(){
  
$("#about").load("info1.html");
  
 $("#home").load("parbhani.php");
  
   $("#river").load("tt.html");


  return;
  });
</script>
<div id="home" class="container toggle-content" style="margin-top:50px;">
<div class="row">
<div class="col-md-12" id="image-map-wrapper">
<div id="image-map-container">
<div id="image-map" style="max-width:70%; display:inline-block;">
<!-- <span class="glyphicon glyphicon-picture"></span> -->



<div class="row">
  <div class="col-sm-8">
    <div class="alert alert-danger alert-dismissible fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <h5><b><strong>Danger!</strong> <blink>Parbhani may receive moderate drought till year 2025.</blink></b></h5>
        <p>Click button below to show possible re-route path for solution.</p>
        <a href="rno\parbhani.html" class="btn btn-danger">River Map</a>
    </div>
  </div>
</div>

<div id="map_demo" >
	<center style = 'font-size : 30px'><strong> Drought Prediction in Maharashtra Region</strong> </center>
	<div>
		<center> <img  id="mah_image" class="map" src="maharashtra4.jpg" usemap="#mah" ></center>
	</div>
    <map id="mah_image" name="mah">
    <area target="_blank" id="area2"   style  ="border : 70; outline-color : yellow; background-color : blue; "; alt="Beed" title="Beed" href="beed.html" coords="238,293,243,299,249,307,257,313,265,319,267,309,277,314,281,306,288,302,296,312,306,317,314,315,322,318,329,316,334,321,345,323,354,324,360,322,369,326,378,331,386,331,394,331,389,324,392,318,398,312,396,305,391,297,384,292,378,288,374,282,366,276,368,269,362,261,356,265,351,261,343,259,336,256,330,257,328,251,320,252,317,249,305,255,300,252,295,251,298,257,291,263,289,268,291,276,280,275,279,280,278,288,273,283,269,277,267,283,261,281,260,274,252,276,247,274,248,282,244,287,235,286" >

    <area target="_blank" id="area3" alt="Aurangabad" title="Aurangabad" href="C:\Users\student\Desktop\aurangabad.html" coords="219,212,224,216,229,222,238,228,248,228,256,231,264,234,270,239,279,242,280,248,288,243,293,247,300,245,306,235,303,228,302,222,305,211,305,197,299,192,305,179,309,169,315,160,327,156,322,149,328,145,321,140,315,144,311,138,306,132,306,144,297,143,291,148,282,143,285,150,276,141,272,147,267,151,261,155,261,161,255,166,247,169,246,180,240,182,235,175,230,178,226,182,226,188,224,196,224,203" >

    <area target="_blank" id="area4" alt="Jalna" title="Jalna" href="C:\Users\xyz\Desktop\ImageMapster-master\examples\maps\jalna.jpg" coords="294,249,302,253,310,250,316,249,321,253,328,250,329,260,336,254,336,260,345,257,348,247,348,236,349,228,345,224,352,221,355,215,362,213,358,203,347,206,340,202,333,197,328,194,334,190,339,185,343,176,347,166,344,166,338,161,334,167,329,168,326,163,329,158,330,148,335,143,331,136,327,143,325,148,323,155,317,153,310,158,309,165,304,171,305,181,299,187,301,197,304,203,304,211,300,215,299,224,303,231,300,239,295,241" >

    <area target="_blank" id="area5" alt="Hingoli" title="Hingoli" href="C:\Users\xyz\Desktop\ImageMapster-master\examples\maps\hingoli.jpg" coords="387,209,386,215,392,221,398,228,407,229,412,239,407,246,408,253,417,259,424,258,425,266,427,275,437,273,438,263,441,255,452,255,457,249,459,235,454,232,456,222,450,213,442,204,435,197,427,198,420,196,415,193,408,199,403,197,401,202,396,204" >

    <area target="_blank" id="area6" alt="Parbhani" title="Parbhani" href="C:\Users\xyz\Desktop\ImageMapster-master\examples\maps\parbhani.jpg" coords="344,253,349,259,354,264,361,258,364,264,362,273,369,272,372,280,377,287,385,288,385,294,392,297,395,306,402,302,409,299,416,298,423,297,411,291,418,290,421,285,423,277,428,270,428,265,423,258,418,259,411,255,406,248,411,241,413,233,406,229,400,226,396,222,391,216,387,210,381,206,374,203,368,200,362,201,362,208,359,214,354,216,351,222,346,224,349,232,349,240,349,247" shape="poly" onmouseover="this.focus();" onmouseout="this.blur();" data-maphilight='{"alwaysOn":true, "strokeColor":"000000","strokeWidth":2,"fillColor":"<?php echo $color;?>","fillOpacity":0.6}'>

    <area target="_blank" id="area7" alt="Nanded" title="Nanded" href="C:\Users\xyz\Desktop\ImageMapster-master\examples\maps\nanded.jpg" coords="414,291,420,294,420,303,423,311,432,308,435,313,440,319,443,326,437,331,444,334,451,342,457,351,467,346,460,338,470,333,466,327,473,324,480,319,479,311,485,306,490,296,499,294,489,285,483,281,485,275,488,268,493,262,492,254,502,251,507,258,515,257,519,249,526,243,531,235,527,226,534,219,530,212,532,202,525,202,517,203,511,200,502,198,491,203,489,210,492,216,500,218,510,221,513,229,507,238,500,237,492,235,484,239,478,242,472,239,480,235,470,232,466,225,455,220,458,230,458,239,454,248,448,252,438,258,432,265,432,272,430,265,424,276,423,284">

    <area target="_blank" id="area8" alt="Latur" title="Latur" href="C:\Users\xyz\Desktop\ImageMapster-master\examples\maps\latur.jpg" coords="360,326,356,332,355,344,359,354,353,360,360,363,365,369,373,371,385,375,393,382,399,388,407,389,413,381,413,372,417,364,427,360,435,356,439,349,442,341,446,334,438,330,446,325,437,318,433,313,426,314,420,315,425,308,418,305,413,299,402,303,396,307,396,311,393,317,389,322,395,328,387,330,378,332,372,326,365,322">

    <area target="_blank" id="area9" alt="Osmanabad" title="Osmanabad" href="C:\Users\xyz\Desktop\ImageMapster-master\examples\maps\osmanabad.jpg" coords="275,328,278,337,282,342,287,348,288,354,296,359,299,352,302,347,309,344,312,334,318,338,326,338,334,340,340,333,340,342,335,349,335,358,334,366,336,374,329,375,324,375,322,381,327,389,334,386,336,393,343,393,349,401,356,397,365,398,371,406,377,402,376,395,386,397,387,391,394,401,398,393,402,386,397,378,390,374,385,368,377,371,372,365,365,365,359,358,354,355,358,349,355,341,355,333,359,326,361,322,352,323,347,321,342,320,333,320,328,315,318,315,311,314,302,312,294,315,292,322,289,327,281,324">

</map>

</div>
</div></div></div></div></div>







</body>
</html>
