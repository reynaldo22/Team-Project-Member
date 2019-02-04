const verify = document.getElementsByClassName('verify')
let verifyLength = verify.length

for(let i = 0;i < verifyLength;i++){
	verify[i].setAttribute('id','verify' + (i+1))
}

$(document).ready(function(){
	$('.verify').click(function(){
		let verifyAttr = $(this).attr('id')
		$('#'+verifyAttr).removeClass("checkbox-white").addClass("checkbox-green").text("Verificated")
	})
})