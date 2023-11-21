const header = Document.querySelector("header")
window.addEventListener("scroll",function(){
    x = window.pageYOffset
    if(x>0){
        header.classList.add('sticky')
    }else{
        header.remove.add("sticky")
    }
})




const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
const imgContainer = document.querySelector('.aspect-ratio-169')
const dotItem = document.querySelectorAll(".dot")
let imgNumber = imgPosition.length
let index = 0
//  console.log(imgPosition);
imgPosition.forEach(function(image,index){
   image.style.left = index*100 + "%"
   dotItem[index].addEventListener("click",function(){
    slider (index)
   })
})
function imgSlide (){
    index++;
    console.log(index)
    if (index>=imgNumber) {index=0}
    slider (index)
}
function slider (index){
    imgContainer.style.left= "-" +index*100+ "%"
    const dotActive = document.querySelector('.active')
    dotActive.classList.remove("active")
    dotItem[index].classList.add("active")
}
setInterval(imgSlide,5000)
//--------------product----------------//
const baoquan = document.querySelector(".baoquan")
const chitiet = document.querySelector(".chitiet")
if(baoquan){
    baoquan.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display= "none"
        document.querySelector(".product-content-right-bottom-content-baoquan").style.display= "block"
    })
}
if(chitiet){
    chitiet.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display= "block"
        document.querySelector(".product-content-right-bottom-content-baoquan").style.display= "none"
    })
}