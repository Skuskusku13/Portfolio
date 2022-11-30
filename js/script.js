
// menu burger 

let openBurger = document.querySelector(".open");
let closeBurger = document.querySelector(".close");
let menu = document.querySelector(".menu");


openBurger.addEventListener('click', () => {
    menu.classList.add('active')
    openBurger.classList.add('none');
    closeBurger.classList.add('block');
    
})

closeBurger.addEventListener('click', () => {
    menu.classList.remove('active');
    closeBurger.classList.remove('block');
    openBurger.classList.remove('none');
    
})




let list = document.querySelectorAll(".list-title");
// console.log(list)


list.forEach(elt => {
    elt.addEventListener('click', () => {
        elt.classList.toggle("active");
    })
});



// traitement du formulaire de contact 

let Error = document.getElementById('Error');

function traiterEmail() {
    let email = document.getElementById('email').value;

    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
        document.getElementById("email").style.backgroundColor = "#71bf71";
    } else {
        document.getElementById("email").style.backgroundColor = "#e24d36";
        Error.innerHTML="Email invalide"
    }
}

function traiterNom() {
    let nom = document.getElementById('nom').value;

    if (nom != "") {
        document.getElementById("nom").classList.add('validName');
    } else {
        document.getElementById("nom").style.backgroundColor = "#e24d36";
        Error.innerHTML="Veuillez mettre un nom";
      }
}

function traiterMess() {
    let mess = document.getElementById('mess').value;

    if (mess != "") {
        document.getElementById("mess").style.backgroundColor = "#71bf71";
    } else {
        document.getElementById("mess").style.backgroundColor = "#e24d36";
        Error.innerHTML="Veuillez mettre un message";
      }
}

function traiterTel() {
    let tel = document.getElementById('tel').value;

    if (tel != "") {
        document.getElementById("mess").style.backgroundColor = "#71bf71";
    } else {
        document.getElementById("mess").style.backgroundColor = "#e24d36";
        Error.innerHTML="Veuillez mettre un message";
      }
}