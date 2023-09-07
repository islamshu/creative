const filter = document.querySelector(".portfolio-filter"),
    portfolioItemsContainer = document.querySelector(".portfolio-items"),
    portfolioItems = document.querySelectorAll(".portfolio-item");

filter.addEventListener("click", (e) => {
    if (e.target.classList.contains("filter-item") &&
        !e.target.classList.contains("active")) {
        filter.querySelector(".active").classList.remove("active");
        e.target.classList.add("active");
        const target = e.target.getAttribute("data-target");
        portfolioItems.forEach((item) => {
            if (target === item.getAttribute("data-category") || target === 'all') {
                item.classList.remove("hide");
                item.classList.add("show");
            } else {
                item.classList.remove("show");
                item.classList.add("hide");
            }
        })
    }
});