document.getElementById("checkAll").addEventListener("click", function () {
    let checkboxes = document.querySelectorAll('input[type="checkbox"]');
    let allChecked = Array.from(checkboxes).every(checkbox => checkbox.checked);

    checkboxes.forEach(checkbox => {
        checkbox.checked = !allChecked;
    });
});

document.addEventListener('DOMContentLoaded', check(listAll, '.list'));
document.addEventListener('DOMContentLoaded', check(createAll, '.create'));
document.addEventListener('DOMContentLoaded', check(editAll, '.edit'));
document.addEventListener('DOMContentLoaded', check(deleteAll, '.delete'));

function check(element, reference) {
    if (element) {
        element.addEventListener('click', function () {
            const allListCheckboxes = [...document.querySelectorAll(reference)];
            allListCheckboxes.forEach(checkbox => checkbox.querySelector('input').checked = element.checked);
        });
    }
}
