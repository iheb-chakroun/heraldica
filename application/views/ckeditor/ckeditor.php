<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<html>

<head>
	<meta charset="utf-8">
	<title>CKEditor</title>
	<base target="_self">
	<meta name="description" content="A Bootstrap 4 admin dashboard theme that will get you started. The sidebar toggles off-canvas on smaller screens. This example also include large stat blocks, modal and cards. The top navbar is controlled by a separate hamburger toggle button." />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google" value="notranslate">
	<link rel="shortcut icon" href="/images/cp_ico.png">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckfinder/ckfinder.js"></script>


	<!--stylesheets / link tags loaded here-->


	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />


	<style type="text/css">
		body,
		html {
			height: 100%;
		}

		/* workaround modal-open padding issue */

		body.modal-open {
			padding-right: 0 !important;
		}

		#sidebar {
			padding-left: 0;
		}

		/*
 * Off Canvas at medium breakpoint
 * --------------------------------------------------
 */

		@media screen and (max-width: 48em) {
			.row-offcanvas {
				position: relative;
				-webkit-transition: all 0.25s ease-out;
				-moz-transition: all 0.25s ease-out;
				transition: all 0.25s ease-out;
			}

			.row-offcanvas-left .sidebar-offcanvas {
				left: -33%;
			}

			.row-offcanvas-left.active {
				left: 33%;
				margin-left: -6px;
			}

			.sidebar-offcanvas {
				position: absolute;
				top: 0;
				width: 33%;
				height: 100%;
			}
		}

		/*
 * Off Canvas wider at sm breakpoint
 * --------------------------------------------------
 */

		@media screen and (max-width: 34em) {
			.row-offcanvas-left .sidebar-offcanvas {
				left: -45%;
			}

			.row-offcanvas-left.active {
				left: 45%;
				margin-left: -6px;
			}

			.sidebar-offcanvas {
				width: 45%;
			}
		}

		.card {
			overflow: hidden;
		}

		.card-block .rotate {
			z-index: 8;
			float: right;
			height: 100%;
		}

		.card-block .rotate i {
			color: rgba(20, 20, 20, 0.15);
			position: absolute;
			left: 0;
			left: auto;
			right: -10px;
			bottom: 0;
			display: block;
			-webkit-transform: rotate(-44deg);
			-moz-transform: rotate(-44deg);
			-o-transform: rotate(-44deg);
			-ms-transform: rotate(-44deg);
			transform: rotate(-44deg);
		}
	</style>

</head>

<body>
	<nav class="navbar navbar-fixed-top navbar-toggleable-sm navbar-inverse bg-primary mb-3">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="flex-row d-flex">
			<a class="navbar-brand mb-1" href="#">Brand</a>
			<button type="button" class="hidden-md-up navbar-toggler" data-toggle="offcanvas" title="Toggle responsive left sidebar">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<div class="navbar-collapse collapse" id="collapsingNavbar">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">Home</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#features">Features</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#myAlert" data-toggle="collapse">Wow</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="" data-target="#myModal" data-toggle="modal">About</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid" id="main">
		<div class="row row-offcanvas row-offcanvas-left">
			<div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation">
				<ul class="nav flex-column pl-1">
					<li class="nav-item"><a class="nav-link" href="#">Overview</a></li>
					<li class="nav-item">
						<a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Reports ▾</a>
						<ul class="list-unstyled flex-column pl-3 collapse" id="submenu1" aria-expanded="false">
							<li class="nav-item"><a class="nav-link" href="">Sub item</a></li>
							<li class="nav-item"><a class="nav-link" href="">Sub item</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="#">Analytics</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Export</a></li>
					<li class="nav-item"><a class="nav-link" href="">Nav item</a></li>
					<li class="nav-item"><a class="nav-link" href="">Nav item</a></li>
					<li class="nav-item"><a class="nav-link" href="">Another</a></li>
					<li class="nav-item"><a class="nav-link" href="">Nav item</a></li>
					<li class="nav-item"><a class="nav-link" href="">One more</a></li>
				</ul>
			</div>
			<!--/col-->

			<div class="col-md-9 col-lg-10 main">

				<div class="container">

					<form method="post" action="<?php echo base_url() ?>ckeditor/CkeditorController/getData">
						<div class="row">
							<div class="col-sm-3 col-lg-12">
								<div class="form-group">
									<label>Content: </label>
									<textarea name="editor1" id="editor1" rows="10" cols="80">This is my textarea to be replaced with CKEditor.</textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 col-lg-12">
								<div class="form-group">
									<input type="submit" name="submitBtn" value="Add" class="btn btn-success">
								</div>
							</div>
						</div>
					</form>

				</div>

			</div>
			<!--/main col-->
		</div>

	</div>



	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Modal</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
						<span class="sr-only">Close</span>
					</button>
				</div>
				<div class="modal-body">
					This is a dashboard layout for Bootstrap 4. This is an example of the Modal component which you can use to show content. Any content can be placed inside the modal and it can use the Bootstrap grid classes.
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary-outline" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>

	<script>
		// sandbox disable popups
		if (window.self !== window.top && window.name != "view1") {
			window.alert = function() {
				/*disable alert*/
			};
			window.confirm = function() {
				/*disable confirm*/
			};
			window.prompt = function() {
				/*disable prompt*/
			};
			window.open = function() {
				/*disable open*/
			};
		}

		// prevent href=# click jump
		document.addEventListener(
			"DOMContentLoaded",
			function() {
				var links = document.getElementsByTagName("A");
				for (var i = 0; i < links.length; i++) {
					if (links[i].href.indexOf("#") != -1) {
						links[i].addEventListener("click", function(e) {
							console.debug("prevent href=# click");
							if (this.hash) {
								if (this.hash == "#") {
									e.preventDefault();
									return false;
								} else {
									/*
									    var el = document.getElementById(this.hash.replace(/#/, ""));
									    if (el) {
									      el.scrollIntoView(true);
									    }
									    */
								}
							}
							return false;
						});
					}
				}
			},
			false
		);
	</script>

	<!--scripts loaded here-->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

	<script>
		CKEDITOR.replace('editor1');
	</script>

	<script>
		$(document).ready(function() {
			$("[data-toggle=offcanvas]").click(function() {
				$(".row-offcanvas").toggleClass("active");
			});
		});
	</script>

</body>

</html>
