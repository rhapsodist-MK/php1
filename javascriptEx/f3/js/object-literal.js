var hotel = {
    name : 'Quay',
    rooms : 40,
    booked : 25,
    checkAvailability : function(){
        var free = this.rooms - this.booked;
        return free;
    }
};

var elName = document.getElementById('hotelName');
elName.textContent = hotel.name;

var elRoom = document.getElementById('rooms');
elRoom.textContent = hotel.checkAvailability();