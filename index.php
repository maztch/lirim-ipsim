<?php
require __DIR__ . '/vendor/autoload.php';

$lipsum = new joshtronic\LoremIpsum();

$quant = 5;
$tipo = array('words'=>'paraules', 'sentences'=>'frases', 'paragraphs'=>'paràgrafs');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Lirim Ipsim</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Oxygen|Josefin+Sans|Quicksand|Give+You+Glory' rel='stylesheet' type='text/css'>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
  </head>
  <body>
	<div class="container">
	    <h1>Lirim ipsim giniritir</h1>

	    <div class="nota">
			<p><input type="text" name="orig" id="orig" value="- Hem fet un altre lorem ipsum..."></p>
			<p><span class="translate"></span></p>
		</div>
		
		<div class="quant">
			<?php
				for($i=0;$i<$quant;$i++){
					echo '<span class="qu" data-rel-quant="'.($i+1).'">'.($i+1).'</span>';
				}
			?>
		</div>
		<div class="tipos">
			<?php
				foreach($tipo as $key=>$value){
					echo '<div class="tipo">';
					echo '<span class="qu" data-rel-tipo="'.$key.'">'.str_replace('à', 'í', preg_replace('/[aeiou]/', 'i', $value)).'</span><small>('.$value.')</small>';
					echo '</div>';
				}
			?>
		</div>
		<div class="lorem">
		<?php
		for($i=0;$i<$quant;$i++){
			foreach($tipo as $key=>$value){
				echo '<div class="ipsum" data-quant="'.($i+1).'" data-tipo="'.$key.'">';
				if($key=="words")
					echo preg_replace('/[AEIOU]/', 'I', preg_replace('/[aeiou]/', 'i', $lipsum->$key($i+1)));
				else
					echo preg_replace('/[AEIOU]/', 'I', preg_replace('/[aeiou]/', 'i', $lipsum->$key($i+1, 'p')));
				echo '</div>';
			}
		}
		?>
		</div>

		
	
	    <div class="footer gi"><a href="http://maztch.es">Maztch</a> - Inspirit in <a href="https://twitter.com/josepruana" target="_blank">@josepruana</a></div>

	</div>


	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-34583764-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
 
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>