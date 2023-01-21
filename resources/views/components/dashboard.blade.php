<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Adoption - Dashboard</title>

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png')}}">

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">

<link rel="stylesheet" href="{{ asset('assets/css/feathericon.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/style-orange.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/style-red.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/style-teal.css')}}">

<link rel="stylesheet" href="{{ asset('assets/plugins/datatables/datatables.min.css')}}">

<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}">

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css')}}">

<link rel="stylesheet" href="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.css')}}">

<link rel="stylesheet" href="{{ asset('assets/plugins/light-gallery/css/lightgallery.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/plugins/light-gallery/css/lightgallery.min.css')}}">

<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{ URL::to('assets/toastr.min.css') }}">
	<script src="{{ URL::to('assets/toastr_jquery.min.js') }}"></script>
	<script src="{{ URL::to('assets/toastr.min.js') }}"></script>
</head> <
<body>
<div class="main-wrapper">
<x-navbar/>
<x-sidebar/>

{!! Toastr::message() !!}
{{ $slot }}



<script src="{{ asset('assets/js/jquery-3.2.1.min.js')}}"></script>

<script src="{{ asset('assets/toastr.min.js')}}"></script>
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

<script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/datatables.min.js')}}"></script>


<script src="{{ asset('assets/js/form-validation.js')}}"></script>

<script src="{{ asset('assets/js/jquery.maskedinput.min.js')}}"></script>
<script src="{{ asset('assets/js/mask.js')}}"></script>

<script src="{{ asset('assets/js/select2.min.js')}}"></script>

<script src="{{ asset('assets/js/moment.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

<script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
<script src="{{ asset('assets/plugins/fullcalendar/jquery.fullcalendar.js')}}"></script>

<script src="{{ asset('assets/plugins/light-gallery/js/lightgallery-all.min.js')}}"></script>
<script src="{{ asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{ asset('assets/js/chart.morris.js')}}"></script>
<script src="{{ asset('assets/js/app.js')}}"></script>
<script src="{{ asset('assets/js/script.js')}}"></script>



<script>
			const chatAppTarget = $('.chat-window');
			(function() {
				if ($(window).width() > 991)
					chatAppTarget.removeClass('chat-slide');
				
				$(document).on("click",".chat-window .chat-users-list a.media",function () {
					if ($(window).width() <= 991) {
						chatAppTarget.addClass('chat-slide');
					}
					return false;
				});
				$(document).on("click","#back_user_list",function () {
					if ($(window).width() <= 991) {
						chatAppTarget.removeClass('chat-slide');
					}	
					return false;
				});

			})();
		</script>
</body>


</html>
