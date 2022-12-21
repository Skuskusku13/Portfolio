// menu burger

let openBurger = document.querySelector(".open");
let closeBurger = document.querySelector(".close");
let menu = document.querySelector(".menu");

openBurger.addEventListener("click", () => {
  menu.classList.add("active");
  openBurger.classList.add("none");
  closeBurger.classList.add("block");
});

closeBurger.addEventListener("click", () => {
  menu.classList.remove("active");
  closeBurger.classList.remove("block");
  openBurger.classList.remove("none");
});

// changement de couleur en dark

let body = document.querySelector("body");
let colors = document.querySelector(".colors");
let menuPrincipal = document.querySelector(".menu-principal");
let gitblack = document.querySelector(".git-black");
let gitwhite = document.querySelector(".git-white");

let rememberColors = document.querySelector(".colors").textContent;

// evenement au clic du bouton

colors.addEventListener("click", () => {
  body.classList.toggle("dark");
  if (colors.textContent == "DARK") {
    colors.innerHTML = "LIGHT";
    colors.classList.remove("lightmode");
    colors.classList.add("darkmode");
    // gitblack.style.display="visible";
    // gitwhite.style.display="none";
    localStorage.removeItem("light");
    localStorage.setItem("dark", true);
  } else {
    colors.innerHTML = "DARK";
    colors.classList.remove("darkmode");
    colors.classList.add("lightmode");
    localStorage.removeItem("dark");
  }
});

// lis si le bouton à déjà stocké un localstorage

if (localStorage.getItem("dark")) {
  body.style.transition = "none";
  menuPrincipal.style.transition = "none";
  colors.innerHTML = "LIGHT";
  body.classList.add("dark");
  colors.classList.remove("lightmode");
  colors.classList.add("darkmode");
  // gitwhite.style.display="visible"
  // gitblack.style.display="none"
}

// fin des changements de couleurs

let list = document.querySelectorAll(".list-title");
// console.log(list)

list.forEach((elt) => {
  elt.addEventListener("click", () => {
    elt.classList.toggle("active");
  });
});

// traitement du formulaire de contact

let Error = document.getElementById("Error");

function traiterEmail() {
  let email = document.getElementById("email").value;

  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
    document.getElementById("email").style.backgroundColor = "#71bf71";
  } else {
    document.getElementById("email").style.backgroundColor = "#e24d36";
    Error.innerHTML = "Email invalide";
  }
}

function traiterSujet() {
  let sujet = document.getElementById("sujet").value;

  if (sujet != "") {
    document.getElementById("sujet").style.backgroundColor = "#71bf71";
  } else {
    document.getElementById("sujet").style.backgroundColor = "#e24d36";
    Error.innerHTML = "Le sujet ne peut pas être vide";
  }
}

// page de projets

if (window.location.pathname == "/projets.html") {
  let projectTitle = document.querySelectorAll(".project-title-coll");

  projectTitle.forEach(elt => {
    elt.addEventListener("click", () => {
      elt.classList.toggle("cont");
    });
  });
}
// page de veilles

if (window.location.pathname == "/veilles.html") {
  let veilleTitle = document.querySelectorAll(".titre-veille");

  veilleTitle.forEach(elt => {
    elt.addEventListener("click", () => {
      elt.classList.toggle("active");
    });
  });
}
