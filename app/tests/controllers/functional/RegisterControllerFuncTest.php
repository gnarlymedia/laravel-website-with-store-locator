<?php
 
class RegisterControllerFuncTest extends TestCase {
 
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
  public function testIndex()
  {
    $this->call('GET', 'register');
 
    $this->assertResponseOk();
  }
 
  /**
   * Test Store fails
   */
  public function testStoreFails()
  {
    $this->mock->shouldReceive('create')
      ->once()
      ->andReturn(Mockery::mock(array('isSaved' => false, 'errors' => array())));
 
    $this->call('POST', 'register');
 
    $this->assertRedirectedToRoute('register.index');
    $this->assertSessionHasErrors();
  }
 
  /**
   * Test Store success
   */
  public function testStoreSuccess()
  {
    $this->mock->shouldReceive('create')
      ->once()
      ->andReturn(Mockery::mock(array('isSaved' => true)));
 
    $this->call('POST', 'register');
 
    $this->assertRedirectedToRoute('session.create');
    $this->assertSessionHas('flash');
  }
}