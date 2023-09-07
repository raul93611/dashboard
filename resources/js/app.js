import './bootstrap';
import '/node_modules/admin-lte/plugins/jquery/jquery.min.js';
import '/node_modules/admin-lte/dist/js/adminlte.min.js';

const addChirpButton = document.getElementById('add-chirp-button');
const newChirpModal = new bootstrap.Modal('#new-chirp-modal');
const newChirpForm = document.getElementById('new-chirp-form');

addChirpButton.addEventListener('click', (e) => {
  newChirpModal.show();
});
window.addEventListener('newChirpFormSubmitted', () => {
  newChirpModal.hide();
});

