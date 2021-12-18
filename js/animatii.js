const wrapper = document.querySelector('.wrapper');

const tl = new TimelineMax();

tl.fromTo(wrapper, 1, { width: "0px" }, { width: "1000px" });