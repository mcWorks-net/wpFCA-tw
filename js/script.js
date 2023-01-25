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
    removeActiveMenu();
     menuList.classList.add("active");
     const activeContent = document.querySelector(`#${menuList.id}-content`);
     removeContentActive();
     activeContent.classList.add("active");
         });
 });


 function removeActiveMenu() {
 contentMenu.forEach((menu) => {
     menu.classList.remove("active");
 });
 }

 function removeContentActive() {
     theContent.forEach((content) => {
     content.classList.remove("active");
 });
 }
