	/*!
 	* GM Google Maps
 	* version: 1.1 (10 April, 2016)
 	* require: jQuery v1.12+
 	*/
       
       
       
    function initMap() {
        var uluru = {lat: 5.69266, lng: 0.0061053}; // CHANGE COORDINATES HERE // // CHANGE COORDINATES HERE //
        var map = new google.maps.Map(document.getElementById('map'), {
        	zoom: 14,
        	options: {
            styles: [{
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#ebe3cd"
                        },
                        {
                          "weight": 2
                        }
                      ]
                    },
                    {
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#523735"
                        }
                      ]
                    },
                    {
                      "elementType": "labels.text.stroke",
                      "stylers": [
                        {
                          "color": "#f5f1e6"
                        }
                      ]
                    },
                    {
                      "featureType": "administrative",
                      "elementType": "geometry.stroke",
                      "stylers": [
                        {
                          "color": "#c9b2a6"
                        }
                      ]
                    },
                    {
                      "featureType": "administrative.land_parcel",
                      "elementType": "geometry.stroke",
                      "stylers": [
                        {
                          "color": "#dcd2be"
                        }
                      ]
                    },
                    {
                      "featureType": "administrative.land_parcel",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#ae9e90"
                        }
                      ]
                    },
                    {
                      "featureType": "landscape.natural",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#dfd2ae"
                        }
                      ]
                    },
                    {
                      "featureType": "poi",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#dfd2ae"
                        }
                      ]
                    },
                    {
                      "featureType": "poi",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#93817c"
                        }
                      ]
                    },
                    {
                      "featureType": "poi.park",
                      "elementType": "geometry.fill",
                      "stylers": [
                        {
                          "color": "#a5b076"
                        }
                      ]
                    },
                    {
                      "featureType": "poi.park",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#447530"
                        }
                      ]
                    },
                    {
                      "featureType": "road",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#f5f1e6"
                        }
                      ]
                    },
                    {
                      "featureType": "road.arterial",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#fdfcf8"
                        }
                      ]
                    },
                    {
                      "featureType": "road.highway",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#f8c967"
                        }
                      ]
                    },
                    {
                      "featureType": "road.highway",
                      "elementType": "geometry.stroke",
                      "stylers": [
                        {
                          "color": "#e9bc62"
                        }
                      ]
                    },
                    {
                      "featureType": "road.highway.controlled_access",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#e98d58"
                        }
                      ]
                    },
                    {
                      "featureType": "road.highway.controlled_access",
                      "elementType": "geometry.stroke",
                      "stylers": [
                        {
                          "color": "#db8555"
                        }
                      ]
                    },
                    {
                      "featureType": "road.local",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#806b63"
                        }
                      ]
                    },
                    {
                      "featureType": "transit.line",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#dfd2ae"
                        }
                      ]
                    },
                    {
                      "featureType": "transit.line",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#8f7d77"
                        }
                      ]
                    },
                    {
                      "featureType": "transit.line",
                      "elementType": "labels.text.stroke",
                      "stylers": [
                        {
                          "color": "#ebe3cd"
                        }
                      ]
                    },
                    {
                      "featureType": "transit.station",
                      "elementType": "geometry",
                      "stylers": [
                        {
                          "color": "#dfd2ae"
                        }
                      ]
                    },
                    {
                      "featureType": "water",
                      "elementType": "geometry.fill",
                      "stylers": [
                        {
                          "color": "#b9d3c2"
                        }
                      ]
                    },
                    {
                      "featureType": "water",
                      "elementType": "labels.icon",
                      "stylers": [
                        {
                          "weight": 1
                        }
                      ]
                    },
                    {
                      "featureType": "water",
                      "elementType": "labels.text.fill",
                      "stylers": [
                        {
                          "color": "#92998d"
                        }
                      ]
                    }]
            },
          scrollwheel: false,
          draggable: true,
          center: {lat: 5.69266, lng: 0.0061053} // CHANGE COORDINATES HERE // // CHANGE COORDINATES HERE //
        });
        var marker = new google.maps.Marker({
          position: uluru,
          options: {icon: "img/assets/marker.png"},
          map: map
        });
        var content = '<h4>BD Associates Ghana Limited</h4>Heavy Industrial Area, Freezone Enclave - 4th Montreal Street, Tema, Ghana'
        var infowindow = new google.maps.InfoWindow();
        infowindow.setContent(content);
        infowindow.open(map,marker);
        
    }