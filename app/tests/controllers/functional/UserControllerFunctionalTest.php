<?php
 
class UserControllerFunctionalTest extends TestCase {
 
	public function setUp()
	{
		parent::setUp();
		
		$this->mock = $this->mock('WebsiteModel\Storage\User\UserRepository');
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
		
		$this->call('GET', 'user');
		
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
		
		$this->call('POST', 'user');
		
		$this->assertRedirectedToRoute('user.create');
		$this->assertSessionHasErrors();
	}
	
	public function testStoreSuccess()
	{
		$this->mock->shouldReceive('create')
				->once()
				->andReturn(Mockery::mock(array(
				'isSaved' => true
			)));
		
		$this->call('POST', 'user');
		$this->assertRedirectedToRoute('user.index');
		$this->assertSessionHas('flash');
	}
	
	public function testShow()
	{
		$this->mock->shouldReceive('find')
			->once()
			->with(1);
		
		$this->call('GET', 'user/1');
		
		$this->assertResponseOk();
	}
	
	public function testEdit()
	{
		$this->mock->shouldReceive('find')
			->once()
			->with(1);
	
		$this->call('GET', 'user/1/edit');
		
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
		
		$this->call('PUT', 'user/1');
		
		$this->assertRedirectedToRoute('user.edit', 1);
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
		
		$this->call('PUT', 'user/1');
		
		$this->assertRedirectedToRoute('user.show', 1);
		$this->assertSessionHas('flash');
	}
	
/*
	public function testCreateOneLineAddressSummary()
	{
		$this->mock->shouldReceive('createOneLineAddressSummary')->once();
		
		$this->call('GET', 'user/1/createOneLineAddressSummary');
		
		$this->assertResponseOk();
	}
*/
}