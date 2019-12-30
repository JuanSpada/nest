var form = document.querySelector('#form');

form.addEventListener('submit', function(event) {
    event.preventDefault();
    Swal.fire({
        title: '¡Envíado correctamente!',
        text: '¡Gracias por confiar en nosotros, nos pondremos en contacto a la brevedad!',
        imageUrl: '../images/logo.png',
        width: 500,
        imageWidth: 200,
        imageHeight: 100,
        imageAlt: 'Custom image',
      })
      
    let formData = new FormData(form);
    form.reset();
    fetch("contact.php",
    {
        body: formData,
        method: "post"
    });
});