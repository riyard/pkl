<!DOCTYPE html>
<?php
include ('koneksi.php');
?>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>ISP ARAYA MEDIA IT MALANG</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url()?>assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="profil" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							ARAYA MEDIA
						</small>
					</a>
				</div>

				<!-- menampilkan siapa yang login -->
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<!--<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>-->
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<!--<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>-->
					</div>
				</div><!-- /.sidebar-shortcuts -->

				
				<ul class="nav nav-list">
					
						<li class="">
						<a href="<?php echo base_url("index.php/profil_admin")?>">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text">
								Profil
							</span>
						</a>

					</li>
					<li class="">
						<a href="<?php echo base_url("index.php/karyawan_admin")?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">
								Karyawan
							</span>
						</a>

					</li>
					<li class="">
						<a href="<?php echo base_url("index.php/sales_admin")?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">
								Sales
							</span>
						</a>

					</li>
					<li class="">
						<a href="<?php echo base_url("index.php/pelanggan_admin")?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">
								Pelanggan
							</span>
						</a>

					</li>
					<li class="">
						<a href="<?php echo base_url("index.php/invover_admin")?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">
								Invoice/Verifikasi
							</span>
						</a>

					</li>
					<li class="">
						<a href="<?php echo base_url("index.php/layanan_admin")?>">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">
								Layanan
							</span>
						</a>

					</li>
					<li class="">
						<a href="<?php echo base_url("index.php/login")?>">
							<i class="menu-icon fa fa-power-off"></i>
							<span class="menu-text">
								Keluar
							</span>
						</a>

					</li>


				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
						<li><a href=""><i class="menu-icon fa fa-list-alt"></i> Invoice</li></a>
              			<li><i class="icon_document_alt"></i>Form Tambah Invoice</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

						<h3 class="page-header">
							<i class="menu-icon fa fa-barcode" style="margin-left: 15px;margin-top: 10px"></i> Tambah Invoice
						</h3>

						<div class="pull-right" style="margin-right: 15px">
							<a href="<?php echo base_url()."index.php/invover_admin/"?>" class="btn btn-warning btn-flat" type="button" ><i class="fa fa-undo"></i>Back</a>
						</div>

						<div class="step-pane active" data-step="1" style="margin-left: 15px">
							<h3 class="lighter block green">Masukkan informasi berikut</h3>
						</div>

<div class="main-content-inner">
	<section class="wrapper">

		<table class="table table-striped table-advance table-hover">
                 <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url("index.php/invover_admin/insert")?>">
                    <div class="form-group">
                      <label for="cname" class="control-label col-lg-2">Tanggal *<span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="Username" name="Tanggal" type="text" required />
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="cname" class="control-label col-lg-2">Tanggal Jatuh Tempo *<span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="Username" name="Tgl_JatuhTempo" type="text" required />
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="cname" class="control-label col-lg-2">Sub Total *<span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="Username" name="Sub_Total" type="text" required />
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="cname" class="control-label col-lg-2">Status PPN *<span class="required"></span></label>
                      <div class="col-lg-10">
                       <select name="Status_Ppn" class="form-control" required >  
 						  <option value="">--Pilih--</option>  
						  <option value="Aktif">Aktif</option>  
						  <option value="Tidak Aktif">Tidak Aktif</option>  
                        </select>
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="cname" class="control-label col-lg-2">PPN *<span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="Username" name="Ppn" type="text" required />
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="cname" class="control-label col-lg-2">Total *<span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="Username" name="Total" type="text" required />
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="cname" class="control-label col-lg-2">Status Lunas *<span class="required"></span></label>
                      <div class="col-lg-10">
                        <select name="Status_Lunas" class="form-control" required >  
 						  <option value="">--Pilih--</option>  
						  <option value="Lunas">Lunas</option>  
						  <option value="Belum Lunas">Belum Lunas</option>  
                        </select>
                      </div>
                    
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit" class="btn btn-success btn-flat">
                        	<i class="fa fa-paper-plane"></i> Save
                        </button>
                        <button type="Reset" class="btn btn-flat">Reset</button>
                      </div>
                    </div>
                  </form>
                </div>
            </table>
	</section>
</div>


					


			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">ARAYA MEDIA </span>
							
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="<?php echo base_url()?>assets/js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/jquery.easypiechart.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/jquery.sparkline.index.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/jquery.flot.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo base_url()?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});
			
			
			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
			
			
				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();
			
					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});
			
			})
		</script>
	</body>
</html>
