# AlgebraCook Laravel

Vježba iz naprednog PHP web programiranja korištenjem aplikacijskog okvira Laravel.

## Tražene funkcionalnosti

		 - popis recepata
		 - form za unos recepta
		 - spremanje recepta u bazu
		 
		 - prikaz odabranog recepta
		 
		 - form za izmjenu odabranog recepta
		 - spremanje izmijenjenog recepta u bazu
		 
		 - registracija korisnika
		 - prijava korisnika
		 - promjena lozinke


		 
## Zavisnosti

        PHP ->=5.6.4
        laravel/framework 5.3.*
        laravelcollective/html 5.3



## Zadatak
Sustav za autentifikaciju je dodan te ga ne treba dodavati.
Općenito vrijedi da ne trebate ništa brisati, dakle u inicijalnom projektu ništa nije 'višak'.

1. Napraviti odgovarajući 'master' page view.
		resources\views\

1. Definirati potrebne route (route za autentifikaciju su dodane i ne treba ih mijenjati/dodavati).
		routes\web.php

1. Stvoriti odgovarajuće kontrolere za Recipe i User (php artisan make:controller)
		app\Http\Controllers

1. Stvoriti migracijske datoteke i Model za Recipe i Ingredient
 * modificirati migracijske datoteke tako da 