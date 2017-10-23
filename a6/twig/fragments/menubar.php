<?php
  // $menu = array(...);
   $template = $twig->load('menubar.twig');
   echo $template->render(array("menu"=>array(
        array('menuItem' => 'Pokedex', 'menuLink' => 'index.php'),
        array('menuItem' => 'My Fav 5 Pokemon', 'menuLink' => 'myfav.php'),
        array('menuItem' => 'More>>' , 'menuLink' => "http://www.google.com/search?q=pokedex"))));
//TODO: How to render 2 things?

    // $keyword = $_GET['keyword'];
    // <?php echo '<pre>'; print_r($menu); echo '</pre>'
    // 'searchAction' => 'http://www.google.com/search?q='.$keyword);

?>