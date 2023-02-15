//select inputs
// const submitbtn = document.querySelector('.submitBtn');
// const email = document.querySelector('#email');
// const username = document.querySelector('#username');
// const password = document.querySelector('#password');
// const confirmpassword = document.querySelector('#confirmpassword');

// submitbtn.addEventListener('click', () => {
// 	if(email.value.length < 3){
// 		showAlert('email must be 5 letters long');
// 	}
// })

// // alert function
// const showAlert = (msg) => {
// 	let alertBox = document.querySelector('.alert-box');
// 	let alertMsg = document.querySelector('.alert-msg');
// 	alertMsg.innerHTML = msg;
// 	alertBox.classList.add('show');
// 	setTimeout(() =>{
// 		alertBox.classList.remove('show');
// 	}, 3000);
// }

const Form = document.querySelector("form.form");
const inputs = Form.querySelectorAll("input");

inputs.forEach((input)=> {
	input.addEventListener("blur", ()=> {
		console.log("BLUR");
		if (input.value.length <= 3) {
			input.classList.add("error");
		} else {
			input.classList.remove("error");
		}
	})
});
