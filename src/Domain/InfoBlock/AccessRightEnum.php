<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Model\InfoBlock;

enum AccessRightEnum: string
{
    case FULL = 'X';          // Полный доступ
    case READ = 'R';          // Чтение
    case WRITE = 'W';         // Запись
    case EXTENDED_EDIT = 'E'; // Расширенное редактирование
    case DELETE = 'D';        // Удаление

    public function description(): string
    {
        return match ($this) {
            self::FULL => 'Полный доступ',
            self::READ => 'Чтение',
            self::WRITE => 'Запись',
            self::EXTENDED_EDIT => 'Расширенное редактирование',
            self::DELETE => 'Удаление',
        };
    }

    /**
     * @return array<string>
     */
    public function permissions(): array
    {
        return match ($this) {
            self::FULL => ['read', 'write', 'edit', 'delete', 'manage'],
            self::READ => ['read'],
            self::WRITE => ['read', 'create', 'edit'],
            self::EXTENDED_EDIT => ['read', 'create', 'extended_edit'],
            self::DELETE => ['read', 'delete'],
        };
    }
}
