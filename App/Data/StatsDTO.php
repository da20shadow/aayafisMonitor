<?php

namespace App\Data;

class StatsDTO
{
    private int $totalMembers;
    private float $paidRCB;
    private int $rcbProcessed;
    private array $recentlyPaidRCB;

    public function create($totalMembers = 0,$paidRCB = 0,$rcbProcessed = 0,
                           $recentlyPaidRCB = []): StatsDTO
    {
        return (new StatsDTO())
            ->setTotalMembers($totalMembers)
            ->setPaidRCB($paidRCB)
            ->setRcbProcessed($rcbProcessed)
            ->setRecentlyPaidRCB($recentlyPaidRCB);
    }

    /**
     * @param int $totalMembers
     * @return StatsDTO
     */
    public function setTotalMembers(int $totalMembers): StatsDTO
    {
        $this->totalMembers = $totalMembers;
        return $this;
    }

    /**
     * @param float $paidRCB
     * @return StatsDTO
     */
    public function setPaidRCB(float $paidRCB): StatsDTO
    {
        $this->paidRCB = $paidRCB;
        return $this;
    }

    /**
     * @param int $rcbProcessed
     * @return StatsDTO
     */
    public function setRcbProcessed(int $rcbProcessed): StatsDTO
    {
        $this->rcbProcessed = $rcbProcessed;
        return $this;
    }

    /**
     * @param array $recentlyPaidRCB
     * @return StatsDTO
     */
    public function setRecentlyPaidRCB(array $recentlyPaidRCB): StatsDTO
    {
        $this->recentlyPaidRCB = $recentlyPaidRCB;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalMembers(): int
    {
        return $this->totalMembers;
    }

    /**
     * @return float
     */
    public function getPaidRCB(): float
    {
        return $this->paidRCB;
    }

    /**
     * @return int
     */
    public function getRcbProcessed(): int
    {
        return $this->rcbProcessed;
    }

    /**
     * @return array
     */
    public function getRecentlyPaidRCB(): array
    {
        return $this->recentlyPaidRCB;
    }


}