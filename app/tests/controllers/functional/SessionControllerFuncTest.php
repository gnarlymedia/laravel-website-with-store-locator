<?php
 
class SessionControllerFunctionalTest extends TestCase {

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

	/**
	 * Test Index
	 */
	public function testCreate()
	{
	  $this->call('GET', 'login');
	 
	  $this->assertResponseOk();
	}

	/**
	 * Test Store failure
	 */
	public function testStoreFailure()
	{
	  Auth::shouldReceive('attempt')->andReturn(false);
	 
	  $this->call('POST', 'login');
	 
	  $this->assertRedirectedToRoute('session.create');
	  $this->assertSessionHas('flash');
	}

	/**
	 * Test Store success
	 */
	public function testStoreSuccess()
	{
	  Auth::shouldReceive('attempt')->andReturn(true);
	 
	  $this->call('POST', 'login');
	 
	  $this->assertRedirectedToRoute('home.index');
	}

}