const c=document.querySelector(".close_icon"),s=document.querySelector(".bar-3_icon"),e=document.querySelector("#header-phone");c.addEventListener("click",()=>{e.classList.contains("block")&&(e.classList.remove("block"),e.classList.add("hidden"))});s.addEventListener("click",()=>{e.classList.contains("hidden")&&(e.classList.add("block"),e.classList.remove("hidden"))});
