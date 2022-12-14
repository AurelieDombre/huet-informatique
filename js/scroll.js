//Pourcentage de visibilité d'un élément
const ratio = 0.1;

const options = {
    root: null,
    rootMargin: "0px",
    threshold: ratio,
};

const handleIntersect = function (entries, observer) {
entries.forEach(function (entry) {
        if (entry.intersectionRatio > ratio) {
            entry.target.classList.add("reveal-visible");
            observer.unobserve(entry.target);
        }
    });
};

let observer = new IntersectionObserver(handleIntersect, options);

observer.observe(document.querySelector(".reveal"));
