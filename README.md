# Libretrix IBlock

PHP библиотека для работы со схемой информационных блоков 1С-Битрикс в ООП стиле с применением принципов Чистой Архитектуры.

## Основная цель

Реализовать объектно-ориентированный подход к работе со схемой инфоблоков Битрикс, обеспечивающий:
- Строгую типизацию данных
- Изоляцию бизнес-логики от инфраструктуры
- Тестируемость и поддерживаемость кода
- Соблюдение принципов SOLID и Clean Architecture

## Архитектура

### Слои приложения

```
src/
└── Domain/           # Доменный слой - чистые бизнес-сущности и модели схемы ИБ
    ├── IblockType.php       # Тип информационного блока
    ├── InfoBlock/           # Настройки информационного блока
    │   ├── InfoBlock.php    # Полная схема ИБ
    │   ├── MainSettings.php # Основные настройки
    │   ├── PermissionSettings.php # Настройки прав
    │   └── ...
    ├── Property/            # Типизированные свойства
    │   ├── PropertyInterface.php
    │   ├── StringProperty.php
    │   ├── IntProperty.php
    │   └── BoolProperty.php
    └── Field/               # Поля элементов с валидацией
        ├── FieldInterface.php
        └── Image/           # Специализированные поля изображений
            ├── AbstractImageField.php
            ├── Size.php
            └── ...
```

### Доменные сущности и модели

- **IblockType** - тип информационного блока
- **InfoBlock** - полная схема информационного блока
- **Property** - типизированные свойства (String, Int, Bool)
- **Field** - поля элементов с валидацией
- **Requirements** - требования к полям и свойствам

## Принципы разработки

### Запрещенные практики
- ❌ Использование `null` значений
- ❌ Статические методы и свойства
- ❌ Фабричные методы внутри классов
- ❌ Самосоздание объектов (`new self()`, `new static()`)

### Обязательные практики
- ✅ `public readonly` свойства в DTO
- ✅ Пустые значения по умолчанию вместо `null`
- ✅ Строгая изоляция слоев
- ✅ Внешнее создание объектов через конструкторы

## Установка

```bash
composer require libretrix/iblock
```

## Пример использования

```php
<?php

use Libretrix\Iblock\Domain\InfoBlock\InfoBlock;
use Libretrix\Iblock\Domain\InfoBlock\MainSettings;
use Libretrix\Iblock\Domain\Property\StringProperty;
use Libretrix\Iblock\Domain\Requirements;

// Создание схемы информационного блока
$mainSettings = new MainSettings(
    name: 'Новости',
    code: 'news',
    sort: 500,
    active: true
);

$properties = [
    new StringProperty(
        requirements: new Requirements(code: 'author'),
        name: 'Автор',
        isRequired: true
    )
];

$infoBlock = new InfoBlock(
    main: $mainSettings,
    permission: $permissionSettings,
    interfaceTexts: $interfaceTexts,
    fields: $fields,
    properties: $properties
);
```

## Тестирование

```bash
# Запуск тестов
vendor/bin/phpunit

# Статический анализ
vendor/bin/phpstan analyse

# Проверка архитектурных зависимостей
vendor/bin/deptrac analyse

# Форматирование кода
vendor/bin/php-cs-fixer fix
```

## Контекст Битрикс

Библиотека разработана с учетом специфики 1С-Битрикс:
- Совместимость со стандартным API Битрикс
- Использование стандартных ID и кодов
- Поддержка типов свойств (S, N, F, L, E, G)
- Работа с разделами и элементами

## Лицензия

MIT License