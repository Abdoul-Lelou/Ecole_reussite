/* let montant = document.getElementById('montant').value 
console.log(montant);
montant.addEventListener("keyup", () => {
    if (!Number.isInteger(montant)){
        let invalid = document.querySelector('.invalid-feedback');
        invalid.setAttribute('style', "display: block;");
    }
})
 */

(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation');
   

    // Loop over them and prevent submission
    // Array.prototype.slice.call(forms)
    forms.forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }
            // spinBtn();
            form.classList.add('was-validated');
        }, false)
        })
})()

const digits_only = string => [...string].every(c => '0123456789'.includes(c));

    function checkmontant(){
        const montant = document.querySelector('#validationServer02');
     
        if (montant.value <18 || digits_only(montant.value) === false){
                document.querySelector('.invalid-montant').style.display='block';
                document.querySelector('.invalid-montant').style.color='red';
            setTimeout(()=>{
                document.querySelector('.invalid-montant').style.display='none';
                document.querySelector('#validationServer02').value='';
            },3000);
        }
    }