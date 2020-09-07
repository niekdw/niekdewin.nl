<?php 
include('header.php'); ?>

<div id="intro">
<h2>Publiek notitieboek</h2>
Vind hier notities, gedachtespinsels, losse flarden. Soms ietwat gepolijster materiaal. Veelal niet.
</div>

<div id="archive">
<strong>Archief</strong>
<ul>
<?php
if ($handle = opendir('posts')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {
						$entryTitle = str_replace("-"," ",$entry);
						$entryTitle = str_replace(".php","",$entryTitle);
						$entryTitle = ucfirst($entryTitle);
            echo "<li><a href=\"posts/" . $entry . "\">" . $entryTitle . "</a> <span class=\"entryDate\">"  . date ("d-m-Y", filectime('posts/' . $entry)) . "</span></li>";
        }
    }

    closedir($handle);
}
?>
</ul>
</div>

<?php include('footer.php'); ?>

</div>

</body>
</html>
