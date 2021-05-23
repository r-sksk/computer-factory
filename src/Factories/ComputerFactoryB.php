<?php
declare(strict_types=1);
namespace Practice\Factories;

use Practice\Entities\ComputerB;

class ComputerFactoryB implements ComputerFactory {
    /**
     * @return array
     */
    public function createComputers(): array
    {
        $coms[] = new ComputerB('富士通', 'ESPRIMO', 'デスクトップパソコン', 4, 16, true, 3);
        $coms[] = new ComputerB('DELL', 'XPS', 'ノートパソコン', 4, 16, false, 1);
        $coms[] = new ComputerB('Apple', 'Mac', 'デスクトップパソコン', 6, 64, true, 3);

        return $coms;
    }
}
