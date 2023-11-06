const segments = document.querySelectorAll('.segment');
let currentSegment = 0;

document.getElementById('prev').addEventListener('click', () => {
    showSegment(currentSegment - 1);
});

document.getElementById('next').addEventListener('click', () => {
    showSegment(currentSegment + 1);
});

function showSegment(index) {
    if (index < 0) {
        index = segments.length - 1;
    } else if (index >= segments.length) {
        index = 0;
    }

    segments[currentSegment].classList.remove('current');
    currentSegment = index;
    segments[currentSegment].classList.add('current');

    if (currentSegment === 0) {
        document.getElementById('prev').style.visibility = 'hidden';
    } else {
        document.getElementById('prev').style.visibility = 'visible';
    }

    if (currentSegment === segments.length - 1) {
        document.getElementById('next').style.visibility = 'hidden';
    } else {
        document.getElementById('next').style.visibility = 'visible';
    }
}

showSegment(currentSegment);

function showThankYouMessage() {
    var feedbackForm = document.getElementById('feedbackForm');
    var feedback = feedbackForm.elements['feedback'].value;
    if (feedback === 'Так') {
        alert("Дякую за відгук! Це важливо для нас.");
    } else if (feedback === 'Ні') {
        alert("Дякую за відгук! Ми покращимо нашу інформацію.");
    } else {
        alert("Будь ласка, виберіть відповідь.");
    }
}
