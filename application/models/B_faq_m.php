<?php

use GuzzleHttp\Client;

class B_faq_m extends CI_Model
{

	private $_client;

	public function __construct()
	{
		date_default_timezone_set('Asia/Jakarta');
		$this->_client 	= new Client([
			'base_uri' 	=> 'http://ispumaps.id/ispumapapi/'
		]);
	}	

	public function get_aqmfaq()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmfaqs', [
				'query' => [
					'trusur_api_key' => 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA=='
				],
			]);

			$result = json_decode($response->getBody()->getContents(), true);

			return $result['data'];
		}
		catch (GuzzleHttp\Exception\ClientException $e)
		{
			$response = $e->getResponse();
			$responseBodyAsString = $response->getBody()->getContents();
		}
	}	

	public function get_aqmfaqslug($slug)
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmfaqs', [
				'query' => [
					'trusur_api_key' => 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA==',
					'slug' => $slug
				],
			]);

			$result = json_decode($response->getBody()->getContents(), true);

			return $result['data'];
		}
		catch (GuzzleHttp\Exception\ClientException $e)
		{
			$response = $e->getResponse();
			$responseBodyAsString = $response->getBody()->getContents();
		}
	}

	public function get_users(){
		$this->db->order_by('usr_id', 'ASC');
		$query = $this->db->get('acc_users');
		return $query->result_array();
	}

	public function add_aqmfaq()
	{
		$slug = url_title($this->input->post('title'));
		$data = array(
			'title' 			=> $this->input->post('title'),
			'slug'				=> $slug,
			'content' 			=> $this->input->post('content'),
			'created_at' 		=> $this->input->post('created_at', array('type' => 'timestamp')),
			'created_by' 		=> $this->fungsi->user_login()->usr_id,
			'trusur_api_key'	=> 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA=='
		);
		$response = $this->_client->request('POST', 'api/post/aqmfaqs/data', [
			'form_params' => $data
		]);

		$result = json_decode($response->getBody()->getContents(), true);

		return $result;
	}

	public function update_aqmfaq()
	{
		$data = array(
			'title' 			=> $this->input->post('title'),
			'content' 			=> $this->input->post('content'),
			'edited_at' 		=> date('Y-m-d H:i:s'),
			'edited_by' 		=> $this->fungsi->user_login()->usr_id,
			'id' 				=> $this->input->post('id'),
			'trusur_api_key'	=> 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA=='
		);
		$response = $this->_client->request('PUT', 'api/put/aqmfaqs/data', [
			'form_params' => $data
		]);

		$result = json_decode($response->getBody()->getContents(), true);

		return $result;
	}

	public function delete_aqmfaq($id)
	{
		$response = $this->_client->request('DELETE', 'api/delete/aqmfaqs/data', [
			'form_params' => [
				'id'				=> $id,
				'trusur_api_key'	=> 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA=='
			]
		]);

		$result = json_decode($response->getBody()->getContents(), true);

		return $result;
	}
}