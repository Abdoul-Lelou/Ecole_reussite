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

        const age = document.querySelector('#validationServer05');

        if (age.value <6){

        const age = document.querySelector('#validationServer05');

        if (age.value <6){
                document.querySelector('.invalid-age').style.display='block';
                document.querySelector('.invalid-age').style.color='red';
            setTimeout(()=>{
                document.querySelector('.invalid-age').style.display='none';
                document.querySelector('#validationServer05').value='';
                document.querySelector('#validationServer05').value='';
            },3000);
        }
    }
}

function checkNiveau(){

    const niveau1 = document.querySelector('#validationServer07');
    const niveau2 = document.querySelector('#validationServer09').value.split('_');


    if (niveau1.value != niveau2){
            document.querySelector('.invalid-niveau').style.display='block';
            document.querySelector('.invalid-niveau').style.color='red';
        setTimeout(()=>{
            document.querySelector('.invalid-niveau').style.display='none';
            document.querySelector('#validationServer09').value='';
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
    },2000);

}
