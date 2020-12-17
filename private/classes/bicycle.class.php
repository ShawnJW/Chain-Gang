<?php 

class Bicycle extends DatabaseObject {

	static protected $table_name = 'bicycles';
	static protected $db_columns = [ 'brand', 'model', 'year', 'category', 'color', 'gender', 'price', 'weight_kg', 'condition_id', 'description' ];

	
	public function name() {
		return "{$this->brand} {$this->model} {$this->year}";
	}


	public const CATEGORIES = ['road', 'mountain', 'hybrid', 'cruiser', 'city', 'BMX'];

	public const GENDERS = ['mens', 'womens', 'unisex'];
	public const CONDITION_OPTIONS = [1 => 'Beat up', 2 => 'Decent', 3 => 'Good', 4 => 'Great', 5 => 'Like New'];

	public $id;
	public $brand;
	public $model;
	public $year;
	public $category;
	public $color;
	public $description;
	public $weight_kg;
	public $condition_id;
	public $price;

	public function	__construct($args=[]) {
		$this->brand = $args['brand'] ?? '';
		$this->model = $args['model'] ?? '';
		$this->year = $args['year'] ?? '';
		$this->category = $args['category'] ?? '';
		$this->color = $args['color'] ?? '';
		$this->gender = $args['gender'] ?? '';
		$this->description = $args['description'] ?? '';
		$this->weight_kg = $args['weight_kg'] ?? 0.0;
		$this->condition_id = $args['condition_id'] ?? 3;
		$this->price = $args['price'] ?? 0;
	}
	//Caution allows private/protected properties to be set, alt to above construct arguments
	// For each value passed in, use each one as a key and a value, if the property exist on this instance then set that key equal to v, $k is a dynamic value, not a property
	// foreach($args as $k => v) {
	// 	if(property_exist($this, $k)){
	// 		$this->$k = $v;
	// 	}
	// }
	public function weight_kg() {
		return $this->weight_kg . "kg";
	}

	public function set_weight_kg($value) {
		$weight_kg = floatval($value) . 'kg';
		return $weight_kg;
	}

	public function weight_lbs() {
		return floatval($this->weight_kg) * 2.2046226218;
	}

	public function set_weight_lbs ($value) {
		return $this->weight_kg = floatval($value) / 2.2046226218;
	}

	public function condition() {
		if($this->condition_id > 0) {
		  return self::CONDITION_OPTIONS[$this->condition_id];
		} else {
		  return "Unknown";
		}
	  }

	  protected function validate() {
		$this->errors = [];
		if( is_blank( $this->brand ) ) {
			$this->errors[] = "Brand cannot be blank.";
		}
	
		if( is_blank( $this->model ) ) {
				$this->errors[] = "Model cannot be blank.";
			}
		return $this->errors;
	}
}
?>
