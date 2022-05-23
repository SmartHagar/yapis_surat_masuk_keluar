/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/costume.js ***!
  \*********************************/
// light or dark mode
// querySelector id mode-setting-btn
var modeSettingBtn = document.querySelector("#mode-setting-btn");
var modeTheme = "";

var modeChange = function modeChange(modeTheme) {
  localStorage.setItem("data-layout-mode", modeTheme);
  localStorage.setItem("data-topbar", modeTheme);
  localStorage.setItem("data-sidebar", modeTheme); // change body data-layout-mode

  document.body.dataset.layoutMode = modeTheme; // change body data-topbar

  document.body.dataset.topbar = modeTheme; // change body data-sidebar

  document.body.dataset.sidebar = modeTheme;
};

modeSettingBtn.addEventListener("click", function () {
  if (modeTheme === "light") {
    modeTheme = "dark";
    modeChange(modeTheme);
  } else {
    modeTheme = "light";
    modeChange(modeTheme);
  }
}); // change mode

if (localStorage.getItem("data-layout-mode") === "dark") {
  modeTheme = "dark";
  modeChange("dark");
} else {
  modeTheme = "light";
  modeChange("light");
}
/******/ })()
;