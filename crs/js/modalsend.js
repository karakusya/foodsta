const MODAL_ACTIVE_CLASS_NAME = 'modal-active';

const formModal = document.querySelector('#form-modal');
const successModal = document.querySelector('#success-modal');
const form = document.getElementById('modal-form');

const openFormModalBtns = document.querySelectorAll('.order-button');
const sendButton = document.querySelector('#send-btn');
const closeBtns = document.querySelectorAll('.close-modal');


openFormModalBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        formModal.classList.add(MODAL_ACTIVE_CLASS_NAME);
    });
});

const closeFormModal = () => {
    formModal.classList.remove(MODAL_ACTIVE_CLASS_NAME);
};

const closeSuccessModal = () => {
    successModal.classList.remove(MODAL_ACTIVE_CLASS_NAME);
};

const openSuccessModal = () => {
    successModal.classList.add(MODAL_ACTIVE_CLASS_NAME);
};

closeBtns.forEach(btn => {
    btn.addEventListener('click', e => {
        e.stopPropagation();
        closeFormModal();
        closeSuccessModal('.success-close');
    });
});

function clearFormFields() {
    const modalFields = formModal.querySelectorAll('input');

    modalFields.forEach(field => {
        field.value = '';
    });
}

form.addEventListener('submit', e => {
    e.preventDefault();
    fetch(form.action, {
        method: 'POST',
        body: new FormData(document.getElementById('modal-form')),
    })
        .then(response => response.json())
        .then(() => {
            closeFormModal();
            setTimeout(openSuccessModal, 700);
            clearFormFields();
        })
        .catch(error => console.log('Sending form failed'));
});