<?PHP

class Rectangle
{
	public $width;
	public $height;

/*a constructor to set the height and width on instantiation*/	
	public function __construct($width, $height)
    {
        $this->widthValue = $width;
        $this->heightValue = $height;
    }

    public function perimeter()
	{
	 	return $perimeter = (2 * $this->height) + (2 * $this->width);
	}

    public function area()
    {
        return $area = ($this->widthValue * $this->heightValue);
    }
}

?>