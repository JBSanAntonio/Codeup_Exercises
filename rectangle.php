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
    public function area()
    {
        return $area = ($this->widthValue * $this->heightValue);
    }
}
/*Test your new class by creating an instance of 
Rectangle with various heights and widths. */
$rectangle = new Rectangle('4', '8');
/*$rectangle = new Rectangle('6', '12');*/

?>