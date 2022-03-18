<?php
namespace Newageerp\SfCrud;

use Newageerp\SfCrud\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;


class NewageerpSfCrudBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new Extension();
    }
}
