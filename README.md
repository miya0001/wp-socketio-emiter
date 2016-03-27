# WP SocketIO Emiter

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
