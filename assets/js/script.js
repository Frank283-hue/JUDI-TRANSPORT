function toggleMenu() {
    const sidebar = document.querySelector(".sidebar");
    sidebar.classList.toggle("active");
}




function confirmerSuppression() {
    return confirm("Voulez-vous vraiment supprimer ce colis ?");
}




function showSuccessMessage(message) {
    const alertBox = document.createElement("div");
    alertBox.innerText = message;
    alertBox.style.background = "#28a745";
    alertBox.style.color = "white";
    alertBox.style.padding = "10px";
    alertBox.style.margin = "10px 0";

    document.body.prepend(alertBox);

    setTimeout(() => {
        alertBox.remove();
    }, 3000);
}



function rechercherTable() {
    let input = document.getElementById("searchInput");
    let filter = input.value.toLowerCase();
    let table = document.getElementById("colisTable");
    let tr = table.getElementsByTagName("tr");

    for (let i = 1; i < tr.length; i++) {
        let td = tr[i].getElementsByTagName("td");
        let found = false;

        for (let j = 0; j < td.length; j++) {
            if (td[j]) {
                let textValue = td[j].textContent || td[j].innerText;
                if (textValue.toLowerCase().indexOf(filter) > -1) {
                    found = true;
                    break;
                }
            }
        }

        tr[i].style.display = found ? "" : "none";
    }
}



document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".card");

    cards.forEach((card, index) => {
        card.style.opacity = "0";
        card.style.transform = "translateY(20px)";
        card.style.transition = "all 0.5s ease";

        setTimeout(() => {
            card.style.opacity = "1";
            card.style.transform = "translateY(0)";
        }, index * 200);
    });
});