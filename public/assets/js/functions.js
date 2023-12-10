async function myFetch(url, type = 'GET', data = null) {
    try {
        let response;
        if (type.toUpperCase() === 'GET') {
            response = await fetch(url);
        } else {
            response = await fetch(url, {
                headers: {
                    "Content-type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                },
                method: type,
                body: data ? JSON.stringify(data) : '',
            });
        }

        let result = await response.json();

        return result;
    } catch (err) {
        console.log(`Erro: ${err.message}\nRequisição: ${url}\nData: ${data ? data : 'Sem Dados enviados'}\nTipo: ${type}`);
    }
}

function slugify(str) {
    return str.toLowerCase()
        .normalize("NFD")
        .replace(/[\u0300-\u036f]/g, "")
        .split("")
        .map((character) => (/[a-z0-9]/.test(character) ? character : "-"))
        .join("")
        .replace(/-+/g, "-")
        .replace(/^-|-$/g, "");
}
