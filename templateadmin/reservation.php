<?PHP
include "../core/reservationC.php";
$reservation1C=new ReservationC();
$listeReservation=$reservation1C->afficherReservations();
//var_dump($listeReservation->fetchAll());
?>
<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Z'animo Reservation-ADMIN</title>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
</head>
<body>
<div class="app header-default side-nav-dark">
<div class="layout">

<div class="header navbar">
<div class="header-container">
<div class="nav-logo">
<a href="index-2.html">
<span class="logo">
<img src="assets/img/zanimo-logo.png" alt="">
</span>
</a>
</div>
<ul class="nav-left">
<li>
<a class="sidenav-fold-toggler" href="javascript:void(0);">
<i class="lni-menu"></i>
</a>
<a class="sidenav-expand-toggler" href="javascript:void(0);">
<i class="lni-menu"></i>
</a>
</li>
</ul>
<ul class="nav-right">
<li class="search-box">
<input class="form-control" type="text" placeholder="Type to search...">
<i class="lni-search"></i>
</li>
<li class="massages dropdown dropdown-animated scale-left">
<span class="counter">3</span>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="lni-envelope"></i>
</a>
<ul class="dropdown-menu dropdown-lg">
<li>
<div class="dropdown-item align-self-center">
<h5><span class="badge badge-primary float-right">745</span>Messages</h5>
</div>
</li>
<li>
<ul class="list-media">
<li class="list-item">
<a href="#" class="media-hover">
<div class="media-img">
<img src="assets/img/users/avatar-1.jpg" alt="">
</div>
<div class="info">
<span class="title">
Amanda Robertson
</span>
<span class="sub-title">Dummy text of the printing and typesetting industry.</span>
</div>
</a>
</li>
<li class="list-item">
<a href="#" class="media-hover">
<div class="media-img">
<img src="assets/img/users/avatar-2.jpg" alt="">
</div>
<div class="info">
<span class="title">
Danny Donovan
</span>
<span class="sub-title">It is a long established fact that a reader will</span>
</div>
</a>
</li>
<li class="list-item">
<a href="#" class="media-hover">
<div class="media-img">
<img src="assets/img/users/avatar-3.jpg" alt="">
</div>
 <div class="info">
<span class="title">
Frank Handrics
</span>
<span class="sub-title">You have 87 unread messages</span>
</div>
</a>
</li>
</ul>
</li>
<li class="check-all text-center">
<span>
<a href="#" class="text-gray">View All</a>
</span>
</li>
</ul>
</li>
<li class="notifications dropdown dropdown-animated scale-left">
<span class="counter">2</span>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="lni-alarm"></i>
</a>
<ul class="dropdown-menu dropdown-lg">
<li>
<h5 class="n-title text-center">
<i class="lni-alarm"></i>
<span>Notifications</span>
</h5>
</li>
<li>
<ul class="list-media">
<li class="list-item">
<a href="#" class="media-hover">
<div class="media-img">
<div class="icon-avatar bg-primary">
<i class="lni-envelope"></i>
</div>
</div>
<div class="info">
<span class="title">
5 new messages
</span>
<span class="sub-title">4 min ago</span>
</div>
</a>
</li>
<li class="list-item">
<a href="#" class="media-hover">
<div class="media-img">
<div class="icon-avatar bg-success">
<i class="lni-comments-alt"></i>
</div>
</div>
<div class="info">
<span class="title">
4 new comments
</span>
<span class="sub-title">12 min ago</span>
</div>
</a>
</li>
<li class="list-item">
<a href="#" class="media-hover">
<div class="media-img">
<div class="icon-avatar bg-info">
<i class="lni-users"></i>
</div>
</div>
<div class="info">
<span class="title">
3 Friend Requests
</span>
<span class="sub-title">a day ago</span>
</div>
</a>
</li>
<li class="list-item">
<a href="#" class="media-hover">
<div class="media-img">
<div class="icon-avatar bg-purple">
<i class="lni-comments-alt"></i>
</div>
</div>
<div class="info">
<span class="title">
2 new messages
</span>
<span class="sub-title">12 min ago</span>
</div>
</a>
</li>
</ul>
</li>
<li class="check-all text-center">
<span>
<a href="#" class="text-gray">Check all notifications</a>
</span>
</li>
</ul>
</li>
<li class="user-profile dropdown dropdown-animated scale-left">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<img class="profile-img img-fluid" src="assets/img/avatar/avatar.jpg" alt="">
</a>
<ul class="dropdown-menu dropdown-md">
<li>
<ul class="list-media">
<li class="list-item avatar-info">
<div class="media-img">
<img src="assets/img/avatar/avatar.jpg" alt="">
</div>
<div class="info">
<span class="title text-semibold">Tomas Murray</span>
<span class="sub-title">UI/UX Desinger</span>
</div>
</li>
</ul>
</li>
<li role="separator" class="divider"></li>
<li>
<a href="#">
<i class="lni-cog"></i>
<span>Setting</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-user"></i>
<span>Profile</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-envelope"></i>
<span>Inbox</span>
<span class="badge badge-pill badge-primary pull-right">2</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-lock"></i>
<span>Logout</span>
</a>
</li>
</ul>
</li>
</ul>
</div>
</div>


