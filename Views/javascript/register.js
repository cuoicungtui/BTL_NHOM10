const form = document.querySelector('form')
const username = document.getElementById('username')
const email = document.getElementById('email')
const password = document.getElementById('password')
const password2 = document.getElementById('password2')

function showError(input, message) {
	let parent = input.parentElement;
	let small = parent.querySelector('small')

	parent.classList.add('error')
	small.innerHTML = message
}
function showSuccess(input) {
	let parent = input.parentElement;
	let small = parent.querySelector('small')

	parent.classList.remove('error')
	small.innerHTML = ''
}

function checkEmptyError(listInput) {
	let isEmptyError = false
	listInput.forEach(input => {
		input.value = input.value.trim()
		if(!input.value){
			showError(input, 'Không được để trống')
			isEmptyError = true
		}
		else{
			showSuccess(input)
		}
	})
	return isEmptyError
}

function checkEmailError(input) {
	const regexEmail =
  /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
	input.value = input.value.trim()

	let isEmailError = regexEmail.test(input)
	if(regexEmail.test(input.value)){
		showSuccess(input)
	}else{
		showError(input, 'Email không hợp lệ')
	}
	return isEmailError

}

function checkLengthError(input, min, max){
	input.value = input.value.trim()
	if(input.value.length < min) {
		showError(input, `Không được dưới ${min} ký tự`)
		return true
	}
	if(input.value.length > max) {
		showError(input, `Không được quá ${max} ký tự`)
		return true
	}
	showSuccess(input)
	return false
}

function checkMatchPasswordError(passwordInput, cfpasswordInput) {
	if(passwordInput. value !== cfpasswordInput.value){
		showError(cfpasswordInput, 'Mật không giống')
		return true
	}
	return false
}

form.addEventListener('submit', function(e){
	e.preventDefault()


	let isEmptyError = checkEmptyError([username, email, password, password2])
	let isEmailError = checkEmailError(email)
	let isLengthError = checkLengthError(username, 3, 10)
	let isPasswordLengthError = checkLengthError(username, 3, 10)
	let ischeckMatchPasswordError = checkMatchPasswordError(password, password2)

	if(isEmptyError || isEmailError || isLengthError || isPasswordLengthError || ischeckMatchPasswordError){
		// do nothing
	}else {
		//logic, call API
	}
})