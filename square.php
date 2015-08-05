<?PHP

require_once 'rectangle.php';

class Square extends Rectangle
{
	/*public function __construct($height)
    {
    	$this->height = $height;
    	$this->width = $height;
    }*/

    public function __construct($height)
    {
        parent::__construct($height, $height);
    }
    
    public function area()
    {
       return $this->heightValue * $this->heightValue;
    }    
	
	public function perimeter()
	{
	 	return $perimeter = 4 * ($this->heightValue);
	}
}

?>