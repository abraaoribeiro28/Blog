import Iconpicker from 'codethereal-iconpicker'

document.addEventListener('DOMContentLoaded', function() {
    // new Iconpicker(document.querySelector(".iconpicker"));
    // new Iconpicker(document.querySelector(".iconpicker"), options);
    // document.querySelectorAll('.iconpicker').forEach(picker => new Iconpicker(picker))

    (async () => {
        const response = await fetch('https://unpkg.com/codethereal-iconpicker@1.2.1/dist/iconsets/bootstrap5.json')
        const result = await response.json()

        const iconpicker = new Iconpicker(document.querySelector(".iconpicker"), {
            icons: result,
            showSelectedIn: document.querySelector(".selected-icon"),
            searchable: true,
            selectedClass: "selected",
            containerClass: "my-picker",
            hideOnSelect: true,
            fade: true,
            defaultValue: 'bi-alarm',
            valueFormat: val => `bi ${val}`
        });

        iconpicker.set() // Set as empty
        iconpicker.set('bi-alarm') // Reset with a value
    })()

});
