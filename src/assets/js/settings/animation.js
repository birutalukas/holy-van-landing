function animateFade(slideSelector) {
    const selector = document.querySelectorAll(slideSelector);

    let options = {
        root: null,
        rootMargin: "50px",
        threshold: 0.7,
    };

    let callback = (entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    };

    selector.forEach((element) => {
        let observer = new IntersectionObserver(callback, options);
        observer.observe(element);
    });
}

animateFade(".slide-left");
animateFade(".slide-right");
animateFade(".slide-up");
animateFade(".slide-down");
