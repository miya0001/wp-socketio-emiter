# WP SocketIO Emiter

[![Build Status](https://travis-ci.org/miya0001/wp-socketio-emiter.svg?branch=master)](https://travis-ci.org/miya0001/wp-socketio-emiter) [![Latest Stable Version](https://poser.pugx.org/miya0001/wp-socketio-emiter/v/stable.svg)](https://packagist.org/packages/miya0001/wp-socketio-emiter) [![Total Downloads](https://poser.pugx.org/miya0001/wp-socketio-emiter/downloads.svg)](https://packagist.org/packages/miya0001/wp-socketio-emiter) [![Latest Unstable Version](https://poser.pugx.org/miya0001/wp-socketio-emiter/v/unstable.svg)](https://packagist.org/packages/miya0001/wp-socketio-emiter) [![License](https://poser.pugx.org/miya0001/wp-socketio-emiter/license.svg)](https://packagist.org/packages/miya0001/wp-socketio-emiter)

## Getting started

```
$ composer require miya0001/wp-socketio-emiter
```

## Example

```
use miya0001\WP;

$io = new SocketIO_Emiter( 'http://example.com/', 3000 );
$io->send( 'broadcast', [ 'name' => 'John', 'message' => 'hello' ] );
```

With `namespace`

```
use miya0001\WP;

$io = new SocketIO_Emiter( 'http://example.com/', 3000 );
$io->send( 'broadcast', [ 'name' => 'John', 'message' => 'hello' ], '/mynamespace' );
```
