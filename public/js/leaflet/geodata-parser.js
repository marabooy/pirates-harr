$(document).ready(function () {
    var map = L.map('map').setView([0, 38.02], 5);


    var FruitIcons = L.Icon.extend({
        options: {
            iconSize: [40/2, 40/2],
//            shadowSize:   [50, 64],
            iconAnchor: [22/3, 94/3],
//            shadowAnchor: [4, 62],
            popupAnchor: [-3/3, -76/3]
        }
    });

    var greenIcon = new FruitIcons({iconUrl: '/img/leaflet/fruits.png'});
    var redIcon = new FruitIcons({iconUrl: '/img/leaflet/fruits-red.png'});
    var yellowIcon = new FruitIcons({iconUrl: '/img/leaflet/fruits-yellow.png'});
    var orangeIcon = new FruitIcons({iconUrl: '/img/leaflet/fruits-orange.png'});
    var whiteIcon = new FruitIcons({iconUrl: '/img/leaflet/fruits-grey.png'});


    L.tileLayer('http://{s}.tile.cloudmade.com/{key}/22677/256/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; 2011 OpenStreetMap contributors, Imagery &copy; 2012 CloudMade',
        key: 'BC9A493B41014CAABB98F0471D759707'
    }).addTo(map);


    function openDesMapStart() {
        readFile();
    };
    function readFile() {

        $.get('/map-data', function (data) {
            showMap(data);
        });

    };


    function showMap(data) {


        data.forEach(function (model) {
            if (model.location.length == 2) {
                var icon = getIcon(model);

                L.marker(model.location, {icon: icon}).addTo(map).bindPopup(model.county + ":county ");
            }
        });


    };


    function getIcon(model) {
        var povertylevel = Math.round(model.poverty_level / 25);


        switch (povertylevel - 1) {
            case  0:
                return greenIcon;
            case  1:
                return yellowIcon;

            case  2:
                return orangeIcon;
            case 3:
                return redIcon;
            default :
                return whiteIcon;

        }
    };

    openDesMapStart();


});
