window.onload = () => { // Evento de carga (Preparación de contenido de administración)
    var socialBar = document.getElementById('barra')
    socialBar.style.display = 'none'  // Ocultar la barra de navegación

    // Cambio del contenido del menú
    var elementosMenu1 = document.getElementById('elementosMenu1')
    var elementosMenu2 = document.getElementById('elementosMenu2')
    elementosMenu1.innerHTML = `<li class="nav-item active">
                                    <a class="nav-link" href="/">Ver sitio web
                                    <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin-categorias">Categorías</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin-productos">Productos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Configuraciones</a>
                                </li>`
    elementosMenu2.innerHTML = `<li class="nav-item">
                                    <a href="#" class="nav-link border border-light rounded waves-effect waves-light"
                                    target="_blank">
                                        <i class="fa fa-user mr-2"></i>Cerrar Sesión
                                    </a>
                                </li>`

}
