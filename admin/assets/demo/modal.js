
const addResident = $('.resident-add-modal');

$(document).ready(function(){

    $('#dataTable').DataTable();
    
    $('#resident-add-btn').on('click', function(){
    addResident.fadeIn();
    console.log('wew');
    $('.resident-add-content').load('resident-information-add.html');
    });

    $('.view-btn').on('click', function(){
        addResident.fadeIn();
        $('.resident-add-content').load('resident-information-view.html');
    });
});

// const addResident = document.querySelector('.resident-add-modal');
// const residentBtn = document.getElementById('resident-add-btn');

// residentBtn.addEventListener('click', ()=>{
//     addResident.style.display = 'block';
// });