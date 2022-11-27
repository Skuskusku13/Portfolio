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
