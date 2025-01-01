<?php

namespace App;

enum QuestionType:string
{
    case Programme = 'programme';
    case Index = 'index';

    public function label(): string
    {
        return self::getLabel($this);
    }  

    public static function getLabel(self $value): string
    {
        return match ($value) {
            self::Programme => 'programme',
            self::Index => 'Index',
        };
    }

    public static function getValuesWithLabels(): array
    {
        $valuesWithLabels = [];

        foreach (self::cases() as $value) {
            $valuesWithLabels[] = [
                'value' => $value,
                'label' => $value->label(),
            ];
        }

        return $valuesWithLabels;
    }
}
