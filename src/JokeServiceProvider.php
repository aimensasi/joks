<?php

namespace Aimensasi\Jokes;

use Illuminate\Support\ServiceProvider;

class JokeServiceProvider extends ServiceProvider {


	public function boot(){

	}

	public function register(){
		$this->app->bind('joke', function(){
			return new JokeFactory();
		});
	}
}
