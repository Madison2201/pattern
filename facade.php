<?php
class Client
{
    public function transferMoney($amount)
    { }
}
class Terminal
{
    public function transferMoney($amount)
    { }
}
class Facade
{
    public function transferMoney($amount)
    {
        $client = new Client();
        $terminal = new Terminal();
        $client->transferMoney(-$amount);
        $terminal->transferMoney($amount);
    }
}

$transfer = new Facade();
$transfer->transferMoney(1000);
