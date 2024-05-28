const button = document.getElementById('pay-button');
let clickCount = 0;

button.addEventListener('click', function() {
    clickCount++;

    if (clickCount === 2) {
        window.location.href = 'successful.html'; // Go to successful.html on the second click
    }
});