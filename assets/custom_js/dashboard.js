function initMap() {
    var alhanif = {
        lat: -7.316622,
        lng: 108.205380
    };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        center: alhanif
    });
    var marker = new google.maps.Marker({
        position: alhanif,
        map: map
    });
}