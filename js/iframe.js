let select = document.querySelector("select");
let option = document.querySelector("option");
let sayulita ="https://www.google.com/maps/embed?pb=!4v1669706371566!6m8!1m7!1sSuL-HnxhRa1PkHnYSRvnLA!2m2!1d20.86585590196234!2d-105.4329168507928!3f9.164014751465743!4f-9.065128977464013!5f0.7820865974627469"
let sanVicente ="https://www.google.com/maps/embed?pb=!4v1669706730062!6m8!1m7!1smzWlGNS48T2L_Sz29g9xag!2m2!1d20.74905844438806!2d-105.2494948336726!3f112.18786047441509!4f-7.87266722842601!5f0.7820865974627469"
let defaultPlace = "https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14928.917265196134!2d-105.27799865!3d20.70091065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1669714637154!5m2!1ses!2smx"
let iframe = document.querySelector("iframe");

console.log(select)



select.addEventListener("change", (e)=>{
    
    console.log(e.target.value);
    
    if(e.target.value === "San-Vicente"){
        iframe.src = sanVicente;
    }else if(e.target.value === "Sayulita"){
        iframe.src = sayulita;
    }else{
        iframe.src = defaultPlace;
    }
})