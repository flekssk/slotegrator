<?php

declare(strict_types=1);

namespace Meals\Domain\Dish;

class DishList
{
    private array $dishes;

    /**
     * @param Dish[] $dishes
     */
    public function __construct(Dish ...$dishes)
    {
        $this->dishes = $dishes;
    }

    /**
     * @return Dish[]
     */
    public function getDishes(): array
    {
        return $this->dishes;
    }

    public function hasDish(Dish $needle): bool
    {
        foreach ($this->dishes as $dish) {
            if ($dish->getId() === $needle->getId()) {
                return true;
            }
        }

        return false;
    }
}
