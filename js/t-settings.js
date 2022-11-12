(function(){
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#password");            

    togglePassword.addEventListener("click", function () {
        // toggle the type attribute
        const type = password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);
        
        // toggle the icon
        switch (type) {
            case 'password':
            togglePassword.classList.add("bxs-hide","text-primary");
            togglePassword.classList.remove("bxs-show","text-primary");  
                break;
            case 'text':
            togglePassword.classList.remove("bxs-hide","text-primary");
            togglePassword.classList.add("bxs-show","text-primary"); 
                break;
        
            default:
            togglePassword.classList.add("bxs-hide");  
                break;
        }
    });
})()