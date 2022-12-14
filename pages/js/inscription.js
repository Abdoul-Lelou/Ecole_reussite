(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation');
    var age = document.querySelector('#validationServer07');

    // Loop over them and prevent submission
    // Array.prototype.slice.call(forms)
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
    })()
   
    const digits_only = string => [...string].every(c => '0123456789'.includes(c));

    function checkAge(){
        const age = document.querySelector('#validationServer07');
     
        if (age.value <18 || digits_only(age.value) === false){
                document.querySelector('.invalid-age').style.display='block';
                document.querySelector('.invalid-age').style.color='red';
            setTimeout(()=>{
                document.querySelector('.invalid-age').style.display='none';
                document.querySelector('#validationServer07').value='';
            },3000);
        }
    }

    function checkTel(){
        const tel = document.querySelector('#validationServer08');
        
        if (tel.value.length <9 || digits_only(tel.value) === false){
                document.querySelector('.invalid-tel').style.display='block';
                document.querySelector('.invalid-tel').style.color='red';
            setTimeout(()=>{
                document.querySelector('.invalid-tel').style.display='none';
                document.querySelector('#validationServer08').value='';
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

   