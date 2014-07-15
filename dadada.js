var api = pinoccioAPI();


//replace this with your main access token to test running commands
api.token = "7a7d184fb7a3fd6a0b32254b903998a7";


// to make a "rest" or webservice call use api.rest
// - url: the url of the rest service in the documentation. 
// - method: for the http method GET/POST etc. 
// - data: for service arguments
// 
// in this example we are making the led red!
// 
// set the troop an scout id to the correct ids for the troop you have connected.
var troopId = 4;
var scoutId = 1;

var scoutPost = function (strip, red,green,blue) {
	// console.log(red + green + blue);
	//url = "/v1/"+troopId+"/"+scoutId+"dadada.wcolor(" + strip + "," + red + "," + green + "," + blue + ")"
	api.rest({
	  url:"/v1/"+troopId+"/"+scoutId+"/command",
	  data:{
	    command:"dadada.wcolor(" + strip + "," + red + "," + green + "," + blue + ")"
	  }
	})		
}

$(document).ready(function(){
$('.slider').slider()
	.on('slide'), function(e){
		console.log("slid");
	}

  $("#red").click(function(){
		scoutPost(0,255,0,0);
  });
  $("#blue").click(function(){
		scoutPost(1,0,0,255);
  });
  $("#green").click(function(){
	api.rest({
	  url:"/v1/"+troopId+"/"+scoutId+"/command",
	  data:{
	    command:"dadada.wcolor(0,0,255,0)"
	  }
	},function(error,result){
	  // this is where you find out of the command was successful if(!error)
	  // and read the result. for commands that print results.
	  if(error) return $("#out").text('ERROR: '+(error.message||error+''));
	  // setting the led does not print a result.
	  $("#out").html("success!");
	})
  });
});

$("#out").text("sending command to troop "+troopId+" and scout "+scoutId);
// after you finsih with this fiddle you might want to check out
// http://jsfiddle.net/soldair/NYPTf/2/
