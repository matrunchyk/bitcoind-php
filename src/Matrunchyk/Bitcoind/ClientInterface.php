<?php

namespace Matrunchyk\Bitcoind;

/**
 * @author Joshua Estes
 */
interface ClientInterface
{

    public function execute($method, $params = null, $id = null);

}
