
const tables = document.querySelectorAll('.sortable');

tables.forEach(element => {
    new Sortable(element, {
        animation: 150,
        handle: '.handle',
        onSort: async function (evt) {
            const items = document.querySelectorAll('.item-menu');
            let data = Array();
            items.forEach(element => {
                data.push(element.id.replace('item-', ''));
            });

            const loader = document.querySelector('.preloader');
            loader.classList.remove('d-none')

            resultado = await myFetch('/admin/menu-order', 'POST', data);

            if (resultado){
                loader.classList.add('d-none')
            }
        }
    });
});



