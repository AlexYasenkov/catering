export function removePlaceholders() {
    let contactForm = document.forms.contactForm;
    let formOrder = document.forms.formOrder;

    if (contactForm) {
        removePlaceholder(contactForm.userName);
        removePlaceholder(contactForm.userEmail);
        removePlaceholder(contactForm.userMessage);
    }
    if (formOrder) {
        removePlaceholder(formOrder.userName);
        removePlaceholder(formOrder.userPhone);
        removePlaceholder(formOrder.userMessage);
    }
}

function removePlaceholder(input) {
    let inputPlaceholder = input.placeholder;
    input.addEventListener('focus', function () {
        this.placeholder = '';
    });
    input.addEventListener('blur', function () {
        this.placeholder = inputPlaceholder;
    });
}