---
content_placeholder: {{ content }}
---
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title><?php if( isset( $metadata['page_title'] ) && $metadata['page_title'] ) echo $metadata['page_title'] . " - "; ?>Anne Warren</title>
		
		<link rel="stylesheet" type="text/css" href="/assets/w3css/4.15/w3.css">
		<link rel="stylesheet" type="text/css" href="/assets/webfonts/nunito/nunito.css">
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
		
		<header class="w3-padding-64" style="background-image: url('/assets/images/backgrounds/anne-working-on-her-laptop-800x533.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
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
				Copyright &copy; Anne Warren.<br>
                Site by <a href="https://paulawhitefield.weburl.net" target="_blank">Paula Whitefield</a>.
            </div>
        </footer>
	</body>
</html>
