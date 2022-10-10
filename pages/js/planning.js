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


function checkStartTime() {
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

function checkEndTime() {
    let heureStart = document.querySelector('#heure');
    let heureEnd = document.querySelector('#heureEnd');

    let heureEndSplit = heureEnd.value.split(':');
    let heureStartSplit = heureStart.value.split(':');

    let heureSplitStart= heureStartSplit[0];
    let heure= heureEndSplit[0];
    let minute= heureEndSplit[1];
   

    if (heure < 8 || heure > 17 || heure >12 && heure <15 || (minute> 0 && minute !=30 )) {
        document.querySelector('.invalid-heureEnd').style.display='block';
        document.querySelector('.invalid-heureEnd').style.color='red';
        setTimeout(()=>{
            document.querySelector('.invalid-heureEnd').style.display='none';
            document.querySelector('#heureEnd').value='';
        },3000);
    }else if(heureSplitStart > heure || heureSplitStart == heure || heureSplitStart-heure== 30){
            document.querySelector('.invalid-heureEnd').style.display='block';
            document.querySelector('.invalid-heureEnd').style.color='red';
            setTimeout(()=>{
                document.querySelector('.invalid-heureEnd').style.display='none';
                document.querySelector('#heureEnd').value='';
            },3000);
    }
}

function checkDate() {
    const datePicker = document.querySelector('#validationServer01');
    var day = new Date(datePicker.value).getUTCDay();

    if(day == 0 || day == 6){
        document.querySelector('.invalid-date').style.display='block';
        document.querySelector('.invalid-date').style.color='red';
        setTimeout(()=>{
            document.querySelector('.invalid-date').style.display='none';
            datePicker.value='';
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