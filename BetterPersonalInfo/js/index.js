
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches
var user = new User() // User input info
var have_mistakes = true

$(".next").click(function(){



	let allFields = false;
	if(this.parentNode == $('#basic')[0])
	{
		allFields = set_Info_Basic();
			//**************
			  
			 transport_countries();
		     //*************
	}
	else if(this.parentNode == $('#personal')[0])
		allFields = set_Info_Personal();
	else if(this.parentNode == $('#docs')[0])
		allFields = set_Info_Images();
	else if(this.parentNode == $('#social')[0])
		allFields = set_Info_Social();
	if(this.parentNode == $('#social')[0]){
		fill_Accept();
		let case1 = set_Info_Basic() && set_Info_Personal() && set_Info_Images() && set_Info_Social();
		if(case1){
			have_mistakes = false
		}
	}
	var dialog_result = true;
	if(!allFields)
		dialog_result = confirm("Не всі поля завповнено! Ви впевнены що хочете перейти на наступний крок?");
	if(!dialog_result)
	{
		return;
	}
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	if(allFields)
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//else if(this.parentNode == $('#social')[0])
		//$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("attent");
	else 
	{
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("inactive");
	}
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("inactive");
	//$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("attent");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	let inps = $("fieldset");
	for(let i = 0; i < inps.length; i++)
	{
		$(inps[i]).show();
	}
	if(have_mistakes && !output_input_filled()){
		return false;
	}
	else{
		return true;
	}
});

$("#swap").click(function(e){
	let country_out = $("#country-out");
	let country_in = $("#country-in");
	let temp = country_out[0].value;
	country_out[0].value = country_in[0].value;
	country_in[0].value = temp;
});

function set_Info_Basic()
{
	user.Citizenship = $('#visa_type')[0].value;
	user.Outcoming_country = $('#country-out')[0].value;
	user.Incoming_country = $('#country-in')[0].value;
	let case1 = user.Citizenship == user.DEFAULT || user.Citizenship == user.EMPTY;
	let case2 = user.Outcoming_country == user.DEFAULT || user.Outcoming_country == user.EMPTY;
	let case3 = user.Incoming_country == user.DEFAULT || user.Incoming_country == user.EMPTY;
	if(case1)
	{
		$("#visa_type").css({
			"background-color" : "rgba(255, 0, 0, 0.1)"
		})
		$("#visa_type").attr("placeholder", "*Будь ласка, заповніть дане поле");
	}
	if(case2)
	{
		$("#country-out").css({
			"background-color" : "rgba(255, 0, 0, 0.1)"
		})
		$("#country-out").attr("placeholder", "*Будь ласка, заповніть дане поле");
	}
	if(case3)
	{
		$("#country-in").css({
			"background-color" : "rgba(255, 0, 0, 0.1)"
		})
		$("#country-in").attr("placeholder", "*Будь ласка, заповніть дане поле");
	}
	if(case1 || case2 || case3)
		return false;
	else {
		let inps = $("#basic input");
		for(let i = 0; i < inps.length; i++)
		{
			if(inps[i].type != "button")
			{
				$(inps[i]).css({
					"background-color" : "white"
				})
			}
		}
		return true;
	}
}

