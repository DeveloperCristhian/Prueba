
<script>
document.addEventListener("DOMContentLoaded", function() {
    var scrollToTopBtn = document.getElementById("scrollToTopBtn");

    // Mostrar el botón cuando se desplaza hacia abajo
    window.addEventListener("scroll", function() {
        if (window.scrollY > 300) { // Cambia este valor según cuando quieras que aparezca el botón
            scrollToTopBtn.classList.add("show");
        } else {
            scrollToTopBtn.classList.remove("show");
        }
    });

    // Volver al inicio al hacer clic
    scrollToTopBtn.addEventListener("click", function(e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
</script>