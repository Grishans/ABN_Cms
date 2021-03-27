let Li = document.querySelectorAll(".mainSlider > .slick-dots > li > .pager__item");
let slides = document.querySelectorAll(".mainSlider > .block");

document.addEventListener("DOMContentLoaded", () => {
  let Li = document.querySelectorAll(".mainDots > .slick-dots > li");
  let LiUnsetElectr = document.querySelectorAll(".ceb2__wrap > .slick-dots > li");
  for (let i = 0; i < Li.length; i++) {
    Li[i].addEventListener("click", function () {
      check();
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
      if (window.matchMedia('(max-width: 600px)').matches) {
        document.querySelector('.sidebar').classList.add('sideBarUnActive')
        document.body.style.overflow = 'scroll'
        document.querySelector('.mobilNavBurger').style.display = 'block'
        document.querySelector('.mobilNavCross').style.display = 'none'
        NavTrigger = !NavTrigger
      }
    });
  }
  for (let i = 0; i < Li.length; i++) {
    Li[i].addEventListener("click", function () {
      return 0;
    });
  }
});

function check() {
  for (let j = 0; j < slides.length; j++) {
    if (slides[j].classList.contains("slick-active")) {
      slides[j].style.opacity = 1;
    } else {
      slides[j].style.opacity = 0;
    }
  }
}

/*Hidenav*/
let navSpan = document.querySelector(".mainDots > span");
let navListToogle = false;

navSpan.addEventListener("click", function () {
  let dots = document.querySelectorAll(".mainDots > ul.slick-dots > li");
  if (window.innerWidth > 600 && !navListToogle) {
    dots[1].style.opacity = 0;
    dots[2].style.opacity = 0;
    dots[3].style.opacity = 0;
    dots[4].style.opacity = 0;
    dots[5].style.transform = "translate(0, -1000%)";
    dots[6].style.transform = "translate(0, -1000%)";
    navListToogle = !navListToogle;    
  } else if(window.innerWidth < 600 && !navListToogle){
    dots[1].style.opacity = 0;
    dots[2].style.opacity = 0;
    dots[3].style.opacity = 0;
    dots[4].style.opacity = 0;
    dots[5].style.transform = "translate(0, -800%)";
    dots[6].style.transform = "translate(0, -800%)";
    navListToogle = !navListToogle;
  }else {
    dots[1].style.opacity = 1;
    dots[2].style.opacity = 1;
    dots[3].style.opacity = 1;
    dots[4].style.opacity = 1;
    dots[5].style.transform = "translate(0)";
    dots[6].style.transform = "translate(0)";
    navListToogle = !navListToogle;
  }
});
/*/Hidenav/*/

/*LangToogle*/
let langRU = document.querySelector(".langRU");
let langEN = document.querySelector(".langEN");
let langTrigger = document.querySelector(".sl__wrap__swith_trigger");
function changeLangRU() {
  langRU.style.color = "#355070";
  langEN.style.color = "#C7C7C7";
  langTrigger.style.left = "10%";
  langTrigger.style.borderRadius = " 15px 20px 0px 15px";
}
function changeLangEN() {
  langRU.style.color = "#C7C7C7";
  langEN.style.color = "#355070";
  langTrigger.style.left = "50%";
  langTrigger.style.borderRadius = "20px 15px 15px 0px";
}

if (!localStorage.getItem("lang")) {
  localStorage.setItem("lang", "ru");
}

langRU.addEventListener("click", () => {
  changeLangRU();
  localStorage.setItem("lang", "ru");
});
langEN.addEventListener("click", () => {
  changeLangEN();
  localStorage.setItem("lang", "en");
});
/*/LangToogle/*/

/*MobilNavTrigger*/
let NavTrigger = false;
document.querySelector('.mobilNavTrigger').addEventListener('click', () => {
  if (!NavTrigger) {
    document.querySelector('.sidebar').classList.add('sideBarActive')
    document.querySelector('.sidebar').classList.remove('sideBarUnActive')
    document.querySelector('.mobilNavBurger').style.display = 'none'
    document.querySelector('.mobilNavCross').style.display = 'block'
    document.body.style.overflow = 'hidden'
    NavTrigger = !NavTrigger
  } else {
    document.querySelector('.sidebar').classList.add('sideBarUnActive')
    document.querySelector('.sidebar').classList.remove('sideBarActive')
    document.querySelector('.mobilNavBurger').style.display = 'block'
    document.querySelector('.mobilNavCross').style.display = 'none'
    document.body.style.overflow = 'scroll'
    NavTrigger = !NavTrigger
  }
})
/*/MobilNavTrigger/*/

document.addEventListener("DOMContentLoaded", () => {
  let slideBTN = document.querySelectorAll(".slick-arrow");
  let li = document.querySelectorAll(".mainDots > ul.slick-dots > li");
  let dots = document.querySelectorAll(
    ".mainDots > ul.slick-dots > li > a.pager__item"
  );
  for (let i = 0; i < slideBTN.length; i++) {
    slideBTN[i].style.display = "none";
  }
  li[0].style.marginBottom = "80px";
  dots[1].setAttribute("style", "color: #000; margin-left: 20px");
  dots[2].setAttribute("style", "color: #000; margin-left: 20px");
  dots[3].setAttribute("style", "color: #000; margin-left: 20px");
  dots[4].setAttribute("style", "color: #000; margin-left: 20px");
});

let RuLang = document.querySelector("#RU");
let EnLang = document.querySelector("#EN");
if (!localStorage.getItem("lang")) {
  localStorage.setItem("lang", "ru");
}
if (localStorage.getItem("lang") === "ru") {
  langEN.style.color = "#C7C7C7";
  langTrigger.style.left = "10%";
  langTrigger.style.borderRadius = " 15px 20px 0px 15px";
} else if (localStorage.getItem("lang") === "en") {
  langRU.style.color = "#355070";
  langRU.style.color = "#C7C7C7";
  langEN.style.color = "#355070";
  langTrigger.style.left = "50%";
  langTrigger.style.borderRadius = "20px 15px 15px 0px";
}

EnLang.addEventListener("click", function () {
  localStorage.setItem("lang", "en");
});
RuLang.addEventListener("click", function () {
  localStorage.setItem("lang", "ru");
});
