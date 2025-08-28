<nav class="sidebar">
		<div class="sidebar-header">
			<a href="<?php echo $link.'/user/index.php';?>" class="sidebar-brand">
				<img class="ht-30" src="<?php echo $link;?>/assets/images/logo.png" alt="logo">
			</a>
			<div class="sidebar-toggler not-active">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<div class="sidebar-body">
			<ul class="nav">
				<li class="nav-item nav-category">Main Menu</li>
				<li class="nav-item">
					<a href="<?php echo $link.'/user/index.php';?>" class="nav-link">
						<i class="link-icon" data-feather="home"></i>
						<span class="link-title">Dashboard</span>
					</a>
				</li>
				<li class="nav-item nav-category">Bookings</li>
				<li class="nav-item">
					<a href="<?php echo $link.'/user/booking-list.php';?>" class="nav-link">
						<i class="link-icon" data-feather="list"></i>
						<span class="link-title">All Bookings</span>
					</a>
				</li>
			</ul>
		</div>
	</nav>
