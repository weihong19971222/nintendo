AOS.init();

window.onload = function () {
    lax.setup(

    ) // init

    const updateLax = () => {
        lax.update(window.scrollY)
        window.requestAnimationFrame(updateLax)
    }

    window.requestAnimationFrame(updateLax)
    let w = window.innerWidth
    window.addEventListener("resize", function () {
        if (w !== window.innerWidth) {
            lax.updateElements()
        }
    });
}


function size_auto() {
    $Switch_Viedo_width_size = $("#Switch_Viedo").css("width").replace("px", "");
    $("#Switch_Viedo").css("height", $Switch_Viedo_width_size * 0.579);
}
size_auto();
$(window).resize(function () {
    size_auto();
});
