// When the user clicks anywhere outside of the laLeyEsCristomodal, close it
var guardaModal = document.getElementById('laLeyEsCristoModal');
var guardaModal2 = document.getElementById('R1');
var guardaModal3 = document.getElementById('revive');
var guardaModal4 = document.getElementById('luz');
var guardaModal5 = document.getElementById('kairos');
var guardaModal6 = document.getElementById('rec');
var guardaModal7 = document.getElementById('renacer');
var guardaModal8 = document.getElementById('camino');
window.onclick = function(event) {
  if (event.target == laLeyEsCristoModal) {
    guardaModal.style.display = "none";
  }
  if (event.target == R1) {
    guardaModal2.style.display = "none";
  }
  if (event.target == revive) {
    guardaModal3.style.display = "none";
  }
  if (event.target == luz) {
    guardaModal4.style.display = "none";
  }
  if (event.target == kairos) {
    guardaModal5.style.display = "none";
  }
  if (event.target == rec) {
    guardaModal6.style.display = "none";
  }
  if (event.target == renacer) {
    guardaModal7.style.display = "none";
  }
  if (event.target == camino) {
    guardaModal8.style.display = "none";
  }
}
