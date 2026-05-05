<?php

namespace Drupal\dmf_distributor_redirect\Registry\EventSubscriber;

use DigitalMarketingFramework\Distributor\Redirect\DistributorRedirectInitialization;
use Drupal\dmf_core\Registry\EventSubscriber\AbstractCoreRegistryUpdateEventSubscriber;

class CoreRegistryUpdateEventSubscriber extends AbstractCoreRegistryUpdateEventSubscriber
{
    public function __construct()
    {
        parent::__construct(new DistributorRedirectInitialization('dmf_distributor_redirect'));
    }
}
