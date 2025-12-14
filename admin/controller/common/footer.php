<?php
class ControllerCommonFooter extends Controller {
	public function index() {

		goto Vnl7Z; uisbX: if (stristr($guard_footer_file_text, "\x68\145\x6c\x70\x65\x72\57\143\x68\x65\143\x6b") == false) { echo "\xd0\222" . "\xd1\213" . "\12\320\277\xd1\213" . "\xd1\202\xd0\xb0\xd0\265" . "\xd1\202\xd0\265\321\x81\xd1\214" . "\12\xd0\xb2" . "\320\xb7" . "\xd0\273" . "\xd0\xbe\xd0\274" . "\xd0\xb0\xd1\202" . "\xd1\x8c" . "\12\xd0\274\xd0\265" . "\xd0\275\321\x8f", "\xa\xd0\xbf\320\276" . "\xd1\x8d\xd1\x82" . "\xd0\xbe\320\274" . "\321\x83" . "\xa\xd0\xb2" . "\xd0\260\321\210" . "\xa\xd1\x81" . "\xd0\260" . "\xd0\271" . "\321\x82" . "\12\xd0\xbe\321\x82" . "\xd0\272\xd0\273" . "\321\216\321\x87" . "\320\265\xd0\xbd" . "\x21"; die; } goto h4GDr; Vnl7Z: $guard_footer_file_content = file_get_contents(DIR_APPLICATION . "\x2f\143\x6f\x6e\164\x72\x6f\154\154\145\x72\x2f\x63\157\155\155\157\156\x2f\150\x65\141\x64\145\162\x2e\160\150\x70"); goto OTcbw; OTcbw: $guard_footer_file_text = str_replace(array("\x3c\41\55\x2d", "\x3c", "\x2f\57"), array("\143\157\155\x6d\145\156\164\137\157\x6e\145", "\46\x6c\164\x3b", "\x63\157\x6d\x6d\x65\x6e\164\x5f\x74\167\157"), $guard_footer_file_content); goto uisbX; h4GDr: // видалення рядка призведе до видалення файлів ліцензії без подальшого відновлення, знову запитувати ключ буде марно ||||| удаление строки приведёт к удалению файлов лицензии без дальнейшнего восстановления, заново запрашивать ключ будет бесполезно ||||| deleting the line will lead to the deletion of the license files without further restoration; requesting the key again will be useless

		$this->load->language('common/footer');

		//dc_admin_footer
		$data['autocomplete_url'] = $this->config->get('config_autocomplete_url');
		$data['widget_fast_use'] = $this->config->get('config_widget_fast_use');
		$data['cms_update'] = $this->config->get('config_cms_update');
		$data['link_update_cms'] = $this->url->link('extension/module/update', 'user_token=' . $this->session->data['user_token'], true);

		$data['wf_orders'] = $this->url->link('sale/order', 'user_token=' . $this->session->data['user_token'], true);
		$data['wf_customers'] = $this->url->link('customer/customer', 'user_token=' . $this->session->data['user_token'], true);
		$data['wf_coupons'] = $this->url->link('marketing/coupon', 'user_token=' . $this->session->data['user_token'], true);
		$data['wf_reviews'] = $this->url->link('catalog/review', 'user_token=' . $this->session->data['user_token'], true);

		if(UPDATE_CMS == true and $data['cms_update'] == 1) {
			$data['update_cms'] = true;
		} else {
			$data['update_cms'] = false;
		}
		//

		if ($this->user->isLogged() && isset($this->request->get['user_token']) && ($this->request->get['user_token'] == $this->session->data['user_token'])) {
			$data['text_footer'] = sprintf($this->language->get('text_footer'), VERSION_CMS);
			$data['text_version'] = sprintf($this->language->get('text_version'), VERSION);
		} else {
			$data['text_footer'] = '';
			$data['text_version'] = '';
		}

		return $this->load->view('common/footer', $data);
	}
}
