function validation() {
    var Nom = document.forms["formulaire"]["Nom"];

if (Nom.value == "") {
    alert("Mettez votre nom.");
    Nom.focus();
    return false;
}
}