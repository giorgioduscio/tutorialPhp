const titoli=document.querySelectorAll('h1');
console.log(titoli);
for (let i = 0; i < titoli.length; i++) {
    titoli[i].addEventListener('click',()=>{ 
        alert("ciao");
     })
    
}