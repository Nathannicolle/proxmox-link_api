<?php
/*
 * @copyright 2021 Daniel Engelschalk <hello@mrkampf.com>
 */

namespace Proxmox\Api\Nodes\Node\Scan;

use Proxmox\Helper\PVEPathClassBase;
use Proxmox\PVE;

/**
 * Class Lvmthin
 * @package Proxmox\Api\Nodes\Node\Scan
 */
class Lvmthin extends PVEPathClassBase
{
    /**
     * Init constructor.
     * @param PVE $pve
     * @param string $parentAdditional
     */
    public function __construct(PVE $pve, string $parentAdditional)
    {
        parent::__construct($pve, $parentAdditional . 'lvmthin/');
    }

    /**
     * List local LVM Thin Pools.
     * @link https://pve.proxmox.com/pve-docs/api-viewer/#/nodes/{node}/scan/lvmthin
     * @return array|null
     */
    public function get(): ?array
    {
        return $this->getPve()->getApi()->get($this->getPathAdditional());
    }
}