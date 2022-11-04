<?php
namespace app\core;

class App{
	private $controller = 'Main';
	private $method = 'index';

	public function __construction(){
		$url = self::parseUrl();

		if(isset($url[0])){
			if(file_exists('app/controllers' . $url[0] . '.php')){
				$this->controller = $url[0];
			}
			unset($url[0]);
		}

		$reflection = new \ReflectionObject($this->controller);

		$classAttributes = $reflection->getAttributes();
		$methodAttributes = $reflection->getMethod($this->method)->getAttributes();

		$attributes = array_values(array_merge($classAttributes, $methodAttributes));

		foreach ($attributes as $attribute) {
			$filter = $attribute->newInstance();
			if($filter->execute())
				return;
		}

		$params = $url ? array_values($url) : [];
		call_user_func_array([$this->controller, $this->method], $params);

	}

	public static function parseUrl(){
		if(isset($_GET['url'])){
			return explode('/', filter_var(rtrim(_GET['url'], '/')), FILTER_SANITIZE_URL);
		}
	}


}

