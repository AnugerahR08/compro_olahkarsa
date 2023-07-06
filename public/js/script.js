const splide = new Splide("#slide", {
    type: "loop",
    autoplay: true,
    arrows: false,
    speed: 1000,
});
splide.mount();

new Splide(".splide", {
    arrows: false,
    loop: true,
    autoplay: true,
}).mount();

new Splide("#our", {
    type: "loop",
    arrows: false,
    autoplay: true,
}).mount();

new Splide("#cli", {
    arrows: false,
}).mount();
