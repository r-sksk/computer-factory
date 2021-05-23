<?php
declare(strict_types=1);
namespace Practice\Entities;

class Computer {
    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var bool
     */
    public $battery;

    /**
     * @var int
     */
    public $weight;

    /**
     * @param string $brand,
     * @param string $name,
     * @param string $kind,
     * @param int $cpu,
     * @param int $memory,
     * @param bool $battery,
     * @param int $weigh
     *
     * @return void
     */
    public function __construct(
        string $brand,
        string $name,
        string $kind,
        int $cpu,
        int $memory,
        bool $battery,
        int $weight
    )
    {
        $this->brand = $brand;
        $this->name = $name;
        $this->kind = $kind;
        $this->cpu = $cpu;
        $this->memory = $memory;
        $this->battery = $battery;
        $this->weight = $weight;
    }
}
