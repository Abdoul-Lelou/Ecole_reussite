function btnLoad() {
    let spinOff = document.getElementById('spinOff');
    let spinOn = document.getElementById('spinOn');

    spinOn.style.display="none";
    spinOff.style.display="block";
    setTimeout(() => {
        spinOn.style.display="block";
        spinOff.style.display="none";
    }, 2000);
}
