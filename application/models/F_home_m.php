<?php

use GuzzleHttp\Client;

class F_home_m extends CI_model
{
	
	private $_client;

	public function __construct()
	{
		$this->_client 	= new Client([
			'base_uri' 	=> 'http://ispumaps.id/ispumapapi/'
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

	public function get_aqmnews($keyword = "")
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmnews', [
				'query' => [
					'trusur_api_key' => 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA==',
					'k' => $keyword
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
	public function get_newssearch($keyword)
	{
		try
		{
			$response = $this->_client->request('GET', 'api/news/search', [
				'query' => [
					'trusur_api_key' => 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA==',
					'title' => $keyword
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
			$response = $this->_client->request('GET', 'api/aqmnewsslug', [
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



	public function get_lat_lon($lat,$lon)
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmdetailstasiun', [
				'query' => [
					'trusur_api_key' => 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA==',
					'lat' => $lat,
					'lon' => $lon
				],
			]);

			$result = json_decode($response->getBody()->getContents(), true);

			return $result;
		}
		catch (GuzzleHttp\Exception\ClientException $e)
		{
			$response = $e->getResponse();
			$responseBodyAsString = $response->getBody()->getContents();
		}
	}

	public function get_dampak($id_stasiun)
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmeffectbystasiun', [
				'query' => [
					'trusur_api_key' => 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA==',
					'id_stasiun' => $id_stasiun
				],
			]);

			$result = json_decode($response->getBody()->getContents(), true);

			return $result;
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

	public function get_aqmfaqs()
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

	public function get_aqmrankpm10()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmrankpm10', [
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

	public function get_aqmrankpm25()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmrankpm25', [
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

	public function get_aqmrankso2()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmrankso2', [
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

	public function get_aqmrankco()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmrankco', [
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

	public function get_aqmranko3()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmranko3', [
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

	public function get_aqmrankno2()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmrankno2', [
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

	public function get_aqmrankpm10_yesterday()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmrankpm10yesterday', [
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

	public function get_aqmrankpm25_yesterday()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmrankpm25yesterday', [
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

	public function get_aqmrankso2_yesterday()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmrankso2yesterday', [
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

	public function get_aqmrankco_yesterday()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmrankcoyesterday', [
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

	public function get_aqmranko3_yesterday()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmranko3yesterday', [
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

	public function get_aqmrankno2_yesterday()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/aqmrankno2yesterday', [
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