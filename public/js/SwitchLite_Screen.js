
function boxclick(x) {
    var description_content_pic = document.querySelector("#description_content_pic")
    if (x == 1) {
        description_content_pic.classList.add("description_content_pic1")
        description_content_pic.classList.remove("description_content_pic2")
        description_content_pic.classList.remove("description_content_pic3")
        description_content_pic.classList.remove("description_content_pic4")

    }
    else if (x == 2) {
        description_content_pic.classList.add("description_content_pic2")
        description_content_pic.classList.remove("description_content_pic1")
        description_content_pic.classList.remove("description_content_pic3")
        description_content_pic.classList.remove("description_content_pic4")
    }
    else if (x == 3) {
        description_content_pic.classList.add("description_content_pic3")
        description_content_pic.classList.remove("description_content_pic2")
        description_content_pic.classList.remove("description_content_pic1")
        description_content_pic.classList.remove("description_content_pic4")
    }
    else if (x == 4) {
        description_content_pic.classList.add("description_content_pic4")
        description_content_pic.classList.remove("description_content_pic2")
        description_content_pic.classList.remove("description_content_pic3")
        description_content_pic.classList.remove("description_content_pic1")
    }
}

AOS.init();


