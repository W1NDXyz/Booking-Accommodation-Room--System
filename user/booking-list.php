<?php
include('../config.php');
include('session.php');

$sql_booking = "SELECT * FROM booking, room WHERE booking.room_id = room.room_id AND booking.user_id = '".$_SESSION['user_id']."' ORDER BY booking.booking_date ASC";
if($result_booking = $connect->query($sql_booking))
{
	$data_booking = array();
	while($rows_booking = $result_booking->fetch_assoc())
	{
		$data_booking[] = $rows_booking;
	}
	$total_booking = $result_booking->num_rows;
	$num_booking = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php echo $title;?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $link;?>/assets/vendors/core/core.css">
<link rel="stylesheet" href="<?php echo $link;?>/assets/fonts/feather-font/css/iconfont.css">
<link rel="stylesheet" href="<?php echo $link;?>/assets/css/demo1/style.css">
<link rel="shortcut icon" href="<?php echo $link;?>/assets/images/favicon.png" />
</head>
<body>
<div class="main-wrapper">
	<?php include('sidebar.php');?>
	<div class="page-wrapper">
		<?php include('navbar.php');?>
		<div class="page-content">
			<nav class="page-breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo $link.'/admin/index.php';?>">Dashboard</a></li>
					<li class="breadcrumb-item active" aria-current="page">All Bookings</li>
				</ol>
			</nav>
			<div class="row">
				<div class="col-md-12 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<h6 class="card-title">Booking Information</h6>
							<form method="post" class="forms-sample">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>#</th>
												<th>Date</th>
												<th>Room</th>
											</tr>
										</thead>
										<tbody>
											<?php if($total_booking>0) { foreach($data_booking as $rows_booking) { ?>
											<tr>
												<td><?php echo ++$num_booking;?></td>
												<td><?php echo date('d/m/Y', strtotime($rows_booking['booking_date']));?></td>
												<td><?php echo $rows_booking['room_name'];?></td>
											</tr>
											<?php } } else { ?>
											<tr>
												<td colspan="3" class="text-center text-danger">No record!</td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include('footer.php');?>
	</div>
</div>
<script src="<?php echo $link;?>/assets/vendors/core/core.js"></script>
<script src="<?php echo $link;?>/assets/vendors/feather-icons/feather.min.js"></script>
<script src="<?php echo $link;?>/assets/js/template.js"></script>
</body>
</html>