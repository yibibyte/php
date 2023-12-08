use PHPUnit\Framework\TestCase;

class Calculator
{
// Case 1. Сложение двух целых чисел 

    public function add($a, $b)
    {
        return $a + $b;
    }

// Case 2. Вычитание двух целых чисел

    public function subtract($a, $b)
    {
        return $a - $b;
    }

// Case 3. Умножения двух целых чисел

    public function multiply($a, $b)
    {
        return $a * $b;
    }

// Case 4. Деление двух целых чисел
    
public function divide($a, $b)
    {
        if ($b == 0) {
            throw new InvalidArgumentException("Cannot divide by zero.");
        }
        return $a / $b;
    }

// Case 5. Возведения в квадрат целого числа

    public function square($a)
    {
        return $a * $a;
    }

// Case 6. Возведение в степень двух чисел

    public function power($x, $y)
    {
        return pow($x, $y);
    }
}
