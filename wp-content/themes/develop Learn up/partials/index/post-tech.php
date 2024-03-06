	<!-- ========================== post tech Section =============================== -->
	<section class="min-sec">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-lg-12 col-md-12">
					<div class="sec-heading2 sec-heading-flex">
						<div class="sec-left">
							<h3>آخرین اخبار تکنولوژی </h3>
						</div>
						<div class="sec-right">
							<select id="change-post-type" class="form-control form-control-sm bg-light text-dark">
								<option value="tech_new">نمایش بر اساس : جدیدترین ها</option>
								<option value="popular">محبوب ترین ها</option>
								<option value="hot">داغ ترین ها</option>
								<option value="video">مطالب ویدئویی</option>
							</select>
							<!-- <a href="javascript:void(0);" class="btn-br-more">همه مطالب</a> -->
						</div>
					</div>
				</div>

			</div>
			<div class="position-reletive">

				<div class="fa-3x position-absolut loading-ajax">
					<i class="fas fa-spinner fa-pulse"></i>
				</div>
				<div id="ajax-load-content" class="row">

					<?php get_template_part('loop/index/tech-loop') ?>

				</div>
			</div>
		</div>
	</section>
	<!-- ========================== post tech Section =============================== -->