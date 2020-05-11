
const close = document.querySelector('.close');
const modal_win = document.querySelector('.modal');
const pic = document.querySelector('.modal-body');

function modal(file){
    console.log ();
    pic.innerHTML = `<img src="img/${file}" alt="picture" class="modal-image">`;
    modal_win.style.display = "block";
}

function modal_close(){
    modal_win.style.display = "none";
}