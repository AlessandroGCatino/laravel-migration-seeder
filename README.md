## Passaggi dopo la clonazione

1. composer install
2. npm install
3. cp .env.example .env
4. php artisan key:generate
5. php artisan serve
6. npm run dev


## Creare controller

php artisan make:controller Guest/NomeController
(puoi controllare in app/http/controllers/cartella)

Nel controller va creata una public function con un nome che sarà utilizzato (class) e dentro la function che è inizialmente nel Route (view etc.)

Nel Route: 
- importare il controller (usare use e percorso)
- dopo l'indirizzo mettere [NomeController::class, NomeClass]