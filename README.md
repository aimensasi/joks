# Jokes

Jokes is package create to learn package development with composer

## Installation

Require the package using composer

```bash
composer require aimensasi/jokes
```

## Usage

```php
use Aimensasi\Jokes\JokeFactory;

$jokeFactory = new JokeFactory();

$randomJoke = $jokeFactory->getRandomJoke();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./License.md)
