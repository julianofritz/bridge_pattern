<?php

interface DeviceInterface
{
    function isEnable(): bool;

    function enable(): void;

    function disable(): void;

    function getVolume(): int;

    function setVolume(int $volume): void;

    function getChannel(): int;

    function setChannel(int $channelNumber): void;
}
