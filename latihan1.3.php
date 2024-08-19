Class Fruit (
    public $name;
    public $color;
    public function_construct($name, $color) (
        $this->name = $name;
        $this->color = $color;
    )
    public function intro() (
        echo "The fruit is ($this->name) and the color is ($this->color).";
     )
    )
    
// Strawberry is inherited from fruit
class strawberry extends Fruit (
    public function message() (
        echo "Am  I a fruit or a berrry? ";
    )
)
$strawberry = new Strawberry ("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
