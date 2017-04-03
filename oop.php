<?php

class book
{
    public $title;
    public $author;

    public function printTitle()
    {
        echo "$this->title  & $this->author";
    }

    public function __construct($a, $b)
    {
        $this->title = $a;
        $this->author = $b;
    }

}

$book = new book('Fifth Element', 'Liu Cixin');
/*$book->title = 'Fifth Element';
$book->author = 'Liu Cixin';*/

echo "Titel: $book->title <br>Föfattare: $book->author <br>";

$book = new book('Harry Potter and the Philosophers Stone', 'J K Rowling');
/*$book->title = 'Harry Potter and the Philosophers Stone';
$book->author = 'J K Rowling';*/
echo "<br>";
echo "Titel: $book->title <br>Föfattare: $book->author <br>";
echo "<br>";
$book->printTitle();
echo "<br>";

class car
{
    public $model;
    public $color;
    public $price;

    public function printInfo()
    {
        echo "Det här är en $this->color $this->model som kostar $this->price och såldes $this->sellDate";
    }

    public function halfPrice($x)
    {
        $x = $this->price / 2;
        echo $x;
    }
    public function __construct($model, $color='valbar', $price=0, $sellDate)
    {
        $this->model = $model;
        $this->color = $color;
        $this->price = $price;
        $this->sellDate = $sellDate;
    }
}

echo "<br>";
$car = new car('Audi','röd', 5000000, date('Y.m.d'));
/*$car->model = 'Audi';
$car->color = 'röd';
$car->price = 5000000;*/

$car->printInfo();
echo "<br>";
$car->halfPrice($car->price);

echo "<br>";

class product
{
    private $name;
    private $description;
    private $price;
    private $imageURL;
    private $quantity;
    public static $webshop_name = "Nyttegrisen";

    public function __construct($name, $description, $price = 1, $imageURL = 'img/bildkommer.jpg', $quantity = 1)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->imageURL = $imageURL;
        $this->quantity = $quantity;
    }

    public function print_product()
    {
        echo "Produkt namn: $this->name <br>" .
            "Beskrivning: $this->description<br>" .
            "Pris: $this->price<br>" .
            "Bildlänk: $this->imageURL<br>" .
            "Antal: $this->quantity<br>" .
            "Säljs i:" . product::$webshop_name . "<br>";
    }

    public function get_name()
    {
        return $this->name;
    }

    public function set_name($new_name)
    {
        $this->name = $new_name;
    }

}

$item1 = new product('Rödbetsbiffar', 'hemmagjorda', 15, 'img/rodbetsbiff.png', 20);

echo $item1->set_name('morotsbiffar') . "<br>";


$item1->print_product();

echo "<br>";

$item2 = new product('gummianka', 'bra på programmering');
$item2->print_product();

echo "<br>";

echo "productnamn:" . $item1->get_name() . "<br>";

echo "<br>";

/*class PancakeRecipe
{
    public $flour;
    public $milk;
    public $egg;
    public $salt;
    public $butter;

    public function canMakeSinglePancake()
    {
        if ($this->flour >= 2.5 / 8 && $this->milk >= 6 / 8 && $this->egg >= 3 / 8 && $this->salt >= 0.5 / 8 && $this->butter >= 2) {
            return true;
        } else {
            return false;
        }
    }
    public function makeSinglePancake()
    {
        if($this->canMakeSinglePancake()==true){
            echo "En pannkaka klar, mums";
            $this->flour =
        }

    }
}
$one_pancake = new pancake;
*/

class SingleBookLibrary
{
    public $book;
    public $isBorrowed;

    public function borrow()
    {
        if ($this->isBorrowed) {
            echo "Boken är utlånad<br>";
        } else {
            echo "Boken finns inne, varsågod<br>";
            $this->isBorrowed = true;
        }
    }
}

$library = new SingleBookLibrary();
$library->isBorrowed = false;
$library->book = new book('Jurrassic Park', 'Michael Crichton');
$library->borrow();
$library->borrow();
$library->borrow();


