	<!-- ============================ Page Title Start================================== -->
	<section class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">

					<div class="breadcrumbs-wrap">
						<h1 class="breadcrumb-title"><?php echo get_the_title() ?></h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb"><?php //
													//if (function_exists('yoast_breadcrumb')) {
													//	yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
													//	}
													?>
								<?php breadcrumb::yas_get_breadcrumb()
								?>
								<!-- <li class="breadcrumb-item"><a href="#">خانه</a></li>
								<li class="breadcrumb-item active" aria-current="page">لزوم یادگیری زبان در دنیای امروزی!</li> -->
							</ol>
						</nav>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- 