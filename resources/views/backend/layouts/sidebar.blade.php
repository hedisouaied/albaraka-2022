<div class="main-menu">
	<header class="header">
		<a href="{{route('admin')}}" class="logo">AlBaraka</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
	</header>

	<div class="content">
		<div class="navigation">
			<ul class="menu js__accordion">
				<li class="current">
					<a class="waves-effect" href="{{route('admin')}}"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Tableau de bord</span></a>
				</li>

                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-users"></i><span>Gestion des admins </span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{route('user.index')}}">Tous admins</a></li>
						<li><a href="{{route('user.create')}}">Ajouter admin</a></li>
					</ul>
				</li>
                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-image"></i><span>Gestion de la bannière</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{route('banner.index')}}">bannières</a></li>
						<li><a href="{{route('banner.create')}}">Ajouter bannière</a></li>
					</ul>
				</li>
                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fas fa-handshake"></i><span>Gestion des partenaires</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{route('partenaire.index')}}">partenaires</a></li>
						<li><a href="{{route('partenaire.create')}}">Ajouter partenaire</a></li>
					</ul>
				</li>

                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fas fa-globe-europe"></i><span>Gestion de secteurs d'activité</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{route('activity.index')}}">Secteurs d'activité</a></li>
						<li><a href="{{route('activity.create')}}">Ajouter secteur d'activité</a></li>
					</ul>
				</li>

                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fas fa-thumbs-up"></i><span>Gestion des references</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{route('reference.index')}}">References</a></li>
						<li><a href="{{route('reference.create')}}">Ajouter reference</a></li>
					</ul>
				</li>
                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fas fa-industry"></i><span>Gestion des moyens industriels</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{route('moyen.index')}}">Moyens industriels</a></li>
						<li><a href="{{route('moyen.create')}}">Ajouter moyen industriel</a></li>
					</ul>
				</li>

                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-calendar"></i><span>Gestion d'événements</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{route('event.index')}}">Evénements</a></li>
						<li><a href="{{route('event.create')}}">Ajouter événement</a></li>
					</ul>
				</li>

                <li>
					<a class="waves-effect" href="{{route('about.index')}}"><i class="menu-icon mdi mdi-settings"></i><span>à propos</span></a>
                </li>

                <li>
					<a class="waves-effect" href="{{route('contacts.index')}}"><i class="menu-icon fa fa-envelope"></i><span>Messages</span></a>
                </li>

                <li>
					<a class="waves-effect" href="{{route('newsletter.index')}}"><i class="menu-icon fa fa-newspaper-o"></i><span>NewsLetter</span></a>
                </li>


                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-newspaper"></i><span>Gestion d'actualités</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{route('actualite.index')}}">Actualités</a></li>
						<li><a href="{{route('actualite.create')}}">Ajouter actualité</a></li>
					</ul>
				</li>

			</ul>
		</div>
	</div>
</div>
