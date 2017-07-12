<?php

namespace CodeAgenda\Providers;

use CodeAgenda\Entities\Pessoa;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        view()->share(['letras' => $this->getLetras()]);
    }

    protected function getLetras()
    {
        $letras = [];
        foreach (Pessoa::all() as $pessoa)
        {
            $letras[] = strtoupper(substr($pessoa->apelido, 0, 1));
        }

        sort($letras);

        return array_unique($letras);
    }

    public function register()
    {

    }
}
