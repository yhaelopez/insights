<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Okvpn\R\Process\RProcess;
use Okvpn\R\UnixPipes;

class RQueryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        try {

            $rPath = '/usr/bin/R'; //path to R
            $process = new RProcess(new UnixPipes(), $rPath);
            $process->start();

            $var = 10;

            $rOutput = $process->write(<<<EOF
                x = 1
                y = 2
                x + y
                x + $var
                x - y
            EOF
            );

            // print_r(($rOutput->getAllOutput()));

            dd($rOutput->getAllOutput());

        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
