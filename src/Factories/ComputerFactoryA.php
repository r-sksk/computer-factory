<?php
declare(strict_types=1);
namespace Practice\Factories;

use Practice\Entities\ComputerA;

class ComputerFactoryA implements ComputerFactory {
    /**
     * @return array
     */
    public function createComputers(): array
    {
        $coms[] = new ComputerA('富士通', 'ESPRIMO', 'ノートパソコン', 4, 16, false, 2);
        $coms[] = new ComputerA('DELL', 'XPS', 'デスクトップパソコン', 5, 32, true, 4);
        $coms[] = new ComputerA('Apple', 'Mac', 'ノートパソコン', 4, 16, false, 2);

        return $coms;
    }
}
