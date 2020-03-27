<?php

use GuzzleHttp\Client;

class F_home_m extends CI_model
{
	
	private $_client;

	public function __construct()
	{
		$this->_client 	= new Client([
			'base_uri' 	=> 'http://ispumaps.id/ispumapapi/'
			// 'base_uri' 	=> 'http://localhost/ispumapapi/'
			// 'auth'		=> ['admin', 'cHQudHJ1c3VydW5nZ3VsdGVrbnVzYQ==']
		]);
	}

	public function get_aqmdata()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmdata', [
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

	public function get_aqmispu()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmispu', [
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

	public function get_aqmstasiun()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmstasiun', [
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

	public function get_aqmprovinsi_web()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmprovinceweb', [
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

	public function get_aqmprovinsi_list()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmprovincelist', [
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

	public function get_aqmnews()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmnews', [
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

	public function get_aqmnews_slug($slug)
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmnews', [
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

	public function get_aqmabout()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmabout', [
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
}