<div class="side-nav expand-lg">
<div class="side-nav-inner">
<ul class="side-nav-menu">
<li class="side-nav-header">
<span>Navigation</span>
</li>
<li class="nav-item dropdown open">
<a href="#" class="dropdown-toggle">
<span class="icon-holder">
<i class="lni-dashboard"></i>
</span>
<span class="title">Dashboard</span>
<span class="arrow">
<i class="lni-chevron-right"></i>
</span>
</a>
<ul class="dropdown-menu sub-down">
<li>
<a href="index-2.html">Dashboard 1</a>
</li>
<li>
<a href="index-3.html">Dashboard 2</a>
</li>
<li class="active">
<a href="reservation.php">Reservation</a>
</li>
<li>
<a href="livreur.php">Livreur</a>
</li>
<li>
<a href="livraison.php">Livraison</a>
</li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="dropdown-toggle" href="#">
<span class="icon-holder">
<i class="lni-cloud"></i>
</span>
<span class="title">Apps</span>
<span class="arrow">
<i class="lni-chevron-right"></i>
</span>
</a>
<ul class="dropdown-menu sub-down">
<li>
<a href="email.html">Email</a>
</li>
<li>
<a href="calendar.html">Calendar</a>
</li>
<li>
<a href="chat-app.html">Chat App</a>
</li>
<li>
<a href="contact.html">Contact</a>
</li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="dropdown-toggle" href="#">
<span class="icon-holder">
<i class="lni-layers"></i>
</span>
<span class="title">UI Elements</span>
<span class="arrow">
<i class="lni-chevron-right"></i>
</span>
</a>
<ul class="dropdown-menu sub-down">
<li>
<a href="alert.html">Alert</a>
</li>
<li>
<a href="badge.html">Badge</a>
</li>
<li>
<a href="buttons.html">Buttons</a>
</li>
<li>
<a href="cards.html">Cards</a>
</li>
<li>
<a href="lists.html">Lists</a>
</li>
<li>
<a href="typography.html">Typography</a>
</li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="dropdown-toggle" href="#">
<span class="icon-holder">
<i class="lni-timer"></i>
</span>
<span class="title">Components</span>
<span class="arrow">
<i class="lni-chevron-right"></i>
</span>
</a>
<ul class="dropdown-menu sub-down">
<li>
<a href="accordion.html">Accordions</a>
</li>
<li>
<a href="carousel.html">Carousel</a>
</li>
<li>
<a href="dropdown.html">Dropdown</a>
</li>
<li>
<a href="modals.html">Modals</a>
</li>
<li>
<a href="notifications.html">Notifications</a>
</li>
<li>
<a href="popover.html">Popover</a>
</li>
<li>
<a href="slider-progress.html">Progress Bars</a>
</li>
<li>
<a href="tabs.html">Tabs</a>
</li>
<li>
<a href="tooltips.html">Tooltips</a>
</li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="dropdown-toggle" href="#">
<span class="icon-holder">
<i class="lni-package"></i>
</span>
<span class="title">Icons</span>
<span class="arrow">
<i class="lni-chevron-right"></i>
</span>
</a>
<ul class="dropdown-menu sub-down">
<li>
<a href="line-icons.html">Line Icons</a>
</li>
<li>
<a href="fontawesome-icons.html">Font Awesome</a>
</li>
<li>
<a href="material-icons.html">Material Design</a>
</li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="dropdown-toggle" href="#">
<span class="icon-holder">
<i class="lni-files"></i>
</span>
<span class="title">Forms</span>
<span class="arrow">
<i class="lni-chevron-right"></i>
</span>
</a>
<ul class="dropdown-menu sub-down">
<li>
<a href="form-elements.html">Form Elements</a>
</li>
<li>
<a href="form-layouts.html">Form Layouts</a>
</li>
<li>
<a href="form-validation.html">Form Validation</a>
</li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="dropdown-toggle" href="#">
<span class="icon-holder">
<i class="lni-control-panel"></i>
</span>
<span class="title">Tables</span>
<span class="arrow">
<i class="lni-chevron-right"></i>
</span>
</a>
<ul class="dropdown-menu sub-down">
<li>
<a href="basic-table.html">Basic Table</a>
</li>
<li>
<a href="data-table.html">Data Table</a>
</li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="dropdown-toggle" href="#">
<span class="icon-holder">
<i class="lni-pie-chart"></i>
</span>
<span class="title">Charts</span>
<span class="arrow">
<i class="lni-chevron-right"></i>
</span>
</a>
<ul class="dropdown-menu sub-down">
<li>
<a href="charts-morris.html">Marris Chart</a>
</li>
<li>
<a href="chartjs.html">ChartJs</a>
</li>
<li>
<a href="charts-flot.html">Flot Chart</a>
</li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="dropdown-toggle" href="#">
<span class="icon-holder">
<i class="lni-map-marker"></i>
</span>
<span class="title">Map</span>
<span class="arrow">
<i class="lni-chevron-right"></i>
</span>
</a>
<ul class="dropdown-menu sub-down">
<li>
<a href="google-map.html">Google Map</a>
</li>
<li>
<a href="vector-map.html">Vector Map</a>
</li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="dropdown-toggle" href="#">
<span class="icon-holder">
<i class="lni-files"></i>
</span>
<span class="title">Pages</span>
<span class="arrow">
<i class="lni-chevron-right"></i>
</span>
</a>
<ul class="dropdown-menu sub-down">
<li>
<a href="profile.html">Profile</a>
</li>
<li>
<a href="invoice.html">Invoice</a>
</li>
<li>
<a href="faq.html">FAQ</a>
</li>
<li>
<a href="login.html">Login</a>
</li>
<li>
<a href="sign-up.html">Sign Up</a>
</li>
<li>
<a href="404.html">404</a>
</li>
</ul>
</li>
</ul>
</div>
</div>


