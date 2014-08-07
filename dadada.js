var api = pinoccioAPI();
api.token = "7a7d184fb7a3fd6a0b32254b903998a7";
var troopId = 4;
var scoutId = 1;

var scoutPost = function (strip, red, green, blue) {
	api.rest({
	  url:"/v1/"+troopId+"/"+scoutId+"/command",
	  data:{
	    command:"dadada.wcolor(" + strip + "," + red + "," + green + "," + blue + ")"
	  }
	})		
}

$().ready(function(){
	var RGBChange = function() {
		$('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')');
		var selectedChannel = $("#channel input[type='radio']:checked");
		scoutPost(selectedChannel, r.getValue(), g.getValue(), b.getValue());
	};


	var r = $('#R').slider()
			.on('slide', RGBChange)
			.data('slider');
	var g = $('#G').slider()
			.on('slide', RGBChange)
			.data('slider');
	var b = $('#B').slider()
			.on('slide', RGBChange)
			.data('slider');
	var channel = $()

	$('#ex1').slider({
		formater: function(value) {
			return 'Current value: ' + value;
		}
	});
});