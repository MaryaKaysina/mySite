new WOW().init();
var mySwiper = new Swiper('.swiper-container', {
    pagination: {
        el: '.projects-pagination',
        bulletClass: 'projects-bullet',
        bulletActiveClass: 'projects-bullet-active',
        clickable: true,
    },
});

$(function(){
	$('.contacts-form button').on('click', function(){
		let formData = $('.contacts-form').serializeArray();
		let request = {};
		for(i in formData) {
			request[formData[i].name] = formData[i].value;
		}

		$.post('/api/api.php', request, function(response){
			if(response == "1") {
                $('.form-button').css('background', 'green');
            };
            
		});

		return false;
	});
});