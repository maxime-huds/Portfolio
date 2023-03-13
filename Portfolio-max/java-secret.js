// Tableau des chemins d'accès des images
var images = [
    "assets/images/1.png",
    "assets/images/0.png",
    
    // Ajouter d'autres chemins d'accès ici
  ];
  
  // Fonction pour générer une image aléatoire
  function getRandomImage() {
    var index = Math.floor(Math.random() * images.length);
    return images[index];
  }
  
  // Fonction pour créer et afficher une image flottante
  function createFloatingImage() {
    var img = document.createElement("img");
    img.classList.add('code-secret')
    img.src = getRandomImage();
    img.style.position = "fixed";
    img.style.zIndex = "1";
    img.style.top = Math.floor(Math.random() * window.innerHeight) + "px";
    img.style.left = Math.floor(Math.random() * window.innerWidth) + "px";
    img.style.opacity = "0.7";
    img.style.pointerEvents = "none";
    document.body.appendChild(img);
  }
  
  // Appel de la fonction pour créer des images flottantes toutes les 3 secondes
  setInterval(createFloatingImage, 3000);
  