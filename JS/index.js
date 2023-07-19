//BARRA DE NAVEGACION FIJA

const nav = document.querySelector('.nav');

	window.addEventListener('scroll', function(){
		nav.classList.toggle('active', window.scrollY >0)
	})


//MENU

	$(document).ready(function(){
		$('#icon').click(function(){
		$('ul').toggleClass('show');    
		});
		
	});


	

//BUSCADOR

btn.onclick = function() {
    var buscar = document.getElementById("buscar").value;
    if (buscar == 'cartagena') {
        panel.innerHTML = "este destino no esta disponible";
    }
    if (buscar == 'bogota') {
        panel.innerHTML = "Disponible";
    }
    else {
        panel.innerHTML = "No se encontraron resultados";
    }
}


// PRIMER SLIDER CON BOTONES


var swiper = new Swiper('.swiper-container', {
	navigation: {
	  nextEl: '.swiper-button-next',
	  prevEl: '.swiper-button-prev'
	},
	slidesPerView: 1,
	spaceBetween: 10,
	// init: false,
	pagination: {
	  el: '.swiper-pagination',
	  clickable: true,
	},

  
	breakpoints: {
	  620: {
		slidesPerView: 1,
		spaceBetween: 20,
	  },
	  680: {
		slidesPerView: 2,
		spaceBetween: 40,
	  },
	  920: {
		slidesPerView: 3,
		spaceBetween: 40,
	  },
	  1240: {
		slidesPerView: 4,
		spaceBetween: 50,
	  },
	} 
    });

	//SEGUNDO SLIDER AUTOMATICO

	var swiper = new Swiper('.swiper-r', {
		autoplay: {
		  delay: 3000,
		}, 
		slidesPerView: 1,
	spaceBetween: 100,
	// init: false,
	pagination: {
	  el: '.swiper-pagination',
	  clickable: true,
	},

  
	breakpoints: {
	  620: {
		slidesPerView: 1,
		spaceBetween: 20,
	  },
	  680: {
		slidesPerView: 2,
		spaceBetween: 40,
	  },
	  920: {
		slidesPerView: 3,
		spaceBetween: 40,
	  },
	  1240: {
		slidesPerView: 4,
		spaceBetween: 50,
	  },
	} 
	});

