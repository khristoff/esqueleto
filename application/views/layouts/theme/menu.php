<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<div class="sidebar-panel offscreen-left">
			<div class="brand">
				<a class="brand-logo"><span><?=NOMBRE?></span></a>
				<a href="/theme" class="small-menu-visible brand-logo"><?=mb_substr(strtoupper(NOMBRE), 0, 1, 'utf-8')?></a>
			</div>
			<nav role="navigation">
				<ul class="nav">
					<li>
						<a href="/theme"><i class="icon-compass"></i><span>Escritorio</span></a>
					</li>
					<li>
						<a href="javascript:void(0);"><span class="badge pull-right">4</span><i class="icon-drop"></i><span>Tarjetas</span></a>
						<ul class="sub-menu">
							<li><a href="/theme/cardsbasic"><span>Basic</span></a></li>
							<li><a href="/theme/cardsportlets"><span>Portlets</span></a></li>
							<li><a href="/theme/cardsdraggable"><span>Draggable</span></a></li>
							<li><a href="/theme/cardswidgets"><span>Widgets</span></a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);"><i class="icon-cursor"></i><span>Apps</span></a>
						<ul class="sub-menu">
							<li><a href="/theme/appscalendar"><span>Calendario</span></a></li>
							<li><a href="/theme/appsgallery"><span>Galería</span></a></li>
							<li><a href="/theme/appsmessages"><span>Mensajes</span></a></li>
							<li><a href="/theme/appssocial"><span>Social</span></a></li>
							<li><a href="/theme/appsprojects"><span>Proyectos</span></a></li>
							<li><a href="/theme/appscontacts"><span>Contactos</span></a></li>
							<li><a href="/theme/appstravel"><span>Viajes</span></a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);"><i class="icon-bag"></i><span>Comercial</span></a>
						<ul class="sub-menu">
							<li><a href="/theme/commerceproducts"><span>Productos</span></a></li>
							<li><a href="/theme/commercecart"><span>Cart</span></a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);"><i class="icon-book-open"></i><span>Elementos</span></a>
						<ul class="sub-menu">
							<li><a href="/theme/uibuttons.html"><span>Buttons</span></a></li>
							<li><a href="/theme/uisocialbuttons.html"><span>Social buttons</span></a></li>
							<li><a href="/theme/uigeneral.html"><span>General</span></a></li>
							<li><a href="/theme/uitabs.html"><span>Tabs</span></a></li>
							<li><a href="/theme/uiprogressbars.html"><span>Progress bars</span></a></li>
							<li><a href="/theme/uipagination.html"><span>Pagination</span></a></li>
							<li><a href="/theme/uisliders.html"><span>Sliders</span></a></li>
							<li><a href="/theme/uinotifications.html"><span>Notifications</span></a></li>
							<li><a href="/theme/uispinners.html"><span>Spinners</span></a></li>
							<li><a href="/theme/uicolors.html"><span>Colors</span></a></li>
							<li><a href="/theme/uialerts.html"><span>Alerts</span></a></li>
							<li>
								<a href="javascript:void(0);"><i class="toggle-accordion"></i><span>Iconos</span></a>
								<ul class="sub-menu">
									<li><a href="/theme/uiiconssli.html"><span>SLI</span></a></li>
									<li><a href="/theme/uiiconsfontawesome.html"><span>Fontawesome</span></a></li>
									<li><a href="/theme/uiiconsclimacons.html"><span>Climacons</span></a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);"><i class="icon-loop"></i><span>Formularios</span></a>
						<ul class="sub-menu">
							<li><a href="/theme/formsbasic.html"><span>Basic</span></a></li>
							<li><a href="/theme/formscustom.html"><span>Custom</span></a></li>
							<li><a href="/theme/formsplugins.html"><span>Plugins</span></a></li>
							<li><a href="/theme/formswizard.html"><span>Wizard</span></a></li>
							<li><a href="/theme/formseditors.html"><span>Editors</span></a></li>
							<li><a href="/theme/formsvalidation.html"><span>Validation</span></a></li>
							<li><a href="/theme/formsmasks.html"><span>Masks</span></a></li>
							<li><a href="/theme/formsupload.html"><span>Upload</span></a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);"><i class="icon-share-alt"></i><span>Tablas</span></a>
						<ul class="sub-menu">
							<li><a href="/theme/tablesbasic.html"><span>Basic</span></a></li>
							<li><a href="/theme/tablesresponsive.html"><span>Responsive</span></a></li>
							<li><a href="/theme/tablesdatatables.html"><span>Datatables</span></a></li>
							<li><a href="/theme/tableseditable.html"><span>Editable</span></a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);"><i class="icon-pie-chart"></i><span>Gráficas</span></a>
						<ul class="sub-menu">
							<li><a href="/theme/chartsflot.html"><span>Flot</span></a></li>
							<li><a href="/theme/chartseasypie.html"><span>Easypie</span></a></li>
							<li><a href="/theme/chartschartjs.html"><span>Chartjs</span></a></li>
							<li><a href="/theme/chartsrickshaw.html"><span>Rickshaw</span></a></li>
							<li><a href="/theme/chartsnvd3.html"><span>nvd3</span></a></li>
							<li><a href="/theme/chartsc3js.html"><span>C3js</span></a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);"><i class="icon-pointer"></i><span>Mapas</span></a>
						<ul class="sub-menu">
							<li><a href="/theme/mapsgoogle.html"><span>Google</span></a></li>
							<li><a href="/theme/mapsvector.html"><span>Vector</span></a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);"><i class="icon-tag"></i><span>Extras</span></a>
						<ul class="sub-menu">
							<li><a href="/theme/extrasinvoice.html"><span>Invoice</span></a></li>
							<li><a href="/theme/extrastimeline.html"><span>Timeline</span></a></li>
							<li><a href="/theme/extrastimeline-stacked.html"><span>Stacked timeline</span></a></li>
							<li><a href="/theme/extraspost.html"><span>Post</span></a></li>
							<li><a href="/theme/extrassortable.html"><span>Sortable</span></a></li>
							<li><a href="/theme/extrasnestable.html"><span>Nestable</span></a></li>
							<li><a href="/theme/extrassignin.html"><span>Signin</span></a></li>
							<li><a href="/theme/extrassignin2.html"><span>Signin v2</span></a></li>
							<li><a href="/theme/extrassignup.html"><span>Signup</span></a></li>
							<li><a href="/theme/extrassignup2.html"><span>Signup v2</span></a></li>
							<li><a href="/theme/extrasforgot.html"><span>Forgot</span></a></li>
							<li><a href="/theme/extraslockscreen.html"><span>Lockscreen</span></a></li>
							<li><a href="/theme/extras404.html"><span>404 page</span></a></li>
							<li><a href="/theme/extras500.html"><span>500 page</span></a></li>
							<li><a href="/theme/blank.html"><span>Starter</span></a></li>
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
											<li><a href="javascript:void(0);"><span>Level</span></a></li>
											<li><a href="javascript:void(0);"><span>Level</span></a></li>
										</ul>
									</li>
									<li><a href="javascript:void(0);"><span>Level</span></a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0);"><span>Level</span></a></li>
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
				</ul>
				<ul class="nav navbar-nav navbar-right hidden-xs">
					<li>
						<a href="javascript:void(0);" class="ripple" data-toggle="dropdown">
							<span>EN</span>
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="javascript:void(0);">English</a></li>
							<li><a href="javascript:void(0);">Russian</a></li>
							<li><a href="javascript:void(0);">French</a></li>
							<li><a href="javascript:void(0);">Spanish</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" class="ripple" data-toggle="dropdown"><i class="icon-bell"></i></a>
						<ul class="dropdown-menu notifications">
							<li class="notifications-header"><p class="text-muted small">Tienes 3 mensajes nuevos</p></li>
							<li>
								<ul class="notifications-list">
									<li>
										<a href="javascript:void(0);">
											<div class="notification-icon">
												<div class="circle-icon bg-success text-white">
													<i class="icon-bulb"></i>
												</div>
											</div>
											<span class="notification-message"><b>Sean</b> launched a new application</span>
											<span class="time">2s</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="notification-icon">
												<div class="circle-icon bg-danger text-white">
													<i class="icon-cursor"></i>
												</div>
											</div>
											<span class="notification-message"><b>Removed calendar</b> from app list</span>
											<span class="time">4h</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="notification-icon">
												<div class="circle-icon bg-primary text-white">
													<i class="icon-basket"></i>
												</div>
											</div>
											<span class="notification-message"><b>Denise</b> bought <b>Urban Admin Kit</b></span>
											<span class="time">2d</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="notification-icon">
												<div class="circle-icon bg-info text-white">
													<i class="icon-bubble"></i>
												</div>
											</div>
											<span class="notification-message"><b>Vincent commented</b> on an item</span>
											<span class="time">2s</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<span class="notification-icon">
												<img src="/assets/images/face3.jpg" class="avatar img-circle" alt="">
											</span>
											<span class="notification-message"><b>Jack Hunt</b> has <b>joined</b> mailing list</span>
											<span class="time">9d</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" class="ripple" data-toggle="dropdown">
							<img src="/assets/images/avatar.jpg" class="header-avatar img-circle" alt="user" title="user">
							<span>John Doe</span>
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="javascript:void(0);">Perfil</a></li>
							<li><a href="javascript:void(0);">Configuración</a></li>
							<li>
								<a href="javascript:void(0);">
									<span class="label bg-danger pull-right">34</span>
									<span>Notificaciones</span>
								</a>
							</li>
							<li role="separator" class="divider"></li>
							<li><a href="javascript:void(0);">Ayuda</a></li>
							<li><a href="#">Salir</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="main-content <?=$class?>">