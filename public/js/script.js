const splide = new Splide("#slide", {
    type: "loop",
    // padding: "5rem",
    autoplay: true,
    arrows: false,
    speed: 1000,
}).mount();

new Splide(".splide", {
    arrows: false,
}).mount();

new Splide("#our", {
    type: "loop",
    arrows: false,
    autoplay: true,
}).mount();

new Splide("#cli", {
    arrows: false,
}).mount();
