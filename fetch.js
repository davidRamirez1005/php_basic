// Datos a enviar al servidor
var datos = {
    nombre: "John Dovvve",
    edad: 30,
    ciudad : "giron",
  };
  
  // Configurar la solicitud POST
  var url = "archivo.php";
  var opciones = {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(datos),
  };
  
  // Realizar la solicitud utilizando Fetch API
  fetch(url, opciones)
    .then(response => response.json())
    .then(data => {
      console.log(data); // Mostrar la respuesta del servidor en la consola
    })
    .catch(error => {
      console.log('Error:', error);
    });
  