function set_Info_Personal()
{
	user.Email = $('#email')[0].value;
	user.Telephone = $('#telephone')[0].value;
	user.Person_name = $('#user-name')[0].value;
	user.Surname = $('#user-surname')[0].value;
	user.City = $('#city')[0].value;
	user.State = $('#inputState')[0].value;
	let case1 = user.Email == user.DEFAULT || user.Email == user.EMPTY;
	let case2 = user.Telephone == user.DEFAULT || user.Telephone == user.EMPTY;
	let case3 = user.Person_name == user.DEFAULT || user.Person_name == user.EMPTY;
	let case4 = user.Surname == user.DEFAULT || user.Surname == user.EMPTY;
	let case5 = user.City == user.DEFAULT || user.City == user.EMPTY;
	let case6 = user.State == user.DEFAULT || user.State == user.EMPTY;
	if(case1)
	{
		$("#email").css({
			"background-color" : "rgba(255, 0, 0, 0.1)"
		})
		$("#email").attr("placeholder", "*Будь ласка, заповніть дане поле");
	}
	if(case2)
	{
		$("#telephone").css({
			"background-color" : "rgba(255, 0, 0, 0.1)"
		})
		$("#telephone").attr("placeholder", "*Будь ласка, заповніть дане поле");
	}
	if(case3)
	{
		$("#user-name").css({
			"background-color" : "rgba(255, 0, 0, 0.1)"
		})
		$("#user-name").attr("placeholder", "*Будь ласка, заповніть дане поле");
	}
	if(case4)
	{
		$("#user-surname").css({
			"background-color" : "rgba(255, 0, 0, 0.1)"
		})
		$("#user-surname").attr("placeholder", "*Будь ласка, заповніть дане поле");
	}
	if(case5)
	{
		$("#city").css({
			"background-color" : "rgba(255, 0, 0, 0.1)"
		})
		$("#city").attr("placeholder", "*Будь ласка, заповніть дане поле");
	}
	if(case6)
	{
		$("#inputState").css({
			"background-color" : "rgba(255, 0, 0, 0.1)"
		})
		$("#inputState").attr("placeholder", "*Будь ласка, заповніть дане поле");
	}

	if(case1 || case2 || case3 || case4 || case5 || case6)
		return false;
	else {
		let inps = $("#personal input");
		for(let i = 0; i < inps.length; i++)
		{
			if(inps[i].type != "button")
			{
				$(inps[i]).css({
					"background-color" : "white"
				})
			}
		}
		return true;
	}
}

function set_Info_Images()
{
	return totalFiles != undefined && totalFiles.length != 0;
}

function set_Info_Social()
{
	user.Facebook = $('#face-book')[0].value;
	user.Skype = $('#skype')[0].value;
	user.Telegram = $('#telegram')[0].value;
	let case1 = user.Facebook == user.DEFAULT || user.Facebook == user.EMPTY;
	let case2 = user.Skype == user.DEFAULT || user.Skype == user.EMPTY;
	let case3 = user.Telegram == user.Default || user.Telegram == user.EMPTY;
	if(case1 || case2 || case3)
		return true; //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	return true;
}

function fill_Accept()
{
	input_labels = $('.input-label');
	output = $(".output")[0];
	output.innerHTML = ""
	let group = ""
	for(let i = 0; i < input_labels.length; ++i){
		let color_text = "black";
		let color_back = "white";
		let sign = "";
		let tag = user.Associate(input_labels[i].innerText);
		if((tag == user.DEFAULT || tag == user.EMPTY) && $(input_labels[i]).parent().parent().parent().parent()[0].id != "social"){
			sign = "*";
			color_text = "red"
			color_back = "rgba(255, 0, 0, 0.1)";
		}

		group = "<div class='form-group output  col-md-6'>"
		group += "<label class='output-label' style='color:" + color_text + "'>" + input_labels[i].innerText + sign + "</label>";
		group += "<input style='background-color: " + color_back + "' class='output-input form-control' name=" + input_labels[i].innerText + " placeholder=" + input_labels[i].innerText + " value=" + tag + ">";
		group += "<br/><br/></div>";
		output.innerHTML += group;
		//output.innerHTML += "<hr>";
	}
}

function output_input_filled(){
	let outs = $('.output-input');
	for(let i = 0; i < outs.length; i++){
		if(outs[i].value == user.DEFAULT || outs[i].value == user.EMPTY){
			return false;
		}
	}
	return false
}

function transport_countries()
{
	let country_out = $("#country-out")[0]
	$("#inputState")[0].value="";
	if(country_out.value in dct)
	{
	  var arr = dct[country_out.value];
	  $("#states-data")[0].innerHTML = "";
	  for (let i = 0; i < arr.length; i++)
	  {
	    $("#states-data")[0].innerHTML += "<option value=" + arr[i] + ">"
	  }
	}
}

$('input-with-help').click(function(e){
	this.find('countries').autocomplete({source : countries});
	this.find('states').autocomplete({source : states});
})

$("#country-out").change(function(e){
  transport_countries();
})

$(".telephone").mask("+9(999)999-99-99");
