 function tiempoMax(){
    const response =  fetch("./timeOut")
    // const data = response.json()
    console.log(response)
  }


  setInterval(tiempoMax(),100)
