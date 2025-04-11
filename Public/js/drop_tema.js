
let btnOpenTema = document.getElementById('open-tema')
let ConteudoTema = document.getElementById('open-conteudo-tema')

let IConChev = document.getElementById('icon')

let contVerificacao = document.getElementById('conatiner_item_tema')


IConChev.style.transform = 'rotate(0deg)';

btnOpenTema.addEventListener('click', ()=>{


    ConteudoTema.classList.toggle('active_tema')
 
 
  
})
