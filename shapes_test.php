<?PHP

require_once 'rectangle.php';
require_once 'square.php';

/*Test your new class by creating an instance of 
Rectangle with various heights and widths. */
$rectangle1 = new Rectangle(4, 8);
/*Calling the area method should correctly 
display the product of height and width.*/
echo $rectangle1->area();

$rectangle2 = new Rectangle(6, 12);
echo $rectangle2->area();


/*Test your new Square class by creating an 
instance of Square with various matching 
height and width. Calling the area() method 
should correctly display the product of 
height and width. Invoking the new method 
perimeter() should display the perimeter of 
the square.
*/

$square1 = new Square(4, 4);
echo $square1->area();

$square2 = new Square(2, 2);
echo $square2->perimeter();

?>