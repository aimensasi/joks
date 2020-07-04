<?php

namespace Aimensasi\Jokes;

use Illuminate\Support\Facades\Facade;

class Joke extends Facade{

	protected static function getFacadeAccessor(){
		return 'joke';
	}
}