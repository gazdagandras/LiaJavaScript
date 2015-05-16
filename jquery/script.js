
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
   
   // Fejezetek:
   $('.fejezetszoveg').hide();
   
   $('.fejezetcim').click(function() {
      console.log('Fejezetcímre kattintottak!');
      $(this).next('.fejezetszoveg').toggle(1000);
   });
   
   // Összeadás:
   $('#osszead').click(function() {
       var a = parseInt($('#a').val());
       var b = parseInt($('#b').val());
       
       $('#eredmeny').val(a + b);
   });
           
}); 