        const navCuerpo = document.querySelector("#nav");
        const visible = navCuerpo.classList.contains("visible");
        console.log(visible);
        const body = document.querySelector("#body");

        if(!visible) {
            console.log("Entrando al if");       
        } else{
            console.log("Enrando al else");
    }