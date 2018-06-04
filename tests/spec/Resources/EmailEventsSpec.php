<?php

namespace spec\SevenShores\Hubspot\Resources;

use SevenShores\Hubspot\Http\Client;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EmailEventsSpec extends ObjectBehavior
{
    function let(Client $client)
    {
        $this->beConstructedWith('demo', $client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('SevenShores\Hubspot\Resources\EmailEvents');
    }
}
