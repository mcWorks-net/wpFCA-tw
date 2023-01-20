const toggle_menu= document.querySelector(".toggle_menu");
 const nav= document.querySelector("nav");
 toggle_menu.addEventListener("click", ()=>{
     nav.classList.toggle('active');
     toggle_menu.classList.toggle('active');
 });

 const contentMenu = document.querySelectorAll(".contentMenu li");
 const theContent = document.querySelectorAll(".theContent");
 contentMenu.forEach((menuList) => {
     menuList.addEventListener("click", () => {
         removeActive();
         menuList.classList.add("active");
         const activeContent = document.querySelector(`#${menuList.id}-content`);
         removeActiveContent();
         activeContent.classList.add("active");
     });
});


function removeActive() {
 contentMenu.forEach((menu) => {
     menu.classList.remove("active");
 });
 }

 function removeActiveContent() {
     theContent.forEach((content) => {
     content.classList.remove("active");
 });
 }

 const contentMenuActive = document.querySelector("#menu-1");
 contentMenuActive.classList.add("active");
 const contentActive = document.querySelector("#menu-1-content");
 contentActive.classList.add("active");