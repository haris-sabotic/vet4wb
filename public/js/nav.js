document.querySelector(".burger").addEventListener("click", () => {
    const links = document.querySelector(".links");
    links.classList.toggle("flex");
    console.log("classlist: " + links.classList);
});