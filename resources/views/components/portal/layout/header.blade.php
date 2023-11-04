<header class="bg-cor-principal">
    <nav class="navbar navbar-expand-lg navbar-dark py-md-4">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="logo" src="{{ url($configuration['logo']) }}" loading="lazy" alt="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="menu-header" class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0">
                    {{--  @includ('components.portal.menu-list', ['menus' => $menus, 'level' => 0])--}}
                </ul>
            </div>
        </div>
    </nav>
</header>

<script defer>
    function generateMenu(menus, level = 0, dropend = false) {
        let html = '';

        menus.forEach(menu => {
            if (menu.all_children && menu.all_children.length) {
                if (dropend) {
                    html += `<li class="dropdown-submenu">`;
                    html += `<a class="dropdown-item dropdown-toggle" href="#">${menu.name}</a>`;
                    html += `<ul class="dropdown-menu">`;
                    html += generateMenu(menu.all_children, level + 1, true);
                    html += `</ul>`;
                    html += `</li>`;
                } else {
                    html += `<div class="dropdown">`;
                    html += `<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton-${menu.id}" data-bs-toggle="dropdown">${menu.name}</button>`;
                    html += `<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton-${menu.id}">`;
                    html += generateMenu(menu.all_children, level + 1, true);
                    html += `</ul>`;
                    html += `</div>`;
                }
            } else {
                html += `<li class="nav-item"><a class="nav-link active" href="${menu.url}">${menu.name}</a></li>`;
            }
        });

        return html;
    }

    document.querySelector('#menu-header').innerHTML = generateMenu(@json($menus));
</script>
