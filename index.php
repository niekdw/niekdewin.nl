<!DOCTYPE html>
<html lang='nl'>
	<head>
		<title>niekdewin.nl</title>
 		<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Serif&family=Roboto:wght@500&display=swap');

			body {
				font-family: 'Noto Serif', sans-serif;
			}
			
			#content {
				width: 800px;
				margin: 0 auto;
			}

      p {
        text-align: justify;
				line-height: 1.8rem;
      } 

			#header {
				margin: 3rem 0rem 2rem 0rem;
			}			

			#header h1 {
				text-transform: uppercase;
				font-size: 1.6rem;
			}

			h1, h2 {
				font-family: 'Roboto', sans-serif;
			}

		</style> 
	</head>

<body>
<div id="content">

<div id="header">
	<h1>Nieks blog</h1>
</div>

<?php include('header.php'); ?>

<?php
if ($handle = opendir('posts')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            echo "$entry" . date ("F d Y H:i:s.", filemtime('posts/' . $entry)) . "\n";
        }
    }

    closedir($handle);
}
?>


<h2>Archief</h2>
<ul>
<li>Een blog artikel</li>
<li>Een ander artikeltje</li>
</ul>

<h2>Ervaring met de Waking Up app</h2>
<p>
Al langere tijd luister ik met veel appreciatie naar Sam Haris’ podcasts. Hierin voert hij long-form discussies over bewustzijn, filosofie, politiek en actualiteit met gasten van allerlei pluimage.
</p>

<p>
Net als de podcasts is Waking Up van hoog niveau. Hieronder mijn ervaringen.
</p>

<p>
De app combineert een 28-daagse introductie, begeleide meditaties van verschillende tijdsduur en lezingen over achterliggende theorie. Met name dat laatste, waarin antwoorden verkent worden op veelvoorkomende vragen, is van veel toegevoegde waarde. De theorie wordt benadert vanuit wetenschappelijk perspectief en wordt helder uitgelegd met een minimaal gehalte van ongrijpbaarheid en zweverigheid dat hierbij vaak aanwezig is. In de introductiecursus wordt in de dagelijkse sessies van tien minuten uitleg gecombineert met korte, begeleide meditaties.
</p>

<p>
De geest als fundament van alles wat we ervaren, waarbij het oefenen daarvan essentieel is, is de kernboodschap van Waking Up. De geest is het raamwerk waarin alle mentale gewaarwordingen, het bewustzijn, zich ontvouwen. Alles wat we meemaken, de beslissingen die we nemen, de plannen die we maken, de emoties die we ervaren. Meditatie is het oefenen je de geest. Een oefening in aandacht, focus en gedisciplineerde concentratie. De insteek hierbij is om niet alleen meer bewustzijn te creëeren op de momenten dat je op het kussentje zit, maar om tevens je mentale staat van zijn in alle momenten daarbuiten aan te scherpen. Door juist in de momenten waarop je regulier uit impuls of emotie wilt reageren in te prikken op een meer meditatievere staat van zijn. Het doel van mediteren is niet om gedachtes te stoppen. De kunst is om zonder oordeel te kunnen observeren. Zonder jezelf te verliezen of te identificeren met alle gedachtes die gevraagd en ongevraag oppoppen.
</p>

<p>
Aan de slag met Waking Up kost je jaarlijks om en nabij de 100 dollar. Tevens worden op sympathieke wijze gratis accounts uitgedeeld voor diegenen die dat niet beschikbaar hebben.
</p>

<p>
Warm aanbevolen.
</p>
</div>
</body>
</html>
