<?php

class SampleTest extends WP_UnitTestCase
{
	/**
	 * @test
	 */
	function no_params()
	{
		$io = new miya0001\WP\SocketIO_Emiter();
		$this->assertSame( "localhost:80", $io->get_url() );
	}

	/**
	 * @test
	 */
	function set_hostname()
	{
		$io = new miya0001\WP\SocketIO_Emiter( 'http://example.com/' );
		$this->assertSame( "http://example.com:80", $io->get_url() );
	}

	/**
	 * @test
	 */
	function set_hostname_port()
	{
		$io = new miya0001\WP\SocketIO_Emiter( 'http://example.com/', 3000 );
		$this->assertSame( "http://example.com:3000", $io->get_url() );
	}
}

