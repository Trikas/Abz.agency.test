<?php 
use Illuminate\Support\Facades\Facade;

class GateName extends Facade {

	protected static function getFacadeAccessor() { return 'get_name'; }


}