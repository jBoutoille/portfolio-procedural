// variables à portée Globale
const btnReal = document.getElementById('btnReal');
const realTarget = document.getElementById('realTarget');
const images = ['02.jpg', '03.jpg', '04.jpg', '05.jpg', '06.jpg', '07.jpg', '08.jpg', '09.jpg', '10.jpg', '01.jpg'];
let num = 0;

// Au click sur les images elles s'affiches``



	btnReal.onclick=function(){
		
		realTarget.style.backgroundImage = "url()";
		realTarget.style.backgroundImage = "url('./img/" + images[num] + "')";
		num++;
		num = num >= images.length ? 0 : num;


	}


