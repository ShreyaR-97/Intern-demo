console.log("test");

function verify(){
    const inputPassword = document.querySelector('#inputPassword')
    const  confirmPassword = document.querySelector('#confirmPassword')
    const passwordAlert = document.querySelector('#password')

    if(inputPassword.value !== confirmPassword.value){
        passwordAlert.innerHTML = "Password doesn't match !!";
        passwordAlert.style.display = "block"
     } else{
        console.log("Password match")
        passwordAlert.style.display = "none"
    
    }
}

let fruits =  ["orange", "mango", "banana"]
    console.log(fruits)

const Details = [{name: "Shreya", role: "Dev"},{name: "Priya", role:"Tester"},{name: "Nandan", role:"FSD"}]
console.log(Details)

