var modal = window.document.querySelector("dialog");

var btnFechar = window.document.querySelectorAll("dialog button");

let count = 0

setTimeout(()=>{
    modal.showModal();
}, 3000);

// document.addEventListener("mouseleave", ()=>{

//     if(count==0){
//         modal.showModal();
//     }
    
// })

btnFechar.forEach(button =>{
    button.addEventListener("click",()=>{
        modal.close();
        count =1
    })
})