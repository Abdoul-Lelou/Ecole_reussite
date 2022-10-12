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
function verifie(){
    let username=document.getElementById('username');
    let passwords=document.getElementById('passwords');
    let erreur = document.getElementsByClassName('erreur');

    if(username === username.value && passwords===passwords.value){
        erreur.innerHTML ='username ou password incorrect';

    }else{
        erreur.innerHTML ='correct';

    }

}
