
$(document).ready(function(){

   $('#hideBox').click(function(){
       //alert('Tűnj el!');
       console.log('Elrejtés gombra kattintottak!');
       
       // jQuery:
       $('#box').hide();
       // JavaScript:
       //document.getElementById("box").style.display="none";
       
   });

}); 