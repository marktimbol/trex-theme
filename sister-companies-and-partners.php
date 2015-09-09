<?php include('header.php'); ?>

	<div class="row page">
		<div class="col-md-12">
			<div class="row">

				<div class="col-md-12">
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li><a href="#">Sister Companies &amp; Partners</a></li>
					</ol>
				</div>

				<div class="col-md-4">
					<img src="public/images/partners-subpage.png" alt="" title="" class="img-responsive" />
				</div>

				<div class="col-md-8">
					<h2 class="trex-title">Sister Companies &amp; Partners</h2>

					<p class="">
						Our sister concerns are the brand owners of <a href="http://edgertonpink.com" target="_blank">Edgerton Pink Gin</a>. Edgerton Pink Gin is available at Harrods, Harvey Nichols, etc. We also have our own Transport Company that services the sector in the European Union backed by fully owned storage locations in the United Kingdom. On top of which the company also has formed partnerships with well-known bonded warehouse across the European Union like that of IEFW in France, Loendersloot in The Netherlands, Gaston-Schul in Belgium, and the Ziegler Group.	
					</p>
				</div>

				<div class="clearfix"></div>

				<hr />

				<?php 
				$alliances = [
					0 => [
						'name' => 'Edgerton Pink Gin',
						'logo'	=> 'edgerton-pink.png',
						'website'	=> 'https://edgertonpink.com'
					],

					1 => [
						'name' => 'Ziegler - Belgium',
						'logo'	=> 'ziegler.png',
						'website'	=> 'http://www.zieglergroup.com/'
					],

					2 => [
						'name' => 'Loendersloot - Netherlands',
						'logo'	=> 'loendersloot.png',
						'website'	=> 'http://www.loendersloot.com/'
					],

					3 => [
						'name' => 'TOP Logistics',
						'logo'	=> 'top-logistics.png',
						'website'	=> 'http://www.toplogistics.nl/en/'
					],

					4 => [
						'name' => 'Newcorp - Netherlands',
						'logo'	=> 'newcorp.png',
						'website'	=> 'http://www.newcorplogistics.nl/en/'
					],

					5 => [
						'name' => 'Seabrooks - United Kingdom',
						'logo'	=> 'seabrook.png',
						'website'	=> 'http://www.seabrookexports.com/'
					],

					6 => [
						'name' => 'IEFW - France',
						'logo'	=> 'default.png',
						'website'	=> '#'
					],

					7 => [
						'name' => 'Gaston Schul - Belgium',
						'logo'	=> 'gaston-schul.png',
						'website'	=> 'http://www.gaston-schul.com/nl/home/'
					]																			

									
				];
				$i = 0;
				foreach( $alliances as $alliance ) {
				?>
				<div class="col-md-2 <?=($i == 6) ? 'col-md-offset-4' : ''?>" >
					<div class="card">
						<div class="card-image">
							<img src="public/images/brands/<?=$alliance['logo']?>" alt="" />
						</div>	
						<div class="card-action">
							<a href="<?=$alliance['website']?>" target="_blank">Visit Website</a>
						</div>
					</div>
				</div>
				<?php 
				$i++;
				} ?>

			</div>
		</div>
	</div>

<?php include('footer.php'); ?>