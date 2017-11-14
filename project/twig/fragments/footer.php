<?php
$template = $twig->load('footer.twig');
echo $template->render(array('copyrightNotice' => 'Space Flight','copyrightDate' => '2017'));
?>