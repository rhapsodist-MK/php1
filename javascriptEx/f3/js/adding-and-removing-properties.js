var hotel = {
    name : 'Park',
    rooms : 120,
    booked : 77,
};


hotel.gym = true;
hotel.pool = false;

delete hotel.booked;

var elName = document.getElementById('hotelName');
var elPool = document.getElementById('pool');
var elGym = document.getElementById('gym');

elName.textContent = hotel.name;
elPool.className = '수영장 : ' + hotel.pool;
elGym.className = '체력단련실 : ' + hotel.gym;