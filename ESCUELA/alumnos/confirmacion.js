function confirmacion(e) {
if (confirm("¿estas sefuro que quieres eliminarlo este registro?")) {
return true;
} else {
e.preventdefault();

}
}
let linkdelete = document.querySelectorAll(".table__item__link");
for (var i = 0; i < linkdelete.length; i++) {
linkdelete[i].addEventlistener('click', confirmacion)


}


