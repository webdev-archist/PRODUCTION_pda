	(function($) {
		var myLatlng;
		$.map = {
			// ===============================================================
				initEvents: function(){
					// -------------------------------------------------------
						// - - - - - - - - - - - - - - - - - - - - - - - - - -
						//	$.map.initMap();
							$("#routeBtn").mouseover(function(){$(this).css({'background':'#ebebeb'});});
							$("#routeBtn").mouseout(function(){$(this).css({'background':'#ffffff'});});
							$("#routeBtn").click(function(){$.map.openRoute();});
							$("#close").click(function(){$.map.closeRoute();});
							$("#replanBtn").click(function(){$.map.initRoute();});
						// - - - - - - - - - - - - - - - - - - - - - - - - - -
					// -------------------------------------------------------
				},
			// ===============================================================
				getCookie: function(c_name) {
					var i,x,y,ARRcookies=document.cookie.split(";");
					for (i=0;i<ARRcookies.length;i++){
						x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
						y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
						x=x.replace(/^\s+|\s+$/g,"");
						if (x==c_name) {
							return unescape(y);
						}
					}
					return "";
				},
				setCookie: function(sName, sValue, sDays) {
					var exdate=new Date();
					exdate.setDate(exdate.getDate() + sDays);
					var sValue=escape(sValue) + ((sDays==null) ? "" : "; expires="+exdate.toUTCString()) + "; path=/";
					document.cookie=sName + "=" + sValue;
				},
			// ===============================================================
				initMap: function(Zoom,Latitude,Longitude,Width,Height,Controls,MapType,Overview,Scale,Info) {
					$("#map").width(Width);
					$("#map").height(Height);
					
					myLatlng = new google.maps.LatLng(Latitude,Longitude);
				//	myLatlng2 = new google.maps.LatLng((Latitude*1)+0.02,Longitude);
					var mapOptions = { zoom:Zoom, center:myLatlng, mapTypeId:google.maps.MapTypeId.ROADMAP }
					if ( Controls == "Small" ) { mapOptions.zoomControlOptions = {style:google.maps.ZoomControlStyle.SMALL}; } else { mapOptions.zoomControlOptions = {style:google.maps.ZoomControlStyle.LARGE}; }
					if ( MapType == "True" ) { mapOptions.mapTypeControl = true; $("#routeBtn").css({'left':$("#map").width()-220}); } else { mapOptions.mapTypeControl = false; $("#routeBtn").css({'left':$("#map").width()-120}); }
					if ( Overview == "True" ) { mapOptions.overviewMapControl = true; } else { mapOptions.overviewMapControl = false; }
					if ( Scale == "True" ) { mapOptions.scaleControl = true; } else { mapOptions.scaleControl = false; }
					var myMap = new google.maps.Map(document.getElementById('map'), mapOptions);
					var contentString = $("#mapText").html();
					if ( Info == "Marker" ) {
						var marker = new google.maps.Marker({ position:myLatlng, map:myMap });
						google.maps.event.addListener(marker,'click',function(){ var infowindow = new google.maps.InfoWindow({ content:contentString });infowindow.open(myMap,marker); });
					}
					if ( Info == "Window" ) {
						var infowindow = new google.maps.InfoWindow({ position:myLatlng2, map:myMap, content:contentString });
						infowindow.open(myMap,marker);
					}
					if ( Info == "Both" ) {
						var marker = new google.maps.Marker({ position:myLatlng, map:myMap });
						google.maps.event.addListener(marker,'click',function(){ var infowindow = new google.maps.InfoWindow({ content:contentString });infowindow.open(myMap,marker); });
						setTimeout(function(){ google.maps.event.trigger(marker, 'click'); },2000);
					}
					$.map.initPlace();
				},
			// ===============================================================
				initPlace: function() {
					$("#routeLeft").css({'left':0});
					$("#routeLeft").height($("#map").height());
					$("#routePlan").width(($("#map").width()/2)-15);
					$("#routePlan").height($("#map").height()-20);
					$("#routeMap").width(($("#map").width()/2)-35);
					$("#routeMap").height($("#map").height()-40);
					$("#routeRight").css({'left':$("#map").width()});
					$("#routeRight").height($("#map").height());
					$("#routeTxt").width(($("#map").width()/2)-15);
					$("#routeTxt").height($("#map").height()-20);
					$("#routeBtn").css({'display':'block'});
					$("#origin").width($("#routePlan").width()-35);
					$("#replanBtn").width($("#routePlan").width()-12);
					$("#panel").width($("#routePlan").width()-12);
					$("#panel").height($("#map").height()-80);
					$("#dim").width(0);
					$("#dim").height(0);
				},
			// ===============================================================
				getLocation: function() {
					if(navigator.geolocation){
						navigator.geolocation.getCurrentPosition(
							function(position){
								var latitude = position.coords.latitude;
								var longitude = position.coords.longitude;
								var altitude = position.coords.altitude;
								$.map.getAddress(latitude, longitude);
							}
						);
					}
				},
			// ===============================================================
				getAddress: function(latitude,longitude) {
					var geocoder = new google.maps.Geocoder();
					var latlng2 = new google.maps.LatLng(latitude, longitude);
					geocoder.geocode({'latLng':latlng2},function(data,status){
						if(status == google.maps.GeocoderStatus.OK){
							var add = data[1].formatted_address;
							$("#origin").val(add);
							$.map.initRoute();
						}
					});
				},
			// ===============================================================
				initRoute: function() {
					$("#panel").html();
					$("#routeMap").html();
					var myOptions = {
						zoom      : 15,
						center    : myLatlng,
						mapTypeId : google.maps.MapTypeId.ROADMAP
					};
					var map2      = new google.maps.Map(document.getElementById('routeMap'), myOptions);
					var panel2    = document.getElementById('panel');
  					var initialize;
					var calculate;
					var direction;
					var origin      = $("#origin").val();
					var destination = $("#destination").html();
					direction = new google.maps.DirectionsRenderer({
						map   : map2, 
						panel : panel2 
					});
					if(origin && destination){
						var request = {
							origin      : origin,
							destination : destination,
							travelMode  : google.maps.DirectionsTravelMode.DRIVING
						}
						var directionsService = new google.maps.DirectionsService();
						directionsService.route(request, function(response, status){
							$(".adp").remove();
							$("#panel").html();
							$("#routeMap").html();
							if(status == google.maps.DirectionsStatus.OK){
								direction.setDirections(response);
							}
						});
					}
				},
			// ===============================================================
				openRoute: function() {
					$("#dim").width($("#map").width());
					$("#dim").height($("#map").height());
					$("#dim").animate({opacity:0.8},500,function(){
						$("#routeLeft").animate({width:$("#map").width()/2},500);
						$("#routeRight").animate({width:$("#map").width()/2,left:$("#map").width()/2},500,function(){
							$.map.getLocation();
						});
					});
				},
				closeRoute: function() {
					$("#routeLeft").animate({width:0},500);
					$("#routeRight").animate({width:0,left:$("#map").width()},500,function(){
						$("#dim").animate({opacity:0},500,function(){
							$.map.initPlace();
						});
					} );
				},
			// ===============================================================
				fctEnd: function() {}
			// ===============================================================
		}
	})(jQuery);
	
	
	$(document).ready(function(){ 
		// ===================================================================
			$.map.initEvents();
		// ===================================================================
	});
