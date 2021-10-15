<?php

namespace AfUserDetailPage;

use Shopware\Components\Plugin;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Shopware-Plugin AfUserDetailPage.
 */
class AfUserDetailPage extends Plugin
{

    /**
    * @param ContainerBuilder $container
    */
    public function build(ContainerBuilder $container)
    {
        $container->setParameter('af_user_detail_page.plugin_dir', $this->getPath());
        parent::build($container);
    }
}
