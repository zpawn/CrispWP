(function ($) {
    'use strict';

    var acfGoogleMap = $('.js-acf-google-map');

    if (acfGoogleMap.length) {

        const API_KEY = $(acfGoogleMap[0]).data('googleMapsApiKey');

        var tag = document.createElement('script'),
            firstScriptTag = document.getElementsByTagName('script')[0];

        tag.src = 'https://maps.googleapis.com/maps/api/js?key='+ API_KEY +'&callback=initMap&libraries=places';
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    }

    function setMapMarkers (map, position) {

        var infoWindow = new google.maps.InfoWindow(),
            marker = new google.maps.Marker({
                position: {lat: position.lat, lng: position.lng},
                map: map
            });

        infoWindow.setContent(
            '<p>Brightgrove LTD.,</p>' +
            '<p>1A Kooperativnaja Str. Kharkiv, Ukraine, 61003</p>'
        );

        google.maps.event.addListener(marker, 'click', (function() {
            infoWindow.open(map, marker);
        }));

        infoWindow.open(map, marker);
    }

    function initMap () {

        $('.js-acf-google-map').each(function (index, elmMap) {

            var position = {
                    lat: parseFloat(elmMap.dataset.googleMapsApiLat),
                    lng: parseFloat(elmMap.dataset.googleMapsApiLng)
                };

            // Create a map object and specify the DOM element for display.
            var map = new google.maps.Map(elmMap, {
                center: {
                    lat: position.lat,
                    lng: position.lng
                },
                scrollwheel: false,
                zoom: 18,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            setMapMarkers(map, position);
        });


    }

    window.initMap = initMap;
})(jQuery);
