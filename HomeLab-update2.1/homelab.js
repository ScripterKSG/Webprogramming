var hidden = true;

function toggleMenu(id) {
    if (hidden == true) {
    //console.log('opening menu');
    document.getElementById(id).style.left='10%'; 
    this.hidden = false;
    } else {
    //console.log('closing menu')
    document.getElementById(id).style.left='-150px';
    this.hidden=true;
    }
}

