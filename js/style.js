$(document).ready(function(){
$('#reg_form').submit(function(){
	if(validateTextField('f_name','fnameInfo')& validateTextField('l_name','lnameInfo')& validateEmail('email','emailInfo')& validateNumber('phone','phoneInfo')){
		return true;
	}else{
		return false;
	}
});
function validateTextField(fieldName,Id){
	if ($('input[name=' + fieldName + ']').val().length < 1){
			$('#'+ Id).text('Please enter any text').fadeIn();
			$('#'+ Id).addClass('error');
			return false;
	}
	else if(isNaN($('input[name=' + fieldName +']').val()) == false){
		$('#'+ Id).text('Please enter text only').fadeIn();
		$('#'+ Id).addClass('error');
		return false;
	}
	else{
		$('input[name=' + fieldName + ']').removeClass('error');
		$('#'+ Id).fadeOut();
		return true;
	}
}
function validateEmail(fieldName,Id){
	var a= $('input[name=' + fieldName + ']').val();
	var filter= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (filter.test(a)){
		$('#'+fieldName).removeClass('error');
		$('#'+ Id).fadeOut();
		$('#'+ Id).removeClass('error');
		return true;
	}
	else{
		$('#'+ Id).text('Please enter a valid email address');
		$('#'+ Id).addClass('error');
		return false;
	}
}
function validateNumber(fieldName, Id){
	if(isNaN($('input[name=' + fieldName +']').val())){
	$('#'+ Id).text('Only number,No text allowed');
	$('#'+ Id).addClass('error');
	return false;
	}else if($('input[name=' + fieldName + ']').val()<1){
	$('#'+ Id).text('Number should be 11digit').fadeIn();
	$('#'+ Id).addClass('error');
	return false;
	}
	else{
		$('input[name=' + fieldName + ']').removeClass('error');
		$('#'+ Id).fadeOut();
		$('#'+ Id).removeClass('error');
		return true;
	}
}
});