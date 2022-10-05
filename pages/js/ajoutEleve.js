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

function checkAge(){
    const age = document.querySelector('#validationServer07');

    if (age.value <18){
            document.querySelector('.invalid-age').style.display='block';
            document.querySelector('.invalid-age').style.color='red';
        setTimeout(()=>{
            document.querySelector('.invalid-age').style.display='none';
            document.querySelector('#validationServer07').value='';
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
    },2000)

}