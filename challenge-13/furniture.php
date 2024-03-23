<?php
// Part 1
// ovde imam implement na printable , printable e vo part 3.I isto taka imam implement samo na furniture na sofa nemam zatoa sto preku furniture go nasleduva implement i nema potreba da se duplira kod
class Furniture implements Printable
{
    private $width;
    private $length;
    private $height;
    private $is_for_seating = false;
    private $is_for_sleeping = false;

    public function __construct($width, $length, $height)
    {
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setIsForSeating()
    {
        $this->is_for_seating = true;
    }
    public function getIsForSeating()
    {
        return $this->is_for_seating;
    }

    public function setIsForSleeping()
    {
        $this->is_for_sleeping = true;
    }


    public function getIsForSleeping()
    {
        return $this->is_for_sleeping;
    }

    public function area()
    {
        return $this->width * $this->length;
    }

    public function volume()
    {
        return $this->area() * $this->height;
    }
    public function print()
    {
        $status = $this->getIsForSleeping() ? "sleeping" : "sitting only";
        return get_class($this) . ", $status, " . $this->area() . "cm2<br>";
    }

    public function sneakpeek()
    {
        return get_class($this);
    }

    public function fullinfo()
    {
        $status = $this->getIsForSleeping() ? "sleeping" : "sitting only";
        return get_class($this) . ", $status, " . $this->area() . "cm2, width: " . $this->getWidth() . "cm, length: " . $this->getLength() . "cm, height: " . $this->getHeight() . "cm<br>";
    }
}

$furniture = new Furniture(1.5, 2.2, 0.5);
$furniture->setIsForSleeping();

// echo "Width: " . $furniture->getWidth(4) . "<hr>";
// echo "Length: " . $furniture->getLength(5) . "<hr>";
// echo "Height: " . $furniture->getHeight(7) . "<hr>";
echo "Furniture Is for seating: " . ($furniture->getIsForSeating() ? "Yes" : "No") . "<hr>";
echo "Furniture Is for sleeping: " . ($furniture->getIsForSleeping() ? "Yes" : "No") . "<hr>";
echo "Area: " . $furniture->area() . "<hr>";
echo "Volume: " . $furniture->volume() . "<hr>";
// var_dump($furniture);
// 2part//
class Sofa extends Furniture
{
    private $seats;
    private $armrests;
    private $length_opened;

    public function __construct($width, $length, $height)
    {
        parent::__construct($width, $length, $height);
    }

    public function setSeats($seats)
    {
        $this->seats = $seats;
    }

    public function getSeats()
    {
        return $this->seats;
    }

    public function setArmrests($armrests)
    {
        $this->armrests = $armrests;
    }

    public function getArmrests()
    {
        return $this->armrests;
    }

    public function setLengthOpened($length_opened)
    {
        $this->length_opened = $length_opened;
    }

    public function getLengthOpened()
    {
        return $this->length_opened;
    }
    public function area_opened()
    {
        if ($this->getIsForSleeping()) {
            return $this->getWidth() * $this->getLengthOpened();
        } else {
            return "This sofa is for sitting only, it has {$this->getArmrests()} armrests and {$this->getSeats()} seats.";
        }
    }
    //kodot za printable e ist kako so kodot vo furniture pa zatoa funkciite za print za da ne se povtoruvaat tuka koga vekje gi zima od furniture nema da bidat tuka napisani zatoa sto imame  implement Printable na Furniture.

}

$sofa = new Sofa(2, 3, 1);

$sofa->setArmrests(8);
echo "<hr>";
$sofa->setSeats(5);
echo "<hr>";
$sofa->setIsForSeating();

echo "<hr>";

echo "Sofa Area: " . $sofa->area() . "<hr>";
echo "Sofa Volume: " . $sofa->volume() . "<hr>";
echo "Sofa Area opened: " . $sofa->area_opened() . "<hr>";


$sofa->setIsForSleeping();
$sofa->setLengthOpened(9);


echo "Sofa Area opened  " . $sofa->area_opened() . "<br>";
// var_dump($Sofa);
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";

// PART3
interface Printable
{
    public function print();
    public function sneakpeek();
    public function fullinfo();
}

class Bench extends Sofa
{
    public function __construct($width, $length, $height)
    {
        parent::__construct($width, $length, $height);
    }

    // (Ovoj kod tuka go imam vo furniture  kade sto  furniture vrsi implement na printable,dodeka pa bench preku Sofa koja e povrzana so furniture go nasleduva implement od furniture.)

}
class Chair extends Furniture
{
    public function __construct($width, $length, $height)
    {
        parent::__construct($width, $length, $height);
    }
    // (Ovoj kod tuka go imam vo furniture part1 , kade sto furniture vrsi implement na printable i na toj nacin chair toa go nasleduva preku furniture)

}
$bench = new Bench(1.8, 1.2, 0.8, 2, 0, 0);
echo $bench->print();
echo  $bench->sneakpeek() . "<br>";
echo $bench->fullinfo() . "<br>";
echo "<hr>";
echo "<hr>";

// Instantiate Chair
$chair = new Chair(0.5, 0.5, 0.8);
echo $chair->print();
echo $chair->sneakpeek() . "<br>";
echo  $chair->fullinfo() . "<br>";
echo "<hr>";
echo "<hr>";

$Sofa1 = new Sofa(50, 85, 28);
echo  $sofa->print();
echo  $sofa->sneakpeek() . "<br>";
echo $sofa->fullinfo() . "<br>";
