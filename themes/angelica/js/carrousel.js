
(function(){

	
	
	let bout1 = document.getElementById('un')
	console.log(bout1.id)
	let bout2= document.getElementById('deux')
	console.log(bout2.id)
	let bout3= document.getElementById('trois')
	console.log(bout3.id)
	let carrousel = document.querySelector('.carrousel')
	console.log('carrousel')

	bout1.addEventListener('mousedown', function (){
	
		carrousel.style.transform = "translateX(0)"
		carrousel.style.opacity +1;
	})

	bout2.addEventListener('mousedown', function (){
		carrousel.style.transform = "translateX(-100vw)"
		carrousel.style.opacity +1;
	})

	bout3.addEventListener('mousedown', function (){
		carrousel.style.transform = "translateX(-200vw)"
		carrousel.style.opacity +1;
	
	})

	
	
	
	


	
	
	

		
	
		

    }())

		