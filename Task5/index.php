<?php
class Vector
{
    private $x, $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function addVectors($vector2)
    {

        $vectorX = $this->x + $vector2->x;
        $vectorY = $this->y + $vector2->y;
        $sum = [[$vectorX], [$vectorY]];

        return $sum;
    }

    public function subtractionVectors($vector2)
    {
        $vectorX = $this->x - $vector2->x;
        $vectorY = $this->y - $vector2->y;
        $result = [[$vectorX], [$vectorY]];

        return $result;
    }

    public function multiplicationVectors(int $number)
    {
        $vectorX = $this->x * $number;
        $vectorY = $this->y * $number;
        $result = [[$vectorX], [$vectorY]];

        return $result;
    }

    public function getInfo()
    {
        echo "Вектор з координатами: {" . $this->x . ", " . $this->y . "}";
    }
}

$vector1 = new Vector(1, 2);
$vector2 = new Vector(4, 8);
$sumVectors = $vector1->addVectors($vector2);
$subtraction = $vector1->subtractionVectors($vector2);
$multiplication = $vector2->multiplicationVectors(2);
echo "<pre>";
echo "Sum Vectors: ";
print_r($sumVectors);
echo "</pre>";

echo "<pre>";
echo "Subtraction Vectors: ";
print_r($subtraction);
echo "</pre>";

echo "<pre>";
echo "Multiplication Vector: ";
print_r($multiplication);
echo "</pre>";

$vector1->getInfo();
echo "<br>";
$vector2->getInfo();
