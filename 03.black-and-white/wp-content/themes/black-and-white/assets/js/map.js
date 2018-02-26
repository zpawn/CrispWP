(function() {
    'use strict';

    const API_KEY = 'AIzaSyBYGEtn-zAItcQi72nY7vD0mnLUTla4o-Y';
    var tag = document.createElement('script');
    var firstScriptTag = document.getElementsByTagName('script')[0];

    tag.src = 'https://maps.googleapis.com/maps/api/js?key='+ API_KEY +'&callback=initMap&libraries=places';
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    function setMapMarkers (map) {

        var markers = [];

        var cities = [{
            coordinates: [36.23099, 49.986477],
            name: 'Kharkiv'
        }];

        var infoWindow = new google.maps.InfoWindow();

        for (var i = 0; i < cities.length; i += 1) {
            var city = cities[i];

            markers[i] = new google.maps.Marker({
                position: {lat: city.coordinates[1], lng: city.coordinates[0]},
                map: map,
                title: city.name,
                zIndex: i
            });

            google.maps.event.addListener(markers[i], 'click', (function(marker, i) {
                return function() {
                    infoWindow.setContent(
                        '<p>Brightgrove LTD.,</p>' +
                        '<p>1A Kooperativnaja Str. Kharkiv, Ukraine, 61003</p>'
                    );
                    infoWindow.open(map, marker);
                }
            })(markers[i], i));
        }
    }

    function initMap () {

        var centerUkraine = {lat: 49.986477, lng: 36.23099};

        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('googleMaps'), {
            center: centerUkraine,
            scrollwheel: false,
            zoom: 18,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        setMapMarkers(map);
    }

    window.initMap = initMap;
})();
