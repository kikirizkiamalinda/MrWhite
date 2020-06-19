$(document).ready(function(){
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500000,
      values: [ 25000, 100000 ],
      slide: function( event, ui ) {
        $( "#amount_start" ).val( ui.values[ 0 ]);
        $( "#amount_end" ).val(ui.values[ 1 ]);
      }
    });
  } );
});