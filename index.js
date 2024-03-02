function checkPassword() {
    const passwordStrength = document.getElementById("password").value.length;
    const messageElement = document.getElementById("passwordMessage");
    
    if (passwordStrength < 14) {
        messageElement.textContent = "Votre mot de passe est trop court, il doit comprendre au moins 14 caractères.";
    } else {
        messageElement.textContent = ""; // Efface le message s'il est déjà présent
    }
}

function togglePasswordVisibility() {
    const passwordInput = document.getElementById("password");
    const toggleIcon = document.querySelector(".input-icon-eye");
  
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      toggleIcon.classList.replace("fa-eye", "fa-eye-slash");
    } else {
      passwordInput.type = "password";
      toggleIcon.classList.replace("fa-eye-slash", "fa-eye");
    }
  }