<?PHP

require_once 'rectangle.php';

class Square extends Rectangle
{
	 public function perimeter()
	 {
	 	return $perimeter = 2 * ($this->heightValue + $this->widthValue);
	}
}

?>