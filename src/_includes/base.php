---
content_placeholder: {{ content }}
storage_domain: storage.dah5.me.uk
---
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title><?php if( isset( $metadata['page_title'] ) && $metadata['page_title'] ) echo $metadata['page_title'] . " - "; ?>Anne Warren</title>
		
		<link rel="stylesheet" type="text/css" href="https://w3css.--- metadata.storage_domain ---/4.15/w3.css">
		<link rel="stylesheet" type="text/css" href="https://webfonts.--- metadata.storage_domain ---/nunito/nunito.css">
	</head>
	
	<body>
		<nav class="w3-white w3-padding">
			<div class="w3-auto w3-row">
				<div class="w3-col m4 l3 w3-center font-nunito">
					<div class="w3-xlarge w3-padding"><b>Anne Warren</b></div>
					<div class="w3-normal"><span class="w3-padding-small w3-border-top w3-border-purple">Introvert</span></div>
				</div>
				
				<div class="w3-col m8 l9">
					<div class="w3-padding"></div>
					
					<div class="w3-bar w3-row font-nunito">
						<a href="/" class="w3-bar-item w3-col s4 w3-button w3-hover-text-purple w3-hover-border-purple w3-border-bottom w3-border-white w3-hover-none w3-center">HOME</a>
						<a href="/about" class="w3-bar-item w3-col s4 w3-button w3-hover-text-purple w3-hover-border-purple w3-border-bottom w3-border-white w3-hover-none w3-center">ABOUT</a>
						<a href="/contact" class="w3-bar-item w3-col s4 w3-button w3-hover-text-purple w3-hover-border-purple w3-border-bottom w3-border-white w3-hover-none w3-center">CONTACT</a>
					</div>
				</div>
			</div>
		</nav>
		
		<header class="w3-padding-64" style="background-image: url('https://images.--- metadata.storage_domain ---/backgrounds/anne-working-on-her-laptop-800x533.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
			<div class="w3-padding-64">
				<div class="w3-padding-32">

				</div>
			</div>
		</header>
		
		<section class="w3-auto w3-row w3-padding-64">
			<div class="w3-padding w3-col m2">
				
			</div>

			<div class="w3-padding w3-col m8 font-nunito">
				{{ content }}
			</div>
		</section>

        <footer class="w3-center w3-small">
            <div class="w3-auto">
                Site by <a href="https://www.paulawhitefield.ict.rocks" target="_blank">Paula Whitefield</a>.
            </div>
        </footer>
	</body>
</html>
