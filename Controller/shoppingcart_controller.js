function addToCart (event,id) {
  event.preventDefault();
    console.log(id);
 
    const form = new FormData();
    form.append("id", id);

    const headers = {
      'Accept': 'application/json'
    }
    const apiCall = fetch('Controller/shoppingcart_fetch_controller.php', {
      method: 'POST',
      headers: headers,
      body: form,
    })
    .then(response => response.json()) // transformation de la réponse en json
    .then(response => {
      console.log(response);
    })
    .catch(error => console.error('fetch error')
      
    ); 
} // gestion erreur

// penser à lors de l utilisation de id de le transformer en int 
