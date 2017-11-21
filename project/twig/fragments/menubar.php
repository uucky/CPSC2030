<?php
  // $menu = array(...);
   $template = $twig->load('menubar.twig');
   echo $template->render(array("menu"=>array(
        array('menuItem' => 'Service', 'menuLink' => 'index.php'),
        array('menuItem' => 'Location' , 'menuLink' => 'location.php'),
        array('menuItem' => 'Store' , 'menuLink' => 'store.php'),
        array('menuItem' => 'Order', 'menuLink' => 'Order.php'),
        array('menuItem' => 'About', 'menuLink' => "about.php"))));
//TODO: How to render 2 things?

    // $keyword = $_GET['keyword'];
    // <?php echo '<pre>'; print_r($menu); echo '</pre>'
    // 'searchAction' => 'http://www.google.com/search?q='.$keyword);

?>