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
        const userAge = age.value;
        if (userAge < 18 || !userAge.isNumber()){
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
        const userTel = parseInt(tel);
        if (userTel.length <18 || typeof userTel === 'string'){
                document.querySelector('.invalid-tel').style.display='block';
                document.querySelector('.invalid-tel').style.color='red';
            setTimeout(()=>{
                document.querySelector('.invalid-tel').style.display='none';
                document.querySelector('#validationServer08').value='';
            },3000);
        }
    }

    function hideMsg() {
        let msg= document.querySelector('#erroMsg');
        setTimeout(() => {
            msg.remove();
        }, 2000);
    }
    