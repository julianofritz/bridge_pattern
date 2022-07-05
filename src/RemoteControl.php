<?php

class RemoteControl
{
    /** @var DeviceInterface */
    protected $device;

    public function __construct(DeviceInterface $device)
    {
        $this->device = $device;
    }

    public function togglePower(): void
    {
        if ($this->device->isEnable()) {
            $this->device->disable();
            return;
        }

        $this->device->enable();
    }

    public function volumeUp(): void
    {
        if ($this->device->getVolume() > 100) {
            return;
        }

        $this->device->setVolume(1);
    }

    public function volumeDown(): void
    {
        if ($this->device->getVolume() < 0) {
            return;
        }

        $this->device->setVolume(-1);
    }

    public function channelUp(): void
    {
        $channel = $this->device->getChannel();
        $nextChannel = $channel++;

        $this->device->setChannel($nextChannel);
    }

    public function channelDown(): void
    {
        $channel = $this->device->getChannel();
        $nextChannel = $channel--;

        $this->device->setChannel($nextChannel);
    }

    public function setChannel(int $channelNumber): void
    {
        $this->device->setChannel($channelNumber);
    }
}
