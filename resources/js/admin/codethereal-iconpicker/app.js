import Iconpicker from 'codethereal-iconpicker'

document.addEventListener('DOMContentLoaded', function() {
    (async () => {
        const response = await fetch('https://unpkg.com/codethereal-iconpicker@1.2.1/dist/iconsets/bootstrap5.json')
        const result = await response.json()
        let value  = document.querySelector(".iconpicker").value;

        if (value == '') value = 'bi-alarm';

        const iconpicker = new Iconpicker(document.querySelector(".iconpicker"), {
            icons: result,
            showSelectedIn: document.querySelector(".selected-icon"),
            searchable: true,
            selectedClass: "selected",
            containerClass: "my-picker",
            hideOnSelect: false,
            fade: true,
            defaultValue: value
        });
    })()
});
