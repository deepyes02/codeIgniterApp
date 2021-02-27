<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller {
    /**
    * public function index to take command when the root page is requested.
    * Here, for example, it's the index of pages
    * @param none
    * @return $string [view]
    * @since 1.0.0
     */
    public function index($page = "pages"){
         $data['title'] = ucfirst($page); //capitalize first letter
         var_dump($data);
            echo view('templates/header', $data);
            echo view('pages_archive');
            echo view('templates/footer', $data);

    }

    /**
    * custom public function that returns requested pages as available inside
    * the views sub-directory. 
    * 
    * In this example, $page = home means that home.php will be served when 
    * page/home is requested.
    * @param string assigned to a variable
    * queries: localhost/pages/view ~ /view/home ~ /view/about
     */

    public function view($page = 'about'){
        //if the page doesn't exist on the views
        if (! is_file(APPPATH.'/Views/pages/'.$page.'.php')){
            throw new \CodeIgniter\Exceptions\PageNotFoundException(($page));
        }

        $data['title'] = ucfirst($page); //capitalize first letter

        echo view('templates/header', $data);
        var_dump($data);
        echo view('pages/'.$page, $data);
        echo view('templates/footer', $data);
    }
}