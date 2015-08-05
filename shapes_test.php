<?PHP

require_once 'rectangle.php';
require_once 'square.php';

/*Test your new class by creating an instance of 
Rectangle with various heights and widths. */
$rectangle1 = new Rectangle(4, 8);
/*Calling the area method should correctly 
display the product of height and width.*/
echo "Area of rectangle1 is: " . $rectangle1->area() . PHP_EOL;

$rectangle2 = new Rectangle(6, 12);
echo "Area of rectangle2 is: " . $rectangle2->area() . PHP_EOL;


/*Test your new Square class by creating an 
instance of Square with various matching 
height and width. Calling the area() method 
should correctly display the product of 
height and width. Invoking the new method 
perimeter() should display the perimeter of 
the square.
*/

$square1 = new Square(2);
echo "Area of square1 is: " . $square1->area() . PHP_EOL;

$square2 = new Square(2);
echo "Perimeter of square2 is: " . $square2->perimeter();

?>