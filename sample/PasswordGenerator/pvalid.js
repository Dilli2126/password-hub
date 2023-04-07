
let pswrd=document.getElementById('pswrd');
let togglebtn=document.getElementById('togglebtn');
let lowercase=document.getElementById('lower');
let uppercase=document.getElementById('upper');
let digit=document.getElementById('number');
let specialchar=document.getElementById('special');
let minlength=document.getElementById('length');

function checkPassword(data){
	const lower = new RegExp('(?=.*[a-z])');
	const upper = new RegExp('(?=.*[A-Z])');
	const number = new RegExp('(?=.*[0-9])');
	const special = new RegExp('(?=.*[!@#\$%\^&\*])');
	const length = new RegExp('(?=.{8,})');

	if (lower.test(data)) {
		lowercase.classList.add('valid');
	}else {
		lowercase.classList.remove('valid')
	}
	if (upper.test(data)) {
		uppercase.classList.add('valid');
	}else {
		uppercase.classList.remove('valid')
	}
	if (number.test(data)) {
		digit.classList.add('valid');
	}else {
		digit.classList.remove('valid')
	}
	if (special.test(data)) {
		specialchar.classList.add('valid');
	}else {
		specialchar.classList.remove('valid')
	}
	if (length.test(data)) {
		minlength.classList.add('valid');
	}else {
		minlength.classList.remove('valid')
	}
}
togglebtn.onclick=function(){
	if (pswrd.type==='password') {
		pswrd.setAttribute('type','text');
		togglebtn.classList.add('hide');
	}
	else{
		pswrd.setAttribute('type','password');
		togglebtn.classList.remove('hide');
	}
}