/*!
 * Start Bootstrap - Grayscale Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

// Google Maps Scripts
// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);

function init() {
    var mapOptions = {
        zoom: 15,
        center: new google.maps.LatLng(46.123048,3.420259), // Vichy
        scrollwheel: true,
        draggable: true,
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2e5d4"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{"featureType":"road","elementType":"all","stylers":[{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]}]
    };

    // Get the HTML DOM element that will contain your map 
    var mapElement = document.getElementById('map');
    // Create the Google Map using out element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);
    // Custom Map Marker Icon
    var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|386890",
            new google.maps.Size(21, 34),
            new google.maps.Point(0,0),
            new google.maps.Point(10, 34));
    // Palais des congres (center)
    var palais = new google.maps.Marker({
        position: new google.maps.LatLng(46.123048,3.420259),
        map: map,
        title: 'Palais des Congrès',
        icon: pinImage
    });
    
    // HOTELS -------------------------
    var hotelImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|FF8000",
            new google.maps.Size(21, 34),
            new google.maps.Point(0,0),
            new google.maps.Point(10, 34));
    
    var aletti = new google.maps.Marker({
        position: new google.maps.LatLng(46.123392, 3.418761),
        map: map,
        title: 'Aletti ****',
        icon: hotelImage
    });
    
    var nations = new google.maps.Marker({
        position: new google.maps.LatLng(46.121815, 3.418858),
        map: map,
        title: 'Les Nations ***',
        icon: hotelImage
    });
    
    var grignan = new google.maps.Marker({
        position: new google.maps.LatLng(46.121295, 3.420500),
        map: map,
        title: 'Hotel de Grignan ***',
        icon: hotelImage
    });
    
    var moderne = new google.maps.Marker({
        position: new google.maps.LatLng(46.126826, 3.420912),
        map: map,
        title: 'Moderne **',
        icon: hotelImage
    });
    
    var mercure = new google.maps.Marker({
        position: new google.maps.LatLng(46.126504, 3.419777),
        map: map,
        title: 'Mercure ****',
        icon: hotelImage
    });
    
    var ibis = new google.maps.Marker({
        position: new google.maps.LatLng(46.127745, 3.420132),
        map: map,
        title: 'Ibis **',
        icon: hotelImage
    });
    
    var chambord = new google.maps.Marker({
        position: new google.maps.LatLng(46.126752, 3.429307),
        map: map,
        title: 'Chambord **',
        icon: hotelImage
    });
}
