//BARRA DE NAVEGACION FIJA

const nav = document.querySelector('.nav');

	window.addEventListener('scroll', function(){
		nav.classList.toggle('active', window.scrollY >0)
	})


//MENU

	$(document).ready(function(){
		$('#icon').click(function(){
		$('ul').toggleClass('show');
		$(this).find('i').toggleClass('fa-bars fa-times');    
		});
		

	$(window).scroll(function() {
    $('ul').removeClass('show');
		$('#icon i').removeClass('fa-times').addClass('fa-bars');
  });
});

// funcion modal segundo bloque

function mostrarModal(nombre, precio, contenido){
	const modal = document.getElementById('modal');
	const modalTitle = document.getElementById('modal-title');
	const modalContent = document.getElementById('modal-content');

	modalTitle.innerText = nombre;
  modalContent.innerText = contenido;
  modal.style.display = 'block';

	setTimeout(() => {
		modal.style.opacity = '1';
		modal.style.pointerEvents = 'auto';
		document.body.classList.add('modal-open'); 
	}, 10);
}

// Función para ocultar el modal
function ocultarModal() {
	const modal = document.getElementById('modal');
	modal.style.opacity = '0';
	modal.style.pointerEvents = 'none';
	document.body.classList.remove('modal-open');

	// Agregamos un pequeño retraso para asegurarnos de que la transición funcione correctamente
	setTimeout(() => {
		modal.style.display = 'none';
	}, 400); 
}

 // Obtener referencia a los botones "Ver más" y al botón de cierre
 const verMasBotones = document.querySelectorAll('.boton');
 const closeBtn = document.getElementById('close');

 // Agregar evento para mostrar el modal cuando se hace clic en "Ver más"
verMasBotones.forEach((boton) => {
	boton.addEventListener('click', (event) => {
		event.preventDefault();
		const card = boton.closest('.contenidos');
		const nombre = card.querySelector('h5').innerText;
		const precio = parseFloat(card.querySelector('p').innerText.replace('Tarifa dinámica $', '').replace(',', ''));
		const contenido = card.querySelector('p').innerText;
		mostrarModal(nombre, precio, contenido);
	});
});

// Agregar evento para ocultar el modal cuando se hace clic en el botón de cierre
closeBtn.addEventListener('click', ocultarModal);

// Agregar evento para ocultar el modal si se hace clic fuera de él
window.addEventListener('click', (event) => {
	const modal = document.getElementById('modal');
	if (event.target === modal) {
		ocultarModal();
	}
});


const cancelButton = document.querySelector('.cancel-button');
const reserveButton = document.querySelector('.reserve-button');

// Evento para cerrar el modal al hacer clic en "Cancelar"
cancelButton.addEventListener('click', () => {
	ocultarModal();
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

	// funcion para el año
	const currentYearElement = document.getElementById("currentYear");
  const currentYear = new Date().getFullYear();
  const text = currentYearElement.innerHTML; 
  currentYearElement.innerHTML = text.replace("©", "&copy;") + " " + currentYear; 

