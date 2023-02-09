jQuery(function(){
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 200 ) { 
                $('.scrollUp').css('right','15px');
            } else { 
                $('.scrollUp').removeAttr( 'style' );
            }
        
        });
    });
});

// function changerDisplay (disp){
//     var element1= document.getElementById('nav');
//     var element2 = document.getElementById('body');
//     element1.style.display=disp;
//     element2.style.overflow='hidden';
// }



// Marge bloc menu responsive

// function menu() {
//     var largeur = window.innerWidth;
//     var elem = document.getElementById('menu');
//     var elem2 = document.getElementById('titre');
//     if (largeur<425) {
//         scale = 0.8*largeur/425
//         elem.style.transform= 'scale('+scale+')';
//         elem.style.position= 'absolute';
//         elem.style.top= '22rem';
//         elem.style.right= '0rem';
//         elem2.style.position= 'absolute';
//         elem2.style.top= '25rem';
//     }
// }

// window.addEventListener('resize', menu);
// menu();



// function menuCacheSize() {
//     var largeur = window.innerWidth;
//     var elem = document.getElementById('cache-menu-responsive');
//     var rect = 448;
//     var marge_gauche = (largeur-rect['width'])/2;
//     elem.style.left=marge_gauche+'px';

// }

// document.addEventListener('scroll', menuCacheSize);
// menuCacheSize();

popUpMailNone ();

function popUpMail (){
    popUpMailBlock ();
    setTimeout(popUpMailNone (),2000);
}

function popUpMailBlock (){
    var largeur = window.innerWidth;
    var elem1 = document.getElementById('pop-up-mail');
    var rect = elem1.getBoundingClientRect();
    var margeGauche = ((largeur - rect['width']) / 2);
    elem1.style.borderLeft=margeGauche;
    elem1.style.display='block';
}

function popUpMailNone (){
    var elem1 = document.getElementById('pop-up-mail');
    elem1.style.display='none';
}



function changerLeft (gauche){
    var element1= document.getElementById('nav');
    var element2 = document.getElementById('body');
    var element3 = document.getElementById('blur');

    var largeur = window.innerWidth;
    var elem = document.getElementById('nav');
    var rect = elem.getBoundingClientRect();
    var cache = largeur-rect['width'];
    
    element1.style.left=gauche;
    element2.style.overflowY='hidden';
    element3.style.display='block';
    element3.style.width=cache+'px';
}

function changerLeft2 (gauche){
    var element1= document.getElementById('nav');
    var element2 = document.getElementById('body');
    var element3 = document.getElementById('blur');
    element1.style.left=gauche;
    element2.style.overflowY='auto';
    element3.style.display='none';
}

function tailleCache (){
    var largeur = window.innerWidth;
    var elem = document.getElementById('nav');
    var rect = elem.getBoundingClientRect();
    var cache = largeur-rect['width'];
    alert(rect['width']);
    alert(largeur);
    alert(cache);
}


function changerCouleur (id, couleur){
    document.getElementById(id).style.color=couleur;
}

function changerFontSize (id, taille){
  document.getElementById(id).style.fontSize=taille;
}

function changerDisplay (id, disp){
  document.getElementById(id).style.display=disp;
}

function changerWidth (id, disp){
  document.getElementById(id).style.width=disp;
}