function validation() {
    var nom = document.forms["formulaire"]["nom"];
var prénom = document.forms["formulaire"]["prénom"];
if (nom.value == "") {
    alert("Mettez votre nom.");
    nom.focus();
    return false;
}
if (prénom.value == ""){
    alert("Mettez votre prénom.");
    prénom.focus();
    return false;
}
if (titre.value == ""){
    alert("Mettez votre titre.");
    titre.focus();
    return false;
}
if (mail.value == ""){
    alert("Mettez votre mail.");
    mail.focus();
    return false;
}
if (numéro.value == ""){
    alert("Mettez votre numéro.");
    numéro.focus();
    return false;
}
if (adresse.value == ""){
    alert("Mettez votre adresse.");
    adresse.focus();
    return false;
}

if (description.value == ""){
    alert("Mettez une description.");
    description.focus();
    return false;
}
// if (competences.value == ""){
//     alert("Mettez une competences.");
//     competences.focus();
//     return false;
// }
if (formation.value == ""){
    alert("Mettez le nom de votre formation.");
    formation.focus();
    return false;
}
}

const chBoxes =
            document.querySelectorAll('.dropdown-menu input[type="checkbox"]');
        const dpBtn = 
            document.getElementById('multiSelectDropdown');
        let mySelectedListItems = [];
        function handleCB() {
            mySelectedListItems = [];
            let mySelectedListItemsText = '';
chBoxes.forEach((checkbox) => {
                if (checkbox.checked) {
                    mySelectedListItems.push(checkbox.value);
                    mySelectedListItemsText += checkbox.value + ', ';
                }
            });
            dpBtn.innerText =
                mySelectedListItems.length > 0
                    ? mySelectedListItemsText.slice(0, -2) : 'Select';
        }

        chBoxes.forEach((checkbox) => {
            checkbox.addEventListener('change', handleCB);
        });

        