var hotel = new Object();

hotel.name = 'Park';
hotel.rooms = 120;
hotel.booked = 77;
hotel.checkAvailability = function(){
    return this.rooms - this.booked;
}

var elName = document.getElementById('hotelName');
var elRooms = document.getElementById('rooms');

elName.textContent = hotel.name;
elRooms.textContent = hotel.checkAvailability();