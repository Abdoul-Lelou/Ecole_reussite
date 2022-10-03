(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation');
    var age = document.querySelector('#validationServer07');

    const selectElement = document.querySelector('#validationServer07');

            selectElement.addEventListener('submit', (event) => {
            const result = document.querySelector('.result');
            result.textContent = `You like ${event.target.value}`;
            event.preventDefault()
            event.stopPropagation()
            });

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
    function checkTel(){
        const age = document.querySelector('#validationServer08');

        if (age.value.length <9){
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