let select = document.querySelector("select");
let option = document.querySelector("option");
let sayulita ="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233.00883615577476!2d-105.43346166166339!3d20.866351033743445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842116747efe2677%3A0x76faefa5d5a29c64!2sAv.%20Revoluci%C3%B3n%20231%2C%2063728%20Sayulita%2C%20Nay.!5e0!3m2!1ses!2smx!4v1669734842728!5m2!1ses!2smx"
let sanVicente ="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d932.7648277240347!2d-105.24915151095665!3d20.748389995980364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842147b0b064d9af%3A0xdd32ed801c058058!2sConsultorio%20Dental%20DRA.%20ALMA%20TEMBLADOR!5e0!3m2!1ses!2smx!4v1669734639737!5m2!1ses!2smx"
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