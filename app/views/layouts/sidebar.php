<!--El archivo .htacces tiene este linea RewriteRule ^(.+)$ app/index.php?url=$1 [QSA,L] -->
<!--Detectamos en qué pagina estamos para marcar el link activo del siderbar(inicio,producto,...)-->
 <?php
    $partesRuta = explode('/', trim($_GET['url'] ?? 'dashboard', '/'));
    $rutaActual = $partesRuta[0] ?: 'dashboard';
    $accionActual = $partesRuta[1] ?? 'index';
    $reportesAbierto = $rutaActual === 'empleados';
 ?>

<!-- TOPBAR (solo visible en móvil) -->
<div class="topbar">
    <div class="title-business">
        <span><?php echo htmlspecialchars($usuario['nombre_usuario'] ?? 'Usuario'); ?></span>
    </div>
    <div class="btn-menu">
        <button class="hamburger" aria-label="Abrir menú">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</div>

<!-- OVERLAY -->
<div class="overlay"></div>

<!-- SIDEBAR -->
<aside class="sidebar">
    <div class="sidebar-logo"><?php echo htmlspecialchars($usuario['nombre_usuario'] ?? 'Usuario'); ?></div>
    <ul>
        <li>
            <a href="<?php echo BASE_URL; ?>/dashboard"
                class="<?php echo $rutaActual === 'dashboard' ? 'activo' : ''   ; ?>" >
                <i class="fa-solid fa-house"></i>
                <span>Inicio</span>
            </a>
        </li>
        <li class="nav-group <?php echo $reportesAbierto ? 'open' : ''; ?>">
            <button type="button"
                class="nav-toggle <?php echo $reportesAbierto ? 'activo' : ''; ?>"
                aria-expanded="<?php echo $reportesAbierto ? 'true' : 'false'; ?>">
                <i class="fa-solid fa-clipboard-list"></i>
                <span>Empleados</span>
                <i class="fa-solid fa-chevron-down nav-chevron"></i>
            </button>
            <ul class="submenu">
                <li>
                    <a href="<?php echo BASE_URL; ?>/empleados/reportes"
                        class="<?php echo $rutaActual === 'empleados' && $accionActual === 'reportes' ? 'activo' : ''; ?>">
                        <span>Reportes</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>/empleados/registro"
                        class="<?php echo $rutaActual === 'empleados' && $accionActual === 'registro' ? 'activo' : ''; ?>">
                        <span>Registro</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-logout">
            <a href="<?php echo BASE_URL; ?>/logout" id="btn-logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Cerrar sesión</span>
            </a>
        </li>
    </ul>
</aside>
