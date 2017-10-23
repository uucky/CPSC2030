<?php
$template = $twig->load('footer.twig');
echo $template->render(array('copyrightNotice' => 'Chell','copyrightDate' => '2017'));
?>