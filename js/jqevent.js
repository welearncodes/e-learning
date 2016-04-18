$(document).ready(function(){
		$('.nav li').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active');
	});