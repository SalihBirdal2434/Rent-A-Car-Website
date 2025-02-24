const loginBtn = document.querySelector("#login-btn");
const registerBtn = document.querySelector("#register-btn");
const loginForm = document.querySelector(".login-form");
const registerForm = document.querySelector(".register-form");
const socialLogin = document.querySelector(".social-login");

// Login butonuna tıklama olayı
loginBtn.addEventListener("click", () => {
  // Login formunu aktif yap
  loginForm.style.display = "block";
  loginForm.style.opacity = 1;
  loginForm.style.left = "50%";

  // Register formunu gizle
  registerForm.style.display = "none";

  // Sosyal medya ikonlarını her iki formda da göster
  socialLogin.style.display = "flex"; // İkonları göstermek için

  // Buton stillerini güncelle
  loginBtn.style.backgroundColor = "#b5b5b5";
  registerBtn.style.backgroundColor = "rgba(255, 255, 255, 0.2)";

  // Border stilini güncelle
  document.querySelector(".col-1").style.borderRadius = "0 30% 20% 0";
});

// Register butonuna tıklama olayı
registerBtn.addEventListener("click", () => {
  // Register formunu aktif yap
  registerForm.style.display = "block";
  registerForm.style.opacity = 1;
  registerForm.style.left = "50%";

  // Login formunu gizle
  loginForm.style.display = "none";

  // Sosyal medya ikonlarını her iki formda da göster
  socialLogin.style.display = "flex"; // İkonları göstermek için

  // Buton stillerini güncelle
  registerBtn.style.backgroundColor = "#b5b5b5";
  loginBtn.style.backgroundColor = "rgba(255, 255, 255, 0.2)";

  // Border stilini güncelle
  document.querySelector(".col-2").style.borderRadius = "0 20% 30% 0";
});
