$(function(){

    
     var dataArray=new Array();
        dataArray[0]="bg1.png";
        dataArray[1]="bg2.png";
        dataArray[2]="bg3.png";
        dataArray[3]="bg0.png";

    
     var thisId=0;
window.setInterval(function ( ) {
     $("#BG").fadeOut(1000, function() {
        $("#BG").attr("src","img/"+dataArray[thisId]);
    }).fadeIn(800);
          
            thisId++; 
            if (thisId==3) thisId=0; 
        },10000);        
});