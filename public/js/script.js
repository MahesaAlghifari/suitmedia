let lastScrollPosition = 0;

window.addEventListener("scroll", function() {
    const currentScrollPosition = window.scrollY;

    if (currentScrollPosition > lastScrollPosition) {
        // Scrolling down
        document.querySelector(".navbar").classList.add("hidden");
    } else {
        // Scrolling up
        document.querySelector(".navbar").classList.remove("hidden");
    }

    lastScrollPosition = currentScrollPosition;
});

   var prevScrollPos = window.pageYOffset;

    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollPos > currentScrollPos) {
            document.querySelector(".navbar").style.top = "0";
        } else {
            document.querySelector(".navbar").style.top = "-100px";
        }
        prevScrollPos = currentScrollPos;
    }