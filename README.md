# WP SocketIO Emiter

[![Build Status](https://travis-ci.org/miya0001/wp-socketio-emiter.svg?branch=master)](https://travis-ci.org/miya0001/wp-socketio-emiter)

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
