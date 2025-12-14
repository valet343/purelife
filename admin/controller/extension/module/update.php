<?php
class ControllerExtensionModuleUpdate extends Controller {
        private $error = array();

        public function index() {
                $this->load->language('extension/module/update');

                $this->document->setTitle($this->language->get('heading_title_short'));

                $this->load->model('setting/setting');

                if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
                        // $this->model_setting_setting->editSetting('module_update', $this->request->post);

                        // $this->session->data['success'] = $this->language->get('text_success');

                        // $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module/update', true));
                }

                if (isset($this->error['warning'])) {
                        $data['error_warning'] = $this->error['warning'];
                } else {
                        $data['error_warning'] = '';
                }

                $data['breadcrumbs'] = array();

                $data['breadcrumbs'][] = array(
                        'text' => $this->language->get('text_home'),
                        'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
                );

                $data['breadcrumbs'][] = array(
                        'text' => $this->language->get('text_extension'),
                        'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
                );

                $data['breadcrumbs'][] = array(
                        'text' => $this->language->get('heading_title_short'),
                        'href' => $this->url->link('extension/module/update', 'user_token=' . $this->session->data['user_token'], true)
                );

                $data['action'] = $this->url->link('extension/module/update', 'user_token=' . $this->session->data['user_token'], true);

                $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

                $data['user_token'] = $this->session->data['user_token'];

                if (isset($this->request->post['module_update_code'])) {
                        $data['module_update_code'] = $this->request->post['module_update_code'];
                } else {
                        $data['module_update_code'] = $this->config->get('module_update_code');
                }

                // dc_admin_update_cms
                        // Check update CMS

                        $data['cms_update'] = $this->config->get('config_cms_update');

                        if(UPDATE_CMS == true and $data['cms_update'] == 1) {
                                $data['update_cms'] = true;
                        } else {
                                $data['update_cms'] = false;
                        }

                        $data['version_cms'] = VERSION_CMS;

                        $data['lang'] = $this->language->get('code');

                        if(TYPE_CMS == 'FREE') {
                                if($data['lang'] == uk) {
                                        $dc_update_log = curl_init('https://dc.dev-opencart.com/update_free_content_uk.html');
                                } elseif($data['lang'] == ru) {
                                        $dc_update_log = curl_init('https://dc.dev-opencart.com/update_free_content_ru.html');
                                } elseif($data['lang'] == en) {
                                        $dc_update_log = curl_init('https://dc.dev-opencart.com/update_free_content_en.html');
                                } else {
                                        $dc_update_log = curl_init('https://dc.dev-opencart.com/update_free_content_uk.html');
                                }
                        } elseif(TYPE_CMS == 'PRO') {
                                if($data['lang'] == uk) {
                                        $dc_update_log = curl_init('https://dc.dev-opencart.com/update_pro_content_uk.html');
                                } elseif($data['lang'] == ru) {
                                        $dc_update_log = curl_init('https://dc.dev-opencart.com/update_pro_content_ru.html');
                                } elseif($data['lang'] == en) {
                                        $dc_update_log = curl_init('https://dc.dev-opencart.com/update_pro_content_en.html');
                                } else {
                                        $dc_update_log = curl_init('https://dc.dev-opencart.com/update_pro_content_uk.html');
                                }
                        }
                        curl_setopt($dc_update_log, CURLOPT_POST, 1);
                        curl_setopt($dc_update_log, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($dc_update_log, CURLOPT_SSL_VERIFYPEER, false);
                        curl_setopt($dc_update_log, CURLOPT_SSL_VERIFYHOST, false);
                        $dc_update_log_response = curl_exec($dc_update_log);
                        curl_close($dc_update_log);

                        // View log with lang
                        $data['dc_update_log'] = $dc_update_log_response;

                        // Check code to update

                        $dc_code_update = curl_init('https://dc.dev-opencart.com/code_update.html');
                        curl_setopt($dc_code_update, CURLOPT_POST, 1);
                        curl_setopt($dc_code_update, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($dc_code_update, CURLOPT_SSL_VERIFYPEER, false);
                        curl_setopt($dc_code_update, CURLOPT_SSL_VERIFYHOST, false);
                        $dc_code_update_response = curl_exec($dc_code_update);
                        curl_close($dc_code_update);

                        $data['dc_code_update'] = $dc_code_update_response;


                //

                $data['header'] = $this->load->controller('common/header');
                $data['column_left'] = $this->load->controller('common/column_left');
                $data['footer'] = $this->load->controller('common/footer');

                $data['link'] = 'https://dc.dev-opencart.com/update_devcart_pro/update_dc_pro.zip';

                if($data['dc_code_update'] == $data['module_update_code']) {
                        $this->response->setOutput($this->load->view('extension/module/update', $data));
                } else {
                        ?>
                        <!DOCTYPE html>
                          <html>
                            <head>
                              <meta charset="utf-8"/>
                              <title>Код обновления - DEVCART PRO</title>
                              <meta name="viewport" content="width=device-width,initial-scale=1">
                              <meta name="robots" content="noindex, nofollow">
                              <link rel="preconnect" href="https://fonts.googleapis.com">
                              <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                              <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
                              <link rel="stylesheet" href="https://dev-opencart.com/activate/style.css">
                            </head>
                            <body>
                              <div class="active_block"> 
                                <div class="active_block_inner">
                                  <div class="active_header">
                                    <img src="https://dc.dev-opencart.com/logo.svg" alt="">
                                    <p>DEVCART PRO (обновление)</p>
                                  </div>
                                  <div class="active_content">
                                   <form action="" method="POST">
                                <input class="input" type="text" placeholder="* Введите актуальный код обновления" name="module_update_code" value="<?php $data['module_update_code']; ?>" required>
                                <span class="notice">
                                  <h4>Где узнать код обновленмя?</h4>
                                  <p>Каждый пользователь DEVCART PRO CMS добавляется в чат в Telegram. Этот код можно увидеть там в шапке чата.</p>
                                  </span>
                                <button type="submit" class="button is-link is-rounded">Проверить</button>
                              </form>
                              
                                  </div>
                                </div>
                              </div>
                            </body>
                          </html>
                        <?php
                }

        }

        protected function validate() {
                if (!$this->user->hasPermission('modify', 'extension/module/update')) {
                        $this->error['warning'] = $this->language->get('error_permission');
                }

                return !$this->error;
        }

        public function download() {
                $json = array();

                if ($this->request->server['REQUEST_METHOD'] == 'POST') {

                	$url = 'https://dc.dev-opencart.com/update_devcart_pro/update_dc_pro.zip';
	                $zip_contents = file_get_contents($url);
	                $temp_file = tempnam(sys_get_temp_dir(), 'zip');
	                file_put_contents($temp_file, $zip_contents);
	                $zip = zip_open($temp_file);
	                while ($zip_entry = zip_read($zip)) {
	                $filename = zip_entry_name($zip_entry);
	                $file_path =  dirname(DIR_CATALOG) . '/' . $filename;
	                $dir_path = dirname($file_path);
	                if (!file_exists($dir_path)) {
	                    mkdir($dir_path, 0777, true);
	                }
	                zip_entry_open($zip, $zip_entry, "r");
	                $temp_file = tempnam(sys_get_temp_dir(), 'zip');
	                file_put_contents($temp_file, zip_entry_read($zip_entry, zip_entry_filesize($zip_entry)));
	                zip_entry_close($zip_entry);
	                copy($temp_file, $file_path);
	                unlink($temp_file);
	                }
	                zip_close($zip);
	                unlink($temp_file);
					
                }


                $this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
        }

}