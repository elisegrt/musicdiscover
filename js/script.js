var cursor = document.getElementById("cursor");
document.body.addEventListener("mousemove", function(e) {
  cursor.style.left = e.clientX + "px",
    cursor.style.top = e.clientY + "px";
});





const btn = document.querySelector('#retour_haut');

btn.addEventListener('click', () => {

    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    })

})




function marqueelike() {
$('.messagedefilant').each(function() {
    var texte = $(this).html();
    $(this).html('<div><span>' + texte + '</span><span>' + texte + '</span></div>');
  });
}

$(window).on('load', function() {
  marqueelike();
});