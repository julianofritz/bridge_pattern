<?php

class Tv implements DeviceInterface
{
    /** @var bool */
    private $powerStatus = false;

    /** @var int */
    private $currentVolume = 0;

    /** @var int  */
    private $currentChannel = 1;

    function isEnable(): bool
    {
        return (bool) $this->powerStatus;
    }

    function enable(): void
    {
        $this->powerStatus = true;
    }

    function disable(): void
    {
        $this->powerStatus = false;
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
