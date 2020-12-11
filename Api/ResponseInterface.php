<?php


namespace Api;


interface ResponseInterface
{
    /**
     * @param bool $jsonEncoded
     * @return mixed
     */
    public function getContent(bool $jsonEncoded = true);

    /**
     * @return int
     */
    public function getHttpCode(): int;

}