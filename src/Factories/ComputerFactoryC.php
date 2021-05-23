<?php
declare(strict_types=1);
namespace Practice\Factories;

use Practice\Entities\ComputerC;

class ComputerFactoryC implements ComputerFactory {
    /**
     * @return array
     */
    public function createComputers(): array
    {
        $coms[] = new ComputerC('富士通', 'ESPRIMO', 'ノートパソコン', 4, 8, false, 2);
        $coms[] = new ComputerC('DELL', 'XPS', 'デスクトップパソコン', 8, 64, true, 4);
        $coms[] = new ComputerC('Apple', 'Mac', 'デスクトップパソコン', 8, 32, false, 4);

        return $coms;
    }
}
