<?php

namespace Paymentwall;

class DataProvider
{
    public function getData()
    {
        return file(PW_INPUT_STREAM);
    }
}

