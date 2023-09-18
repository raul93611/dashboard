import './bootstrap';
import '/node_modules/admin-lte/plugins/jquery/jquery.min.js';
import '/node_modules/admin-lte/dist/js/adminlte.min.js';

const addChirpButton = document.getElementById('add-chirp-button');
const newChirpModal = new bootstrap.Modal('#new-chirp-modal');

addChirpButton.addEventListener('click', (e) => {
  newChirpModal.show();
});
window.addEventListener('newChirpFormSubmitted', () => {
  newChirpModal.hide();
});

const editChirpModal = new bootstrap.Modal('#edit-chirp-modal');

window.addEventListener('edit-chirp-button', () => {
  editChirpModal.show();
});
window.addEventListener('chirp-updated', () => {
  editChirpModal.hide();
});