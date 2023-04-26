<?php

declare(strict_types=1);

namespace BombenProdukt\BladeIcons\LineariconsPremium;

use BombenProdukt\BladeIcons\Facades\IconFamilyRegistry;
use BombenProdukt\BladeIcons\IconFamily;
use BombenProdukt\PackagePowerPack\Package\AbstractServiceProvider;
use Illuminate\Support\Facades\File;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        $directory = resource_path('blade-icons/linearicons-premium');

        if (File::exists($directory)) {
            IconFamilyRegistry::push(IconFamily::fromDirectory('linearicons-premium', $directory));
        }
    }
}
