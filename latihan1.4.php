// parent class 
abstract class car {
    public $name;
    public function_construct($name) {
        $this->name = $name;
    }
    abstract public function intro();
}

//Child classes
class Audi extends Car {
    public function intro () {
        return"Choose German quality! I'm a $this->name!";
    }
}

class Volvo extends Car {
    public function intro() {
        return "Proud to be Swedish! I'm a $this ->name!";
    }
}

class Ciroen extends Car {
    public function intro() {
        return "French extravagance! I am $this->name!"
    }
}