let list = document.querySelectorAll(".list-title");
console.log(list)


list.forEach(elt => {
    elt.addEventListener('click', () => {
        elt.classList.toggle("active");
    })
});