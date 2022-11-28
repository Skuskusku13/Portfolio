let list = document.querySelectorAll(".list-title");
// console.log(list)


list.forEach(elt => {
    elt.addEventListener('click', () => {
        elt.classList.toggle("active");
    })
});



// menu burger 

let openBurger = document.querySelector(".open");
let closeBurger = document.querySelector(".close");


openBurger.addEventListener('click', () => {
    openBurger.classList.toggle('active');
    
})

closeBurger.addEventListener('click', () => {
    console.log("ok")
    openBurger.classList.toggle('active');
})


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
        document.getElementById("nom").style.backgroundColor = "#71bf71";
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