var tplist_current_scrool = 0 ;
var items_lst = document.getElementsByClassName("box_1") 
var tplist_width = items_lst.length 

document.getElementById("top_items_prev").addEventListener("click" , function(){

})



var swiper = new Swiper(".home-slider", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 7500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop:true,
  });

  let modal = document.querySelector('.modal');
  let header = document.querySelector('header');
  let color_box = document.querySelectorAll('.modal .modals .product-color .colors .image');

  let menu = document.querySelector('#menu-bar'),
    navbar = document.querySelector('.navbar');

menu.addEventListener('click',()=>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
})

window.addEventListener('scroll',()=>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
});
function clear_all_selections(lst){
    for(let obj of lst){
        obj.classList.remove("active") ; 
    }
    
}

for(let obj of color_box){
    obj.addEventListener("click" , function(){
        clear_all_selections(color_box)
        this.classList.add("active")
    })
}
  modal.addEventListener('click',()=>{
    header.style.zIndex = -1;
  });

