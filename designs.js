// Select color input
// Select size input

// When size is submitted by the user, call makeGrid()
var canvas = $('#pixel_canvas');



function makeGrid() {
	var cell, height,width, row;
	height = $('#input_height').val();
	width = $('#input_width').val();



for( var r = 0 ; r < height; r++){
     canvas.append('<tr></tr>');
}
  row =$('tr');
for( var c = 0 ; c < width; c++){
     row.append('<td></td>');

  }

cell = canvas.find("td");

cell.on('click',function(){
  var color =   $('input[type="color"]').val() ;
 $(this).attr( 'bgcolor', color);
});
}

canvas.on('dblclick','td',function (){
 $(this).attr('bgcolor','transparent');
});

$('#ton').click (function(event){
  event.preventDefault();
 canvas.children().remove();
 $('#input_height').val('1');
$('#input_width').val('1');
});


var submitQuery;

submitQuery = $('input[type="submit"]');

submitQuery.click(function(event) {
  event.preventDefault();
  makeGrid();
  });
