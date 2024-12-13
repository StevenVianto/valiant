// Pilih elemen navbar
const navbar = document.getElementById('ftco-navbar');

// Event listener untuk scroll
window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    navbar.classList.add('shrink');
  } else {
    navbar.classList.remove('shrink');
  }
});


// new
// Saat halaman selesai dimuat, sembunyikan overlay
// Saat halaman selesai dimuat, sembunyikan overlay dan aktifkan scroll
document.addEventListener('DOMContentLoaded', () => {
    const overlay = document.querySelector('.loading-overlay');
    const html = document.querySelector('html');
  
    setTimeout(() => {
      overlay.classList.add('hidden'); // Sembunyikan overlay
      html.classList.remove('loading'); // Aktifkan scroll
    }, 500); // Durasi 0.5 detik (500ms)
  });
  
  
  