// Ambil elemen tombol dengan id "button"
var button = document.getElementById("button");

// Sembunyikan tombol saat halaman dimuat
button.style.display = "none";

// Fungsi untuk menyembunyikan tombol saat diklik
function hideButton() {
  button.style.display = "none";
}

// Panggil fungsi hideButton() saat tombol "Submit" diklik
document.getElementById("submit-button").addEventListener("click", hideButton);
