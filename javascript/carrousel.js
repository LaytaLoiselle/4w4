(function(){
    let boite__carrousel = document.querySelector('.boite__carrousel')
    let boite__carrousel__ferme = document.querySelector('.boite__carrousel__ferme')
    let boite__carrousel__nav = document.querySelector('.boite__carrousel__nav')
    let boite__carrousel__img = document.querySelector('.boite__carrousel__img')

    let galerie__img = document.querySelectorAll('.galerie img')
    console.log(galerie__img.length)



    /* on parcour chacune des images dans la galerie*/
    let index = 0;
    for (const img of galerie__img){

         /* insertion des radios bouton dans boite__carrousel__navigation*/
        let bouton = document.createElement('input')
        bouton.setAttribute('type','radio')
        bouton.setAttribute9('checked','')
        bouton.setAttribute9('name','bouton')
        bouton.setAttribute9('class','bouton')
        bouton.dataset.index = index++
        boite__carrousel__nav.append(bouton)


        /* insertion des elmImg de la galerie_img dans boite__carrouselle_img */
        
        let elmImg = document.createElement('img')
        elmImg.img.setAttribute('src',img.getAttribute('src'))
        boite__carrousel__img.append(elmImg)

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