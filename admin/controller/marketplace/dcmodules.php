<?php
class ControllerMarketplaceDcmodules extends Controller {
	public function index() {
		$this->load->language('marketplace/extension');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('marketplace/dcmodules', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		//DEVCART

		$url = '';

		$home = "https://dev-opencart.com";
		$curl = curl_init();
		curl_setopt_array($curl, array(
		    CURLOPT_URL => $home . "/index.php?route=api%2Fproduct",
		    CURLOPT_RETURNTRANSFER => 1,
		    CURLOPT_HTTPHEADER => array(
		        "cache-control: no-cache",
		    ),
		));

		$response = curl_exec($curl);

		$err = curl_error($curl);
		curl_close($curl);
		
		$response_content = json_decode($response,true);

		$data['products'] = array();

		if ($response_content['products']) {
			foreach ($response_content['products'] as $result) {
				$data['products'][] = array(
					'thumb'        => $result['thumb'],
					'name'         => $result['name'],
					'description'  => $result['description'],
					'price'        => $result['price'],
					'special'      => $result['special'],
					'tax'      	   => $result['tax'],
					'minimum'      => $result['minimum'],
					'rating'       => $result['rating'],
					'href'       => $result['href']
				);
			}
		}


		//

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('marketplace/dcmodules_list', $data));
	}

	public function info() {
		if (isset($this->request->get['extension_id'])) {
			$extension_id = $this->request->get['extension_id'];
		} else {
			$extension_id = 0;
		}

		$time = time();
		$url = '&domain=' . $this->request->server['HTTP_HOST'];
		$url .= '&version=' . urlencode(VERSION);
		$url .= '&extension_id=' . $extension_id;
		$url .= '&time=' . $time;

		$curl = curl_init(OPENCARTFORUM_SERVER . 'marketplace/api/info?' . $url);

		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_FORBID_REUSE, 1);
		curl_setopt($curl, CURLOPT_FRESH_CONNECT, 1);
		curl_setopt($curl, CURLOPT_POST, 1);

		$response = curl_exec($curl);

		$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

		curl_close($curl);

		$response_info = json_decode($response, true);

		if ($response_info) {
			$this->load->language('marketplace/opencartforum');

			$this->document->setTitle($this->language->get('heading_title'));


			$data['user_token'] = $this->session->data['user_token'];

			$url = '';

			if (isset($this->request->get['filter_search'])) {
				$url .= '&filter_search=' . $this->request->get['filter_search'];
			}

			if (isset($this->request->get['filter_category'])) {
				$url .= '&filter_category=' . $this->request->get['filter_category'];
			}

			if (isset($this->request->get['filter_license'])) {
				$url .= '&filter_license=' . $this->request->get['filter_license'];
			}

			if (isset($this->request->get['filter_username'])) {
				$url .= '&filter_username=' . $this->request->get['filter_username'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$data['cancel'] = $this->url->link('marketplace/opencartforum', 'user_token=' . $this->session->data['user_token'] . $url, true);

			$data['breadcrumbs'] = array();

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_home'),
				'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
			);

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('marketplace/opencartforum', 'user_token=' . $this->session->data['user_token'] . $url, true)
			);

			$this->load->helper('bbcode');

			$data['banner'] = $response_info['banner'];

			$data['extension_id'] = (int)$this->request->get['extension_id'];
            $data['extension_url'] = $response_info['extension_url'];
            $data['cfields'] = $response_info['cfields'];
			$data['name'] = $response_info['name'];
			$data['description'] = $response_info['description'];
			$data['documentation'] = $response_info['documentation'];
			$data['changelog'] = $response_info['changelog'];
			$data['price'] = $response_info['price'];
			$data['license'] = $response_info['license'];
			$data['license_period'] = $response_info['license_period'];
			$data['purchased'] = $response_info['purchased'];
			$data['rating'] = $response_info['rating'];
			$data['rating_total'] = $response_info['rating_total'];
			$data['downloaded'] = $response_info['downloaded'];
			$data['sales'] = $response_info['sales'];
			$data['topicid'] = $response_info['topicid'];
			$data['topicseoname'] = $response_info['topicseoname'];
			$data['date_added'] = date($this->language->get('date_format_short'), strtotime($response_info['date_added']));
			$data['date_modified'] = date($this->language->get('date_format_short'), strtotime($response_info['date_modified']));

			$data['member_username'] = $response_info['member_username'];
			$data['member_url'] = $response_info['member_url'];
			$data['member_image'] = $response_info['member_image'];
			$data['member_date_added'] = $response_info['member_date_added'];
			$data['filter_member'] = $this->url->link('marketplace/opencartforum', 'user_token=' . $this->session->data['user_token'] . '&filter_member=' . $response_info['member_username']);


			$data['comment_total'] = $response_info['comment_total'];

			$data['images'] = array();

			foreach ($response_info['images'] as $result) {
				$data['images'][] = array(
					'thumb' => $result['thumb'],
					'popup' => $result['popup']
				);
			}

			$this->load->model('setting/extension');


			$this->document->addStyle('view/javascript/jquery/magnific/magnific-popup.css');
			$this->document->addScript('view/javascript/jquery/magnific/jquery.magnific-popup.min.js');

			$data['header'] = $this->load->controller('common/header');
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['footer'] = $this->load->controller('common/footer');

			$this->response->setOutput($this->load->view('marketplace/dcmodules_info', $data));
		} else {
			return new Action('error/not_found');
		}
	}

}
