function languageSelected(lang) {
    let url = new URL(window.location.href);
    url.searchParams.set('lang', lang);

    console.log(url);
    window.location.href = url;
}

document.querySelector(".burger").addEventListener("click", () => {
    const links = document.querySelector(".links");
    links.classList.toggle("flex");
    console.log("classlist: " + links.classList);
});