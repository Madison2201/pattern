<?php

class Example
{
    private $strategy;
    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }
    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }
    public function businessLogic(): void
    {
        $result = $this->strategy->algoritm([1, 2, 3, 4, 5]);
        echo implode(" ", $result) . "\n";
    }
}
interface Strategy
{
    public function algoritm(array $data): array;
}
class ConcreteStrategyA implements Strategy
{
    public function algoritm(array $data): array
    {
        sort($data);
        return $data;
    }
}
class ConcreteStrategyB implements Strategy
{
    public function algoritm(array $data): array
    {
        rsort($data);
        return $data;
    }
}
$example = new Example(new ConcreteStrategyA);
echo "Strategy is set to normal sorting.<br/>";
$example->businessLogic();

echo "<br/>";

echo "Strategy is set to reverse sorting.<br/>";
$example->setStrategy(new ConcreteStrategyB);
$example->businessLogic();
