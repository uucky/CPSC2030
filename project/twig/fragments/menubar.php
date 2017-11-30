<?php
  // $menu = array(...);
   $template = $twig->load('menubar.twig');
   echo $template->render(array("menu"=>array(
        array('menuItem' => 'SERVICE', 'menuLink' => 'index.php'),
        array('menuItem' => 'LOCATION' , 'menuLink' => 'location.php'),
        array('menuItem' => 'STORE' , 'menuLink' => 'store.php'),
        array('menuItem' => 'ORDER', 'menuLink' => 'Order.php'),
        array('menuItem' => 'ABOUT', 'menuLink' => "about.php"),
        array('menuItem' => 'LOGIN', 'menuLink' => "login.php"),
    )));
//TODO: How to render 2 things?

    // $keyword = $_GET['keyword'];
    // <?php echo '<pre>'; print_r($menu); echo '</pre>'
    // 'searchAction' => 'http://www.google.com/search?q='.$keyword);

?>