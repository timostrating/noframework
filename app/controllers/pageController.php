<?php

/**
 * This Controller is responsible for all individual pages.
 */

class PageController extends BaseController {

    function index() {
        $this->view->display('page/page_index.php');        
    } 

    function admin() {
        $result = $this->DB->query("SELECT * FROM Pageviews ORDER BY count DESC", [], "Pageview");
        $this->view->display('admin/admin_index.php', $result);
    }
}