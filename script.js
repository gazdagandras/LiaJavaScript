document.write('<p><b>Ez már külső fájlból megy!</b></p>');

var nev = 'Jóska Pista';

document.write('<p>Név: ' + nev);

function szinez() {
    document.getElementById('doboz').style.width='100px';
    document.getElementById('doboz').style.background = 'blue';
    document.getElementById('doboz').style.color = 'white';
}