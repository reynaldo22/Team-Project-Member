let password = document.getElementById('password')
let ktpKetua = document.getElementById('ktp-ketua').files[0]
let ktpAnggota1 = document.getElementById('ktp-anggota1').files[0]
let ktpAnggota2 = document.getElementById('ktp-anggota2').files[0]
let passwordCheck = /[-!$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/ 


function updateFile(){
	ktpKetua = document.getElementById('ktp-ketua').files[0]				/*Change File responsively */
	ktpAnggota1 = document.getElementById('ktp-anggota1').files[0]
	ktpAnggota2 = document.getElementById('ktp-anggota2').files[0]
}


function checkKTPKetua(){
	if(ktpKetua == undefined){
		$("#ktpKetua").removeClass("text-muted").addClass("text-danger");
	}
	else if(ktpKetua.type == "image/jpeg" && ktpKetua.size < 1048576){
		return 1
	}
	else{
		$("#ktpKetua").removeClass("text-muted").addClass("text-danger");
		return 0
	}
}

function checkKTPAnggota1(){
	if(ktpAnggota1 == undefined){
		$("#ktpAnggota1").removeClass("text-muted").addClass("text-danger");
	}
	else if(ktpAnggota1.type == "image/jpeg" && ktpAnggota1.size < 1048576){
		return 1
	}

	else{
		$("#ktpAnggota1").removeClass("text-muted").addClass("text-danger");
		return 0
	}
}

function checkKTPAnggota2(){
	if(ktpAnggota2 == undefined){
		$("#ktpAnggota2").removeClass("text-muted").addClass("text-danger");
	}
	else if(ktpAnggota2.type == "image/jpeg" && ktpAnggota2.size < 1048576){ 
		return 1
	}
	else{
		$("#ktpAnggota2").removeClass("text-muted").addClass("text-danger");
		return 0
	}
}

function checkFileType(fileA,fileB,fileC ){
	if(fileA == 1 && fileB == 1 && fileC == 1){
		return 1
	}
	else{
		return 0
	}
}

function validatePassword(){
		if(password.value.length < 10 || passwordCheck.test(password.value) == true){
			$("#textPassword").removeClass("text-muted").addClass("text-danger")
			return 0
		}
		else{
			return 1
		}

}

	
$(document).ready(function(){
	//console.log("a");
	$(".form-control-file").change(function(event){
		updateFile();
	})

	$("#register").submit(function(event){
		validatePassword()
		if(checkFileType(checkKTPKetua(),checkKTPAnggota1(),checkKTPAnggota2()) == 1 && validatePassword() == 1){
			return;
		}
		else{
			event.preventDefault();	
		}
	});
}); 