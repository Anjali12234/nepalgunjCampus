<?php

namespace App;

enum DepartmentEnum:string
{
    case BOARD_OF_DIRECTOR = 'bod';
    case FACULTY_MEMBER = 'faculty_member';

    public function label(): string
    {
        return self::getLabel($this);
    }

    public static function getLabel(self $value): string
    {
        return match ($value) {
            self::BOARD_OF_DIRECTOR => 'Board Of Director',
            self::FACULTY_MEMBER => 'Faculty Member',
        };
    }
}
