
$(document).ready(function(){

   $('#hideBox').click(function(){
       //alert('Tűnj el!');
       console.log('Elrejtés gombra kattintottak!');
       
       // jQuery:
       $('#box').hide(1000);
       // JavaScript:
       //document.getElementById("box").style.display="none"; 
   });
   
   $('#showBox').click(function() {
       $('#box').show(1000);
   });
           
}); 