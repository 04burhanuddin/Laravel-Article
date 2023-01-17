import './bootstrap';
import 'aos/dist/aos.css';

import Alpine from 'alpinejs';
import AOS from 'aos';

window.Alpine = Alpine;

Alpine.start();

AOS.init({
    once: true,
    offset: 0,
    delay: 0,
    duration: 500,
});

// theme check
const lightIcon = document.querySelector(".light");
const darktIcon = document.querySelector(".dark");

const userTheme = localStorage.getItem("theme");
const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;


const iconTogle = () => {
    darktIcon.classList.toggle("hidden");
    lightIcon.classList.toggle("hidden");
}

const themeCheck = () => {
    if (userTheme == "dark" || (!userTheme && systemTheme)) {
        document.documentElement.classList.add("dark");
        darktIcon.classList.add("hidden");
        return;
    }
    lightIcon.classList.add("hidden");
}

const themeSwitch = () => {
    if (document.documentElement.classList.contains("dark")) {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("theme", "light");
        iconTogle();
        return;
    }
    document.documentElement.classList.add("dark");
    localStorage.setItem("theme", "dark");
    iconTogle();
}

lightIcon.addEventListener("click", () => {
    themeSwitch();
});

darktIcon.addEventListener("click", () => {
    themeSwitch();
});

themeCheck();
