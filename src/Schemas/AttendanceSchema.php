<?php

namespace Amethyst\Schemas;

use Amethyst\Managers\EmployeeManager;
use Amethyst\Managers\OfficeManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class AttendanceSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\BelongsToAttribute::make('office_id')
                ->setRelationName('office')
                ->setRelationManager(OfficeManager::class)
                ->setRequired(true),
            Attributes\BelongsToAttribute::make('employee_id')
                ->setRelationName('employee')
                ->setRelationManager(EmployeeManager::class)
                ->setRequired(true),
            Attributes\DateTimeAttribute::make('started_at'),
            Attributes\DateTimeAttribute::make('ended_at'),
            Attributes\NumberAttribute::make('duration')
                ->setFillable(false),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
