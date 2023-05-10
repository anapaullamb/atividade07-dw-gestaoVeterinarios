<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
// Importa o Blade
use Illuminate\Support\Facades\Blade;
class AppServiceProvider extends ServiceProvider {
public function register() {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
        // Registra o componente com o alias "datalist"
        Blade::component('components.datalist', 'datalist');
    }
}
