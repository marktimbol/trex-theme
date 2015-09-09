<?php include('header.php'); ?>

	<div class="row page alliances">
		<div class="col-md-12">
			<div class="row">

				<div class="col-md-12">
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li><a href="#">Relationship &amp; Alliances</a></li>
					</ol>
				</div>			

				<div class="col-md-4">
					<img src="public/images/partners-subpage.png" alt="" title="" class="img-responsive" />
				</div>
				<div class="col-md-8">
					<h2 class="trex-title">Relationship &amp; Alliances</h2>

					<p class="">
						T Rex has built a reputation in the market for efficient, quick, timely, consistent and dependable supply of stock with prompt payment across product ranges and customers. The company is able to do this by building on it relationships with brand owners from the likes of Heineken to Diageo to that of secondary level wholesalers or distributors who are well aware of the reach of the company and its customer base.	
					</p>
				</div>

				<div class="clearfix"></div>

				<hr />

				<?php 
				$alliances = [
					0 => [
						'name' => 'Heineken',
						'logo'	=> 'heineken.png',
						'website'	=> 'https://www.heineken.com'
					],

					1 => [
						'name' => 'Diageo',
						'logo'	=> 'diageo.png',
						'website'	=> 'http://www.diageo.com/'
					],

					2 => [
						'name' => 'Pernod Richard',
						'logo'	=> 'pernod-richard.png',
						'website'	=> 'http://pernod-ricard.com/'
					],

					3 => [
						'name' => 'Coke',
						'logo'	=> 'coke.png',
						'website'	=> 'http://pernod-ricard.com/'
					],

					4 => [
						'name' => 'Pepsi',
						'logo'	=> 'pepsi.png',
						'website'	=> 'http://pernod-ricard.com/'
					],

					5 => [
						'name' => 'Redbull',
						'logo'	=> 'redbull.png',
						'website'	=> 'http://pernod-ricard.com/'
					],

					6 => [
						'name' => 'Oasis Water',
						'logo'	=> 'oasis-water.png',
						'website'	=> 'http://pernod-ricard.com/'
					]																					

									
				];
				foreach( $alliances as $alliance ) { ?>
				<div class="col-md-2">
					<div class="card">
						<div class="card-image">
							<img src="public/images/brands/<?=$alliance['logo']?>" alt="" />
						</div>	
						<div class="card-action">
							<a href="<?=$alliance['website']?>" target="_blank">Visit Website</a>
						</div>
					</div>
				</div>
				<?php } ?>																		
				


			</div>
		</div>
	</div>

<?php include('footer.php'); ?>