const eyeOnClick = document.querySelector('#zmdi');

eyeOnClick.addEventListener('click', function eyeChange() {
    if (eyeOnClick.classList.contains('zmdi-eye')) {
        eyeOnClick.classList.remove('zmdi-eye');
        eyeOnClick.classList.add('zmdi-eye-off');
    } else if (!eyeOnClick.classList.contains('zmdi-eye')) {
        eyeOnClick.classList.remove('zmdi-eye-off');
        eyeOnClick.classList.add('zmdi-eye');
    }
});