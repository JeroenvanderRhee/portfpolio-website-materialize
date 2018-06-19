jQuery(document).ready(function($){

$( "nav ul li:first-child" ).click(function() {
  $( "nav ul li:not(:first-child)" ).slideToggle( 300, function() {
  });
});

});
