var startTime = '5:45 PM',
    endTime = '7:30 PM',
    coursePrice = '$100',
    places = 40,
    placesBox = document.getElementById('place'),
    priceBox = document.getElementById('c-price'),
    startTimeBox = document.getElementById('start-time'),
    endTimeBox = document.getElementById('end-time');

startTimeBox.textContent = startTime;
endTimeBox.textContent = endTime;
priceBox.textContent = coursePrice;
placesBox.textContent = places;