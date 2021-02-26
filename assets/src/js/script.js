// ==================================================
// debug tool
// ==================================================
let isDebugMode = false;
const domDebug = document.querySelector('.debug__js');
function openDebug(e) {
  let isOK = false;
  if (e.keyCode === 90) {
    // z
    this.isDebugMode = !this.isDebugMode;
    if (this.isDebugMode) {
      domDebug.classList.remove('hidden');
    } else {
      domDebug.classList.add('hidden');
    }
  }
}
window.addEventListener('keyup', openDebug);
