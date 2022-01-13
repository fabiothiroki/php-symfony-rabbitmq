<?php

declare(strict_types=1);

namespace App\MessageHandler;

use App\Message\SampleMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

final class SampleMessangeHandler implements MessageHandlerInterface
{
    public function __invoke(SampleMessage $message): void
    {
        // magically invoked when an instance of SampleMessage is dispatched
        print_r('Handler handled the message!');
    }
}
