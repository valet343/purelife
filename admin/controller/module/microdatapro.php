<?php
//на 2х
class ControllerModuleMicrodataPro extends Controller {

  public function install() {
    $this->checkVersion();
  }

  public function checkVersion() {
    if(substr(VERSION, 0, 1) == 3 || substr(VERSION, 2, 3) >= 3){ // >= 2.3
      if(is_file(DIR_APPLICATION . 'controller/module/microdatapro.php')){
        unlink(DIR_APPLICATION . 'controller/module/microdatapro.php'); //удаляем заглушку для 2.х
      }
      $token = isset($this->request->get['token'])?'token':'user_token';
      $this->response->redirect($this->url->link('extension/module/microdatapro', $token . '=' . $this->session->data[$token], 'SSL'));
    }
  }

  public function index() {
    $this->checkVersion();

    $from = array(
      'ControllerExtensionModuleMicrodataPro',
      'marketplace/extension',
      'extension/module/microdatapro',
      'marketplace/modification/refresh'
    );
    $to = array(
      'ControllerModuleMicrodataPro',
      'extension/module',
      'module/microdatapro',
      'extension/modification/refresh',
    );

    //admin - controller
      if(is_file((DIR_APPLICATION . 'controller/extension/module/microdatapro.php'))){
        $controller = str_replace($from, $to, file_get_contents(DIR_APPLICATION . 'controller/extension/module/microdatapro.php'));
        $controller_file = fopen(DIR_APPLICATION . 'controller/module/microdatapro.php', 'w');
        fwrite($controller_file, $controller);
        fclose($controller_file);
        unlink(DIR_APPLICATION . 'controller/extension/module/microdatapro.php'); //удаляем контроллер от  > 2.3
      }
    //admin - controller

    //system
      if(is_file(DIR_SYSTEM . 'library/microdatapro.php')){
        $system = str_replace($from, $to, file_get_contents(DIR_SYSTEM . 'library/microdatapro.php'));
        $system_file = fopen(DIR_SYSTEM . 'library/microdatapro.php', 'w');
        fwrite($system_file, $system);
        fclose($system_file);
      }
    //system

    //admin - view
      if(is_file(DIR_APPLICATION . 'view/template/extension/module/microdatapro.tpl')){
        rename(DIR_APPLICATION . 'view/template/extension/module/microdatapro.tpl', DIR_APPLICATION . 'view/template/module/microdatapro.tpl');
      }
    //admin - view

    //catalog - controller
      if(is_file((DIR_CATALOG . 'controller/extension/module/microdatapro.php'))){
        $controller = str_replace($from, $to, file_get_contents(DIR_CATALOG . 'controller/extension/module/microdatapro.php'));
        $controller_file = fopen(DIR_CATALOG . 'controller/module/microdatapro.php', 'w');
        fwrite($controller_file, $controller);
        fclose($controller_file);
        unlink(DIR_CATALOG . 'controller/extension/module/microdatapro.php'); //удаляем контроллер от  > 2.3
      }
    //catalog - controller

    echo '<script>alert("Update completed, reload this page");</script>';
  }

}
