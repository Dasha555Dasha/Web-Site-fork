document.getElementById("open_modal_btn").addEventListener("click", function() {
    document.getElementById("my_modal").classList.add("open");
});

document.getElementById("open_register_modal_btn").addEventListener("click", function() {
    document.getElementById("register_modal").classList.add("open");
});

document.getElementById("open_add_modal_btn").addEventListener("click", function() {
    document.getElementById("add_modal").classList.add("open");
});

function closeModal() {
    document.getElementById("my_modal").classList.remove("open");
    document.getElementById("register_modal").classList.remove("open");
    document.getElementById("add_modal").classList.remove("open");
}

document.querySelector(".log_in-registr").addEventListener("click", function() {
    closeModal();
    const targetModalId = this.getAttribute("data-target");
    document.getElementById(targetModalId).classList.add("open");
});

document.querySelector(".registr-log_in").addEventListener("click", function() {
    closeModal();
    const targetModalId = this.getAttribute("data-target");
    document.getElementById(targetModalId).classList.add("open");
});

function validateNumberInput(input) {
    input.value = input.value.replace(/\D/g, '');
}