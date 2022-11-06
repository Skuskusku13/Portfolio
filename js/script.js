let list = document.querySelectorAll(".list-title");
console.log(list)


list.forEach(element => {
    element.addEventListener('click', () => {
        element.classList.toggle("active");
    })
});