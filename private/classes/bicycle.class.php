<?php 
// Create a Constant for Categories: road, mountain, hybrid, cruiser, city, BMX
//  --- Constant for Genders: mens, womens, unisex
//  Properties: brand, model, year, category, color, description
// __construct() said properties
// Weight in kilograms and pounds
// Define property for $weight_kg
// Function that returns weight_kg(), set_weight_kg()
// Function that returns weight_lb(), set_weight_lb()
// Store condition options [1 => 'Beat up', 2 => 'Decent', 3 => 'Good', 4 => 'Great', 5 => 'Like New']
// Store the number as condition_id
// condition() method takes id and returns assocc. string
// Manual class loading or __autoload()

class Bicycle {

	public const CATEGORIES = ['road', 'mountain', 'hybrid', 'cruiser', 'city', 'BMX'];

	public const GENDERS = ['mens', 'womens', 'unisex'];
	protected const CONDITION = [1 => 'Beat up', 2 => 'Decent', 3 => 'Good', 4 => 'Great', 5 => 'Like New'];

	public $brand;
	public $model;
	public $year;
	public $category;
	public $color;
	public $description;
	protected $weight_kg;
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
		$this->weight_kg = $args['weight_kg'] ?? '';
		$this->condition_id = $args['condition_id'] ?? '';
		$this->price = $args['price'] ?? '';
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

	public function condition(){
		if( $this->condition_id > 0) {
		$condition_id = self::CONDITION[$this->condition_id];
		return $condition_id;
	}else{
		return 'Unknown';
		}
	}
}
?>
