<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<div class="sidebar-panel offscreen-left">
			<div class="brand">
				<a class="brand-logo"><span><?=NOMBRE?></span></a>
				<a href="<?=PANEL?>" class="small-menu-visible brand-logo"><?=mb_substr(strtoupper(NOMBRE), 0, 1, 'utf-8')?></a>
			</div>
			<nav role="navigation">
				<ul class="nav">
					<li class="open">
						<a href="<?=PANEL?>"><i class="icon-compass"></i><span>Escritorio</span></a>
					</li>
					<li>
						<a href="javascript:void(0);"><span class="badge pull-right">4</span><i class="icon-drop"></i><span>Tarjetas</span></a>
						<ul class="sub-menu">
							<li><a href="#"><span>Basic</span></a></li>
							<li><a href="#"><span>Portlets</span></a></li>
							<li><a href="#"><span>Draggable</span></a></li>
							<li><a href="#"><span>Widgets</span></a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);"><i class="icon-cursor"></i><span>Apps</span></a>
						<ul class="sub-menu">
							<li><a href="#"><span>Calendario</span></a></li>
							<li><a href="#"><span>Galería</span></a></li>
							<li><a href="#"><span>Mensajes</span></a></li>
							<li><a href="#"><span>Social</span></a></li>
							<li><a href="#"><span>Proyectos</span></a></li>
							<li><a href="#"><span>Contactos</span></a></li>
							<li><a href="#"><span>Viajes</span></a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);"><i class="icon-bag"></i><span>Comercial</span></a>
						<ul class="sub-menu">
							<li><a href="#"><span>Productos</span></a></li>
							<li><a href="#"><span>Cart</span></a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);"><i class="icon-book-open"></i><span>Elementos</span></a>
						<ul class="sub-menu">
							<li><a href="#"><span>Buttons</span></a></li>
							<li><a href="#"><span>Social buttons</span></a></li>
							<li><a href="#"><span>General</span></a></li>
							<li><a href="#"><span>Tabs</span></a></li>
							<li><a href="#"><span>Progress bars</span></a></li>
							<li><a href="#"><span>Pagination</span></a></li>
							<li><a href="#"><span>Sliders</span></a></li>
							<li><a href="#"><span>Notifications</span></a></li>
							<li><a href="#"><span>Spinners</span></a></li>
							<li><a href="#"><span>Colors</span></a></li>
							<li><a href="#"><span>Alerts</span></a></li>
							<li>
								<a href="javascript:void(0);"><i class="toggle-accordion"></i><span>Iconos</span></a>
								<ul class="sub-menu">
									<li><a href="#"><span>SLI</span></a></li>
									<li><a href="#"><span>Fontawesome</span></a></li>
									<li><a href="#"><span>Climacons</span></a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);"><i class="icon-loop"></i><span>Formularios</span></a>
						<ul class="sub-menu">
							<li><a href="#"><span>Basic</span></a></li>
							<li><a href="#"><span>Custom</span></a></li>
							<li><a href="#"><span>Plugins</span></a></li>
							<li><a href="#"><span>Wizard</span></a></li>
							<li><a href="#"><span>Editors</span></a></li>
							<li><a href="#"><span>Validation</span></a></li>
							<li><a href="#"><span>Masks</span></a></li>
							<li><a href="#"><span>Upload</span></a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);"><i class="icon-share-alt"></i><span>Tablas</span></a>
						<ul class="sub-menu">
							<li><a href="#"><span>Basic</span></a></li>
							<li><a href="#"><span>Responsive</span></a></li>
							<li><a href="#"><span>Datatables</span></a></li>
							<li><a href="#"><span>Editable</span></a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);"><i class="icon-pie-chart"></i><span>Gráficas</span></a>
						<ul class="sub-menu">
							<li><a href="#"><span>Flot</span></a></li>
							<li><a href="#"><span>Easypie</span></a></li>
							<li><a href="#"><span>Chartjs</span></a></li>
							<li><a href="#"><span>Rickshaw</span></a></li>
							<li><a href="#"><span>nvd3</span></a></li>
							<li><a href="#"><span>C3js</span></a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);"><i class="icon-pointer"></i><span>Mapas</span></a>
						<ul class="sub-menu">
							<li><a href="#"><span>Google</span></a></li>
							<li><a href="#"><span>Vector</span></a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);"><i class="icon-tag"></i><span>Extras</span></a>
						<ul class="sub-menu">
							<li><a href="#"><span>Invoice</span></a></li>
							<li><a href="#"><span>Timeline</span></a></li>
							<li><a href="#"><span>Stacked timeline</span></a></li>
							<li><a href="#"><span>Post</span></a></li>
							<li><a href="#"><span>Sortable</span></a></li>
							<li><a href="#"><span>Nestable</span></a></li>
							<li><a href="#"><span>Signin</span></a></li>
							<li><a href="#"><span>Signin v2</span></a></li>
							<li><a href="#"><span>Signup</span></a></li>
							<li><a href="#"><span>Signup v2</span></a></li>
							<li><a href="#"><span>Forgot</span></a></li>
							<li><a href="#"><span>Lockscreen</span></a></li>
							<li><a href="#"><span>404 page</span></a></li>
							<li><a href="#"><span>500 page</span></a></li>
							<li><a href="#"><span>Starter</span></a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);"><i class="icon-frame"></i><span>Menu Level</span></a>
						<ul class="sub-menu">
							<li>
								<a href="javascript:void(0);"><i class="toggle-accordion"></i><span>Level</span></a>
								<ul class="sub-menu">
									<li>
										<a href="javascript:void(0);"><i class="toggle-accordion"></i><span>Level</span></a>
										<ul class="sub-menu">
											<li><a href="#"><span>Level</span></a></li>
											<li><a href="#"><span>Level</span></a></li>
										</ul>
									</li>
									<li><a href="#"><span>Level</span></a></li>
								</ul>
							</li>
							<li><a href="#"><span>Level</span></a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<div class="main-panel">
			<div class="header navbar">
				<div class="brand visible-xs">
					<div class="toggle-offscreen">
						<a href="javascript:void(0);" class="hamburger-icon visible-xs" data-toggle="offscreen" data-move="ltr">
							<span></span>
							<span></span>
							<span></span>
						</a>
					</div>
					<a class="brand-logo"><span><?=NOMBRE?></span></a>
				</div>
				<ul class="nav navbar-nav hidden-xs">
					<li><a href="javascript:void(0);" class="small-sidebar-toggle ripple" data-toggle="layout-small-menu"><i class="icon-toggle-sidebar"></i></a></li>
					<?php if(BUSQUEDA): ?>
					<li class="searchbox">
						<a href="javascript:void(0);" data-toggle="search">
							<i class="search-close-icon icon-close hide"></i>
							<i class="search-open-icon icon-magnifier"></i>
						</a>
					</li>
					<li class="navbar-form search-form hide">
						<input type="search" class="form-control search-input" placeholder="Escribe algo...">
						<div class="search-predict hide">
							<a href="javascript:void(0);">Búsqueda para 'purple rain'</a>
							<div class="heading"><span class="title">People</span></div>
							<ul class="predictive-list">
								<li>
									<a class="avatar" href="#">
										<img src="/assets/images/face1.jpg" class="img-circle" alt="">
										<span>Tammy Carpenter</span>
									</a>
								</li>
								<li>
									<a class="avatar" href="#">
										<img src="/assets/images/face2.jpg" class="img-circle" alt="">
										<span>Catherine Moreno</span>
									</a>
								</li>
								<li>
									<a class="avatar" href="#">
										<img src="/assets/images/face3.jpg" class="img-circle" alt="">
										<span>Diana Robertson</span>
									</a>
								</li>
								<li>
									<a class="avatar" href="#">
										<img src="/assets/images/face4.jpg" class="img-circle" alt="">
										<span>Emma Sullivan</span>
									</a>
								</li>
							</ul>
							<div class="heading">
								<span class="title">Page posts</span>
							</div>
							<ul class="predictive-list">
								<li>
									<a class="avatar" href="#">
										<img src="/assets/images/unsplash/img2.jpeg" class="img-rounded" alt="">
										<span>The latest news for cloud-based developers </span>
									</a>
								</li>
								<li>
									<a class="avatar" href="#">
										<img src="/assets/images/unsplash/img2.jpeg" class="img-rounded" alt="">
										<span>Trending Goods of the Week</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<?php endif; ?>
				</ul>
				<ul class="nav navbar-nav navbar-right hidden-xs">
					<li>
						<a href="javascript:void(0);" class="ripple" data-toggle="dropdown">
							<img src="<?=$foto?>" class="header-avatar img-circle" alt="Foto de perfil" title="Foto de perfil">
							<span><?=$nombre?></span>
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="/panel/perfil">Perfil</a></li>
							<li><a href="/panel/configuracion">Configuración</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="/panel/salir">Salir</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="main-content">