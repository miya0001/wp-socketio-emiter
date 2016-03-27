<?php

namespace miya0001\WP;

use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version1X as IO;

class SocketIO_Emiter
{
	private $host;
	private $port;

	public function __construct( $host = null, $port = 80 )
	{
		if ( false !== filter_var( trim( $host ), FILTER_VALIDATE_URL ) ) {
			$this->host = untrailingslashit( $host );
		} else {
			$this->host = 'localhost';
		}

		if ( intval( trim( $port ) ) ) {
			$this->port = $port;
		} else {
			$this->port = 80;
		}
	}

	public function send( $event, array $message, $namespace = null )
	{
		$client = new Client( new IO( $this->get_url ) );
		$client->initialize();
		if ( $namespace ) {
			$client->of( $namespace );
		}
		$client->emit( $event, $message );
		$client->close();
	}

	public function get_host()
	{
		return $this->host;
	}

	public function get_port()
	{
		return $this->port;
	}

	public function get_url()
	{
		return $this->host . ':' . $this->port;
	}
}
