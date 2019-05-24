<?php 
class show{
    function contact(){
        include_once('models/m_page.php');
        $n = new page;
        $n->contact();
        $slide ='page-slide.php';
        $view = 'view/page/main-contact.php';
        include('includes/layout.php');
    }
}