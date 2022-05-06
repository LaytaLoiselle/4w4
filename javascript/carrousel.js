(function(){
    let boite__carrousel = document.querySelector('.boite__carrousel')
    let boite__carrousel__ferme = document.querySelector('.boite__carrousel__ferme')
    let boite__carrousel__nav = document.querySelector('.boite__carrousel__nav')

    let galerie__img = document.querySelectorAll('.galerie img')
    console.log(galerie__img.length)

    let elmImg = document.createElement('img')
    boite__carrousel.append(elmImg)


    
    let index = 0;
    for (const img of galerie__img){
        let bouton = document.createElement('button')
        bouton.dataset.index = index++
        boite__carrousel__nav.append(bouton)
        bouton.addEventListener('mousedown', function(){
            elmImg.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'))
        })

        img.addEventListener('mousedown',function(){
            console.log(this.tagName)
            boite__carrousel.classList.add('boite__carrousel__ouvrir')
            //console.log(this.getAttribute('src'))
            elmImg.setAttribute('src', this.getAttribute('src'))
        })

    }

    boite__carrousel__ferme.addEventListener('mousedown', function(){
        boite__carrousel.classList.remove('boite__carrousel__ouvrir')
    })

})()