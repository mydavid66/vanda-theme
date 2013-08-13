<!-- Le Header
================================================== -->
<!-- This is the logo and navigation -->
	<div class="navigation">
		<nav>
			
			<!-- Slap your MOBILE logo here -->
			<a class="mobile-logo" data-toggle="collapse" data-target="#nav-collapse">
				<span>یک تجربه</span>
			</a>
			
			<!-- NAVIGATION
			================================================== -->
			<!-- Navigation begins here -->
			
			<div id="nav-collapse" class="collapse">
				<ul class="nav">
				
					<!-- Slap your logo here -->
					<li class="logo"><a>یک تجربه</a></li>
					
					<!-- portfolio (drop down) -->
					<li>
						<a href="#filter=.portfolio" class="selected"><span data-toggle="collapse" data-target="#portfolio-collapse"></span>دسته ها</a>
						<ul id="portfolio-collapse" class="collapse out">
							<?php
							  $args = array(
							    'type' => 'post',
							    'orderby' => 'name',
							    'order' => 'ASC',
							    'hide_empty' => true 
							  );
							  $class_name = "portfolio";
							  $categories = get_categories($args);
							  foreach($categories as $category) {
							    $class_name  .= " " . $category->slug;
							  
							?>
							<li><a href="#filter=.<?php echo $category->slug;?>" ><?php echo $category->name ;?></a></li>
							<?php }?>
							<!--<li><a href="#filter=.web">موبایل</a></li>-->
						</ul>
					</li>
					
					<!-- blog -->
					<li>
						<a href="#filter=.portfolio" class="selected"><span data-toggle="collapse" data-target="#portfolio-collapse"></span>نمونه کارها</a>
						<ul id="portfolio-collapse" class="collapse out">
							<?php
						$taxonomies = array('type');
						$args = array(
						  'orderby' => 'name',
						  'order' => 'ASC',
						  'hide_empty' => True
						);
						$all_types = get_terms( $taxonomies, $args );?>
						<?php foreach($all_types as $type){?>
						<li><a href="#filter=.TX_<?php echo $type->slug ;?>"> <?php echo $type->name ;?> </a></li>
							<?php  }?>

						<!--<li><a href="#filter=.web">موبایل</a></li>-->
						</ul>
					</li>


					<!-- grid widgets -->
					<li>
						<a href="#filter=.grid-widget">ویدجت</a>
					</li>
					
					<!-- elements
					<li>
						<a href="#filter=.shortcodes">المنت ها</a>
					</li> -->
					
					<!-- pages (drop down) -->
					<li>
						<a><span data-toggle="collapse" data-target="#pages-collapse"></span>صفحات</a>
						<ul id="pages-collapse" class="collapse out">
							<li><a href="#filter=.page-about">درباره</a></li>
							<li><a href="#filter=.page-team">تیم</a></li>
							<li><a href="#filter=.page-contact">ارتباط</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</nav>	 
		<div class="nav-arrow">
		</div>
	</div>