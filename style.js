// import {
//   Carousel,
//   initTE,
// } from "tw-elements";
// initTE({ Carousel });

// import {
//   Collapse,
//   Ripple,
//   initTE,
// } from "tw-elements";

// initTE({ Collapse, Ripple });

// import {
//   Dropdown,
//   Collapse,
//   initTE,
// } from "tw-elements";

// initTE({ Dropdown, Collapse });

// import {
//   Tab,
//   initTE,
// } from "tw-elements";

// initTE({ Tab });

var i = setInterval(function () {
    
  clearInterval(i);

  // O código desejado é apenas isto:
  document.getElementById("loading").style.display = "none";
  document.getElementById("conteudo").style.display = "inline";

}, 4000);