<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 24/10/16
 * Time: 17:08
 */

namespace Webjump\Braspag\Pagador\Http\Client;


use Webjump\Braspag\Pagador\Http\Services\ServiceInterface;

interface ClientInterface
{
    const API_URI = 'https://apisandbox.braspag.com.br/v2';

    public function request(ServiceInterface $service, $method = 'POST');
}