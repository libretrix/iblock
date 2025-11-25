<?php

declare(strict_types=1);

namespace Libretrix\Iblock\Model\InfoBlock;

enum UserGroupEnum: int
{
    case ADMINISTRATORS = 1;      // Администраторы
    case ALL_USERS = 2;           // Все пользователи
    case CONTENT_MANAGERS = 3;    // Контент-менеджеры
    case EDITORS = 4;             // Редакторы
    case MODERATORS = 5;          // Модераторы

    public function description(): string
    {
        return match ($this) {
            self::ADMINISTRATORS => 'Администраторы',
            self::ALL_USERS => 'Все пользователи',
            self::CONTENT_MANAGERS => 'Контент-менеджеры',
            self::EDITORS => 'Редакторы',
            self::MODERATORS => 'Модераторы',
        };
    }
}
