<?php
// Set up Modal for categories
require dirname(__DIR__) . '/../public/modals/categoriesModal.php';

function indexAction() {
    global $load;
    $load->loadTemplate('index');
    $rsCategories = 'getAllMainCatsWithChildren';
    $rsCategories();
}

?>

