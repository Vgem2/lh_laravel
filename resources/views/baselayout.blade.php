<!doctype html>

<html lang="hu">
    
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Local Heroes</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" >
<script src="./js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="./css/product.css" rel="stylesheet">
  </head>

  <body>
       @include('parts.nav')
     
      @include ('parts.header')
      
      @yield('inner_title')
       <div class="container">
     
         @yield ('content')

      </div>
     
   
@include ('parts.footer')


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
-->
      <script src="./js/jquery.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript">
    /*  Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });*/
        
$(function(){

    
     var dataArray=new Array();
        dataArray[0]="bg1.jpg";
        dataArray[1]="bg2.jpg";
        dataArray[2]="bg3.jpg";
        dataArray[3]="bg0.jpg";

    
     var thisId=0;
window.setInterval(function ( ) {
     $("#BG").fadeOut(700, function() {
        $("#BG").attr("src","img/"+dataArray[thisId]);
    }).fadeIn(700);
          
            thisId++; 
            if (thisId==4) thisId=0; 
        },10000);        
});
    </script>
      <script>
function dropDown() {
  var x = document.getElementById("navBar");
  if (!x.className.includes("responsive")) {
    x.className += " responsive";
  } else {
    x.className = "d-flex flex-column flex-md-row justify-content-between";
  }
}
</script>
  </body>
</html>
