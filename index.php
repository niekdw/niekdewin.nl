<?php 
include('header.php'); ?>


<h2>Archief</h2>
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

<?php include('footer.php'); ?>

</div>

</body>
</html>
