import"./hoisted.25b3dcdb.js";const l=document.querySelector("#valueList");let n="<span> You have selected : </span>",e=[];const r=document.querySelectorAll(".checkbox");r.forEach(t=>{t.addEventListener("click",()=>{t.checked?(e.push(t.value),l.innerHTML=n+e.length):(e=e.filter(s=>s!==t.value),l.innerHTML=n+e.length)})});