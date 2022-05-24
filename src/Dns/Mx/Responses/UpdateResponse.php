<?php

namespace ResellerClub\Dns\Mx\Responses;

use ResellerClub\Message;
use ResellerClub\Response;

class UpdateResponse extends Response
{
    /**
     * Get the response message.
     *
     * @return Message
     */
    public function message(): Message
    {
        return new Message($this->attributes['msg']);
    }
}