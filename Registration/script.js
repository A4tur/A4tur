
addEventListener('load', () => {
    setTimeout(function(){
        document.getElementsByTagName("footer")[0].style.height = "70vh" 
        setTimeout(function(){
            document.getElementsByClassName("footer-line")[0].style.opacity = "1" 
        },1500)
    },400)  
})

function toggle(input, parent){
    let cl = ""
    let op = ""
    
    for(let i = 0; i < parent.childNodes.length; i++){
        if(parent.childNodes[i].tagName == "IMG"){
            if(parent.childNodes[i].id == "close") cl = parent.childNodes[i]
            else op = parent.childNodes[i]
        }
    }
    if(input.type === "password") {
        input.type = "text"
        cl.style.display = "none"
        op.style.display = "block" 
    } 
    else {
        input.type = "password"
        cl.style.display = "block"
        op.style.display = "none"
    }
}


function check(val){
    const check = {formatNickname: new RegExp(/[!@#$%§^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/), formatPassword: new RegExp(/[!@#$%§^&()+\-=\[\]{};':"\\|,.<>\/?]+/)}
    const spaceBar = " "
    switch(val){
        case 'reg': 
            const nicknameregister = document.getElementsByName("reg-nickname")[0]
            const email = document.getElementsByName("email")[0]
            const pass1 = document.getElementsByName("reg-password1")[0]
            const pass2 = document.getElementsByName("reg-password2")[0]
    
            const submitreg = document.getElementsByName("register")[0]
    
            const datas1 = [nicknameregister, email, pass1, pass2]

            if( nicknameregister.value.length >= 2 && nicknameregister.value.length <= 30 &&
                !check.formatNickname.test(nicknameregister.value) &&
                email.value.length >= 3 && email.value.length <= 50 &&
                pass1.value.length >= 8 && pass1.value.length <= 30 &&
                !check.formatPassword.test(pass1.value) &&
                pass1.value == pass2.value &&
                datas1.every(function (e) { let patt = new RegExp(" "); return patt.test(e.value) !== true })){
                    submitreg.disabled = false
            }
            else submitreg.disabled = true
            break;
        case 'log':
            const nicknamelogin = document.getElementsByName("log-nickname")[0]
            const pass = document.getElementsByName("log-password")[0]

            const submitlog = document.getElementsByName("login")[0]

            const datas2 = [nicknamelogin, pass]

            if( nicknamelogin.value.length >= 2 && nicknamelogin.value.length <= 30 &&
                !check.formatNickname.test(nicknamelogin.value) &&
                pass.value.length >= 8 && pass.value.length <= 30 &&
                !check.formatPassword.test(pass.value) &&
                datas2.every(function (e) { let patt = new RegExp(" "); return patt.test(e.value) !== true })){
                    submitlog.disabled = false
            }
            else submitlog.disabled = true
            break;
        default:
            console.log("do not")
    }
    
}
