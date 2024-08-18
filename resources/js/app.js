import "./bootstrap";
import "./softec/main.js";

document.addEventListener("livewire:navigated", () => {
    initAll();
});
