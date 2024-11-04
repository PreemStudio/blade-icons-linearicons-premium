<?php

declare(strict_types=1);

namespace BaseCodeOy\BladeIcons\LineariconsPremium;

use BaseCodeOy\BladeIcons\Facades\IconFamilyRegistry;
use BaseCodeOy\BladeIcons\IconFamily;
use BaseCodeOy\PackagePowerPack\Package\AbstractServiceProvider;
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
