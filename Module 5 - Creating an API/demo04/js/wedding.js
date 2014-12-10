$(document).ready(function() {
	function loadRSVPs() {
		$.get("./api/?output=json", function(json) {
			if(json["status"] == "okay") {

				for(var i=0;i<json["data"].length;i++) {
					var rsvp = json["data"][i];

					var div = $("<div class='rsvp'></div>");
					var name = $("<h2>" + rsvp["name"] + "</h2>");

					div.append(name);

					if(rsvp["guest"] != "") {
						var guest = $("<h3>+ " + rsvp["guest"] + "</h3>");
						div.append(guest);
					}

					if(rsvp["attending"] == "1") {
						div.addClass("is-attending");
					}
					else {
						div.addClass("is-not-attending");
					}

					$(".api-content").append(div);
				}


			}
			else {
				console.log("Error!");
			}

		});
	}


	$(".load-btn").click(function() {
		$(this).hide();
		loadRSVPs();

		return false;
	})
});