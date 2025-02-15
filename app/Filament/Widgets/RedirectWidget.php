<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class RedirectWidget extends Widget
{
    protected int|string|array $columnSpan = 'full';

    protected static string $view = 'filament.widgets.redirect-widget';
}
