let contact=document.querySelector(".contact")
let navbar=document.querySelector(".navbar")
let contactCont=document.querySelector(".contactCont")
let flag =true;

// contact.addEventListener('click',function(){
//         let divtag=document.createElement('div')
//     divtag.setAttribute('class','contact-cont');
//     divtag.innerHTML=`<div>Mob No. 1234567890</div>
//     <div>email : abcfedt@gmail.com</div>`
//     navbar.appendChild(divtag)
//     flag =true;
// })
contact.addEventListener('click',function(){
    if(flag == true){
        contactCont.style.display = 'flex'
        // console.log('if')
    }else{
        contactCont.style.display = 'none'
        // console.log('else')
    }
    flag = !flag;
})