<div class="page-container">

<div class="main-content">
<div class="container-fluid">

<div class="breadcrumb-wrapper row">
<div class="col-12 col-lg-3 col-md-6">
<h4 class="page-title">Reservation</h4>
</div>
<div class="col-12 col-lg-9 col-md-6">
<ol class="breadcrumb float-right">
<li><a href="reservation.php">Reservation</a></li>
<li class="active"> / Reservation</li>
</ol>
</div>
</div>

</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-md-6 col-xs-12">
<div class="info-box bg-primary">
<div class="icon-box">
<i class="lni-home"></i>
</div>
<div class="info-box-content">
<h4 class="number">31</h4>
<p class="info-text">All Reservations</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-xs-12">
<div class="info-box bg-success">
<div class="icon-box">
 <i class="lni-tag"></i>
</div>
<div class="info-box-content">
<h4 class="number">4</h4>
<p class="info-text">In the course</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-xs-12">
<div class="info-box bg-info">
<div class="icon-box">
<i class="lni-cart"></i>
</div>
<div class="info-box-content">
<h4 class="number">27</h4>
<p class="info-text">Done</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-xs-12">
<div class="info-box bg-purple">
<div class="icon-box">
<i class="lni-wallet"></i>
</div>
<div class="info-box-content">
<h4 class="number">$49450</h4>
<p class="info-text">Total Revenue</p>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Tableau des reservations</h4>
</div>
<div class="table-overflow">
<table class="table table-hover table-lg">
<thead>
<tr>
<td class="text-dark text-semibold">Reservation ID</td>
<td class="text-dark text-semibold">Categorie ID</td>
<td class="text-dark text-semibold">Product ID</td>
<td class="text-dark text-semibold">Product Name</td>
<td class="text-dark text-semibold">Categorie Name</td>
<td class="text-dark text-semibold">Quantite</td>
<!--<td>Comment</td>-->
</tr>
</thead>

<?PHP
foreach($listeReservation as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_reserv']; ?></td>
	<td><?PHP echo $row['id_categorie']; ?></td>
	<td><?PHP echo $row['id_produit']; ?></td>
	<td><?PHP echo $row['product_name']; ?></td>
	<td><?PHP echo $row['categorie_name']; ?></td>
	<td><?PHP echo $row['quantite']; ?></td>
	<td><?PHP echo $row['comment']; ?></td>
    </tr>
<?PHP
}
?>
</table>
</div>
</div>
</div>
</div>
</div>
</div>

<hr>
<div class="row">
<div class="col-7">
<p class="showing">Showing 1 - 7 of 7</p>
</div>
</div>


<div class="col-5  m-t-10">
<div class="btn-group float-right">
<button type="button" class="btn btn-common btn-sm"><i class="lni-chevron-left"></i></button>
<button type="button" class="btn btn-common btn-sm"><i class="lni-chevron-right"></i></button>
</div>


<footer class="content-footer">
<div class="footer">
<div class="copyright">
<span>Copyright © 2018 <b class="text-dark">UIdeck</b>. All Right Reserved</span>
<span class="go-right">
<a href="#" class="text-gray">Term &amp; Conditions</a>
<a href="#" class="text-gray">Privacy &amp; Policy</a>
</span>
</div>
</div>
</footer>

</div>

</div>
</div>

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>


<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.app.js"></script>
<script src="assets/js/main.js"></script>

<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael-min.js"></script>
<script src="assets/js/dashborad2.js"></script>
</body>

<!-- Mirrored from preview.uideck.com/items/inspire-pro/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Mar 2019 10:25:55 GMT -->
</html>