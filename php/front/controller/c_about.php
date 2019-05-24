<?php 
class show{
    public function about(){
        include_once('models/m_page.php');
        $n = new page;
        $n->about();
        $slide ='page-slide.php';
        $view = 'view/page/main-about.php';
        include('includes/layout.php');
        // $_SESSION['user'] = 'htv';
    }
}