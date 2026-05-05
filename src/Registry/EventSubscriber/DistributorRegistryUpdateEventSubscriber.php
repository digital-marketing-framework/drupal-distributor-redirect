<?php

namespace Drupal\dmf_distributor_redirect\Registry\EventSubscriber;

use DigitalMarketingFramework\Distributor\Redirect\DistributorRedirectInitialization;
use Drupal\dmf_distributor_core\Registry\EventSubscriber\AbstractDistributorRegistryUpdateEventSubscriber;

class DistributorRegistryUpdateEventSubscriber extends AbstractDistributorRegistryUpdateEventSubscriber
{
    public function __construct()
    {
        parent::__construct(new DistributorRedirectInitialization('dmf_distributor_redirect'));
    }
}
