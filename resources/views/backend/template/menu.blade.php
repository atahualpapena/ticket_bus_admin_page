<body>
		<div class="header">
			<div class="logo">
				<i class="fa fa-tachometer"></i>
				<span>TicketBus</span>
			</div>
			<a href="#" class="nav-trigger"><span></span></a>
		</div>
		<div class="side-nav">
			<div class="logo">
				<i class="fa fa-tachometer"></i>
				<span>TicketBus</span>
			</div>
			<nav>
				<ul>
					<li <?=(!empty($BusClass))?$BusClass:''?>>
						<a href="{{url('/')}}/bus">
							<span><i class="fa fa-bus"></i></span>
							<span>Autobuses</span>
						</a>
					</li>
					<li<?=(!empty($DriverClass))?$DriverClass:''?>>
						<a href="{{url('/')}}/driver">
							<span><i class="fa fa-user"></i></span>
							<span>Conductores</span>
						</a>
					</li>
					<li<?=(!empty($RoutesClass))?$RoutesClass:''?>>
						<a href="{{url('/')}}/routes">

							<span><i class="fa fa-road"></i></span>
							<span>Rutas</span>
						</a>
					</li>
					<li <?=(!empty($EstadisticClass))?$EstadisticClass:''?>>
						<a href="#">
							<span><i class="fa fa-bar-chart"></i></span>
							<span>Estadisticas</span>
						</a>
					</li>
					<li <?=(!empty($QRClass))?$QRClass:''?>>
						<a href="{{url('/')}}/qrcode">
							<span><i class="fa fa-qrcode"></i></span>
							<span>Escanner</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		 