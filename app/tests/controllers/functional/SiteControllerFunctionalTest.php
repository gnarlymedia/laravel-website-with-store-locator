<?php
 
class SiteControllerFunctionalTest extends TestCase {
 
	public function setUp()
	{
		parent::setUp();
		
		$this->mock = $this->mock('WebsiteModel\Storage\Site\SiteRepository');
	}
	
	public function mock($class)
	{
		$mock = Mockery::mock($class);
		
		$this->app->instance($class, $mock);
		
		return $mock;
	}
 
	public function tearDown()
	{
		Mockery::close();
	}
	
	/* Tests */
	public function testIndex()
	{
		$this->mock->shouldReceive('all')->once();
		
		$this->call('GET', 'site');
		
		$this->assertResponseOk();
	}
	
	public function testStoreFails()
	{
		$this->mock->shouldReceive('create')
			->once()
			->andReturn(Mockery::mock(array(
				'isSaved' => false,
				'errors' => array()
			)));
		
		$this->call('POST', 'site');
		
		$this->assertRedirectedToRoute('site.create');
		$this->assertSessionHasErrors();
	}
	
	public function testStoreSuccess()
	{
		$this->mock->shouldReceive('create')
				->once()
				->andReturn(Mockery::mock(array(
				'isSaved' => true
			)));
		
		$this->call('POST', 'site');
		$this->assertRedirectedToRoute('site.index');
		$this->assertSessionHas('flash');
	}
	
	public function testShow()
	{
		$this->mock->shouldReceive('find')
			->once()
			->with(1);
		
		$this->call('GET', 'site/1');
		
		$this->assertResponseOk();
	}
	
	public function testEdit()
	{
		$this->call('GET', 'site/1/edit');
		
		$this->assertResponseOk();
	}
	
	public function testUpdateFails()
	{
		$this->mock->shouldReceive('update')
			->once()
			->with(1)
			->andReturn(Mockery::mock(array(
				'isSaved' => false,
				'errors' => array()
			)));

		$this->mock->shouldReceive('find')
			->once()
			->with(1)
			->andReturn(Mockery::mock(array(
				'isSaved' => false,
				'errors' => array()
			)));
		
		$this->call('PUT', 'site/1');
		
		$this->assertRedirectedToRoute('site.edit', 1);
		$this->assertSessionHasErrors();
	}
	
	public function testUpdateSuccess()
	{
		$this->mock->shouldReceive('update')
			->once()
			->with(1)
			->andReturn(Mockery::mock(array(
				'isSaved' => true
			)));
		
		$this->call('PUT', 'site/1');
		
		$this->assertRedirectedToRoute('site.show', 1);
		$this->assertSessionHas('flash');
	}
	
/*
	public function testCreateOneLineAddressSummary()
	{
		$this->mock->shouldReceive('createOneLineAddressSummary')->once();
		
		$this->call('GET', 'site/1/createOneLineAddressSummary');
		
		$this->assertResponseOk();
	}
*/
}