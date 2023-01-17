function partnerClicked(index) {
    fetch("partners.json")
        .then((response) => {
            if (!response.ok) {
                throw new Error(`HTTP error: ${response.status}`);
            }
            return response.text();
        })
        .then((text) => {
            let json = JSON.parse(text);

            console.log(json[index]);
            let data = json[index];

            let name = document.getElementById("partner-name");
            let img = document.getElementById("partner-img");
            let country = document.getElementById("partner-country");
            let contact_person = document.getElementById("partner-contact-person");
            let email = document.getElementById("partner-email");
            let description = document.getElementById("partner-description");

            name.innerHTML = data["name"];
            img.src = data["img_url"];
            country.innerHTML = data["country"];
            contact_person.innerHTML = data["contact_person"];
            email.innerHTML = data["email"];
            description.innerHTML = data["description"];

            let dialog = document.getElementsByClassName("partner-dialog")[0];
            dialog.classList.toggle("partner-dialog-visible");
        });
}

function partnerDialogBackgroundClicked() {
    let dialog = document.getElementsByClassName("partner-dialog")[0];
    dialog.classList.toggle("partner-dialog-visible");
}