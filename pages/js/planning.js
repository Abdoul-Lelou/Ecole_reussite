(function (){
    'use strict'
  
    var forms = document.querySelectorAll('.needs-validation');
  
  
    forms.forEach(function (form) {
      form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
          }
          spinBtn();
          form.classList.add('was-validated');
      }, false)
      })
  }
  
  ) ()


function checkTime() {
    let heures = document.querySelector('#heure');
    let heureSplit = heures.value.split(':');
    let heure= heureSplit[0];
    let minute= heureSplit[1];

    if (heure < 8 || heure > 18 || (minute> 0 && minute !=30 )) {
        document.querySelector('.invalid-heure').style.display='block';
        document.querySelector('.invalid-heure').style.color='red';
    setTimeout(()=>{
        document.querySelector('.invalid-heure').style.display='none';
        document.querySelector('#heure').value='';
    },3000);
    }else if(heure >12 && heure <15){
            document.querySelector('.invalid-heure').style.display='block';
            document.querySelector('.invalid-heure').style.color='red';
        setTimeout(()=>{
            document.querySelector('.invalid-heure').style.display='none';
            document.querySelector('#heure').value='';
        },3000);
    }
}

function spinBtn(){
    const spinOn = document.querySelector('.spinOn');
    const spinOff = document.querySelector('.spinOff');

    spinOff.style.display = "none";
    spinOn.style.display = "block"

    setTimeout(()=>{
        spinOff.style.display = "block";
        spinOn.style.display = "none";
    },1200)

}