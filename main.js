// on recupere les elements de classe more et other

let more = document.querySelector('.more')
let others = document.querySelectorAll('.other')

// on definit nos evenements

more.addEventListener('mouseover',affiche)
more.addEventListener('mouseout',affiche2)

// on desaffiche les elements avant de les afficher 

for (const other of others) {
    other.style.display = 'none'
}


// les fonctions qui seront appeles sur les evenements

function affiche() {
    more.style.background = 'transparent'
    more.style.border = '2px solid #ddec05'
    for (const other of others) {
        other.style.display = ''
    }
}
function affiche2() {
    more.style.background = '#ddec05'
    for (const other of others) {
        other.style.display = 'none'
    }
}
