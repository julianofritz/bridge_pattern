<?php

class Tablet implements DeviceInterface
{
    const POWER_STATUS_ON = 'ON';
    const POWER_STATUS_OFF = 'OFF';

    /** @var string */
    private $powerStatus = self::POWER_STATUS_OFF;

    /** @var int */
    private $currentVolume = 0;

    /** @var int  */
    private $currentChannel = 1;

    function isEnable(): bool
    {
        if ($this->powerStatus == self::POWER_STATUS_ON) {
            return true;
        }

        return false;
    }

    function enable(): void
    {
        $this->powerStatus = self::POWER_STATUS_ON;
    }

    function disable(): void
    {
        $this->powerStatus = self::POWER_STATUS_OFF;
    }

    function getVolume(): int
    {
        return $this->currentVolume;
    }

    function setVolume(int $volume): void
    {
        $this->currentVolume = $volume;
    }

    function getChannel(): int
    {
        return $this->currentChannel;
    }

    function setChannel(int $channelNumber): void
    {
        $this->currentChannel = $channelNumber;
    }
}
