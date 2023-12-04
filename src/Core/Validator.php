<?php

namespace App\Core;

class Validator
{
    public static function validate(object $model): array
    {
        $errors = [];

        foreach (get_object_vars($model) as $fieldName => $fieldValue) {
            $validationAttributes = self::getValidationAttributes($model, $fieldName);

            foreach ($validationAttributes as $attribute) {
                $validationRule = new ValidationRule($attribute->getArguments());
                if (!$validationRule->validate($fieldValue)) {
                    $errors[$fieldName] = "Validation failed for $fieldName";
                    break;
                }
            }
        }

        return $errors;
    }

    private static function getValidationAttributes(object $model, string $fieldName): array
    {
        $attributes = [];

        $reflectionClass = new \ReflectionClass($model);
        $property = $reflectionClass->getProperty($fieldName);
        $attributesMetadata = $property->getAttributes(ValidationRule::class);

        foreach ($attributesMetadata as $attributeMetadata) {
            $attributes[] = $attributeMetadata;
        }

        return $attributes;
    }
}