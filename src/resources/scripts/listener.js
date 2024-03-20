const mobileToggle = document.querySelector("#toggle-icon");
const mobileOverlay = document.querySelector("#mobile-overlay");

mobileToggle.addEventListener("click", () => {
  const val = mobileToggle.getAttribute("aria-expanded") === "false" ? "true" : "false";
  [mobileToggle, mobileOverlay].forEach((el) => {
    el.setAttribute("aria-expanded", val);
  });
});