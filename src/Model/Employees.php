<?php

namespace App\Model;

class Employees
{
    public function __construct(
        private int $id,
        private string $name,
        private string $position,
        private string $status
    ) {
        
    }
    
    public function getId(): int
        {
            return $this->id;
        }

        public function getName(): string
        {
            return $this->name;
        }
        
        public function getPosition(): string
        {
            return $this->position;
        }
        
        public function getStatus(): string
        {
            return $this->status;
        }
}